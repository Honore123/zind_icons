
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
    
@endsection