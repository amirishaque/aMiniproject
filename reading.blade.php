@extends('layouts.headers')


@section('body')

<form class="form-horizontal" method="POST" action="store">
 	
         {{ csrf_field() }}
		

<h3>Read Post</h3>

						
                        <div class="form-group{{ $errors->has('pagination') ? ' has-error' : '' }}"> 
                             <label for="pagination" class="col-md-2 control-label ">Default num of pages in post</label>
                            <div class="col-md-2">
                                <input id="pagination" type="text" class="form-control" name="pagination" placeholder="pagination" value=""  autofocus>

                                @if ($errors->has('pagination'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pagination') }}</strong>
                                    </span>
                                @endif
                            </div>
                          
                        </div>
							
                                <button type="submit" class="btn btn-primary col-md-offset-2 ">
                                   Save Pagination
                                </button>
                            

	</form>
















@endsection
@include('layouts.footer')