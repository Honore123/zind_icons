@extends('layouts.app')
@section('content')
<div class="container-fluid">
        <div class="jumbotron text-center">
                <h1>Do you want Icons?</h1>
                <form class="form-inline">
                        <div class="form-group row">
                          <input type="text" class="form-control input-jumptron col-md-4" placeholder="Search" style="height:50px;width:530px;">
                        </div>
                        <button type="submit" class="btn btn-default btn-jumptron" style="height:50px;padding-left:30px;padding-right:25px;background-color:#e6e5e5"><span class="glyphicon glyphicon-search" style="font-size:20px;"></span></button>
                      </form>
        </div>
    </div>
<div class="container" style="padding-top: 20px;">
        <div class="row">
            <div class="col-md-12">
                <label for="allIcons">All Icons</label>
            </div>
           
        </div>
    </div>
    <div class="container">
        <div class="row icons-title">
                @if (count($icons) > 0)
                    @foreach ($icons as $icon)
                        <div class="col-md-3">
                        <a class="icons-list" data-toggle="modal" href="#{{$icon->name}}"><img src="/storage/icons/{{$icon->icon_visual}}" width="20%" alt=""> {{$icon->name}}</a>
                        </div>
                        <div class="modal fade" id="{{$icon->name}}" role="dialog">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">{{$icon->name}} Icon</h4>
                                </div>
                                <div class="modal-body">
                                    <img src="/storage/icons/{{$icon->icon_visual}}" width="100%" alt="">
                                </div>
                                <div class="modal-footer">
                                  <a href="/storage/icons/{{$icon->icon_visual}}" download="{{$icon->icon_visual}}" class="btn btn-success">Download</a>
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                              
                            </div>
                          </div>
                    @endforeach
                @else
                    <div class="col-md-12 text-center">
                        <h3>Sorry there is no Icons!!</h3>
                    </div>
                @endif
        </div>
    </div>  
@endsection