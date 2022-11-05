<h4>Users</h4>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        {{-- <th scope="col">#</th> --}}
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Email verified at</th>
        {{-- <th scope="col">Password</th> --}}
        <th scope="col">Remember Token</th>
        <th scope="col">Created at</th>
        <th scope="col">Updated at</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody class="">
      <a href=""> <button class="btn btn-primary rounded-pill px-3 float-end mb-3"><i class="bi bi-plus-lg"></i><span class="ms-2">Add User</span></button></a>
      @foreach ($users as $user)
        <tr role="button">
          <td class="py-3" onclick=redirectTo("/admin/users/show/{{ $user->id }}")>{{ $user->name }}</td>
          <td class="py-3" onclick=redirectTo("/admin/users/show/{{ $user->id }}")>{{ $user->email }}</td>
          <td class="py-3" onclick=redirectTo("/admin/users/show/{{ $user->id }}")>{{ $user->email_verified_at}}</td>
          <td class="py-3" onclick=redirectTo("/admin/users/show/{{ $user->id }}")>{{ $user->remember_token}}</td>
          <td class="py-3" onclick=redirectTo("/admin/users/show/{{ $user->id }}")>{{ $user->created_at }}</td>
          <td class="py-3" onclick=redirectTo("/admin/users/show/{{ $user->id }}")>{{ $user->updated_at }}</td>
          <td class="py-3 front">
            <div class="btn-group dropend pointer" role="button">
              <div class="bg-transparent" data-bs-toggle="dropdown">
                <i class="bi bi-three-dots-vertical"></i>
              </div>
              <ul class="dropdown-menu">
                <!-- Dropdown menu links -->
                <li><a class="dropdown-item" href="/admin/users/show/{{ $user->id }}"><i class="bi bi-eye-fill me-2"></i> Detail</a></li>
                <li><a class="dropdown-item" href="/admin/users/edit/{{ $user->id }}"><i class="bi bi-pen-fill me-2"></i> Edit</a></li>
              </ul>
            </div>
          </td>
        </tr>
      @endforeach

    </tbody>
  </table>
  @if ($users->hasPages())
    <div class="card-footer">
      {{ $users->links() }}
    </div>
  @endif
</div>