<h2>Products</h2>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        {{-- <th scope="col">#</th> --}}
        <th scope="col">Photo</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Rating</th>
        <th scope="col">Stock</th>
        <th scope="col">Price</th>
        <th scope="col">Sold</th>
        <th scope="col">Created at</th>
        <th scope="col">Updated at</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <a href="/admin/products/create"> <button class="btn btn-primary"><i class="bi bi-plus-lg"></i><span class="ms-2">Add Products</span></button></a>
      @foreach ($items as $item)      
        <tr>
          {{-- <td>{{ $loop->index + 1 }}</td> --}}
          <td><img src="{{ $item->photo }}" width="50px" alt=""></td>
          <td>{{ mb_strimwidth($item->name, 0, 30, "...") }}</td>
          <td>{{ mb_strimwidth($item->description, 0, 35, "...") }}</td>
          <td>{{ $item->rating }}</td>
          <td>{{ $item->stock }}</td>
          <td>Rp</span>{{ number_format($item->price,2, ',', '.') }}</td>
          <td>{{ $item->sold }}</td>
          <td>{{ $item->created_at }}</td>
          <td>{{ $item->updated_at }}</td>
          {{-- <td><a href="/admin/products/show/{{ $item->id }}"><button type="button" class="btn btn-success"><i class="bi bi-eye-fill"></i></button></a></td> --}}
          <td>
            <a href="/admin/products/show/{{ $item->id }}"><button type="button" class="btn btn-success"><i class="bi bi-eye-fill"></i> Detail</button></a>
            <a href="/admin/products/edit/{{ $item->id }}"><button type="button" class="btn btn-primary"><i class="bi bi-pen-fill"></i> Edit</button></a>
            <button type="button" class="btn btn-danger" onclick='deleteAlert("/admin/products/delete/{{ $item->id }}")'><i class="bi bi-trash3-fill"></i> Delete</button>
          </td>
        </tr>  
      @endforeach

    </tbody>
  </table>
    @if ($items->hasPages())
      <div class="card-footer">
        {{ $items->links() }}
      </div>
    @endif
</div>