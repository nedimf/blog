@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    <h2>Hello , {{ Auth::user()->name }}</h2>
                </div>
                <br>

            </div>
            
             @if (Auth::user()->admin)
               <div class="btn-group btn-group">
    <a href="/blog/admin"><button type="button" class="btn btn-primary">Admin</button></a>
    <a href ="/blog/new"><button type="button" class="btn btn-primary">Create new post</button></a>
  
            
            @else
             <a href="/blog/"><button class="btn btn-danger">Blog
             @endif
             


        </div>
    </div>
</div>
@endsection
