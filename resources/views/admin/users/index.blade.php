@extends('admin.users.layout')
@section('content.users')
  <body>
    <div class="container-fluid">
      <div class="row">
        @include('admin.components.sidebar')

        <main class="my-5 col-md-9 ms-sm-auto col-lg-10 px-md-4">
          @include('admin.users.table_users')
        </main>
      </div>
    </div>
@endsection