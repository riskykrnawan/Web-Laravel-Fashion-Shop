@extends('admin.orders.layout')
@section('content.orders')
  <body>
    <div class="container-fluid">
      <div class="row">
        @include('admin.components.sidebar')

        <main class="my-5 col-md-9 ms-sm-auto col-lg-10 px-md-4">
          @include('admin.orders.table_orders')
        </main>
      </div>
    </div>
@endsection