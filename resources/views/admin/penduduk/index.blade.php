@extends("admin.layouts.app")

@section("content")
    <div class="container-fluid px-5">
        <h1 class="mt-4">Penduduk</h1>

        @if (session("success"))
            <div class="alert alert-success">
                {{ session("success") }}
            </div>
        @endif

        <div class="card mb-5 shadow">
            <div class="card-header d-flex justify-content-end py-3">
                <a
                    href="{{ route("penduduk.import") }}"
                    class="btn btn-info float-right mb-0 me-2"
                    style="color: #ffffff"
                >
                    <i class="fa-solid fa-file-import"></i>
                    Import Data
                </a>
                <a
                    href="{{ route("penduduk.create") }}"
                    class="btn btn-primary float-right mb-0"
                    style="color: #ffffff"
                >
                    <i class="fa-solid fa-plus"></i>
                    Tambah
                </a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>No. KK</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penduduks as $penduduk)
                            <tr>
                                <td>{{ $penduduk->nama }}</td>
                                <td>{{ $penduduk->NIK }}</td>
                                <td>{{ $penduduk->No_KK }}</td>
                                <td>
                                    <a
                                        href="{{ route("penduduk.show", $penduduk->id) }}"
                                        class="btn btn-info btn-sm"
                                        style="color: #ffffff"
                                    >
                                        <i
                                            class="fa-solid fa-eye"
                                            style="color: #ffffff"
                                        ></i>
                                        | Detail
                                    </a>
                                    <a
                                        href="{{ route("penduduk.edit", $penduduk->id) }}"
                                        class="btn btn-warning btn-sm"
                                        style="color: #ffffff"
                                    >
                                        <i
                                            class="fa-solid fa-pen-to-square"
                                            style="color: #ffffff"
                                        ></i>
                                        | Edit
                                    </a>
                                    <form
                                        action="{{ route("penduduk.destroy", $penduduk->id) }}"
                                        method="POST"
                                        style="display: inline"
                                        id="delete-form-{{ $penduduk->id }}"
                                    >
                                        @csrf
                                        @method("DELETE")
                                        <button
                                            type="button"
                                            class="btn btn-danger btn-sm"
                                            onclick="confirmDelete({{ $penduduk->id }})"
                                        >
                                            <i
                                                class="fa-solid fa-trash"
                                                style="color: #ffffff"
                                            ></i>
                                            | Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

<script>
    function confirmDelete(id) {
        if (confirm('Anda yakin ingin menghapus data ini?')) {
            document.getElementById('delete-form-' + id).submit();
        }
    }
</script>
