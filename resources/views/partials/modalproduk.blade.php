<div class="modal fade" id="editmodal{{ url('produk/'.$item->id_produk) }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Update data</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action='{{ url('produk/'.$item->id_produk) }}' method="post" >
            @method('PUT')
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">ID produk</label>
              {{ $item->id_produk }}
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">nama produk</label>
              <input type="text" name="nama_produk" value="{{ $item->nama_produk }}"  class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">deskripsi</label>
              <input type="text" name="deskripsi" value="{{ $item->deskripsi }}"  class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">harga:</label>
              <input type="text" name="harga" value="{{ $item->harga }}"  class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">jumlah:</label>
              <input type="text" name="jumlah" value="{{ $item->jumlah }}"  class="form-control" id="recipient-name">
            </div>
            <button type="submit" value="submit" class="btn btn-primary" value="submit">Update</button>
          </form>
  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
  </div>
  
{{-- modal edit--}}