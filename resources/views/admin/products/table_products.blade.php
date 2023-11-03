<h4>Products</h4>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead class="">
      <tr>
        {{-- <th scope="col">#</th> --}}
        <th scope="col">Photo</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Category</th>
        <th scope="col">Rating</th>
        <th scope="col">Review</th>
        <th scope="col">Stock</th>
        <th scope="col">Price</th>
        <th scope="col">Sold</th>
        <th scope="col">Created at</th>
        <th scope="col">Updated at</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody class="">
      <a href="/admin/products/create">
        <button class="btn btn-warning rounded-0 px-3 float-end mb-3">
          <i class="bi bi-plus-lg"></i>
          <span class="ms-2">Add Products</span>
        </button>
      </a>
      @foreach ($items as $item)
        <tr role="button">
          <td class="py-2" onclick=redirectTo("/admin/products/show/{{ $item->id }}")><img class="rounded" src="{{ $item->photo }}" width="50px" alt=""></td>
          <td class="py-2" onclick=redirectTo("/admin/products/show/{{ $item->id }}")>{{ mb_strimwidth($item->name, 0, 30, "...") }}</td>
          <td class="py-2" onclick=redirectTo("/admin/products/show/{{ $item->id }}")>{{ mb_strimwidth($item->description, 0, 35, "...") }}</td>
          <td class="py-2" onclick=redirectTo("/admin/products/show/{{ $item->id }}")>{{ ucfirst($item->category) }}</td>
          <td class="py-2" onclick=redirectTo("/admin/products/show/{{ $item->id }}")>{{ $item->rating }}</td>
          <td class="py-2" onclick=redirectTo("/admin/products/show/{{ $item->id }}")>{{ $item->reviewer }}</td>
          <td class="py-2" onclick=redirectTo("/admin/products/show/{{ $item->id }}")>{{ $item->stock }}</td>
          <td class="py-2" onclick=redirectTo("/admin/products/show/{{ $item->id }}")>Rp</span>{{ number_format($item->price,2, ',', '.') }}</td>
          <td class="py-2" onclick=redirectTo("/admin/products/show/{{ $item->id }}")>{{ $item->sold }}</td>
          <td class="py-2" onclick=redirectTo("/admin/products/show/{{ $item->id }}")>{{ $item->created_at }}</td>
          <td class="py-2" onclick=redirectTo("/admin/products/show/{{ $item->id }}")>{{ $item->updated_at }}</td>
          <td class="py-2 front">
            <div class="btn-group dropend pointer" role="button">
              <div class="bg-transparent" data-bs-toggle="dropdown">
                <i class="bi bi-three-dots-vertical"></i>
              </div>
              <ul class="dropdown-menu">
                <!-- Dropdown menu links -->
                <li><a class="dropdown-item" href="/admin/products/show/{{ $item->id }}"><i class="bi bi-eye-fill me-2"></i> Detail</a></li>
                <li><a class="dropdown-item" href="/admin/products/edit/{{ $item->id }}"><i class="bi bi-pen-fill me-2"></i> Edit</a></li>
                @if ($item->sold == 0)
                  <li><a class="dropdown-item" onclick=deleteAlert("/admin/products/delete/{{ $item->id }}")><i class="bi bi-trash3-fill me-2"></i> Delete</a></li>
                @else
                  <li><a class="dropdown-item" onclick='failedAlert()'><i class="bi bi-trash3-fill me-2"></i> Delete</a></li>
                @endif
              </ul>
            </div>
          </td>
        </tr>
      @endforeach

    </tbody>
  </table>

  {{ $items->links() }}
</div>