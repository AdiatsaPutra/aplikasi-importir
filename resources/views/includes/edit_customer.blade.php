<div class="modal fade" id="editModal{{ $customer->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit {{ $customer->nama }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="{{ route('customers.update', ['customer' => $customer->id]) }}">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Customer</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $customer->nama }}">
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update Data Customer</button>
            </div>
        </form>
    </div>
</div>