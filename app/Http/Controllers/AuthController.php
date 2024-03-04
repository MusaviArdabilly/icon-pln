<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Adldap\Laravel\Facades\Adldap;

class AuthController extends Controller
{
    public function register() {
        return view('auth.register.index');
    }

    public function login() {
        return view('auth.login');
    }

    public function login_post2(Request $request){
        $this->validate($request, [
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
            'captcha' => 'required|captcha'
        ],[
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Masukkan email dengan benar',
            'email.exists' => 'Email tidak terdaftar',
            'password.required' => 'Password tidak boleh kosong',
            'captcha.required' => 'Captcha tidak boleh kosong',
            'captcha.captcha' => 'Captcha salah',
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('/')->with('success', 'Login Berhasil');
        }
        return redirect()->back()->withInput();
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function reload_captcha() {
        return response()->json(['captcha_url' => captcha_src()]);
    }

    public function login_post(Request $request)
    {
        // $this->ensureIsNotRateLimited();
        $this->validate($request, [
            'username' => 'required|string',
            'password' => 'required|string',
            'captcha' => 'required|captcha',
        ], [
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Masukkan email dengan benar',
            'email.exists' => 'Email tidak terdaftar',
            'password.required' => 'Password tidak boleh kosong',
            'captcha.required' => 'Captcha tidak boleh kosong',
            'captcha.captcha' => 'Captcha salah',
        ]);

        // $email = "renanda.cahyadi";
        // $password = "Congki@2024";

        $username = $request->username;
        $password = $request->password;
        // if (!str_contains($email, '@iconpln.co.id')) {
        //     $email .= '@iconpln.co.id';
        // }
        if (! $this->ldapConnect($username, $password)) {
            return redirect()->back()->withInput();
        }
    }

    public function ensureIsNotRateLimited()
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());
    }

    /**
     * Get the rate limiting throttle key for the request.
     *
     * @return string
     */
    public function throttleKey()
    {
        return Str::transliterate(Str::lower($this->input('email')).'|'.$this->ip());
    }

    public function ldapConnect($uname, $upass) {
        // $ldaphostA = "10.14.23.75";
        // $ldaphostB = "10.14.23.76";
        // $ldapport = 389;

        // $ldapconn = ldap_connect($ldaphostA, $ldapport);
        // if (!$ldapconn) {
        //     // try another server
        //     $ldapconn = ldap_connect($ldaphostB, $ldapport);
        // }
        // if (!$ldapconn) {
        //     // exit
        //     die("Could not connect to LDAP Server.");
        // }

        // ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
        // ldap_set_option($ldapconn, LDAP_OPT_REFERRALS, 0);
        // ldap_set_option($ldapconn, LDAP_OPT_NETWORK_TIMEOUT, 5);

        $ldaphost = "ldap://10.14.23.75 ldap://10.14.23.76";
        $ldapport = 389;
        $ldapconn = ldap_connect($ldaphost, $ldapport);

        ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($ldapconn, LDAP_OPT_REFERRALS, 0);

        dd(@ldap_bind($ldapconn, "iconpln\\" . $uname, $upass)) or die();
        if (@ldap_bind($ldapconn, "iconpln\\".$uname, $upass)) {
            // $_SESSION['collection_user_id'] = $uname;
            // $_SESSION['mail'] = $this->ldapAttribute($ldapconn, $uname, "mail");

            $user = \App\Models\User::where('username', $uname)->first();
            if (!$user) {
                // the user doesn't exist in the database, so we have to create one

                $user = new \App\Models\User();
                $user->email = $this->ldapAttribute($ldapconn, $uname, "mail");
                $user->username = $uname;
                $user->password = bcrypt($upass);
                $user->role = 'user';
            }

            Auth::guard()->login($user, true);
            return redirect('/')->with('success', 'Login Berhasil');

        } else {
            return false;
        }
    }

    public function ldapAttribute($ds, $user, $attribute)
    {
        $ldap_dn = "OU=Dewan Direksi,DC=iconpln,DC=co,DC=id";
        try {
            $attributes = array($attribute);
            $filter = "(&(objectCategory=person)(sAMAccountName=" . $user . "))";
            $result = ldap_search($ds, $ldap_dn, $filter, $attributes);
            $entries = ldap_get_entries($ds, $result);
            if ($entries["count"] > 0) return $entries[0][$attribute][0];
        } catch (Exception $e) {
            ldap_unbind($ds);
            return;
        }
    }

}
