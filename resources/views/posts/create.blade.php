@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/post" enctype="multipart/form-data" method="post">

        <!-- authenticates form from getting submitted to end-point -->
        @csrf
        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h2>{{__('Add New Post')}}</h2>
                </div>

                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">{{__('Caption of Post')}}</label>
                    <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}"  autocomplete="caption" autofocus>

                    @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">{{__('Post Image')}}</label>

                    <input type="file" class="form-control-file" id="image" name="image">

                    @error('image')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">{{__('Add Post')}}</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection
