@extends('admin.products.layout')

@section('content.products')
  <body>
    
    <div class="container-fluid my-3">
      <div class="row">
        @include('admin.components.sidebar')
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          @foreach ($users as $user)      
          @if ($user->id == $id)
            <table class="table">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">ID</th>
                  <td>{{ $user->id }}</td>
                </tr>
                <tr>
                  <th scope="row">Name</th>
                  <td>{{ $user->name }}</td>
                </tr>
                <tr>
                  <th scope="row">Email</th>
                  <td>{{ $user->email }}</td>
                </tr>
                <tr>
                  <th scope="row">Email verified at</th>
                  <td>{{ $user->email_verified_at }}</td>
                </tr>
                <tr>
                  <th scope="row">Remember Token</th>
                  <td>{{ $user->remember_token }}</td>
                </tr>
                <tr>
                  <th scope="row">Created at</th>
                  <td>{{ $user->created_at }}</td>
                </tr>
                <tr>
                  <th scope="row">Update at</th>
                  <td>{{ $user->updated_at }}</td>
                </tr>
              </tbody>
            </table>
            <div class="float-end">
              <a href="/admin/users/edit/{{ $user->id }}"><button type="button" class="btn btn-primary"><i class="bi bi-pen-fill"></i> Edit</button></a>
            </div>
            @endif
          @endforeach
        </main>
      </div>
    </div>
@endsection