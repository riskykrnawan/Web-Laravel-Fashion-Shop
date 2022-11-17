<h4>Orders</h4>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead class="">
      <tr>
        <th scope="col">Item</th>
        <th scope="col">Quantity</th>
        <th scope="col">Total Price</th>
        <th scope="col">Date Transaction</th>
        <th scope="col">Update at</th>
        <th scope="col">Status</th>
        <th></th>
      </tr>
    </thead>
    <tbody class="">
      @foreach ($orders as $order)
        <tr>
          <td class="py-3"><a class="link-dark" href="/products/show/{{ $order->item->id }}">{{ mb_strimwidth($order->item->name, 0, 60, "...") }}</a></td>
          <td class="py-3">{{ $order->quantity }}</td>
          @php
            $totalPrice = $order->item->price * $order->quantity;
            @endphp
          <td class="py-3">Rp{{ number_format($totalPrice,2, ',', '.') }}</td>
          <td class="py-3">{{ $order->created_at }}</td>
          <td class="py-3">{{ $order->updated_at }}</td>
          @if ($order->status == 'success') 
            <th class="py-3 text-success">{{ $order->status }}</th>
          @elseif (($order->status == 'pending') )
            <th class="py-3 text-dark">{{ $order->status }}</th>
          @else
            <th class="py-3 text-danger">{{ $order->status }}</th>
          @endif
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