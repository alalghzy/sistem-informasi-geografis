<div class="modal fade" id="modalEdit-{{ $post->id_post }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Edit Data</h5>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('tabel.update', $post->id_post) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="nama" class="font-weight-bold">Nama</label>
                        <input type="text" id="nama" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $post->nama) }}" placeholder="Masukkan Nama Mangrove">

                        @error('nama')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="deskripsi" class="font-weight-bold">Deskripsi</label>
                        <textarea id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="5" placeholder="Masukkan Deskripsi Mangrove">{{ old('deskripsi', $post->deskripsi) }}</textarea>

                        @error('deskripsi')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="latitude" class="font-weight-bold">Latitude</label>
                        <input type="text" id="latitude" class="form-control @error('latitude') is-invalid @enderror" name="latitude" value="{{ old('latitude', $post->latitude) }}" placeholder="Masukkan Latitude Mangrove">

                        @error('latitude')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="longitude" class="font-weight-bold">Longitude</label>
                        <input type="text" id="longitude" class="form-control @error('longitude') is-invalid @enderror" name="longitude" value="{{ old('longitude', $post->longitude) }}" placeholder="Masukkan Longitude Mangrove">

                        @error('longitude')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="modal-footer justify-content-end">
                        <button type="button" class="btn btn-danger shadow-sm" data-bs-dismiss="modal"><i class="fa-solid fa-angle-left"></i> Kembali</button>
                        <button type="submit" class="btn btn-primary shadow-sm"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
