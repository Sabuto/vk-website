@extends('app')

@section('content')
    @include('partials.errors')
    <h1>Add a site to the portfolio</h1>

    <form action="{{route('sites.store')}}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="name">Name: </label>
            <input type"text" name="name" id="name" class="form-control" value="{{old('name')}}" required>
        </div>

        <div class="form-group">
            <label for="description">Description: </label>
            <textarea name="description" id="description" class="form-control" rows="10" required>
                {{old('description')}}
            </textarea>
        </div>
        
        <div class="form-group">
            <label for="url">Url: </label>
            <input type"text" name="url" id="url" class="form-control" value="{{old('url')}}" required>
        </div>
        
        <div class="form-gorup">
            <button type="submit" class="btn btn-primary">Add Site</button>
        </div>
    </form>
@endsection