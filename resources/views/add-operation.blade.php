@extends('layouts.master')
@section('title', 'Home')
@section('content')
<div style="padding-top:60px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Add Post
                    </div>
                    <div class="card-body">
                        @if(Session::has('post_created'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('post_created')}}
                            </div>
                        @endif
                        <form method="POST" action="{{route('add.operation')}}">
                            @csrf
                            <div class="form-group">
                                <label for="title">Post Title</label>
                                <input type="text" name="title" placeholder="Enter Post Title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="body">Post Body</label>
                                <textarea type="text" name="body" placeholder="Enter Post Title"
                                rows="3" class="form-control"></textarea>
                            </div>
                            <input type="submit" class="btn btn-primary" value="submit">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
