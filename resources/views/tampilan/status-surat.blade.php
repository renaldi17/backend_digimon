<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    {{--
            <link
            rel="stylesheet"
            href="https://cdn.datatables.net/2.1.0/css/dataTables.dataTables.css"
            />
        --}}

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    @vite('resources/css/app.css')

    <!-- DataTables CSS -->
    <script>
        const myTable = new DataTable('#datatablesSimple', {
            searching: true, // Mengaktifkan fitur pencarian
        });
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://kit.fontawesome.com/89851fc4a2.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        .datatable-selector,
        .datatable-input {
            border: 1px solid gray;
            border-radius: 5px;
        }

        .datatable-selector:focus,
        .datatable-input:focus,
        .datatable-selector::after {
            border: 0.5px solid rgb(158, 158, 238);
            border-radius: 5px;
            outline: solid 3px #ced8ff;
        }

        table {
            border-collapse: collapse;
            margin-top: 5px;
            height: 64px;
            width: full;
            overflow: hidden;
        }

        th {
            /* class="bg-[#2C5D3C] text-white" */
            background-color: #2c5d3c;
            color: white;
            padding: 1.5rem !important;
        }

        td {
            text-align: center;
            vertical-align: middle;
        }

        th:first-child {
            border-top-left-radius: 10px;
            /* Ujung kiri atas */
        }

        th:last-child {
            border-top-right-radius: 10px;
            /* Ujung kanan atas */
        }

        .button-container {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            grid-gap: 16px;
        }

        a.datatable-sorter {
            text-align: center;
        }
    </style>
    <title>Status Surat</title>
</head>

