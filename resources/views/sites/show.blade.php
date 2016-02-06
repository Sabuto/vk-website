@extends('app')

@section('content')
    <div class="row">
        <div class="col-md-3">

            <h1>{{$site->name}}</h1>

            <div class="description">{!!nl2br($site->description)!!}</div>
        </div>

        <div class="col-md-9">
            @foreach($site->photos as $photo)
                <img width="200" height="200" src="{{asset($photo->path)}}" alt="">
            @endforeach
        </div>
    </div>

    @if(!auth()->guest())

        <hr>

        <h1>Add Site Images</h1>

        <form id="addPhotosForm" action="{{$site->name}}/photos" class="dropzone">
            {!! csrf_field() !!}
        </form>
    @endif
@endsection

@section('scripts')
    <script>
        Dropzone.options.addPhotosForm = {
            acceptedFiles: '.jpg, .jpeg, .png, .bmp'
        }
    </script>
@endsection