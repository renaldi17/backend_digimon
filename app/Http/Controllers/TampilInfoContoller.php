<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TampilInfoContoller extends Controller
{
    public function index($jenis)
    {
        if ($jenis == 'wisata') {
            $title = "Wisata";
            $subtitle = "Tegalmanggung memiliki potensi di bidang wisata alam yang banyak, wisata alam ini memiliki keindahannya masing-masing";
            $jarak = "26%";
            $data = [
                [
                    "publishedAt" => '2021-01-01',
                    "slug" => "tempat-wisata-1",
                    "title" => "Tempat Wisata 1",
                    "image" => "https://via.placeholder.com/400x200",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas."
                ],
                [
                    "publishedAt" => '2021-04-02',
                    "slug" => "tempat-wisata-2",
                    "title" => "Tempat Wisata 2",
                    "image" => "https://via.placeholder.com/400x200",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas."
                ],
                [
                    "publishedAt" => '2021-05-03',
                    "slug" => "tempat-wisata-3",
                    "title" => "Tempat Wisata 3",
                    "image" => "https://via.placeholder.com/400x200",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas."
                ],
                [
                    "publishedAt" => '2021-06-04',
                    "slug" => "tempat-wisata-4",
                    "title" => "Tempat Wisata 4",
                    "image" => "https://via.placeholder.com/400x200",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit Quisquam, voluptas. Quisquam, voluptas."
                ]
            ];
        } else if ($jenis == 'produk') {
            $title = "Produk";
            $subtitle = "Tidak hanya wisata alam yang banyak, Tegal Manggung memiliki kekayaan alam juga yang melimpah.";
            $jarak = "26%";
            $data = [
                [
                    "publishedAt" => '2021-01-01',
                    "slug" => "tempat-wisata-1",
                    "title" => "Tempat Wisata 1",
                    "image" => "https://via.placeholder.com/400x200",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas."
                ],
                [
                    "publishedAt" => '2021-04-02',
                    "slug" => "tempat-wisata-2",
                    "title" => "Tempat Wisata 2",
                    "image" => "https://via.placeholder.com/400x200",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas."
                ],
                [
                    "publishedAt" => '2021-05-03',
                    "slug" => "tempat-wisata-3",
                    "title" => "Tempat Wisata 3",
                    "image" => "https://via.placeholder.com/400x200",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas."
                ],
                [
                    "publishedAt" => '2021-06-04',
                    "slug" => "tempat-wisata-4",
                    "title" => "Tempat Wisata 4",
                    "image" => "https://via.placeholder.com/400x200",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit Quisquam, voluptas. Quisquam, voluptas."
                ]
            ];
        }
        if ($jenis == 'berita') {
            $title = "Berita";
            $subtitle = "Tegal Manggung memiliki potensi di bidang wisata alam yang banyak, wisata alam ini memiliki keindahannya masing-masing";
            $jarak = "25%";
            $data = [
                [
                    "publishedAt" => '2021-01-01',
                    "slug" => "tempat-wisata-1",
                    "title" => "Tempat Wisata 1",
                    "image" => "https://via.placeholder.com/400x200",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas."
                ],
                [
                    "publishedAt" => '2021-04-02',
                    "slug" => "tempat-wisata-2",
                    "title" => "Tempat Wisata 2",
                    "image" => "https://via.placeholder.com/400x200",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas."
                ],
                [
                    "publishedAt" => '2021-05-03',
                    "slug" => "tempat-wisata-3",
                    "title" => "Tempat Wisata 3",
                    "image" => "https://via.placeholder.com/400x200",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas."
                ],
                [
                    "publishedAt" => '2021-06-04',
                    "slug" => "tempat-wisata-4",
                    "title" => "Tempat Wisata 4",
                    "image" => "https://via.placeholder.com/400x200",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit Quisquam, voluptas. Quisquam, voluptas."
                ]
            ];
        } else if ($jenis == 'penghargaan') {
            $title = "Penghargaan";
            $subtitle = "Tegal Manggung memiliki potensi di bidang wisata alam yang banyak, wisata alam ini memiliki keindahannya masing-masing";
            $jarak = "40%";
            $data = [
                [
                    "publishedAt" => '2021-01-01',
                    "slug" => "tempat-wisata-1",
                    "title" => "Tempat Wisata 1",
                    "image" => "https://via.placeholder.com/400x200",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas."
                ],
                [
                    "publishedAt" => '2021-04-02',
                    "slug" => "tempat-wisata-2",
                    "title" => "Tempat Wisata 2",
                    "image" => "https://via.placeholder.com/400x200",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas."
                ],
                [
                    "publishedAt" => '2021-05-03',
                    "slug" => "tempat-wisata-3",
                    "title" => "Tempat Wisata 3",
                    "image" => "https://via.placeholder.com/400x200",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas."
                ],
                [
                    "publishedAt" => '2021-06-04',
                    "slug" => "tempat-wisata-4",
                    "title" => "Tempat Wisata 4",
                    "image" => "https://via.placeholder.com/400x200",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas. Quisquam, voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit Quisquam, voluptas. Quisquam, voluptas."
                ]
            ];
        }

        return view('tampilan/potensi', compact('title', 'subtitle', 'data', 'jarak'));
    }
}
