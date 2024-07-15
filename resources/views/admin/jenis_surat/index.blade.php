@extends("admin.layouts.app")

@section("content")
    <div class="container-fluid px-5">
        <h1 class="mt-4">Jenis Surat</h1>

        @if (session("success"))
            <div
                class="alert alert-success alert-dismissible fade show"
                role="alert"
            >
                {{ session("success") }}
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Close"
                ></button>
            </div>
        @endif

        <div class="card mb-5 shadow">
            <div class="card-header d-flex justify-content-end py-3">
                <a
                    href="{{ route("jenisSurat.create") }}"
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
                            <th>Jenis Surat</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jenisSurat as $jenis)
                            <tr>
                                <td>{{ $jenis->jenis_surat }}</td>
                                <td>{{ $jenis->deskripsi }}</td>
                                <td>
                                    <a
                                        href="{{ route("jenisSurat.edit", $jenis->id) }}"
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
                                        action="{{ route("jenisSurat.destroy", $jenis->id) }}"
                                        method="POST"
                                        style="display: inline"
                                        id="delete-form-{{ $jenis->id }}"
                                    >
                                        @csrf
                                        @method("DELETE")
                                        <button
                                            type="button"
                                            class="btn btn-danger btn-sm"
                                            onclick="confirmDelete({{ $jenis->id }})"
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
