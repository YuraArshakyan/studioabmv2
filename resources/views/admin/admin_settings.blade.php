@extends('admin.admin_layout.admin_index')
@section('title', 'Settings')
@section('content')  
    <div class="services_head">
        <h1>
            Settings
        </h1>
    </div>
    <div class="container min_height_80vh">
        <form action={{url('/changePassword')}} method="POST">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h1>Change Password</h1>
                </div>
                <div class="card-body">
                    <label for="disabledTextInput" class="form-label">Current Password</label>
                    <input type="password" name="password" id="disabledTextInput" class="form-control" >

                    <label for="disabledTextInput" class="form-label">New Password</label>
                    <input type="password" name="new_password" id="disabledTextInput" class="form-control" >

                    <label for="disabledTextInput" class="form-label">Confirm Password</label>
                    <input type="password" name="passwordConfirmation" id="disabledTextInput" class="form-control" >
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection