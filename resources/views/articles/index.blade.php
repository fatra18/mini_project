@extends('layout.app')
@section('main_title','Article Page')
@section('active3','active')
@section('title','Article')
@section('content')
<button class="btn btn-success mb-5 "><a href="user/create" class="text-light">Create Article</a></button>

<div class="row" id="table-hover-row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Article</h4>
            </div>
            <div class="card-content">
               
                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0 ms-3">
                        <thead>
                            <tr>
                                <th>User_id</th>
                                <th>Category_id</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Image</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="col-12">
                                <td class="text-bold-500 col-1">1</td>
                                <td class="col-2">Makanan</td>
                                <td class="text-bold-500 col-1">11</td>
                                <td class="col-2"></td>
                                <td class="col-2">Austin,Taxes</td>
                                <td class="col-2">
                                    <button class="btn btn-primary "><a href="user/edit" class="text-light">Edit</a></button>
                                    <button class="btn btn-danger "><a href="" class="text-light">Delete</a></button>
                                
                                </td>
                            </tr>
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection