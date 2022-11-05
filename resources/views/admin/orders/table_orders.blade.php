<h4>Orders</h4>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead class="">
      <tr>
        <th scope="col">Item</th>
        <th scope="col">User</th>
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
          <td class="py-3"><a class="link-dark" href="/admin/products/show/{{ $order->item->id }}">{{ mb_strimwidth($order->item->name, 0, 60, "...") }}</a></td>
          <td class="py-3"><a class="link-dark" href="/admin/users/show/{{ $order->user->id }}">{{ $order->user->name }}</a></td>
          <td class="py-3">{{ $order->quantity }}</td>
          @php
            $totalPrice = $order->item->price * $order->quantity;
            @endphp
          <td class="py-3">Rp{{ number_format($totalPrice,2, ',', '.') }}</td>
          <td class="py-3">{{ $order->created_at }}</td>
          <td class="py-3">{{ $order->updated_at }}</td>
          <th class="py-3">{{ $order->status }}</th>
          <td>
            @if ($order->status == 'pending')
              <form action="/admin/orders/changeStatus/{{ $order->id }}" method="post">
                {{ csrf_field() }}
                {{-- <input type="hidden" name="id" value="{{ $order->id }}"> --}}
                <button type="submit" name="status" class="border-0 bg-transparent" value="success"><i class="bi bi-check-lg fs-3 text-success"></i> </button>
                <button type="submit" name="status" class="border-0 bg-transparent" value="failed"><i class="bi bi-x text-danger fs-3"></i> </button>
              </form>
            @endif
          </td>
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