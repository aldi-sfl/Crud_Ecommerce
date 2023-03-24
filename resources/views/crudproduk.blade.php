@extends('layouts.main')

@section('home')

<div class="containercrud">
    <div class="content content-crud">


              
    
    <div class="listproduk">
      <h4 class="text-center">tabel produk</h4>
        <table class="tbdata">
            <thead>
              <tr>
                <th>ID</th>
                <th>nama produk</th>
                <th>deskripsi</th>
                <th>kategori</th>
                <th>harga</th>
                <th>jumlah</th>
                <th colspan="3">aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = $data->firstItem() ?>
              @foreach ($data as $item)              
              <tr>
                <td>{{ $i }}</td>
                <td>{{ $item->nama_produk }}</td>
                <td>{{ $item->deskripsi }}</td>
                <td>{{ $item->kategori_id }}</td>
                <td>{{ $item->harga}}</td>
                <td>{{ $item->jumlah }}</td>
                <td>
                  <button class="btn btn-warning btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#editmodal{{ url('produk/'.$item->id_produk) }}" >update</button>
                @include('partials.modalproduk')
                </td>

                <td>
                  <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="{{ url('produk/'.$item->id_produk) }}" method="post">
                    @csrf 
                    @method('DELETE')
                    <button type="submit"  name="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
                </td>
                <td><button type="submit"  name="submit" class="btn btn-primary btn-sm" >Buy</button></td>
            </tr>
              <?php $i++ ?>
              @endforeach
            </tbody>
        </table>

    </div> 

    <h3 class="text-center"  style="margin-bottom: 5px;">Tambah data produk </h3>
    <div class="addproduct">
      <form action='{{ url('produk') }}' method="post" >
       @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama produk</label>
            <input type="text" name="nama_produk" class="form-control" id="nama_produk" aria-describedby="emailHelp">
          </div>
          {{-- <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">gambar</label>
            <input type="file" class="form-control" name="gambar" accept="images">
          </div> --}}
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">deskripsi</label>
            <input type="text" name="deskripsi" class="form-control" id="deskripsi" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            
          <select name="kategori" class="form-select" aria-label="Default select example">
            {{-- @foreach ($category as $items)
                
            <option value="{{ $items->id }}">{{ $items->id }} - {{ $items->nama_kategori }}</option>
            @endforeach --}}
          </select>
        </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">harga</label>
            <input type="text" name="harga" class="form-control" id="harga" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">jumlah</label>
            <input type="text" name="jumlah" class="form-control" id="jumlah" aria-describedby="emailHelp">
          </div>

          <button type="submit" name="submit" class="btn btn-primary">tambah produk</button>
        </form>
        
      </div>

    

    {{-- content content-crud --}}
    </div>
    
    
</div>
    
@endsection