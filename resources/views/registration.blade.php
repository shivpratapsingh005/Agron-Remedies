@extends('master')
@section('content')

<div>
    <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title text-center mb-4">Sign-Up</h3>
                <form>
                  <div class="mb-3">
                    <label for="username" class="form-label">User Name</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                  </div>
                  <div class="mb-3">
                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Sign-Up</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>

@endsection