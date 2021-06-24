@extends('layout.app')
@section('main_title','Users Create')
<div class="me-5">@section('title','Users')</div>
@section('content')

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="d-flex justify-content-center">
            <div class="col-md-8 col-12  ">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Horizontal Form with Icons</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Full Name</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" value="{{ old('name') }}"
                                                        placeholder="Name" id="first-name-icon" name="name">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-person"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="email" class="form-control" value="{{ old('email') }}"
                                                        placeholder="Email" id="first-name-icon " name="email">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-envelope"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Password</label>
                                        </div>
                                        <div class="col-md-8"> 
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="password" class="form-control"  value="{{ old('password') }}"
                                                       name="password" placeholder="password">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-phone"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Retype Password</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="password" class="form-control" value="{{ old('password_confirmation') }}"
                                                        placeholder="Password" name="password_confirmation">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-lock"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Image</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="file" class="form-control" value="{{ old('image_file') }}"
                                                        placeholder="Password" name="image_file">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-card-image"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit"
                                                class="btn btn-primary me-1 mb-1">Submit</button>
                                            <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                
    </div>         
@endsection            
</body>

