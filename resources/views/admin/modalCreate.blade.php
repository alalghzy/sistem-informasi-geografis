<div class="modal fade" id="modalCreate" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data</h5>
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('tabel.store') }}" method="POST" enctype="multipart/form-data">

                                                @csrf

                                                <div class="form-group">
                                                    <label class="font-weight-bold">Nama</label>
                                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="" >

                                                    <!-- error message untuk nama -->
                                                    @error('nama')
                                                        <div class="alert alert-danger mt-2">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label class="font-weight-bold">Deskripsi</label>
                                                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="5" placeholder="" >{{ old('deskripsi') }}</textarea>

                                                    <!-- error message untuk deskripsi -->
                                                    @error('deskripsi')
                                                        <div class="alert alert-danger mt-2">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label class="font-weight-bold">Latitude</label>
                                                    <input type="text" class="form-control @error('latitude') is-invalid @enderror" name="latitude" value="{{ old('latitude') }}" placeholder="" >

                                                    <!-- error message untuk latitude -->
                                                    @error('latitude')
                                                        <div class="alert alert-danger mt-2">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label class="font-weight-bold">Longitude</label>
                                                    <input type="text" class="form-control @error('longitude') is-invalid @enderror" name="longitude" value="{{ old('longitude') }}" placeholder="" >

                                                    <!-- error message untuk longitude -->
                                                    @error('longitude')
                                                        <div class="alert alert-danger mt-2">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="modal-footer justify-content-end">
                                                    <button type="button" class="btn btn-danger shadow-sm" data-bs-dismiss="modal"><i class="fa-solid fa-angle-left"></i> Kembali</button>
                                                    <button type="submit" class="btn btn-success shadow-sm"><i class="fa-regular fa-square-plus"></i> Tambah Data</button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
