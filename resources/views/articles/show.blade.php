@extends('layout.app')
@section('main_title','Article Detail')
@section('title','Article')
@section('content')

<table class="table ">
    <tr>
        <th>User_id</th>
        <th>{{ $data->user->name }}</th>
           
    </tr>
    <tr>
        <th>Category_id</th>
        <th>{{ $data->category->name }}</th>
    
    </tr>   
    <tr>
        <th>Title</th>
        <th>{{ $data->title }}</th>
       
    </tr>   
    <tr>
        <th>Content</th>
        <th>{{ $data->content }}</th>
      
    </tr>   
    <tr>
        <th>Image</th>
        <th>
            <img src="/profile/{{ $data->image }}" alt="" class="w-25">
        </th>
       
    </tr>   
</table>    
    
@endsection