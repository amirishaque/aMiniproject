@extends('layouts.headers')
@section('titles',"$title")
@section('body')



 <div class="box">
    <h1><b>Profile</b></h1>
      <div class="col-md-offset-4 control-label">
     {{--  <h3><b>Name</b></h3> --}}
      </div>
                    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="/store">
                        {{ csrf_field() }}

                      {{--   <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}"> 
                              <label for="username" class="col-md-4 control-label">User Name</label>
                            <div class="col-md-5">
                                <input id="username" type="text" class="form-control" name="username" placeholder="User Name" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 --}}


                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}"> 
                              <label for="name" class="col-md-4 control-label"> Name</label>
                            <div class="col-md-5">
                                <input id="name" type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>





 <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}"> 
                              <label for="image" class="col-md-4 control-label">Upload image</label>
                            <div class="col-md-5">
                                <input id="image" type="file"  name="image"  value="{{ old('image') }}" required autofocus>

                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>






                            <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}"> 
                              <label for="lastname" class="col-md-4 control-label">Last Name</label>
                            <div class="col-md-5">
                                <input id="lastname" type="text" class="form-control" name="lastname" placeholder="Last Name" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nickname') ? ' has-error' : '' }}"> 
                              <label for="nickname" class="col-md-4 control-label">Nick Name</label>
                            <div class="col-md-5">
                                <input id="nickname" type="text" class="form-control" name="nickname" placeholder="Nick Name" value="{{ old('nickname') }}" required autofocus>

                                @if ($errors->has('nickname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nickname') }}</strong>
                                    </span>
                                @endif
                        </div>
                        </div>

                        <h3><b>Contact Info</b></h3>





                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6" >
                                <input id="email" type="email" class="form-control" name="email"  value="{{$user->email}}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}"> 
                              <label for="website" class="col-md-4 control-label">Website</label>
                            <div class="col-md-5">
                                <input id="website" type="text" class="form-control" name="website" placeholder="www.google.com" value="{{ old('website') }}" required autofocus>

                                @if ($errors->has('website'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('website') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                <h3><b>about yourself</b></h3>
                 
                <label for="description" class="col-md-4 control-label">Bio logical info</label>
             <div class="col-md-5">
                        <textarea name="description" cols="55" rows="8" id="description" placeholder="Info"></textarea>
                            </div>


                        
        </div>

   
        <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary col-md-4">
                                   Save Comment
                                </button>
                            </div>

<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            </form>













@endsection
@include('layouts.footer')