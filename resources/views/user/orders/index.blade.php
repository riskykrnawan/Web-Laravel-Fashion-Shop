@extends('user.layout')
@section('content.user')
    @include('components.navbar')
    <div class="container mt-5">
          @include('user.orders.table_orders')
    </div>
@endsection