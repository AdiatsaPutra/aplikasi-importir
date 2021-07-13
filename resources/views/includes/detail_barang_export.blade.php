<div class="modal fade" id="detailModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ $item->nama }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <div class="modal-body text-dark">
                <div class="mb-3">
                    <img src="{{ Storage::url('public/barang_export/').$item->foto }}" alt="" class="img-fluid">
                    <div class="row mt-3">
                        <div class="col">
                            <p>Nama Barang: </p>
                            
                        </div>
                        <div class="col">
                            <p>{{ $item->nama }}</p>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>Jenis Barang: </p>
                            
                        </div>
                        <div class="col">
                            <p>{{ $item->jenis }}</p>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>Tujuan Barang: </p>
                            
                        </div>
                        <div class="col">
                            <p>{{ $item->tujuan }}</p>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>Tanggal Diexport: </p>
                            
                        </div>
                        <div class="col">
                            <p>{{ $item->tanggal_export }}</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>