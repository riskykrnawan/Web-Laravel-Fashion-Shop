@extends('admin.layout')
@section('content_admin')
  <body>
    
    <div class="container-fluid my-3">
      <div class="row">
        @include('admin.components.sidebar')
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          @foreach ($items as $item)      
          @if ($item->id == $id)
            <table class="table">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Photo</th>
                  <td><img src="{{ $item->photo }}" width="150px" alt=""></td>
                </tr>
                <tr>
                  <th scope="row">ID</th>
                  <td>{{ $item->id }}</td>
                </tr>
                <tr>
                  <th scope="row">Name</th>
                  <td>{{ $item->name }}</td>
                </tr>
                <tr>
                  <th scope="row">Description</th>
                  <td>{{ $item->description }}</td>
                </tr>
                <tr>
                  <th scope="row">Category</th>
                  <td>{{ Str::ucfirst($item->category) }}</td>
                </tr>
                <tr>
                  <th scope="row">Rating</th>
                  <td>{{ $item->rating }}</td>
                </tr>
                <tr>
                  <th scope="row">Review</th>
                  <td>{{ $item->reviewer }}</td>
                </tr>
                <tr>
                  <th scope="row">Stock</th>
                  <td>{{ $item->stock }}</td>
                </tr>
                <tr>
                  <th scope="row">Price</th>
                  <td>Rp</span>{{ number_format($item->price,2, ',', '.') }}</td>
                </tr>
                <tr>
                  <th scope="row">Sold</th>
                  <td>{{ $item->sold }}</td>
                </tr>
                <tr>
                  <th scope="row">Created at</th>
                  <td>{{ $item->created_at }}</td>
                </tr>
                <tr>
                  <th scope="row">Update at</th>
                  <td>{{ $item->updated_at }}</td>
                </tr>
              </tbody>
            </table>
            <div class="float-end">
              <a href="/admin/products/edit/{{ $item->id }}"><button type="button" class="btn btn-primary"><i class="bi bi-pen-fill"></i> Edit</button></a>
            </div>
            @endif
          @endforeach
        </main>
      </div>
    </div>
@endsection
