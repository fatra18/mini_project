@extends('layout.app')
@section('main_title','Article Page')
@section('active3','active')
@section('title','Article')
@section('content')
<button class="btn btn-success mb-5 "><a href="articles/create" class="text-light">Create Article</a></button>
  
<div class="row" id="table-hover-row">
    <div class="col-12">
        <div class="card">
            @if (session('sukses-store'))
            <div class="alert alert-success">
                {{ session('sukses-store') }}
            </div>
        @endif
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
                            @foreach ($data as $item )
                                <tr class="col-12">
                                    <td class="text-bold-500 col-1">{{ $item->user->name }}</td>
                                    <td class="col-2">{{ $item->category->name}}</td>
                                    <td class="text-bold-500 col-1">{{ $item->title }}</td>
                                    <td class="col-2">{{ $item->content }}</td>
                                    <td class="col-2">
                                        <img src="profile/{{ $item->image }}" alt="" class="w-25">
                                    </td>
                                    <td>
                                        <button class="btn btn-primary "><a href="{{route('articles.edit', $item->id)}}" class="text-light">Edit</a></button>
                                        <form class="d-inline-block" action="{{ route('articles.delete',$item->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-small">Delete</button>
                                            @method('DELETE')
                                        </form>
                                        <button class="btn btn-success "><a href="{{route('articles.show', $item->id)}}" class="text-light">Detail</a></button>
    
                                    </td>
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