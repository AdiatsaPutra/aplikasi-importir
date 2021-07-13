<div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit {{ $item->nama }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="{{ route('barang-export.update', $item->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $item->nama }}">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Jenis Barang</label>
                    <input type="text" class="form-control" id="nama" name="jenis" value="{{ $item->jenis }}">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Tujuan Barang</label>
                    <input type="text" class="form-control" id="nama" name="tujuan" value="{{ $item->tujuan }}">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Tanggal Export</label>
                    <input type="text" class="form-control" id="nama" name="tanggal_export" value="{{ $item->tanggal_export }}">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Foto Barang</label>
                    <img src="{{ Storage::url('public/barang_export/'). $item->foto }}" alt="" class="img-fluid mb-1">
                    <input type="file" class="form-control" id="foto" name="foto">
                    <small>Kosongkan jika tidak ingin mengubah foto barang</small>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update Data Barang</button>
            </div>
        </form>
    </div>
</div>