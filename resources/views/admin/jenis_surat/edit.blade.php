@extends("admin.layouts.app")

@section("content")
    <div class="container-fluid px-5">
        <h1 class="mb-4 mt-4">Edit Jenis Surat</h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="card mb-4 shadow">
                    <div class="card-header py-3">
                        <form
                            action="{{ route("jenisSurat.update", $jenisSurat->id) }}"
                            method="POST"
                        >
                            @csrf
                            @method("PUT")
                            <div class="form-group mb-3">
                                <label for="jenis_surat">Jenis Surat:</label>
                                <input
                                    type="text"
                                    name="jenis_surat"
                                    id="jenis_surat"
                                    class="form-control"
                                    value="{{ $jenisSurat->jenis_surat }}"
                                    required
                                    autocomplete="off"
                                />
                                @if ($errors->has("jenis_surat"))
                                    <small class="text-danger text-sm">
                                        {{ $errors->first("jenis_surat") }}
                                    </small>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label for="deskripsi">Deskripsi:</label>
                                <textarea
                                    name="deskripsi"
                                    id="deskripsi"
                                    class="form-control"
                                    rows="3"
                                    required
                                >
{{ $jenisSurat->deskripsi }}
                                </textarea>
                                @if ($errors->has("deskripsi"))
                                    <small class="text-danger text-sm">
                                        {{ $errors->first("deskripsi") }}
                                    </small>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary">
                                Simpan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
