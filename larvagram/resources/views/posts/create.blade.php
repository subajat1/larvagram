@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h2>Add new post</h2>
                </div>

                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">Caption</label>

                    <input id="caption" 
                            type="text" 
                            class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}" 
                            name="caption" 
                            value="{{ old('caption') }}" 
                            required autofocus>

                    @if ($errors->has('caption'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('caption') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Image</label>

                    <input type="file" class="form-control-file" id="image" name="image">

                    @if ($errors->has('image'))
                        <strong>{{ $errors->first('image') }}</strong>
                    @endif
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">POST</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection