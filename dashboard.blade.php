@extends('layouts.headers')
@section('titles',"$title")
@section('body')

  <style>
.right-div{
    float: right;
    width: 45%;
    margin-right: 200px;
}
.left-div
{
    float: left;
    width: 30%;
    margin-left: 10px;
    
}
</style> 


<h1>DashBoard</h1>
<div class="left-div">
    <div class="footer">
        <h3>At a Glance</h3>
        <hr>
        <div>
            <a href='/PostDisplay'>
            <i class="pe-7s-pin">{{' '}}Posts {{' '}} {{$count}}</i> 
            </a>
            <br>
            <a href="">
            <i class="pe-7s-pin">{{' '}}Comments{{' '}}{{$count1}}</i>
           </a>

        </div>


    </div>
</div>































<div class="right-div">
  <div class="footer">
   
        <h3>Quick Drafts</h3>
        <hr>

                    <form class="form-horizontal" method="POST" action="/storedraft">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-1 col-md-offset-1 control-label">Title</label>

                            <div class="col-md-6 col-md-offset-1">
                                <input id="title" type="text" class="form-control " name="title" value="{{ old('title') }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description" class="col-md-1 col-md-offset-1 control-label">Description</label>

                            <div class="col-md-6 col-md-offset-1">
                                <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" required autofocus>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                   Save Draft
                                </button>
                            </div>
                        </div>
                    </form>
    

</div>
</div>


                


@endsection
@include('layouts.footer')