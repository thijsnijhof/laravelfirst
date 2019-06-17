@extends('layout.app')

{{-- @push()
    <link href="{{ asset('css/styles.css')}}" rel="stylesheet">
@endpush --}}

@section('appContent')

<div class="container">
        <br />
        <form action="/posts/{{$post->id}}" method="POST">

                @method('PATCH')
                @csrf

                <div class="form-group">
                        <label for="title_form">Title</label>
                        <input type="text" id="title_form" name="title" placeholder="Enter the title..."
                                class="form-control" value={{$post->title}}>
                </div>

                <div class="form-group">
                        <label for="body_form">Body</label>
                        <textarea type="text" id="content_form" name="body" rows="3" placeholder="Enter the body..."
                                class="form-control">{{ $post->body }}</textarea>
                </div>

                {{-- old way: {{csrf_field()}} --}}
                <button class="btn btn-primary" type="submit">Submit</button>
        </form>
        <br />
        <form action="/posts/{{$post->id}}" method="POST">

                @method('DELETE')
                @csrf

                <button class="btn btn-danger" type="submit">Delete Post</button>
        </form>
</div>
@stop