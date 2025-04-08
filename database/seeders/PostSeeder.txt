<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        // Artikel 1
        Post::create([
            'title' => 'Panduan Pemula Genshin Impact: Tips untuk Memulai Petualangan',
            'author' => 'Muhammad Umar',
            'slug' => 'panduan-pemula-genshin-impact',
            'body' => "Genshin Impact adalah game open-world RPG dari miHoYo yang menawarkan dunia luas, karakter menarik, dan sistem pertarungan berbasis elemen.\n\n"
                . "1. Pahami Sistem Elemen\n"
                . "Setiap karakter memiliki elemen berbeda seperti Pyro, Hydro, Electro, dan lainnya. Menggabungkan elemen ini dalam pertarungan bisa menciptakan reaksi kuat seperti Overloaded atau Vaporize.\n\n"
                . "2. Eksplorasi adalah Kunci\n"
                . "Teyvat penuh dengan harta karun, teka-teki, dan tantangan. Jangan hanya fokus pada misi utama—jelajahi setiap sudut untuk mendapatkan Primogems, Artefak, dan Mora.\n\n"
                . "3. Bangun Tim yang Seimbang\n"
                . "Setiap tim terdiri dari empat karakter. Pastikan memiliki DPS utama, support, dan healer untuk menghadapi berbagai tantangan.\n\n"
                . "4. Gunakan Resin dengan Bijak\n"
                . "Resin digunakan untuk mendapatkan hadiah dari Boss, Domain, dan Ley Line. Prioritaskan penggunaan Resin untuk Artefak dan Talent Books saat mencapai level tinggi.\n\n"
                . "5. Manfaatkan Event dan Daily Commissions\n"
                . "Event dalam Genshin Impact sering kali memberikan hadiah menarik, termasuk Primogems dan material langka. Jangan lupa juga untuk menyelesaikan Daily Commissions setiap hari untuk mendapatkan Adventure EXP dan hadiah lainnya.\n\n"
                . "Dengan mengikuti tips ini, pemain bisa lebih siap menjelajahi dunia Genshin Impact dan menikmati petualangan di Teyvat."
        ]);

        // Artikel 2
        Post::create([
            'title' => 'Tips Meningkatkan Karakter Genshin Impact',
            'author' => 'Kezia Amara',
            'slug' => 'tips-meningkatkan-karakter-genshin-impact',
            'body' => "Genshin Impact menawarkan berbagai karakter yang dapat dimainkan, masing-masing dengan kemampuan uniknya. Untuk memaksimalkan potensi karakter Anda, ada beberapa tips yang bisa diikuti. Meningkatkan karakter bukan hanya tentang levelnya saja, tetapi juga tentang peralatan dan pemilihan strategi yang tepat.\n\n"
                . "1. Fokus pada Peningkatan Level dan Talent\n"
                . "Peningkatan level karakter adalah hal pertama yang perlu dilakukan untuk meningkatkan kemampuan mereka. Pastikan Anda memiliki cukup bahan untuk meningkatkan level karakter, terutama dari boss atau domain tertentu. Selain itu, jangan lupa untuk meningkatkan talent karakter, karena ini mempengaruhi kemampuan utama mereka dalam bertarung.\n\n"
                . "2. Upgrade Artefak\n"
                . "Artefak adalah elemen penting dalam meningkatkan statistik karakter Anda. Setiap karakter membutuhkan artefak yang sesuai dengan gaya bertarung mereka. Pilih artefak dengan stat yang mendukung peran karakter—misalnya, artefak yang meningkatkan serangan atau daya tahan. Selalu periksa set bonus dari artefak yang Anda pakai, karena beberapa set dapat memberikan peningkatan yang sangat signifikan pada karakter.\n\n"
                . "3. Gunakan Senjata yang Tepat\n"
                . "Senjata yang tepat juga memainkan peran besar dalam meningkatkan efektivitas karakter Anda. Pastikan untuk memilih senjata yang sesuai dengan tipe karakter, apakah itu pedang, busur, atau tombak. Selain itu, senjata juga memiliki tingkat kelangkaan yang mempengaruhi kekuatannya, jadi usahakan untuk mendapatkan senjata dengan bintang tinggi atau senjata 5 bintang untuk performa terbaik.\n\n"
                . "4. Pahami Reaksi Elemen\n"
                . "Genshin Impact mengandalkan interaksi elemen dalam pertarungan. Oleh karena itu, penting untuk memahami bagaimana setiap elemen berinteraksi satu sama lain. Misalnya, menggabungkan serangan air (Hydro) dengan serangan api (Pyro) dapat menciptakan reaksi Vaporize yang sangat kuat. Memahami dan memanfaatkan reaksi elemen ini dapat meningkatkan efektivitas tim Anda dalam pertempuran.\n\n"
                . "5. Manfaatkan Peningkatan Konstelasi\n"
                . "Konstelasi adalah fitur yang dapat membuka kemampuan baru untuk karakter setelah Anda memperoleh salinan karakter tersebut. Peningkatan konstelasi dapat meningkatkan kemampuan spesial karakter Anda, yang dapat memberi keuntungan besar dalam pertempuran. Jangan ragu untuk meningkatkan konstelasi karakter Anda jika sudah mendapatkan duplikat mereka."
        ]);

        // Artikel 3
        Post::create([
            'title' => 'Cara Mengelola Resin di Genshin Impact',
            'author' => 'Jessica Kart',
            'slug' => 'cara-mengelola-resin-di-genshin-impact',
            'body' => "Resin adalah salah satu sumber daya paling penting di Genshin Impact. Mengelola Resin dengan bijak adalah kunci untuk kemajuan dalam game ini. Resin digunakan untuk membuka berbagai jenis hadiah dari boss, domain, dan ley line. Namun, jumlah Resin terbatas, jadi penting untuk tahu kapan dan bagaimana menggunakannya dengan efisien.\n\n"
                . "1. Ketahui Batasan Resin\n"
                . "Setiap pemain memiliki kapasitas Resin yang terbatas, yang bisa terisi maksimal hingga 120. Setiap kali Anda menggunakan Resin, itu akan berkurang dan memerlukan waktu untuk mengisi kembali. Pastikan untuk tidak membiarkan Resin terbuang begitu saja—gunakanlah dengan bijak untuk mendapatkan sumber daya terbaik.\n\n"
                . "2. Fokus pada Domain dan Boss\n"
                . "Domain dan boss adalah cara terbaik untuk mendapatkan artefak, material ascension, dan talent books. Pilih domain atau boss yang memberikan hadiah yang paling Anda butuhkan. Pastikan untuk menggunakan Resin Anda pada kegiatan yang paling bermanfaat, seperti farming artefak atau bahan untuk meningkatkan karakter.\n\n"
                . "3. Gunakan Resin untuk Bahan dan Material Langka\n"
                . "Selain boss dan domain, Anda juga bisa menggunakan Resin untuk membuka material langka yang hanya dapat diambil di ley line. Ley Line Outcrops memberikan hadiah berupa Mora dan EXP, yang sangat berguna untuk memperkuat karakter dan meningkatkan levelnya. Gunakan Resin untuk meningkatkan sumber daya penting yang dapat mendukung kemajuan Anda.\n\n"
                . "4. Manfaatkan Resin di Event\n"
                . "Di Genshin Impact, sering ada event yang memberikan hadiah menarik dengan menggunakan Resin. Jangan lewatkan event ini karena hadiah yang diberikan sering kali sangat menguntungkan, seperti Primogems, material langka, atau bahkan karakter baru. Jadi, pastikan untuk mengalokasikan Resin Anda pada event yang memberikan keuntungan besar.\n\n"
                . "5. Jangan Buang-buang Resin saat Sedang Tidak Dibutuhkan\n"
                . "Jangan terburu-buru menggunakan Resin jika Anda belum siap untuk menghadapi tantangan besar. Jika Anda tidak memerlukan artefak atau material ascension, lebih baik simpan Resin Anda untuk aktivitas yang lebih bermanfaat. Selain itu, ingat bahwa Resin akan terisi secara otomatis seiring berjalannya waktu, jadi tidak perlu khawatir kehabisan Resin terlalu cepat."
        ]);

        // Artikel 4
        Post::create([
            'title' => 'Mengenal Dunia Teyvat dalam Genshin Impact',
            'author' => 'Ningguang',
            'slug' => 'mengenal-dunia-teyvat-dalam-genshin-impact',
            'body' => "Dunia Teyvat adalah tempat yang sangat luas dengan berbagai wilayah yang berbeda, masing-masing memiliki budaya, elemen, dan karakteristiknya sendiri. Setiap wilayah di Teyvat memiliki keunikan dan misteri yang dapat ditemukan. Memahami dunia Teyvat dengan lebih baik adalah langkah pertama untuk memaksimalkan pengalaman bermain Genshin Impact.\n\n"
                . "1. Mondstadt - Kota Kebebasan\n"
                . "Mondstadt adalah kota pertama yang akan Anda jelajahi dalam Genshin Impact. Kota ini dipenuhi dengan angin sepoi-sepoi dan kebebasan, serta dihuni oleh banyak karakter yang mengusung elemen Anemo. Mondstadt juga memiliki cerita yang mendalam dan misi yang sangat menarik untuk dijelajahi.\n\n"
                . "2. Liyue - Kota Pedagang\n"
                . "Liyue adalah kota yang terletak di wilayah pegunungan yang kaya dengan budaya dan sejarah. Kota ini dipenuhi dengan pedagang dan memiliki koneksi erat dengan elemen Geo. Liyue juga memiliki tradisi yang sangat kaya, dengan beberapa karakter seperti Ningguang dan Xiao berasal dari sini. Menjelajahi Liyue memberi pemain kesempatan untuk mempelajari lebih dalam tentang latar belakang cerita game ini.\n\n"
                . "3. Inazuma - Kota Kejayaan\n"
                . "Inazuma adalah wilayah yang diperkenalkan dalam pembaruan 2.0 dan merupakan kota yang memiliki hubungan erat dengan elemen Electro. Dikenal karena kebijakan ketatnya dan sistem Shogun yang sangat kuat, Inazuma menawarkan tantangan baru bagi pemain yang ingin mengungkap cerita di balik sistem pemerintahan dan konflik yang ada.\n\n"
                . "4. Sumeru dan Fontaine - Wilayah yang Akan Datang\n"
                . "Teyvat tidak hanya terbatas pada Mondstadt, Liyue, dan Inazuma. Sumeru, Fontaine, dan wilayah lainnya juga akan diperkenalkan di masa depan. Setiap wilayah ini dipenuhi dengan cerita dan karakter baru, memberikan pengalaman yang lebih dalam bagi pemain yang ingin mengeksplorasi lebih jauh dunia Genshin Impact.\n\n"
                . "Dengan mengenal dunia Teyvat lebih jauh, Anda akan dapat menikmati setiap detil dan cerita yang ada dalam game ini. Selamat menjelajahi!"
        ]);

        // Artikel 5
        Post::create([
            'title' => 'Menghadapi Boss dalam Genshin Impact',
            'author' => 'Raiden Ei',
            'slug' => 'menghadapi-boss-dalam-genshin-impact',
            'body' => "Boss dalam Genshin Impact adalah tantangan besar yang menawarkan hadiah menarik, termasuk material untuk meningkatkan karakter. Menghadapi boss bukan hanya tentang kekuatan tim, tetapi juga strategi yang tepat. Berikut adalah beberapa tips untuk mengalahkan boss dengan efektif dan mendapatkan hadiah terbaik.\n\n"
                . "1. Kenali Pola Serangan Boss\n"
                . "Setiap boss di Genshin Impact memiliki pola serangan yang unik. Penting untuk mengamati gerakan dan pola serangan mereka agar dapat menghindari serangan yang dapat menyebabkan kerusakan besar. Pastikan untuk selalu bergerak dan tidak terpaku pada satu titik agar dapat menghindari serangan area yang luas.\n\n"
                . "2. Gunakan Karakter dengan Elemen yang Tepat\n"
                . "Beberapa boss memiliki kelemahan terhadap elemen tertentu. Misalnya, menggunakan karakter dengan elemen Pyro terhadap boss dengan elemen Cryo dapat memunculkan reaksi Overloaded yang sangat efektif. Pelajari elemen boss dan pastikan tim Anda terdiri dari karakter dengan elemen yang sesuai.\n\n"
                . "3. Upgrade Senjata dan Artefak\n"
                . "Untuk melawan boss yang lebih sulit, Anda harus memastikan karakter Anda memiliki senjata dan artefak terbaik. Senjata 5 bintang atau artefak dengan stat yang mendukung karakter Anda sangat membantu dalam meningkatkan damage yang diberikan. Jangan ragu untuk meningkatkan senjata dan artefak Anda agar lebih kuat saat menghadapi boss yang lebih menantang.\n\n"
                . "4. Gunakan Karakter Support dan Healer\n"
                . "Pastikan tim Anda tidak hanya terdiri dari karakter DPS, tetapi juga karakter Support dan Healer. Karakter Support dapat memberikan buff kepada tim, sedangkan karakter Healer membantu menjaga HP karakter Anda tetap aman selama pertempuran. Dengan kombinasi yang tepat, Anda akan lebih siap menghadapi boss dengan lebih efisien.\n\n"
                . "5. Fokus pada Gerakan dan Timing\n"
                . "Mengalahkan boss juga bergantung pada timing yang tepat. Pastikan untuk menggunakan skill dan burst damage pada waktu yang tepat, dan hindari menyerang secara terburu-buru. Perhatikan tanda-tanda serangan yang akan datang dan pastikan karakter Anda siap untuk memberikan serangan balik yang mematikan."
        ]);
    }
}
