@extends('admin.layout')
@section('content_admin')
    <div class="container-fluid mb-5">
      <div class="row">
        @include('admin.components.sidebar')

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"></div>
            <form action="/admin/products/store" method="post" enctype="multipart/form-data" onsubmit="createAlert()">
              {{ csrf_field() }}
              <div class="mb-3">
                <label for="photo" class="form-label">Product photo</label>
                <input type="file" class="form-control" id="photo" name="photo" placeholder="Product photo" required aria-required="true">
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Product name" required aria-required="true">
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" placeholder="Description" rows="3"></textarea>
              </div>
              <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" placeholder="Stock" required aria-required="true">
              </div>
              <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Price" required aria-required="true">
              </div>
              <label for="category" class="form-label">Category</label>
              <select id="category" class="form-select mb-5" name="category" aria-label="Default select example">
                <option value="other" selected>Category</option>
                <option value="women">Women</option>
                <option value="men">Men</option>
                <option value="children">Children</option>
                <option value="accessories">Accessories</option>
                <option value="shoes">Shoes</option>
                <option value="other">Other</option>
              </select>
              <button id='btn-submit' type="submit" class="btn btn-success float-end">Submit</button>
            </form>
        </main>
      </div>
    </div>
@endsection