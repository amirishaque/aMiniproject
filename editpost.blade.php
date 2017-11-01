@extends('layouts.headers')
@section('titles',"$title")
@section('body')
	<title>Edit</title>
	<h1>Editor</h1>




                          
<form class="form-horizontal" method="POST" action="/post/{id}/edit">
           {{ csrf_field() }}

<div class="left-div">
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2 class="title">Edit Post</h2>
                            </div>


                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}"> 
                             <label for="title" class="col-md-2 control-label ">Title</label>
                            <div class="col-md-8">
                                <input id="title" type="text" class="form-control" name="title" placeholder="Enter Title Here" value="{{$posts->title }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
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


                                <button type="submit" class="btn btn-primary col-md-offset-4 ">
                                   Save Post
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       




</form>
@endsection
@include('layouts.footer')