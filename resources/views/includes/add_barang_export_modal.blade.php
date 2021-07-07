<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Barang Export</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('barang-export.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama barang">
            </div>
            <div class="mb-3">
                <label for="jenis" class="form-label">Jenis Barang</label>
                <input type="text" class="form-control" id="jenis" name="jenis" placeholder="Jenis barang">
            </div>
            <div class="mb-3">
                <label for="asal" class="form-label">Tujuan</label>
                <input type="text" class="form-control" id="tujuan" name="tujuan" placeholder="tujuan">
            </div>
            <div class="mb-3">
                <label for="tanggal_import" class="form-label">Tanggal Export</label>
                <input type="date" class="form-control" id="tanggal_export" name="tanggal_export">
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto Barang</label>
                <input type="file" class="form-control" id="foto" name="foto">
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
    </div>
</div>