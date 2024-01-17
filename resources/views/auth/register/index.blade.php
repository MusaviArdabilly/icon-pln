<!doctype html>
<html lang="en">

<head>
    <link href="assets/css/register.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style="background-image: url('https://img.freepik.com/free-vector/yellow-blue-wave-gradient-background-vector_53876-126253.jpg'); background-repeat: no-repeat; background-size: cover;">
    <div class="form_wrapper container-xxl">
        <div class="form_container">
            <div class="title_container">
                <h2>Registration Form</h2>
            </div>
            <div class="row clearfix">
                <div class="">
                    <form>
                        <div class="input_field"> <span><i aria-hidden="true" class="bi bi-envelope"></i></span>
                            <input type="email" name="email" placeholder="Email" required />
                        </div>
                        <div class="input_field"> <span><i aria-hidden="true" class="bi bi-lock"></i></span>
                            <input type="password" name="password" placeholder="Password" required />
                        </div>
                        <div class="input_field"> <span><i aria-hidden="true" class="bi bi-lock"></i></span>
                            <input type="password" name="password" placeholder="Re-type Password" required />
                        </div>
                        <div class="row clearfix">
                            <div class="col_half">
                                <div class="input_field"> <span><i class="bi bi-person-circle"></i></span>
                                    <input type="text" name="name" placeholder="First Name" />
                                </div>
                            </div>
                            <div class="col_half">
                                <div class="input_field"> <span><i class="bi bi-person-circle"></i></span>
                                    <input type="text" name="name" placeholder="Last Name" required />
                                </div>
                            </div>
                        </div>
                        <div class="input_field radio_option">
                            <input type="radio" name="radiogroup1" id="rd1">
                            <label for="rd1">Male</label>
                            <input type="radio" name="radiogroup1" id="rd2">
                            <label for="rd2">Female</label>
                        </div>
                        <div class="input_field checkbox_option">
                            <input type="checkbox" id="cb1">
                            <label for="cb1">I agree with terms and conditions</label>
                        </div>
                        <div class="input_field checkbox_option">
                            <input type="checkbox" id="cb2">
                            <label for="cb2">I want to receive the newsletter</label>
                        </div>
                        <input class="button" type="submit" value="Register" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>