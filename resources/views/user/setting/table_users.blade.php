@extends('user.products.layout')

@section('content.user')
  <body>
    
    <div class="container-fluid my-3">
      <div class="row">
        @include('user.components.sidebar')
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">  
        <h4>Setting</h4>
            <table class="table"> 
                <tr>
                  <th scope="row">Name</th>
                  <td>{{Auth::user()->name }}</td>
                </tr>
                <tr>
                  <th scope="row">email</th>
                  <td>{{Auth::user()->email }}</td>
                </tr>
                <tr>
                  <th scope="row">email_verified_at</th>
                  <td>{{Auth::user()->email_verified_at }}</td>
                </tr>
                <tr>
                  <th scope="row">remember_token</th>
                  <td>{{Auth::user()->remember_token }}</td>
                </tr>
                <tr>
                  <th scope="row">created_at</th>
                  <td>{{Auth::user()->created_at }}</td>
                </tr>
                <tr>
                  <th scope="row">updated_at</th>
                  <td>{{Auth::user()->updated_at }}</td>
                </tr>
              </tbody>
            </table>
            <div class="float-end">
              <a href="/user/setting/edit/{{Auth::user()->id}}"><button type="button" class="btn btn-primary"><i class="bi bi-pen-fill"></i> Edit</button></a>
            </div>
        </main>
      </div>
    </div>
@endsection
