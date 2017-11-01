@extends('layouts.headers')


@section('body')
<style>
.first{
	margin-left: 200px;

}

</style>
<form class="form-horizontal" method="POST" action="store">
 	
         {{ csrf_field() }}



			<h4>Thumbnail Size</h4>

<div class="first">
	
	 <div class="form-group{{ $errors->has('thumbnail_width') ? ' has-error' : '' }}"> 
                             <label for="thumbnail_width" class="col-md-2 control-label ">width</label>
                            <div class="col-md-2">
                                <input id="thumbnail_width" type="number" class="form-control" name="thumbnail_width" min="0"  value="{{$width1}}"  >

                                @if ($errors->has('thumbnail_width'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                          
                        </div>


		



 <div class="form-group{{ $errors->has('thumbnail_height') ? ' has-error' : '' }}"> 
                             <label for="thumbnail_height" class="col-md-2 control-label ">height</label>
                            <div class="col-md-2">
                                <input id="thumbnail_height" type="number" class="form-control" name="thumbnail_height" min="0"  value="{{$height1}}"  autofocus>

                                @if ($errors->has('thumbnail_height'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('thumbnail_height') }}</strong>
                                    </span>
                                @endif
                            </div>
                          
                        </div>
                    </div>




		<h4>Medium Size</h4>
<div class="first">
	<div class="form-group{{ $errors->has('medium_widht') ? ' has-error' : '' }}"> 
                             <label for="medium_widht" class="col-md-2 control-label ">width</label>
                            <div class="col-md-2">
                                <input id="medium_widht" type="number" class="form-control" name="medium_widht" min="0"  value="{{$width2}}"  autofocus>

                                @if ($errors->has('medium_widht'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('medium_widht') }}</strong>
                                    </span>
                                @endif
                            </div>
                          
                        </div>
	



<div class="form-group{{ $errors->has('medium_height') ? ' has-error' : '' }}"> 
                             <label for="medium_height" class="col-md-2 control-label ">height</label>
                            <div class="col-md-2">
                                <input id="medium_height" type="number" class="form-control" name="medium_height" min="0"  value="{{$height2}}"  autofocus>

                                @if ($errors->has('medium_height'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('medium_height') }}</strong>
                                    </span>
                                @endif
                            </div>
                          
                        </div>



		</div>


				<h4>Large Size</h4>
<div class="first">
	

<div class="form-group{{ $errors->has('large_width') ? ' has-error' : '' }}"> 
                             <label for="large_width" class="col-md-2 control-label ">width</label>
                            <div class="col-md-2">
                                <input id="large_width" type="number" class="form-control" name="large_width" min="0"  value="{{$width3}}"  autofocus>

                                @if ($errors->has('large_width'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('large_width') }}</strong>
                                    </span>
                                @endif
                            </div>
                          
                        </div>


		<div class="form-group{{ $errors->has('large_height') ? ' has-error' : '' }}"> 
                             <label for="large_height" class="col-md-2 control-label ">height</label>
                            <div class="col-md-2">
                                <input id="large_height" type="number" class="form-control" name="large_height" min="0"  value="{{$height3}}"  autofocus>

                                @if ($errors->has('large_height'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('large_height') }}</strong>
                                    </span>
                                @endif
                            </div>
                          
                        </div>




		</div>



		<button type="submit" class="btn btn-primary col-md-offset-0 ">
                                   save changes
                                </button>
        </form>


















@endsection
@include('layouts.footer')