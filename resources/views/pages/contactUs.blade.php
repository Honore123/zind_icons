@extends('layouts.app')
    
@section('content')
<div class="container">
        <div class="jumbotron text-center" style="margin-top:20px;">
                <h2>Talk to us!</h2>
                <form action="" class="form-horizontal" style="margin-bottom:50px;">
                        <div class="form-group">
                                <label class="control-label col-md-1" for="email">Name:</label>
                                <div class="col-md-11">
                                        <input type="text" class="form-control" placeholder="Ex: Kubwimana Patrick">
                                </div>
                            </div>
                        <div class="form-group">
                            <label class="control-label col-md-1" for="email">Email:</label>
                            <div class="col-md-11">
                                    <input type="text" class="form-control" placeholder="someone@example.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-1" for="email">Message:</label>
                            <div class="col-md-11">
                                    <textarea class="form-control col-md-11" rows="15">

                                    </textarea>
                            </div>
                        </div>
                        <button class="btn col-md-11 col-md-offset-1">Send Message</button>
                </form>
                
            </div>
</div>
    
@endsection