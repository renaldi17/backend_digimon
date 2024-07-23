<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin1234'),
        ]);

        \App\Models\Struktur::factory()->create([
            'nama' => 'Struktur Desa 2024/2025',
            'gambar' => 'public/struktur_images/struktur/xxx.png',
            'deskripsi' => 'Ini Deskripsi',
        ]);

        \App\Models\Profil::create([
            'gambar_kepala_desa' => 'public/profil_images/kepala_desa/Kades.png',
            'nama_kepala_desa' => 'Cecep Ali Hasan',
            'deskripsi_kepala_desa' => '<p>Assalamualaikum wr. wb. </p><p>Lorem ipsum dolor sit amet consectetur adipisicing    elit. Et dolorum libero est minus quam! Non deserunt, culpa labore sed ex dolores nulla earum iste nemo magni tenetur quam consequuntur eaque minus est laboriosam quis delectus illo ad quia inventore quas? Alias tenetur aspernatur odio quidem, voluptate dolorem tempore excepturi quo?

            Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p> Et dolorum libero est minus quam! Non deserunt, culpa labore sed ex dolores nulla earum iste nemo magni tenetur quam consequuntur eaque minus est laboriosam quis delectus illo ad quia inventore quas? Alias tenetur aspernatur odio quidem, voluptate dolorem tempore excepturi quo?</p><p>

            Wassalamualaikum Wr. Wb.</p>',
            'video_desa' => 'public/profil_images/perangkat_desa/6OvFt43nQqbuFqvHApNFAd6pbIMx9MEJQLdb0Ncq.png',
            'gambar_sejarah_desa' => 'public/profil_images/sejarah_desa/rvovaFCpiHrNK7QWZwD0frrtKhxxyPF3oCmeL1PU.png',
            'sejarah_desa' => '<p style="text-align:justify"><span lang="IN" style="font-family:
                &quot;Arial&quot;,sans-serif">Desa Tegalmanggung, yang sebelumnya bagian dari Desa
                Cimanggung di Kecamatan Cikeruh, menjadi desa tersendiri setelah pemekaran pada
                tahun 1980. Pemekaran ini berdasarkan Surat Keputusan Gubernur Kepala Daerah
                Tingkat I Jawa Barat tertanggal 2 Juni 1980, Nomor: 993/PM.122-Pem/Sk.1980,
                tentang persetujuan dan pengesahan pemekaran desa di Kabupaten Daerah Tingkat
                II Sumedang. Nama "Tegalmanggung" berasal dari gabungan kata
                "Tegal" (mengacu pada kawasan tegalan) dan "Manggung"
                (berarti tampil), menggambarkan bahwa meskipun wilayahnya mayoritas tegalan,
                desa ini tetap ingin tampil dan berdaya saing dengan desa lainnya.<o:p></o:p></span></p><ol><li style="margin: 0in; text-align: justify; line-height: 115%; background: white;"><span style="font-family:&quot;Arial&quot;,sans-serif;color:#404040">Pada tahun 1986 sampai
                dengan tahun 1994 Desa Tegalmanggung dipimpin oleh kepala Desa yaitu Bpk.
                Endjeh&nbsp; dan Bpk. Soma sebagai Sekretaris Desa<strong>.</strong></span></li><li style="margin: 0in; text-align: justify; line-height: 115%; background: white;">Tahun
                1994 sapai dengan 2002 dipimpin oleh kepala Desa yaitu Bpk. Mahya dan Bpk
                Nunung Nuryana sebagai Sekretaris Desa.</li><li style="margin: 0in; text-align: justify; line-height: 115%; background: white;">Tahun
                2002 sapai dengan 2007 dipimpin oleh kepala Desa yaitu Bpk. Nunung Nuryana dan
                Bpk Hadiat sebagai Sekretaris Desa.</li><li style="margin: 0in; text-align: justify; line-height: 115%; background: white;">Tahun
                2007 sapai dengan 2013 dipimpin oleh kepala Desa yaitu Bpk. Gugun Gunawan dan
                Bpk Hadiat sebagai Sekretaris Desa.</li><li style="margin: 0in; text-align: justify; line-height: 115%; background: white;">Tahun
                2013 dipimpin oleh Pjs. kepala Desa yaitu Bpk. Atang (dari Kecamatan
                Cimanggung) dan Bpk Hadiat sebagai Sekretaris Desa.</li><li style="margin: 0in; text-align: justify; line-height: 115%; background: white;">Tahun
                (2013-2019) dipimpin oleh kepala Desa yaitu Bpk.E. Aliwardana dan Dedi Hidayat
                sebagai Sekretaris Desa.</li><li style="margin: 0in; text-align: justify; line-height: 115%; background: white;">Tahun (2019-2025) dipimpin
                oleh kepala Desa yaitu Bpk. Cecep Ali Hasan dan Dedi Hidayat sebagai Sekretaris
                Desa</li></ol><p></p>
            ',
            'visi_desa' => '<p style="margin-top:0in;margin-right:0in;margin-bottom:21.0pt;margin-left:
                            0in;text-align:justify;background:white"><em><b><span style="font-family:&quot;Arial&quot;,sans-serif;
                            color:#404040">“Kebersamaan Dalam Membangun Demi Desa</span></b></em><span style="font-family:&quot;Arial&quot;,sans-serif;color:#404040">&nbsp;<em style="box-sizing: inherit"><b>Tegalmanggung
                            Yang Lebih Maju”</b></em><o:p></o:p></span></p><p style="text-align:justify">
                            
                            </p><p style="margin: 0in 0in 21pt; text-align: justify; background: white; box-sizing: inherit;"><span style="font-family:&quot;Arial&quot;,sans-serif;color:#404040">Rumusan
                            Visi tersebut merupakan suatu ungkapan dari suatu niat yang luhur untuk
                            memperbaiki dalam Penyelenggaraan Pemerintahan dan Pelaksanaan Pembangunan di
                            Desa Tegalmanggung baik secara individu maupun kelembagaan sehingga 6 ( enam )
                            tahun ke depan Desa Tegalmanggung mengalami suatu perubahan yang lebih baik dan
                            peningkatan kesejahteraan masyarakat dilihat dari segi ekonomi dengan dilandasi
                            semangat kebersamaan dalam Penyelenggaraan Pemerintahan dan Pelaksanaan
                            Pembangunan.<o:p></o:p></span></p>',
            'misi_desa' => '
            <ol start="1" type="1">
            <li style="color:#404040;mso-margin-top-alt:auto;mso-margin-bottom-alt:
                auto;text-align:justify;line-height:normal;mso-list:l0 level1 lfo1;
                tab-stops:list .5in;background:white"><span style="mso-bidi-font-size:
                12.0pt;font-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-ansi-language:EN-US">Bersama masyarakat memperkuat kelembagaan desa
                yang ada sehingga dapat melayani masyarakat secara optimal;<o:p></o:p></span></li>
            <li style="color:#404040;mso-margin-top-alt:auto;mso-margin-bottom-alt:
                auto;text-align:justify;line-height:normal;mso-list:l0 level1 lfo1;
                tab-stops:list .5in;background:white"><span style="mso-bidi-font-size:
                12.0pt;font-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-ansi-language:EN-US">Bersama masyarakat dan kelembagaan desa
                menyelenggarakan pemerintahan dan melaksanakan pembangunan yang
                partisipatif;<o:p></o:p></span></li>
            <li style="color:#404040;mso-margin-top-alt:auto;mso-margin-bottom-alt:
                auto;text-align:justify;line-height:normal;mso-list:l0 level1 lfo1;
                tab-stops:list .5in;background:white"><span style="mso-bidi-font-size:
                12.0pt;font-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-ansi-language:EN-US">Bersama masyarakat dan kelembagaan desa dalam
                mewujudkan Desa Tegalmanggung yang aman, tentram dan damai;<o:p></o:p></span></li>
            <li style="color:#404040;mso-margin-top-alt:auto;mso-margin-bottom-alt:
                auto;text-align:justify;line-height:normal;mso-list:l0 level1 lfo1;
                tab-stops:list .5in;background:white"><span style="mso-bidi-font-size:
                12.0pt;font-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:&quot;Times New Roman&quot;;
                mso-ansi-language:EN-US">Bersama masyarakat dan kelembagaan desa
                memberdayakan masyarakat untuk meningkatkan kesejahteraan masyarakat.<o:p></o:p></span></li>
           </ol>
            ',
            'tujuan_desa' => '<p style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
            text-align:justify;line-height:normal;background:white"><span lang="IN" style="font-family:&quot;Arial&quot;,sans-serif;color:black;mso-color-alt:windowtext">Tujuan
            Desa Tegalmanggung adalah untuk meningkatkan kelembagaan desa agar mampu
            memberikan pelayanan optimal kepada masyarakat, menyelenggarakan pemerintahan
            dan pembangunan yang partisipatif dengan mendorong keterlibatan aktif warga
            dalam proses pengambilan keputusan, serta meningkatkan transparansi dan
            akuntabilitas pemerintahan desa. Selain itu, desa ini berkomitmen untuk menjaga
            keamanan, ketertiban, dan kerukunan antarwarga, memberdayakan masyarakat
            melalui program-program yang fokus pada peningkatan ekonomi dan kualitas hidup,
            serta mendorong usaha kecil dan menengah. Upaya lain termasuk memperbaiki
            infrastruktur desa seperti jalan, jembatan, dan fasilitas umum, menyediakan
            akses lebih baik terhadap layanan dasar seperti air bersih, listrik, dan sanitasi,
            serta melestarikan dan mengelola sumber daya alam secara berkelanjutan. Semua
            tujuan ini dirancang untuk mencapai visi Desa Tegalmanggung yang lebih maju
            dengan semangat kebersamaan dan partisipasi aktif dari seluruh elemen
            masyarakat.</span><span style="mso-bidi-font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif;
            mso-fareast-font-family:&quot;Times New Roman&quot;;color:#404040;mso-ansi-language:EN-US"><o:p></o:p></span></p>'
        ]);
    }
}



// <ol class="list-decimal space-y-2 pl-4">
//                             <li class="text-justify">
//                                 Meningkatkan mutu pelayanan kepada masyarakat
//                                 yang efisien, demokratis, adil dan merata.
//                             </li>
//                             <li class="text-justify">
//                                 Lebih terbuka dalam melayani kebutuhan
//                                 masyarakat, lebih mengutamakan peran serta
//                                 masyarakat melalui lembaga/organisasi
//                                 kemasyarakatan di berbagai elemen dalam rangka
//                                 mendorong kemandirian masyarakat.
//                             </li>
//                             <li class="text-justify">
//                                 Mengadakan pelatihans-pelatihan keterampilan bagi
//                                 anak remaja
//                             </li>
//                             <li class="text-justify">
//                                 Meningkatkan kualitas aparatur pemerintah desa
//                                 melalui pelatihan dan pembinaan
//                             </li>
//                             <li class="text-justify">
//                                 Pemberdayaan kelompok ekonomi konsumtif menjadi
//                                 kelompok ekonomi produktif
//                             </li>
//                             <li class="text-justify">
//                                 Mengembangkan industri kecil
//                             </li>
//                         </ol>