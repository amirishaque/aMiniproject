@extends('layouts.headers')
@section('titles',"$title")
@section('body')

{{--  <style>
table, th, td {
    border: 1px solid black;
}
</style> --}}
 
<form action="{{route('search')}}"  method="POST" class="form-horizontal"   >
{{ csrf_field() }}
  <div class="input-group custom-search-form col-md-6 col-md-offset-6">
                <input type="text" class="form-control" name="search" placeholder="Search...">
                <span class="input-group-btn">
    <button class="btn btn-default-sm " type="submit">
        <i class="fa fa-search"></i>
    </button>
</span>
</div>
</form>







 <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                        	<div class="header">
                                <h4 class="title">All Posts</h4>
                               
                            </div>
	<table class="table table-hover table-striped">
        <thead>
		<tr>
		<th>Title</th>
		<th>author</th>
		<th>Categories</th>
		<th>Tags</th>
        <th>Date</th>
        <th>Comment</th>
        
	</tr>
	</thead>
	{{-- 
	{{dd($users->toArray())}} --}}
	@php
	 $posts1=$posts->toArray();
	 $user=$user->toArray();
	
	 // dd($days);

	 // dd($galleryId);


	@endphp
	
	
	@foreach($posts1['data'] as $post)
	@php
	$dates1=explode(' ',$post['created_at']);
	$dates2=$dates1[0];
	$dates3=explode('-',$dates2);
	$dates4=$dates3[0];
	$dates5=$dates3[1];
	$dates6=$dates3[2];
	$path='/'.$dates4.'/'.$dates5.'/'.$dates6.'/';
	
	
	@endphp
	
	
	<tr>
		
		@if(@empty($post['image_name']))
		<td><img src="{{asset('/img/'.'img.png')}}" width="64" height="64"><a href="/post/{{$post['id']}}/edit">{{$post['title']}}</a></td>
		@else
		<td><img src="{{asset($path.$post['image_name'])}}" width="64" height="64"><a href="/post/{{$post['id']}}/edit">{{$post['title']}}</a></td>
		@endif

		@foreach($user as $users)
		@php
		if($users['user_id']==$post['user_id'])
		{
			$user1=$users['users']['user_profile']['name'];
		
		}
	
	@endphp
	@endforeach
	<td>{{$user1}}</td>
		@php

		$cat_name=[];
				foreach ($post['categories'] as $categories) {
			$cat_name[]= $categories['name'];
		}
		@endphp
		
	 	<td>{{implode(",",$cat_name )}}</td>
	 	<td>{{''}}</td>
	 	@php
	 	$time=Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post['updated_at'])->format('Y-m-d');
	 	$time1=Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post['updated_at'])->format('H-i-s');
	 	@endphp
	 	<td>{{$time}}<br>{{$time1}}</td>
	 	<td><button><a href="/simplecomment/{{$post['id']}}">Comment</a></button></td>
	 	</tr>
	 	@endforeach
	
	 </table>
	 {{$posts->links()}}
	 	
    {{--     <td><button><a href="/post/{{$Post->id}}"  button type="button" name="delete"> Delete</a></button></td>
    
    <td><button><a href="/post/{{$Post->id}}/edit/"  button type="button" name="edit"> Edit</a></button></td> 
     <td><button><a href="/comment/{{$Post->id}}"  button type="button" name="comment"> Comment</a></button></td> 
     <td><button><a href="/post/{{$Post->id}}/addcategory" button type="button" name="addcategory">addCategory</a></button></td> --}}
 
	 
	 </div>
	@endsection
@include('layouts.footer')