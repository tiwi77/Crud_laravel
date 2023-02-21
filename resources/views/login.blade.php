@extends('template.template')

@section('conten')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-center col-md-12">
            <div class="card" style="width: 20rem;">
                <img src="https://blush.design/illustration/i/WfW7hWeyCgTAKIxPuCqI" alt="">
                <div class="card-body">
                    <form action="actionlogin" method="POST">
                        @csrf
                        <h2 class="text-center">Log-In</h2>
                        <hr class="my-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email anda..." autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password"class="form-control" id="exampleInputPassword1" placeholder="password anda..." autocomplete="off">
                        </div>
                        <button type="submit" class="btn btn-outline-primary btn-block">Log-In</button>
                        <a href="/auth/redirect" class="btn btn-outline-danger btn-block"><i class="bi bi-google"></i>Login With Google</a>
                        <hr class="my-3">
                        <div class="class text-center">
                            <span>Don't have an Account ? <a href="/register" class="text-decoration-none">Sign Up</a></span>
                        </div>
                    </form>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection
