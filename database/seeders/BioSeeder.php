<?php

namespace Database\Seeders;

use App\Models\Bio;
use Illuminate\Database\Seeder;

class BioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Bio = new Bio();
        $Bio->nama = "Ir.Soekarno";
        $Bio->isi = " Dr.(H.C.) Ir. H. Soekarno1 (ER, EYD: Sukarno, nama lahir: Koesno Sosrodihardjo) (lahir di Surabaya, Jawa Timur, 6 Juni 1901 – meninggal di Jakarta, 21 Juni 1970 pada umur 69 tahun) adalah Presiden pertama Republik Indonesia yang menjabat pada periode 1945–1967. Ia adalah seorang tokoh perjuangan yang memainkan peranan penting dalam memerdekakan bangsa Indonesia dari penjajahan Belanda. Ia adalah Proklamator Kemerdekaan Indonesia (bersama dengan Mohammad Hatta) yang terjadi pada tanggal 17 Agustus 1945. Soekarno adalah yang pertama kali mencetuskan konsep mengenai Pancasila sebagai dasar negara Indonesia dan ia sendiri yang menamainya.
        Soekarno menandatangani Surat Perintah 11 Maret 1966 (Supersemar) yang kontroversial, yang isinya —berdasarkan versi yang dikeluarkan Markas Besar Angkatan Darat— menugaskan Letnan Jenderal Soeharto untuk mengamankan dan menjaga keamanan negara dan institusi kepresidenan. Supersemar menjadi dasar Letnan Jenderal Soeharto untuk membubarkan Partai Komunis Indonesia (PKI) dan mengganti anggota-anggotanya yang duduk di parlemen. Setelah pertanggungjawabannya ditolak Majelis Permusyawaratan Rakyat Sementara (MPRS) pada sidang umum ke empat tahun 1967, Soekarno diberhentikan dari jabatannya sebagai presiden pada Sidang Istimewa MPRS pada tahun yang sama dan Soeharto menggantikannya sebagai pejabat Presiden Republik Indonesia.";
        $Bio->gambar = "https://upload.wikimedia.org/wikipedia/commons/0/01/Presiden_Sukarno.jpg";
        $Bio->save();
        
        $Bio2 = new Bio();
        $Bio2->nama = "Drs. Mohammad Hatta";
        $Bio2->isi = " Dr. (H.C.) Drs. H. Mohammad Hatta (populer sebagai Bung Hatta; lahir dengan nama Mohammad Athar di Fort de Kock, Hindia Belanda, 12 Agustus 1902 – meninggal di Jakarta, 14 Maret 1980 pada umur 77 tahun) adalah negarawan dan ekonom Indonesia yang menjabat sebagai Wakil Presiden Indonesia pertama. Ia bersama Soekarno memainkan peranan sentral dalam perjuangan kemerdekaan Indonesia dari penjajahan Belanda sekaligus memproklamirkannya pada 17 Agustus 1945. Ia pernah menjabat sebagai Perdana Menteri dalam Kabinet Hatta I, Hatta II, dan RIS. Pada 1956, ia mundur dari jabatan wakil presiden karena berselisih dengan Presiden Soekarno.
        Hatta dikenal akan komitmennya pada demokrasi. Ia mengeluarkan Maklumat X yang menjadi tonggak awal demokrasi Indonesia. Di bidang ekonomi, pemikiran dan sumbangsihnya terhadap perkembangan koperasi membuat ia dijuluki sebagai Bapak Koperasi.
        Hatta meninggal pada 1980 dan jenazahnya dimakamkan di Tanah Kusir, Jakarta. Pemerintah Indonesia menetapkannya sebagai salah seorang Pahlawan Nasional Indonesia pada tanggal 23 Oktober 1986 melalui Keppres nomor 081/TK/1986.Namanya bersanding dengan Soekarno sebagai Dwi-Tunggal dan disematkan pada Bandar Udara Soekarno-Hatta. Di Belanda, namanya diabadikan sebagai nama jalan di kawasan perumahan Zuiderpolder, Haarlem.";
        $Bio2->gambar = "https://upload.wikimedia.org/wikipedia/commons/f/ff/Mohammad_Hatta_1950.jpg";
        $Bio2->save();
    
        $Bio3 = new Bio();
        $Bio3->nama = "W.R Supratman";
        $Bio3->isi = " Wage Rudolf Soepratman (19 Maret 1903 – 17 Agustus 1938) adalah pengarang dan pencipta lagu kebangsaan Indonesia, 'Indonesia Raya', dan pahlawan nasional Indonesia. Tanggal lahirnya ditetapkan sebagai hari musik nasional.
        W.R Soepratman adalah seorang pahlawan Indonesia. Ia lahir Di Purworejo, Jawa Timur pada tanggal 09 Maret 1903 (ditetapkan Oleh Presiden Republik Indonesia ke 3 Megawati Soekarnoputri) ketika masa penjajahan Belanda di Indonesia masih berlangsung dan meninggal pada tanggal 17 Agustus 1938 di kota Surabaya, Jawa Timur. Atas jasanya, ia diberikan gelar sebagai pahlawan nasional Indonesia.. ";
        $Bio3->gambar = "https://kebudayaan.kemdikbud.go.id/wp-content/uploads/2017/02/WR-Supratman-696x1003.jpg";
        $Bio3->save();

        $Bio4 = new Bio();
        $Bio4->nama = "R.A Kartini";
        $Bio4->isi = "Raden Adjeng Kartini (lahir di Jepara, Hindia Belanda, 21 April 1879 – meninggal di Rembang, Hindia Belanda, 17 September 1904 pada umur 25 tahun) atau sebenarnya lebih tepat disebut Raden Ayu Kartini[1] adalah seorang tokoh Jawa dan Pahlawan Nasional Indonesia. Kartini dikenal sebagai pelopor kebangkitan perempuan pribumi.
        Presiden Soekarno mengeluarkan Keputusan Presiden Republik Indonesia No.108 Tahun 1964, tanggal 2 Mei 1964, yang menetapkan Kartini sebagai Pahlawan Kemerdekaan Nasional sekaligus menetapkan hari lahir Kartini, tanggal 21 April, untuk diperingati setiap tahun sebagai hari besar yang kemudian dikenal sebagai Hari Kartini.";
        $Bio4->gambar = "https://upload.wikimedia.org/wikipedia/commons/2/23/COLLECTIE_TROPENMUSEUM_Portret_van_Raden_Ajeng_Kartini_TMnr_10018776.jpg";
        $Bio4->save();
    
        $Bio5 = new Bio();
        $Bio5->nama = "Soedirman";
        $Bio5->isi = "Jenderal Besar TNI (Anumerta) Raden Soedirman (EYD: Sudirman; lahir 24 Januari 1916 – meninggal 29 Januari 1950 pada umur 34 tahun[a]) adalah seorang perwira tinggi Indonesia pada masa Revolusi Nasional Indonesia. Sebagai panglima besar Tentara Nasional Indonesia pertama, ia adalah sosok yang dihormati di Indonesia. Terlahir dari pasangan rakyat biasa di Purbalingga, Hindia Belanda, Soedirman diadopsi oleh pamannya yang seorang priyayi. Setelah keluarganya pindah ke Cilacap pada tahun 1916, Soedirman tumbuh menjadi seorang siswa rajin; ia sangat aktif dalam kegiatan ekstrakurikuler, termasuk mengikuti program kepanduan yang dijalankan oleh organisasi Islam Muhammadiyah. Saat di sekolah menengah, Soedirman mulai menunjukkan kemampuannya dalam memimpin dan berorganisasi, dan dihormati oleh masyarakat karena ketaatannya pada Islam. Setelah berhenti kuliah keguruan, pada 1936 ia mulai bekerja sebagai seorang guru, dan kemudian menjadi kepala sekolah, di sekolah dasar Muhammadiyah; ia juga aktif dalam kegiatan Muhammadiyah lainnya dan menjadi pemimpin Kelompok Pemuda Muhammadiyah pada tahun 1937. Setelah Jepang menduduki Hindia Belanda pada 1942, Soedirman tetap mengajar. Pada tahun 1944, ia bergabung dengan tentara Pembela Tanah Air (PETA) yang disponsori Jepang, menjabat sebagai komandan batalion di Banyumas. Selama menjabat, Soedirman bersama rekannya sesama prajurit melakukan pemberontakan, namun kemudian diasingkan ke Bogor.";
        $Bio5->gambar = "https://upload.wikimedia.org/wikipedia/commons/e/e7/Sudirman.jpg";
        $Bio5->save();

        $Bio6 = new Bio();
        $Bio6->nama = "Sutomo";
        $Bio6->isi = " Sutomo (lahir di Surabaya, Jawa Timur, 3 Oktober 1920 – meninggal di Padang Arafah, Arab Saudi, 7 Oktober 1981 pada umur 61 tahun)[1] lebih dikenal dengan sapaan akrab oleh rakyat sebagai Bung Tomo, adalah pahlawan yang terkenal karena peranannya dalam membangkitkan semangat rakyat untuk melawan kembalinya penjajah Belanda melalui tentara NICA, yang berakhir dengan pertempuran 10 November 1945 yang hingga kini diperingati sebagai Hari Pahlawan.
        Sutomo pernah menjadi seorang jurnalis yang sukses. Kemudian ia bergabung dengan sejumlah kelompok politik dan sosial. Ketika ia terpilih pada 1944 untuk menjadi anggota Gerakan Rakyat Baru yang disponsori Jepang, hampir tak seorang pun yang mengenal dia. Namun semua ini mempersiapkan Sutomo untuk peranannya yang sangat penting, ketika pada Oktober dan November 1945, ia menjadi salah satu Pemimpin yang menggerakkan dan membangkitkan semangat rakyat Surabaya, yang pada waktu itu Surabaya diserang habis-habisan oleh pasukan Inggris yang mendarat untuk melucutkan senjata tentara pendudukan Jepang dan membebaskan tawanan Eropa. Sutomo terutama sekali dikenang karena seruan-seruan pembukaannya di dalam siaran-siaran radionya yang penuh dengan semangat kemerdekaan.
        Meskipun Indonesia kalah dalam Pertempuran 10 November itu, Rakyat Surabaya berhasil memukul mundur pasukan Inggris dan kejadian ini dicatat sebagai salah satu peristiwa terpenting dalam sejarah Kemerdekaan Indonesia.";
        $Bio6->gambar = "https://upload.wikimedia.org/wikipedia/commons/e/ed/Bung_Tomo.jpg";
        $Bio6->save();

        $Bio7 = new Bio();
        $Bio7->nama = "Ki Hajar Dewantoro";
        $Bio7->isi = " Raden Mas Soewardi Soerjaningrat (EBI: Suwardi Suryaningrat, sejak 1922 menjadi Ki Hadjar Dewantara, EBI: Ki Hajar Dewantara, beberapa menuliskan bunyi bahasa Jawanya dengan Ki Hajar Dewantoro; lahir di Pakualaman, 2 Mei 1889 – meninggal di Yogyakarta, 26 April 1959 pada umur 69 tahun. selanjutnya disingkat sebagai 'Soewardi' atau 'KHD') adalah aktivis pergerakan kemerdekaan Indonesia, kolumnis, politisi, dan pelopor pendidikan bagi kaum pribumi Indonesia dari zaman penjajahan Belanda. Ia adalah pendiri Perguruan Taman Siswa, suatu lembaga pendidikan yang memberikan kesempatan bagi para pribumi untuk bisa memperoleh hak pendidikan seperti halnya para priyayi maupun orang-orang Belanda.
        Tanggal kelahirannya sekarang diperingati di Indonesia sebagai Hari Pendidikan Nasional. Bagian dari semboyan ciptaannya, tut wuri handayani, menjadi slogan Kementerian Pendidikan Nasional Indonesia. Namanya diabadikan sebagai salah sebuah nama kapal perang Indonesia, KRI Ki Hajar Dewantara. Potret dirinya diabadikan pada uang kertas pecahan 20.000 rupiah tahun edisi 1998.
        Ia dikukuhkan sebagai pahlawan nasional yang ke-2 oleh Presiden RI, Sukarno, pada 28 November 1959 (Surat Keputusan Presiden Republik Indonesia No. 305 Tahun 1959, tanggal 28 November 1959)";
        $Bio7->gambar = "https://i1.wp.com/news.schmu.id/wp-content/uploads/2020/10/biografi-ki-hajar-dewantara-jejak-sejarah-singkat.jpg?resize=840%2C1024&ssl=1";
        $Bio7->save();
    }
}
