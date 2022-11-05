<h2>Users</h2>
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
    <tbody>
      <a href="/admin/users/create"> <button class="btn btn-primary"><i class="bi bi-plus-lg"></i><span class="ms-2">Add user</span></button></a>
      @foreach ($users as $user)      
        <tr>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->email_verified_at}}</td>
          {{-- <td>{{ $user->password}}</td> --}}
          <td>{{ $user->remember_token}}</td>
          <td>{{ $user->created_at }}</td>
          <td>{{ $user->updated_at }}</td>          
          <td>
            <a href=""><button type="button" class="btn btn-success"><i class="bi bi-eye-fill"></i> Detail</button></a>
            <a href="/admin/users/edit/{{ $user->id }}"><button type="button" class="btn btn-primary"><i class="bi bi-pen-fill"></i> Edit</button></a>
            <button type="button" class="btn btn-danger" onclick='deleteAlert("/admin/users/delete/{{ $user->id }}")'><i class="bi bi-trash3-fill"></i> Delete</button>
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