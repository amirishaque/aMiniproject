@extends('layouts.headers')

@section('titles',"$title")


@section('body')


 <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">General setting</h4>
                            </div>
                            <div class="content">
                            	 <form class="form-horizontal" method="post" " enctype="multipart/form-data"  action="store">

                        {{ csrf_field() }}
                         <div class="form-group">
                              <label for="site_title" class="col-md-4 control-label">sitetitle</label>
                            <div class="col-md-5">
                                <input id="site_title" type="text" class="form-control"  name="site_title" placeholder="site_title" value="{{$title}}"  autofocus>
                                  @if ($errors->has('site_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('site_title') }}</strong>
                                    </span>
                                @endif

                             
                        </div>
                    </div>

 					<div class="form-group">
                              <label for="tag_line" class="col-md-4 control-label">Tagline</label>
                            <div class="col-md-5">
                                <input id="tag_line" type="text" class="form-control"  name="tag_line" placeholder="Just another WordPress site" value="{{$tagline}}" autofocus>
                                  @if ($errors->has('tag_line'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tag_line') }}</strong>
                                    </span>
                                @endif

                             
                        </div>
                    </div>



                    <div class="form-group">
                              <label for="email" class="col-md-4 control-label">Email</label>
                            <div class="col-md-5">
                                <input id="email" type="text" class="form-control"  name="email" placeholder="email" value="{{$user->email}}" autofocus>
                                  @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                             
                        </div>
                    </div>

                    	<div class="col-md-offset-4">
                            @php
                            $checked ='';
                                    if($member==1)
                                    {
                                      $checked ='checked="checked"';
                                    }
                                    @endphp
                                    


                    	 <input type="checkbox" name="membership" {{$checked}}  value="1">Membership<br>
                             @if ($errors->has('membership'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('membership') }}</strong>
                                    </span>
                                @endif

					</div>

                       <div class="form-group">
                             <div class="col-md-4 col-md-offset-4">
                                <button type="submit"  class="btn btn-primary ">
                                  save
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
