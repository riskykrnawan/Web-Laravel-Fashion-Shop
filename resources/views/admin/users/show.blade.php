@extends('admin.layout')

@section('content_admin')
    <div class="container-fluid my-3">
      <div class="row">
        @include('admin.components.sidebar')
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
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
                <td><img src="{{ $user->photo }}" alt="photo-user" width="100px"></td>
              </tr>
              <tr>
                <th scope="row">ID</th>
                <td>{{ $user->id }}</td>
              </tr>
              <tr>
                <th scope="row">Username</th>
                <td>{{ $user->username }}</td>
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
                <th scope="row">Address</th>
                <td>{{ $user->address }}</td>
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
                <th scope="row">Role</th>
                <td>{{ ucfirst($user->role) }}</td>
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
        </main>
      </div>
    </div>
@endsection
