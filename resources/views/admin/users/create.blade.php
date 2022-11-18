@extends('admin.layout')
@section('content_admin')
  <body>
    <div class="container-fluid mb-5">
      <div class="row">
        @include('admin.components.sidebar')
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-5">
            <form action="/admin/users/update" method="post" enctype="multipart/form-data" onsubmit="createAlert()">
              {{ csrf_field() }}
              <input type="hidden" name="id">
              
              <div class="mb-3">
                <label for="photo" class="form-label">Photo</label>
                <input type="file" class="form-control" id="photo" name="photo" placeholder="New Photo">
              </div>

              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" disabled aria-disabled="true">
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input class="form-control" type="email" id="email" name="email" placeholder="Email" rows="3">
              </div>
              <div class="mb-3">
                <label for="Address" class="form-label">Address</label>
                <textarea class="form-control" id="Address" name="address" placeholder="Address" rows="3"></textarea>
              </div>
              <div class="mb-3">
                <label for="email_verified_at" class="form-label">Email Verified at</label>
                <input class="form-control" id="email_verified_at" type="text" placeholder="-" aria-label="Disabled input email_verified_at" disabled>
              </div>
              <input type="hidden" name="password">
              <div class="mb-3">
                <label for="new_password" class="form-label">New Password <small>(ignore if not change password)</small></label>
                <input type="password" class="form-control" id="new_password" name="new_password" placeholder="New Password">
              </div>
              <div class="mb-3">
                <label for="confirm_new_password" class="form-label">Confirm New Password</label>
                <input type="password" class="form-control" id="confirm_new_password" name="confirm_new_password" placeholder="Confirm New Password">
              </div>

              <label for="Role" class="form-label">Role</label>
              <select id="Role" class="form-select mb-5" name="role" aria-label="Default select example">
                <option value="customer" selected>Customer</option>
                <option value="admin">Admin</option>
              </select>

              <button type="submit" class="btn btn-success float-end">Submit</button>
            </form>
        </main>
      </div>
    </div>
@endsection