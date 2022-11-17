@extends('user.layout')
@section('content.user')
  <main class="container">
    <form action="/update" method="post" enctype="multipart/form-data" onsubmit="createAlert()">
      {{ csrf_field() }}
      <input type="hidden" name="id" value="{{ $user->id }}">
      <div class="mb-3">
        <img src="{{ $user->photo }}" alt="photo-user" width="100px">
        <input type="hidden" class="form-control" id="oldPhoto" value="{{ $user->photo }}" name="oldPhoto" placeholder="Old Photo">
      </div>
      
      <div class="mb-3">
        <label for="newPhoto" class="form-label">Photo</label>
        <input type="file" class="form-control" id="newPhoto" name="newPhoto" placeholder="New Photo">
      </div>

      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" value="{{ $user->username }}" name="username" placeholder="Username" disabled aria-disabled="true">
      </div>
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" value="{{ $user->name }}" name="name" placeholder="Name">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input class="form-control" type="email" id="email" name="email" placeholder="Email" rows="3" value="{{ $user->email }}"/>
      </div>
      <div class="mb-3">
        <label for="Address" class="form-label">Address</label>
        <textarea class="form-control" id="Address" name="address" placeholder="Address" rows="3"> {{ $user->address }} </textarea>
      </div>
      <div class="mb-3">
        <label for="email_verified_at" class="form-label">Email Verified at</label>
        <input class="form-control" id="email_verified_at" type="text" placeholder="-" value="{{ $user->email_verified_at }}" aria-label="Disabled input email_verified_at" disabled>
      </div>
      <input type="hidden" name="password" value="{{ $user->password }}">
      <div class="mb-3">
        <label for="new_password" class="form-label">New Password <small>(ignore if not change password)</small></label>
        <input type="password" class="form-control" id="new_password" name="new_password" placeholder="New Password">
      </div>
      <div class="mb-3">
        <label for="confirm_new_password" class="form-label">Confirm New Password</label>
        <input type="password" class="form-control" id="confirm_new_password" name="confirm_new_password" placeholder="Confirm New Password">
      </div>
      <button type="submit" class="mb-5 btn btn-success float-end">Submit</button>
    </form>
  </main>
@endsection