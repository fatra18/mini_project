@extends('layout.app')
@section('main_title','Category Page')
@section('active2','active')
@section('title','Category')
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
<button class="btn btn-success mb-5 "><a href="category/create" class="text-light">Create Category</a></button>

<div class="row" id="table-hover-row">
    <div class="col-12">
        <div class="card">
          
            <div class="card-content">
               
                <!-- table hover -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>NAME</th>
                                <th>Action</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                
                          
                            <tr>
                                <td class="text-bold-500">{{ $item->name }}</td>
                                
                                <td>
                                    <button class="btn btn-primary "><a href="{{route('category.edit', $item->id)}}" class="text-light">Edit</a></button>
                                    <form class="d-inline-block" action="{{ route('category.delete',$item->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-small">Delete</button>
                                        @method('DELETE')
                                    </form>    
                                </td>
                                <td><a href="#"><i
                                            class="badge-circle badge-circle-light-secondary font-medium-1"
                                            data-feather="mail"></i></a></td>
                            </tr>
                           
                            
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection