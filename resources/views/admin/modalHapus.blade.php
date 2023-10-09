<div class="modal fade" id="hapusdata-{{ $post->id_post }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Hapus Data</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda ingin menghapus data {{ $post->nama }}?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary shadow-sm" data-bs-dismiss="modal"><i class="fa-solid fa-angle-left"></i> Kembali</button>
                <form action="{{ route('tabel.destroy', $post->id_post) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger shadow-sm"> <i class="fa-solid fa-trash-can"></i> Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
