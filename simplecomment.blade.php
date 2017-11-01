@extends('layouts.headers')
@section('titles',"$title")
@section('body')




<body>
	
   
	<form class="form-horizontal" method="POST" action="/commentstore">
           {{ csrf_field() }}

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
							<h2>Comment</h2>
						</div>
							


	  <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}"> 
                             <label for="description" class="col-md-2 control-label ">Description</label>
                            <div class="col-md-10">
                        <textarea name="description" cols="60" rows="12" value="{{$posts->description}}" placeholder="Description"></textarea>
                          @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                                <button type="submit" class="btn btn-primary col-md-offset-2 ">
                                   Save Post
                                </button>
                                 @php

                         $users=$users->toArray();
                         $users=$users['0'];
                         $posts=$posts->toArray();
                       
                         


                         @endphp

                               <input id="username" type="hidden" name="username"  value="{{ $users['user_profile']['username'] }}">
                               <input id="id" type="hidden" class="form-control" name="id" value="{{ $posts['id']}}" >
                                <input type="hidden" class="form-control" name="user_id" value="{{$users['id']}}">
                                  <input id="email" type="hidden" name="email" value="{{$users['email'] }}">
                            
		</div>
	</div>
</div>
</div>
</div>

</form>
@endsection
@include('layouts.footer')