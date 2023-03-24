@extends('layouts.main')

@section('home')

<div class="containercrud">
    <div class="content content-crud">

        <h3 class="text-center"  style="margin-bottom: 5px;">Tambah data kategori </h3>

        <div class="addproduct">
            <form action='{{ url('kategori') }}' method="post" >
             @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama kategori</label>
                  <input type="text" name="nama_kategori" class="form-control" id="nama_kategori" aria-describedby="emailHelp">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">tambah produk</button>
              </form>
            </div>
              
    
    <div class="listproduk">
      <h4 class="text-center">tabel kategori</h4>
        <table class="tbdata">
            <thead>
              <tr>
                <th>ID</th>
                <th>nama kategori</th>
                <th colspan="2">aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($category as $items)
              <tr>
                <td>{{ $items->id }}</td>
                <td>{{ $items->nama_kategori }}</td>               
                <td>
                  <button class="btn btn-warning btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#editmodal{{ url('kategori/'.$items->id) }}" >update</button>
                @include('partials.modalkategori')
                </td>

                <td>
                  <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="{{ url('kategori/'.$items->id) }}" method="post">
                    @csrf 
                    @method('DELETE')
                    <button type="submit"  name="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>

        
        

    </div> 

    

    {{-- content content-crud --}}
    </div>
    
    
</div>
    
@endsection