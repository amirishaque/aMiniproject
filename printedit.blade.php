@extends('layouts.headers')
@section('titles',"$title")
@section('body')
 
 <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">


 
       {{--  {{dd($users)}} --}}
                    <form class="form-horizontal" method="post" " enctype="multipart/form-data"  action="/printedit/{{$users['id']}}/update">

                        {{ csrf_field() }}

                   

                          <div class="form-group">
                              <label for="username" class="col-md-4 control-label">User Name</label>
                            <div class="col-md-5">
                                <input id="username" type="text" class="form-control" disabled name="username" placeholder="User Name" value="{{$users['userprofile']['username']}}" required autofocus>
                                  @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif

                             
                        </div>
                    </div>



                              <div class="form-group">
                              <label for="name" class="col-md-4 control-label"> Name</label>
                            <div class="col-md-5">
                                <input id="name" type="text" class="form-control" name="name" placeholder="Name" value="{{ $users['userprofile']['name'] }}" required autofocus>
                                  @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                              
                        </div>
                    </div>


                              <div class="form-group">
                              <label for="lastname" class="col-md-4 control-label">Last Name</label>
                            <div class="col-md-5">
                                <input id="lastname" type="text" class="form-control" name="lastname" placeholder="Last Name" value="{{ $users['userprofile']['lastname'] }}" required autofocus>
                                  @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                             
                        </div>
                    </div>

                                
                                <div class="form-group">
                              <label for="nickname" class="col-md-4 control-label">Nick Name</label>
                            <div class="col-md-5">
                                <input id="nickname" type="text" class="form-control" name="nickname" placeholder="Nick Name" value="{{ $users['userprofile']['nickname']}}" required autofocus>
                                 @if ($errors->has('nickname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nickname') }}</strong>
                                    </span>
                                @endif
                           
                        </div>
                    </div>





                       <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-5">
                                <input id="email" type="email" class="form-control" disabled name="email" value="{{$users['email']}}" required>
                                  @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                               
                        </div>
                    </div>



                    <div class="form-group">
                              <label for="image" class="col-md-4 control-label"></label>
                            <div class="col-md-5">
                                @if(@empty($users['userprofile']['imagename']))
                                <img src="{{asset('/img/'.'img.png')}}" width="64" height="64">
                                @else
                                <img src="{{asset('/img/'.$users['userprofile']['imagename'])}}" width="64" height="64" >
                                @endif
                               


                                
                        </div>
                    </div>
                        <div class="form-group">
                              <label for="image" class="col-md-4 control-label">image</label>
                            <div class="col-md-5">
                                <input id="image" type="file"  name="image"  value="" autofocus>

                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                                
                        </div>
                    </div>


                            
                            <div class="form-group">
                              <label for="website" class="col-md-4 control-label">Website</label>
                               <div class="col-md-4">
                                <input id="website" type="text" class="form-control" name="website" placeholder="www.com" value="{{$users['userprofile']['website']}}" required autofocus>
                                  @if ($errors->has('website'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('website') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                        
{{-- 
                <h3><b>about yourself</b></h3> --}}
                 <div class="form-group">
                <label for="description" class="col-md-4 control-label">info</label>
                    <div class="col-md-5">
                            <textarea name="description" cols="55" rows="8" id="description" 
                            value="{{$users['userprofile']['description']}}" placeholder="Info"></textarea>
                            @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                 </div>
             </div>
                            <div>
                         <input type="hidden" name="user_id" value="{{$users['userprofile']['user_id']}}">
                         <input type="hidden" name="id" value="{{$users['userprofile']['id']}}">
                            
                            </div>

                                <div class="form-group">
                             <div class="col-md-4 col-md-offset-4">
                                <button type="submit" name="update" class="btn btn-primary ">
                                  Update Profile
                                </button>
                            </div>
                        </div>

            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>





@endsection
@include('layouts.footer')