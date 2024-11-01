@extends('admin.admin_layout.admin_index')
@section('title', 'Admin')
@section('content')    
    <div class="container min_height_80vh d-flex flex-column justify-content-center">
        <form action={{url('/login')}} method="POST">
            @csrf
            <div class="card ">
                <div class="card-body p-30">
                    <div class="form-floating mb-3 ">
                        <input type="email" name="email" class="form-control p-0 pl-3" id="floatingInput" placeholder="Email">
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control p-0 pl-3" id="floatingPassword" placeholder="Password">
                    </div>
                </div>
                <div class="card-footer login_form_footer mt-3">
                    <div class="card-footer-content">
                        <button type="submit" class="btn btn-primary w-100">Sign In</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
@endsection