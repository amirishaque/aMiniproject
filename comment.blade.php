@extends('layouts.headers')
@section('titles',"$title")
@section('body')

    <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
    <h1>Comment</h1>
      
      
          
       
      
                    <form class="form-horizontal" method="post" action="/editcomment">
                        
                         {{ csrf_field() }}

                         @php
                         $comments1=$comments1->toArray();
                         $comments1=$comments1[0];
                         @endphp
                        

                      
                        
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}"> 
                              <label for="name" class="col-md-2 control-label">Author Name</label>
                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" placeholder="Name" value="{{ $comments1['name'] }}" disabled required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <input type="hidden" name="id" value="{{$comments1['comment_id']}}">
                      
                                
                             
                         

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-2 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{$comments1['email']}}"  disabled required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                            <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                            <label for="url" class="col-md-2 control-label">Url</label>

                            <div class="col-md-6">
                                <input id="url" type="text" class="form-control" name="url" value="{{old('url')}}" required>

                                @if ($errors->has('url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('url') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                            <div class="col-md-offset-2">
                        
                        <textarea name="description" id="description" cols="65" rows="13"  placeholder="Description"></textarea>
                            </div>
                            <div class="col-md-offset-2">
                                <button type="submit" class="btn btn-primary">
                                   Save Comment
                                </button>
                            </div>
                        
      

     
                     


            </form>
       
</div>
</div>
</div>
</div>
</div> 

             
   

@endsection
@include('layouts.footer')

