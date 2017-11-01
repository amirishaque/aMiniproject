@extends('layouts.headers')
@section('titles',"$title")
@section('body')

 <div class="box">
    <h1><b></b></h1>
      <div class="col-md-offset-4 control-label">
      <h3><b>New User</b></h3>
      </div>
                    <form class="form-horizontal" method="post" action="/storeuser">
                        {{ csrf_field() }}

                               {{--  <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">User name(required)</label>

                            <div class="col-md-5">
                                <input id="username" type="username" class="form-control" name="username" value="{{old('username')}}" required>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div> 
                        </div>--}}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail (required)</label>

                            <div class="col-md-5">
                                <input id="email" type="email" class="form-control" name="email" value="{{old('email')}}" required unique>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">First name</label>

                            <div class="col-md-5">
                                <input id="name" type="name" class="form-control" name="name" value="{{old('name')}}" required>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                            <label for="website" class="col-md-4 control-label">website</label>

                            <div class="col-md-5">
                                <input id="website" type="website" class="form-control" name="website" value="{{old('website')}}" required>

                                @if ($errors->has('website'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('website') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        	  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-5">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-5">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
  

   
        <div class="col-md-6 col-md-offset-4">
                                <button type="submit" value="getEmail" class="btn btn-primary col-md-4">
                                   Add New User
                                </button>
                            </div>


            </form>
            @endsection
@include('layouts.footer')