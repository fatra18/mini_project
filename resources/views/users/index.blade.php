@extends('layout.app')
@section('title','Users')
@section('active4','active')
@section('main_title','Users Page')
@section('content')


<button class="btn btn-success mb-5 "><a href="user/create" class="text-light">Create User</a></button>

<div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                {{-- <div class="card-header">
                    <h4 class="card-title">Hoverable rows</h4>
                </div> --}}
                <div class="card-content">
                   
                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Image</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-bold-500">Michael Right</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-500">UI/UX</td>
                                    <td>img</td>
                                    <td>
                                        <button class="btn btn-primary "><a href="user/edit" class="text-light">Edit</a></button>
                                        <button class="btn btn-danger "><a href="" class="text-light">Delete</a></button>
                                    
                                    </td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection