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
            'gambar_kepala_desa' => 'public/profil_images/kepala_desa/0E7bdLA23woE0I71Mpjft9QU5Brn6QhdGniqAzXC.png',
            'nama_kepala_desa' => 'Ini nama kepala desa',
            'deskripsi_kepala_desa' => '<p>Assalamualaikum wr. wb. </p><p>Lorem ipsum dolor sit amet consectetur adipisicing    elit. Et dolorum libero est minus quam! Non deserunt, culpa labore sed ex dolores nulla earum iste nemo magni tenetur quam consequuntur eaque minus est laboriosam quis delectus illo ad quia inventore quas? Alias tenetur aspernatur odio quidem, voluptate dolorem tempore excepturi quo?

            Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p> Et dolorum libero est minus quam! Non deserunt, culpa labore sed ex dolores nulla earum iste nemo magni tenetur quam consequuntur eaque minus est laboriosam quis delectus illo ad quia inventore quas? Alias tenetur aspernatur odio quidem, voluptate dolorem tempore excepturi quo?</p><p>

            Wassalamualaikum Wr. Wb.</p>',
            'video_desa' => 'public/profil_images/perangkat_desa/6OvFt43nQqbuFqvHApNFAd6pbIMx9MEJQLdb0Ncq.png',
            'gambar_sejarah_desa' => 'public/profil_images/sejarah_desa/rvovaFCpiHrNK7QWZwD0frrtKhxxyPF3oCmeL1PU.png',
            'sejarah_desa' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim tempora eaque illo, sapiente quidem dignissimos voluptates vel quas accusamus possimus mollitia magnam voluptatem cupiditate ipsam quasi at veritatis eum a illum incidunt reprehenderit ullam unde natus fugiat! Voluptatum cupiditate tempore perspiciatis consequatur? Laboriosam libero magnam in et ducimus velit maiores.',
            'visi_desa' => 'Terwujudnya Desa Tegalmanggung yang Mandiri Amanah Transparan Agamis dan Produktif. " MANTAP " untuk menuju Desa Tegalmanggung lebih maju, mandiri dan berkualitas',
            'misi_desa' => '<ol class="list-decimal space-y-2 pl-4">
                            <li class="text-justify">
                                Meningkatkan mutu pelayanan kepada masyarakat
                                yang efisien, demokratis, adil dan merata.
                            </li>
                            <li class="text-justify">
                                Lebih terbuka dalam melayani kebutuhan
                                masyarakat, lebih mengutamakan peran serta
                                masyarakat melalui lembaga/organisasi
                                kemasyarakatan di berbagai elemen dalam rangka
                                mendorong kemandirian masyarakat.
                            </li>
                            <li class="text-justify">
                                Mengadakan pelatihans-pelatihan keterampilan bagi
                                anak remaja
                            </li>
                            <li class="text-justify">
                                Meningkatkan kualitas aparatur pemerintah desa
                                melalui pelatihan dan pembinaan
                            </li>
                            <li class="text-justify">
                                Pemberdayaan kelompok ekonomi konsumtif menjadi
                                kelompok ekonomi produktif
                            </li>
                            <li class="text-justify">
                                Mengembangkan industri kecil
                            </li>
                        </ol>',
            'tujuan_desa' => 'Mewujudkan Desa Tegalmanggung yang lebih maju, mandiri dan berkualitas'
        ]);
    }
}
