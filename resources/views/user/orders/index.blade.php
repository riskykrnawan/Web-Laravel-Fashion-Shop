@extends('user.layout')
@section('content.user')
    <div class="container mt-5">
          @include('user.orders.table_orders')
    </div>
@endsection