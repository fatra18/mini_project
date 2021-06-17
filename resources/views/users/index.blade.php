@extends('layout.app')
@section('title','Users')
@section('active4','active')
@section('main_title','Users Page')
@section('content')


<button class="btn btn-success mb-5 "><a href="users/create" class="text-light">Create User</a></button>

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
                                    <th>Number</th>
                                    <th>NAME</th>
                                    <th>Email</th>
                                    <th>Image</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    
                                    <tr>
                                        <td>#</td>
                                        <td class="text-bold-500">{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>
                                            <img src="/profile/{{$item->image }}" alt="image-profile" style="width:60px" height="50">
                                        
                                        </td>
                                         
                                        <td>
                                            <button class="btn btn-primary "><a href="{{route('users.edit', $item->id)}}" class="text-light">Edit</a></button>
                                            <form class="d-inline-block" action="{{ route('users.delete',$item->id) }}" method="POST">
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