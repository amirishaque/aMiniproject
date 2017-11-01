@extends('layouts.headers')
{{-- @section('titles',"$title") --}}
@section('body')



<div class="box">
    <h1><b>Email</b></h1>
    <div class="col-md-offset-4 control-label">
      
    </div>
    <form class="form-horizontal" method="post" action="/getEmail">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}"> 
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


    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

        <div class="col-md-5">
            <input id="email" type="email" class="form-control" name="email" value="{{old('email')}}" required>

            @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}"> 
      <label for="password" class="col-md-4 control-label">password</label>
      <div class="col-md-5">
        <input id="password" type="text" class="form-control" name="password" placeholder="password" value="{{ old('password') }}" required autofocus>

        @if ($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}"> 
  <label for="name" class="col-md-4 control-label">First Name</label>
  <div class="col-md-5">
    <input id="name" type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus>

    @if ($errors->has('name'))
    <span class="help-block">
        <strong>{{ $errors->first('name') }}</strong>
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

<div class="form-group">
    <label for="notification" class="col-md-4 control-label">Send User Notification</label>
    <input id="notification" type="radio" name="notification" value=""> send the new user a new email about their account<br>

</div>




<div class="col-md-6 col-md-offset-4">
    <button type="submit" value="getEmail" class="btn btn-primary col-md-4">
     Save Comment
 </button>
</div>


</form>
</div>

@endsection
@include('layouts.footer')