<body>
    <x-common.navbar />
    <main class="min-h-screen">
        <section class="mt-36 px-4 sm:px-6 lg:px-8">
            <h1 class="mb-4 text-center text-4xl font-bold">
                STATUS SURAT
            </h1>
            <div class="container mx-auto mt-8 grid place-items-center">
                {{-- FORM STATUS SURAT --}}
                <form {{-- Action dan Method untuk Form --}} action="{{ route('status.check') }}" method="POST"
                    class="mb-4 w-full max-w-screen-md rounded bg-white px-4 pb-8 pt-16 sm:px-10 lg:px-5">
                    @csrf

                    <div class="mb-4">
                        <label class="mb-2 block text-xl text-black" for="nik">
                            NIK
                        </label>
                        <input type="text" id="nik" name="nik"
                            class="focus:shadow-outline w-full border-b-2 border-gray-700 px-3 py-2 leading-tight text-gray-700 focus:outline-none"
                            placeholder="NIK" />
                    </div>

                    <div class="mb-4">
                        <label class="mb-2 block text-xl text-black" for="nama">
                            Nama Lengkap
                        </label>
                        <input type="text" id="nama" name="nama"
                            class="focus:shadow-outline w-full border-b-2 border-gray-700 px-3 py-2 leading-tight text-gray-700 focus:outline-none"
                            placeholder="Nama Lengkap" />
                    </div>

                    <div class="mb-4">
                        <label class="mb-2 block text-xl text-black" for="tanggal_lahir">
                            Tanggal Lahir
                            <span>
                                <ion-icon name="alert-circle"></ion-icon>
                            </span>
                        </label>
                        <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                            class="focus:shadow-outline w-full border-b-2 border-gray-700 px-3 py-2 leading-tight text-gray-700 focus:outline-none"
                            placeholder="dd/mm/yyyy" required />
                    </div>

                    <div class="flex items-center justify-between">
                        <button type="submit"
                            class="focus:shadow-outline w-full rounded border border-green-600 px-4 py-2 text-black hover:bg-[#2C5D3C] hover:text-white focus:outline-none">
                            Validasi Surat
                        </button>
                    </div>

                    {{-- END FORM --}}
                </form>
            </div>

            {{-- HEAD TABEL --}}
            <div class="container mx-auto mt-8">
                <div class="h-full bg-white p-6">
                    <div class="flex flex-col items-start justify-between md:flex-row">
                        <div class="flex w-full flex-col items-start">
                            <div class="mb-1items-start flex w-full md:mb-0 md:ml-0 md:items-center">
                                <label for="nik" class="font block text-sm text-gray-700 md:text-base">
                                    NIK
                                </label>
                                <input type="text" id="nik" name="nik" value="{{ $nik }}"
                                    class="focus:shadow-outline p-auto md:text-basefocus:outline-none w-full flex-grow appearance-none rounded bg-white px-3 text-sm leading-tight text-gray-700 md:text-base"
                                    disabled />
                            </div>

                            <div class="flex w-full flex-col items-start sm:flex-row sm:items-center">
                                <label for="nama_lengkap"
                                    class="font inline-block whitespace-nowrap text-sm text-gray-700 md:text-base">
                                    Nama Lengkap
                                </label>
                                <input type="text" id="nama_lengkap" name="nama_lengkap" value="{{ $nama }}"
                                    class="focus:shadow-outline w-full flex-grow appearance-none rounded bg-white py-2 text-sm leading-tight text-gray-700 focus:outline-none sm:px-3 md:text-base"
                                    disabled />
                            </div>
                        </div>
                        <div class="flex justify-end md:w-5/12 lg:w-1/3">
                            <form action="{{ route('filterSuratByStatus', $idPenduduk ?? '') }}" method="post"
                                id="form-filter-surat">
                                @csrf
                                <label for="status_surat"
                                    class="font mr-4 block whitespace-nowrap text-sm text-gray-700 md:my-2 md:text-base">
                                    Status Surat
                                </label>

                                @php
                                    $statusList = ['Semua', 'Diajukan', 'Disetujui', 'Ditolak'];
                                @endphp

                                <select id="status_surat" name="status_surat"
                                    class="focus:shadow-outline block w-full rounded-2xl border border-black px-3 py-1 text-sm leading-tight text-gray-700 focus:outline-none">
                                    @foreach ($statusList as $list)
                                        <option {{ $list === $status ? 'selected' : '' }} value="{{ $list }}">
                                            {{ $list }}
                                        </option>
                                    @endforeach
                                </select>
                            </form>
                        </div>
                    </div>
                    {{-- TABEL --}}
                    <div class="h-72 overflow-x-auto overflow-y-auto">
                        <table id="datatablesSimple" class="display mt-5 h-32 w-full overflow-hidden shadow-md">
                            <thead>
                                <tr>
                                    <th class="rounded-tl-lg font-normal">
                                        No
                                    </th>
                                    <th class="px-4 py-6 font-normal">
                                        Nama Surat
                                    </th>
                                    <th class="px-4 py-6 font-normal">
                                        Tanggal Buat
                                    </th>
                                    <th>
                                        File Balasan
                                    </th>
                                    <th class="px-4 py-6 font-normal">
                                        Status Surat
                                    </th>
                                    <th class="rounded-tr-lg font-normal">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="min-h-[12rem]">
                                @foreach ($dataSurat as $surat)
                                    <tr class="text-center">
                                        <td class="border-b px-4 py-2 text-center">
                                            <div class="button-container">
                                                {{ $loop->iteration }}
                                                <div class="button-container">
                                        </td>
                                        <td class="border-b px-4 py-2">
                                            <div class="button-container">
                                                {{ $surat->jenisSurat->jenis_surat }}
                                            </div>
                                        </td>
                                        <td class="border-b px-4 py-2 text-center">
                                            <div class="button-container">
                                                {{ $surat->created_at ? \Carbon\Carbon::parse($surat->created_at)->isoFormat('D MMMM Y') : '-' }}
                                            </div>
                                        </td>

                                        <td class="border-b px-4 py-2 text-center">
                                            @if ($surat->file_balasan)
                                                <a href="/storage/{{ $surat->file_balasan }}" target="_blank"
                                                    style="margin-top:3px; text-decoration: none; background-color:cyan; border-radius:5px; padding:10px; color:white;">Preview/Download</a>
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="border-b px-4 py-2 text-center">
                                            <div class="button-container">
                                                {{-- {{ $surat->status }} --}}
                                                @php
                                                    $badgeClass = '';
                                                    switch ($surat->status) {
                                                        case 'Diajukan':
                                                            $badgeClass = 'background-color:grey;';
                                                            break;
                                                        case 'Disetujui':
                                                            $badgeClass = 'background-color:green;';
                                                            break;
                                                        case 'Ditolak':
                                                            $badgeClass = 'background-color:red;';
                                                            break;
                                                        default:
                                                            $badgeClass = 'badge';
                                                            break;
                                                    }
                                                @endphp

                                                <span
                                                    style="{{ $badgeClass }} border-radius:5px; padding:10px; color:white;">
                                                    {{ $surat->status }}
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="button-container">
                                                {{-- <button
                                                    class="rounded border-2 border-[#635555] bg-white px-2 py-1 font-normal text-black hover:bg-[#000000] hover:text-white"
                                                    onclick="modalReview({{ $surat->id }})">
                                                    Lihat
                                                </button> --}}
                                                <form action="{{ route('pengajuanBatal', $surat->id) }}"
                                                    method="POST" id="form-pembatalan-{{ $surat->id }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button
                                                        class="rounded border-2 border-[#FF0100] bg-white px-2 py-1 font-normal text-black hover:bg-[#FF0100] hover:text-white"
                                                        onclick="confirmCancel({{ $surat->id }})">
                                                        Batalkan
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    {{-- <tr class="h-full"></tr> --}}
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <x-common.footer :kontak="$kontaks" />

    <script>
        $(document).ready(function() {
            $('#dataSuratTable').DataTable({
                paging: true,
                searching: true,
                info: true,
                lengthChange: true,
                pageLength: 10,
                language: {
                    search: 'Cari:',
                    lengthMenu: 'Tampilkan _MENU_ data per halaman',
                    info: 'Menampilkan _START_ hingga _END_ dari _TOTAL_ entri',
                    paginate: {
                        first: 'Pertama',
                        last: 'Terakhir',
                        next: 'Berikutnya',
                        previous: 'Sebelumnya',
                    },
                    infoEmpty: 'Tidak ada data yang tersedia',
                    zeroRecords: 'Tidak ditemukan data yang sesuai',
                },
            });
        });

        function confirmCancel(id) {
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: 'Apakah anda yakin untuk membatalkan pengajuan surat tersebut?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Batalkan!',
                cancelButtonText: 'Batal',
            }).then((result) => {
                if (result.isConfirmed) {
                    document
                        .getElementById('form-pembatalan-' + id)
                        .submit();
                }
            });
        }

        // function modalReview(id) {
        //     Swal.fire({
        //         html: `
    //             <style>
    //                 .label{
    //                     width: 250px;
    //                 }

    //                 th{
    //                     width: 20px;
    //                     padding-bottom: 10px;
    //                 }
    //                 </style>
    //             <div class="row">
    //     <div class="col-lg-10">
    //         <div class="card mb-4 shadow">
    //             <div class="card-header py-3 text-3xl">
    //                 Data Pengajuan Surat
    //             </div>
    //             <div class="card-body w-full text-left border-collapse align-items-center">

    //             </div>
    //         </div>
    //     </div>
    // </div>`,
        //         width: '80vw',
        //         height: '70vh',
        //     }).then((result) => {
        //         if (result.isConfirmed) {}
        //     });
        // }

        document
            .getElementById('status_surat')
            .addEventListener('change', function() {
                document.getElementById('form-filter-surat').submit();
            });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="/assets/js/datatables-simple-demo.js"></script>
</body>

</html>
