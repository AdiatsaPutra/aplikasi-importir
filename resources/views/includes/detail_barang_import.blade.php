<div class="modal fade" id="detailModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ $item->nama }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <div class="modal-body">
                <div class="mb-3">
                    <img src="{{ Storage::url('public/barang_import/').$item->foto }}" alt="" width="300px">
                    <p>{{ $item->nama }}</p>
                    <p>{{ $item->jenis }}</p>
                    <p>{{ $item->asal }}</p>
                    <p>{{ $item->tanggal_import }}</p>
                </div>
            </div>
        </div>
    </div>
</div>