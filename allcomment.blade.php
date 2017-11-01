

@extends('layouts.headers')
@section('titles',"$title")
@section('body')




 <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                        	<div class="header">
                                <h4 class="title">All Comments</h4>
                               
                            </div>
	<table class="table table-hover table-striped">
        <thead>
		<tr>
		<th>Author</th>
		<th>Comment</th>
		<th>In Responce to</th>
		<th>Submitted</th>
        
	</tr>
	</thead>
	
	@php
	$coments=$coments->toArray();
	$posts=$posts->toArray();
		
	@endphp
	{{-- {{dd($coments)}} --}}
	@foreach($coments as $comment)
	<tr>
		<td><img src="{{asset('/img/'.'img.png')}}" width="64" height="64">{{$comment['email']}}<br>{{$ip}}</td>
		<td>{{$comment['description']}}<br><a href="/comment/{{$comment['comment_id']}}">{{'edit'}}</a> &nbsp{{'|'}}&nbsp<a href="/delete/{{$comment['comment_id']}}">{{'trash'}}</a>&nbsp{{'|'}}&nbsp{{'reply'}}</td>
		
		@foreach($posts as $post)
		@php

		if($post['id']==$comment['post_id'])
		{
		$post1=$post['title'];
		$post1_id=$post['id'];

		}
		
		
		@endphp	
		@endforeach


		
	
		
		<td>{{$post1}}<br><a href="/viewpost/{{$post1_id}}">{{'view post'}}</a></td>
	 	<td>{{$comment['created_at']}}</td>
	 	
	 	
        {{-- <td><button><a href="/post/{{$Post->id}}/draft"  button type="button" name="delete"> Delete</a></button></td> --}}
     
 </td>
	 @endforeach






</table>
</div>
</div>
</div>
</div>
</div>




@endsection
	@include('layouts.footer')