@extends("admin.layouts.app")

@section("content")
    <div class="container mt-4">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">Import Data Penduduk</div>

                    <div class="card-body">
                        <form
                            action="{{ route("penduduk.importProcess") }}"
                            method="POST"
                            enctype="multipart/form-data"
                        >
                            @csrf

                            <div class="form-group">
                                <label for="file">Data Excel Penduduk:</label>
                                <input
                                    type="file"
                                    name="file"
                                    id="file"
                                    class="form-control"
                                    required
                                />
                                @error("file")
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">
                                Simpan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
