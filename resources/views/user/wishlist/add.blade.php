@extends('user.products.layout')
@section('content.user')
  <body>
    <div class="container-fluid mb-5">
      <div class="row">
        @include('user.components.sidebar')
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"></div>
            <form action="/user/setting" method="post" enctype="multipart/form-data" onsubmit="createAlert()">
              {{ csrf_field() }}
              <input type="hidden" name="id" value="{{ $user->id }}">
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" value="{{Auth::user()->name }}" name="name" placeholder="Product name">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input class="form-control" id="email" name="email" placeholder="Email" rows="3" value="{{ Auth::user()->email }}"/>
              </div>
              <div class="mb-3">
                <label for="email_verified_at" class="form-label">Email Verified at</label>
                <input class="form-control" id="email_verified_at" type="text" placeholder="-" value="{{ Auth::user()->email_verified_at }}" aria-label="Disabled input email_verified_at" disabled>
              </div>
              <input type="hidden" name="password" value="{{ Auth::user()->password }}">
              <div class="mb-3">
                <label for="new_password" class="form-label">New Password</label>
                <input type="password" class="form-control" id="new_password" name="new_password" placeholder="New Password">
              </div>
              <div class="mb-3">
                <label for="confirm_new_password" class="form-label">Confirm New Password</label>
                <input type="password" class="form-control" id="confirm_new_password" name="confirm_new_password" placeholder="Confirm New Password">
              </div>
              <button type="submit" class="btn btn-success float-end">Submit</button>
            </form>
        </main>
      </div>
    </div>
@endsection