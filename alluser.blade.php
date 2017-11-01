@extends('layouts.headers')
@section('titles',"$title")
@section('body')
{{--   <style>
img {
    border: 1px solid black;
}
</style> --}}

{{--    <div class="main-pannel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="header"> --}}

 <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                        	<div class="header">
                                <h4 class="title">All Users</h4>
                               
                            </div>
			
		
				
					
					{{-- {{dd($user1->toArray())}}
					 --}}
					 
							<table  class="table table-hover table-striped">
					        <thead>
							<tr>
								
							
							<th>user Name</th>
							<th>Name</th>
							<th>email</th>
							<th>Post</th>
							

							
						</tr>

						</thead>
						<?php $user2=$user1->toArray() ?>

						
						@foreach($user2['data'] as $user)

							 
						@if(@empty($user['user_profile']))
							
							
						
						
							<tr>
						 	<td>{{''}}</td>
							<td>{{''}}</td>
							<td>{{$user['email']}}</td>
							
							<td>{{''}}</td>
							
					 		</tr>
					 		

					@else

							{{-- @foreach($user1->toArray() as $users) --}}
							{{--  {{dd($user->toArray())}}  --}}
						
						
							<tr>
								@if(@empty($user['user_profile']['imagename']))
								<td><img src="{{asset('/img/'.'img.png')}}" width="64" height="64">&nbsp; <a href="/printedit/{{$user['id']}}"> {{$user['user_profile']['username']}}</a></td>
								@else
								<td><img src="{{asset('/img/'.$user['user_profile']['imagename'])}}" width="64" height="64" >&nbsp;
						 	<a href="/printedit/{{$user['id']}}"> {{$user['user_profile']['username']}}</a></td>
						 	@endif
							<td>{{$user['user_profile']['name']}}</td>
							{{-- <td>{{$user['user_profile']['nickname']}}</td>  --}}
							<td>{{$user['email']}}</td>
							{{-- <td>{{$user['user_profile']['website']}}</td> --}}

							<td>{{''}}</td>
						 	
						 	
					   
					 		</tr>
					 		@endif
					  @endforeach


						
						
						 </table>
						 {{$user1->links()}}
						</div>
					</div>
				</div>
					
					
				</div>
			</div>
		</div>

				@endsection

					@include('layouts.footer')