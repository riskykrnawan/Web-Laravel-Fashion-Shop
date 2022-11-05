<!-- Modal -->
<div class="modal fade " id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-secondary" id="loginModalLabel">Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/auth/login" method="POST">
          @csrf
          <div class="mb-3">
            <label for="inputEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" name="email">
            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
          </div>
          <div class="mb-3">
            <label for="inputPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword" name="password">
            <div class="mb-3 mt-3 form-check float-end">
              <input type="checkbox" class="form-check-input" id="checkShowPassword" onclick="showHide('inputPassword')">
              <label class="form-check-label" for="checkShowPassword">Show Password</label>
            </div>
          </div>
          <div class="mb-3 mt-5 form-check">
            <input type="checkbox" class="form-check-input" id="remember" name="remember">
            <label class="form-check-label" for="remember">Remember me</label>
          </div>
          <button type="submit" class="btn btn-secondary text-light rounded-0 w-100">Login</button>
        </form>
      </div>
      <div class="modal-footer">
        <span>Doesn't have an account ?</span>
        <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#registerModal">Register</button>
      </div>
    </div>
  </div>
</div>