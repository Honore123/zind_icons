@extends('layouts.adminPortal')
    
@section('contentAdmin')
    <h3>Upload New Icons</h3>
        <div class="row">
            <div class="col-md-12">
              {!! Form::open(['action' =>'PostsController@store','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
                <div class="form-group text-right">
                    {{Form::label('iconName','Name:',['class'=>'control-label col-md-1'])}}
                    <div class="col-md-4">
                      {{Form::text('iconName','',['class'=>'form-control','style'=>'text-transform: capitalize;'])}}
                    </div>
                    
                </div>
                <div class="form-group text-right">
                        {{Form::label('iconCategory','Category:',['class'=>'control-label col-md-1'])}}
                        <div class="col-md-4">
                            {{Form::select('iconCategory', ['T' => 'Transport', 'Tech' => 'Technology',],null,['class'=>'form-control'])}}
                        </div>
                </div>
                <div class="form-group text-right">
                        {{Form::label('iconType','Type:',['class'=>'control-label col-md-1'])}}
                        <div class="col-md-4">
                            {{Form::select('iconType', ['P' => 'PNG', 'J' => 'JPEG',],null,['class'=>'form-control'])}}
                        </div>
                </div>
                <div class="form-group text-right">
                        {{Form::label('iconSize','Size:',['class'=>'control-label col-md-1'])}}
                        <div class="col-md-4">
                            {{Form::select('iconSize', ['36' => '36 PX', '24' => '24 PX',],null,['class'=>'form-control'])}}
                        </div>
                </div>
                <div class="form-group">
                        {{Form::label('iconSize','Icon:',['class'=>'control-label col-md-1'])}}
                        <div class="col-md-4">
                                {{Form::file('iconVisual',['class'=>'form-control'])}}
                        </div>
                </div>
                
                {{Form::submit('Upload',['class'=>'btn col-md-4 col-md-offset-1'])}}
              {!! Form::close() !!}  
            {{-- <form enctype="multipart/form-data" action="{{url('/store')}}" method="GET" class="form-horizontal">
                            <div class="form-group text-right">
                                <label for="iconName" class="control-label col-md-1">Name:</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="iconName" placeholder="Icon Name">
                                </div>
                            </div>
                            <div class="form-group text-right">
                                    <label for="iconName" class="control-label col-md-1">Category:</label>
                                    <div class="col-md-4">
                                        <select class="form-control" name="iconCategory" id="">
                                            <option value="" selected>Icon Category</option>
                                            <option value="">Transport</option>
                                            <option value="">Technology</option>
                                            <option value="">Culture</option>
                                        </select>
                                    </div>
                                </div>
                            <div class="form-group text-right">
                                <label for="iconName" class="control-label col-md-1">Type:</label>
                                <div class="col-md-4">
                                    <select class="form-control" name="iconType" id="">
                                        <option value="" selected>Icon Type</option>
                                        <option value="">PNG</option>
                                        <option value="">SVG</option>
                                        <option value="">JPEG</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group text-right">
                                    <label for="iconName" class="control-label col-md-1">Size:</label>
                                    <div class="col-md-4">
                                        <select class="form-control" name="iconSize" id="">
                                            <option value="" selected>Icon Size</option>
                                            <option value="">512 px</option>
                                            <option value="">36 px</option>
                                            <option value="">24 px</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group text-right">
                                        <label for="iconName" class="control-label col-md-1">Icon:</label>
                                        <div class="col-md-4">
                                            <input type="file" name="iconVisual" class="form-control">
                                        </div>
                                    </div>
                                <button type="submit" class="col-md-4 col-md-offset-1 btn">Upload</button>
                        </form> --}}
            </div>
        </div>
@endsection