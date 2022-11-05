<h2>Orders</h2>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        {{-- <th scope="col">#</th> --}}
        <th scope="col">Item</th>
        <th scope="col">User</th>
        <th scope="col">Quantity</th>
        <th scope="col">Total Price</th>
        <th scope="col">Date Transaction</th>
        <th scope="col">Update at</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($orders as $order)   
        <tr>
          <td>{{ mb_strimwidth($order->item->name, 0, 60, "...") }}</td>
          <td>{{ $order->user->name }}</td>
          <td>{{ $order->quantity }}</td>
          @php
            $totalPrice = $order->item->price * $order->quantity;
            @endphp
          <td>Rp{{ number_format($totalPrice,2, ',', '.') }}</td>
          <td>{{ $order->created_at }}</td>
          <td>{{ $order->updated_at }}</td>
          <th>{{ $order->status }}</th>
        </tr>  
      @endforeach
    </tbody>
  </table>
    @if ($orders->hasPages())
      <div class="card-footer">
        {{ $orders->links() }}
      </div>
    @endif
</div>