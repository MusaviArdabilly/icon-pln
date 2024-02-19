<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Comment 1
        Comment::create([
            'user_id' => 2,
            'idea_id' => 6,
            'parent_id' => null,
            'content' => 'Inovasi yang luar biasa! Integrasi teknologi canggih pada ide ini tidak hanya meningkatkan pengalaman pengguna tetapi juga membuka peluang baru untuk efisiensi dan kreativitas. Selamat kepada tim yang brilian di balik konsep ini!'
        ]);

        // Comment 2
        Comment::create([
            'user_id' => 2,
            'idea_id' => 6,
            'parent_id' => null,
            'content' => 'Idea teknologi yang sangat menarik! Penggunaan sumber daya teknologi yang cerdas benar-benar dapat mengubah cara kita berinteraksi dengan dunia digital. Teruslah berinovasi!'
        ]);

        // Comment 3
        Comment::create([
            'user_id' => 2,
            'idea_id' => 6,
            'parent_id' => null,
            'content' => 'Konsep ini sungguh futuristik! Pemanfaatan teknologi dalam ide ini tidak hanya modern tetapi juga memberikan solusi untuk kebutuhan masa depan. Semangat untuk pengembangan lebih lanjut!'
        ]);

        // Comment 4
        Comment::create([
            'user_id' => 2,
            'idea_id' => 5,
            'parent_id' => null,
            'content' => 'Wow, ide ini sangat inovatif! Pemanfaatan sumber daya teknologi yang pintar akan membawa dampak positif bagi industri dan masyarakat secara keseluruhan. Teruslah berkarya!'
        ]);

        // Comment 5
        Comment::create([
            'user_id' => 2,
            'idea_id' => 5,
            'parent_id' => null,
            'content' => 'Sangat mengagumkan melihat bagaimana ide ini merangkul teknologi terkini. Semoga dapat menjadi tonggak baru dalam perkembangan teknologi di Indonesia!'
        ]);

        // Comment 6
        Comment::create([
            'user_id' => 2,
            'idea_id' => 4,
            'parent_id' => null,
            'content' => 'Hebat! Inovasi ini mencerminkan potensi besar teknologi untuk memajukan masyarakat. Sukses selalu untuk pengembangan lebih lanjut!'
        ]);

        // Comment 7
        Comment::create([
            'user_id' => 2,
            'idea_id' => 4,
            'parent_id' => null,
            'content' => 'Konsep yang cerdas dan revolusioner! Penerapan teknologi pada ide ini benar-benar menginspirasi. Selamat atas ide yang brilian ini!'
        ]);

        // Comment 8
        Comment::create([
            'user_id' => 2,
            'idea_id' => 3,
            'parent_id' => null,
            'content' => 'Melihat bagaimana teknologi terintegrasikan dalam ide ini, saya yakin akan memberikan dampak positif yang besar. Teruskan semangat berinovasi!'
        ]);

        // Comment 9
        Comment::create([
            'user_id' => 2,
            'idea_id' => 2,
            'parent_id' => null,
            'content' => 'Bravo! Ide ini tidak hanya kreatif tetapi juga relevan dengan kebutuhan teknologi masa kini. Semoga berhasil dalam pengembangan lebih lanjut!'
        ]);

        // Comment 10
        Comment::create([
            'user_id' => 2,
            'idea_id' => 2,
            'parent_id' => null,
            'content' => 'Sangat menarik melihat bagaimana teknologi diaplikasikan dalam konsep ini. Semoga ide ini menjadi pionir dalam membawa perubahan positif!'
        ]);

        // Comment 11
        Comment::create([
            'user_id' => 2,
            'idea_id' => 2,
            'parent_id' => null,
            'content' => 'Keren! Konsep ini membuktikan bahwa Indonesia memiliki potensi besar dalam menghasilkan inovasi teknologi yang dapat bersaing secara global. Teruslah berkarya!'
        ]);

        // Comment 12
        Comment::create([
            'user_id' => 2,
            'idea_id' => 1,
            'parent_id' => null,
            'content' => 'Saya sangat terkesan dengan ide ini! Pemanfaatan teknologi secara cerdas dapat membawa kemajuan yang signifikan. Semoga sukses dalam implementasinya!'
        ]);

        //comment inovasi 

        // Comment 1
        Comment::create([
            'user_id' => 2,
            'idea_id' => 17,
            'parent_id' => null,
            'content' => 'Wow, ide ini sangat menjanjikan! Penggunaan teknologi pada konsep ini benar-benar menciptakan solusi yang inovatif. Sukses selalu untuk pengembangannya!'
        ]);

        // Comment 2
        Comment::create([
            'user_id' => 2,
            'idea_id' => 17,
            'parent_id' => null,
            'content' => 'Sangat kreatif! Ide ini menunjukkan pemahaman yang mendalam terhadap pemanfaatan teknologi untuk memberikan nilai tambah. Semoga ide ini menjadi sukses besar!'
        ]);

        // Comment 3
        Comment::create([
            'user_id' => 2,
            'idea_id' => 17,
            'parent_id' => null,
            'content' => 'Inovasi yang mengagumkan! Integrasi teknologi dalam ide ini benar-benar menggairahkan. Selamat kepada tim yang terlibat dalam mengembangkan konsep ini!'
        ]);

        // Comment 4
        Comment::create([
            'user_id' => 2,
            'idea_id' => 17,
            'parent_id' => null,
            'content' => 'Hebat! Ide ini mencerminkan visi yang kuat terhadap masa depan teknologi. Semoga berhasil dalam meraih kesuksesan dan memberikan dampak positif!'
        ]);

        // Comment 5
        Comment::create([
            'user_id' => 2,
            'idea_id' => 18,
            'parent_id' => null,
            'content' => 'Keren sekali! Pemikiran inovatif dalam konsep ini memberikan harapan baru dalam perkembangan teknologi. Teruslah berkreasi!'
        ]);

        // Comment 6
        Comment::create([
            'user_id' => 2,
            'idea_id' => 18,
            'parent_id' => null,
            'content' => 'Saya sangat tertarik dengan ide ini! Pemanfaatan teknologi yang cerdas dapat membawa perubahan positif. Semoga sukses dalam setiap langkah pengembangannya!'
        ]);

        // Comment 7
        Comment::create([
            'user_id' => 2,
            'idea_id' => 18,
            'parent_id' => null,
            'content' => 'Bravo! Konsep ini tidak hanya inovatif tetapi juga relevan dengan kebutuhan zaman. Teruskan semangat berinovasi!'
        ]);

        // Comment 8
        Comment::create([
            'user_id' => 2,
            'idea_id' => 18,
            'parent_id' => null,
            'content' => 'Sangat menarik! Ide ini membuktikan bahwa kreativitas teknologi tidak memiliki batasan. Semoga mampu menjadi solusi yang efektif dan berhasil diimplementasikan!'
        ]);

        // Comment 9
        Comment::create([
            'user_id' => 2,
            'idea_id' => 19,
            'parent_id' => null,
            'content' => 'Luar biasa! Konsep ini menciptakan solusi yang cerdas dengan memanfaatkan teknologi terkini. Selamat atas ide yang menginspirasi ini!'
        ]);

        // Comment 10
        Comment::create([
            'user_id' => 2,
            'idea_id' => 19,
            'parent_id' => null,
            'content' => 'Saya yakin ide ini memiliki potensi besar dalam mengubah paradigma industri. Teruslah berinovasi dan mencapai kesuksesan!'
        ]);

        // Comment 11
        Comment::create([
            'user_id' => 2,
            'idea_id' => 19,
            'parent_id' => null,
            'content' => 'Mengagumkan! Ide ini menciptakan jembatan antara teknologi dan kebutuhan masyarakat. Semoga menjadi langkah awal menuju transformasi yang positif!'
        ]);

        // Comment 12
        Comment::create([
            'user_id' => 2,
            'idea_id' => 19,
            'parent_id' => null,
            'content' => 'Sangat mengesankan! Konsep ini membawa ide teknologi ke level berikutnya. Semoga sukses dalam setiap fase pengembangannya!'
        ]);

    }
}
