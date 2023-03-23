@extends('layouts.main')

@section('home')

<div class="containercrud">
    <div class="content content-crud">

        <h3 class="text-center"  style="margin-bottom: 5px;">Tambah data produk dan kategori</h3>

        <div class="addproduct">
            <form action="" method="post">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
              
              <form action="" method="post">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>
 
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
    
    <div class="listproduk">
      <h4 class="text-center">tabel kategori</h4>
        <table class="tbdata">
            <thead>
              <tr>
                <th>ID</th>
                <th>Item Name</th>
                <th>image</th>
                <th>Quantity</th>
                <th>Description</th>
                <th colspan="2">aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Product A</td>
                <td>img</td>
                <td>10</td>
                <td>Lorem ipsum dolor sit amet</td>
                <td><a href="#edit" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><lord-icon
                  src="https://cdn.lordicon.com/qtqvorle.json"
                  trigger="hover"
                  style="width:50px;height:50px">
              </lord-icon></a></td>
                <td><a href="#delete" data-toggle="modal" data-target="#myModal"><lord-icon
                  src="https://cdn.lordicon.com/qjwkduhc.json"
                  trigger="hover"
                  colors="primary:#646e78,secondary:#4bb3fd,tertiary:#ebe6ef"
                  state="hover-empty"
                  style="width:50px;height:50px">
              </lord-icon></a></td>
              </tr>
            </tbody>
        </table>

        <h4 class="text-center">tabel produk</h4>
        <table class="tbdata">
            <thead>
              <tr>
                <th>ID</th>
                <th>Item Name</th>
                <th>image</th>
                <th>Quantity</th>
                <th>price</th>
                <th>Description</th>
                <th colspan="2">aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Product A</td>
                <td>img</td>
                <td>10</td>
                <td>000</td>
                <td>Lorem ipsum dolor sit amet</td>
                <td><a href="#edit" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><lord-icon
                  src="https://cdn.lordicon.com/qtqvorle.json"
                  trigger="hover"
                  style="width:50px;height:50px">
              </lord-icon></a></td>
                <td><a href="#delete" data-toggle="modal" data-target="#myModal"><lord-icon
                  src="https://cdn.lordicon.com/qjwkduhc.json"
                  trigger="hover"
                  colors="primary:#646e78,secondary:#4bb3fd,tertiary:#ebe6ef"
                  state="hover-empty"
                  style="width:50px;height:50px">
              </lord-icon></a></td>
              </tr>
            </tbody>
        </table>

    </div> 

    {{-- modal edit--}}
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Update data</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Recipient:</label>
                <input type="text" class="form-control" id="recipient-name">
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Recipient:</label>
                <input type="text" class="form-control" id="recipient-name">
              </div>
              <div class="mb-3">
                <label for="message-text" class="col-form-label">Message:</label>
                <textarea class="form-control" id="message-text"></textarea>
              </div>
            </form>
    
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" value="">Update</button>
          </div>
        </div>
      </div>
    </div>
    
    {{-- modal edit--}}

    {{-- modal delete --}}
    		<!-- Modal -->
		<div class="modal fade" id="myModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Confirmation</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<!-- Modal body -->
					<div class="modal-body">
						<p>Are you sure you want to delete this item?</p>
					</div>
					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						<button type="button" class="btn btn-danger" onclick="deleteItem()">Delete</button>
					</div>
				</div>
			</div>
		</div>

    {{-- modal delete --}}


    {{-- content content-crud --}}
    </div>
    
    
</div>
    
@endsection