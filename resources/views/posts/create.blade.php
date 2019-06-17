@extends('layout.app')

{{-- @push()
    <link href="{{ asset('css/styles.css')}}" rel="stylesheet">
@endpush --}}

@section('appContent')
<div class="container">
        <br />
        <form action="/posts" method="POST">
                <div class="form-group">
                        <label for="title_form">Title</label>
                        <input type="text" id="title_form" name="title" placeholder="Enter the title..."
                                class="form-control">
                </div>

                <div class="form-group">
                        <label for="body_form">Body</label>
                        <textarea type="text" id="content_form" name="body" rows="3" placeholder="Enter the body..."
                                class="form-control">
                                </textarea>
                </div>

                <div class="form-group">
                        <label for="number_form">Magic Number</label>
                        <input type="text" id="number_form" name="number_form" placeholder="Enter the number..."
                                class="form-control">
                </div>
                <br/>
                <div class="form-check">
                        <input type="checkbox" id="check_form" name="check_form" class="form-check-input">
                        <label for="check_form">Accept</label>
                </div>
                <br/>
                {{-- old way: {{csrf_field()}} --}}
                @csrf
                <button class="btn btn-primary" type="submit">Submit</button>
        </form>

        <div>
                <br />
                @if($errors->any())
                <div class="alert alert-danger">
                        <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                        </ul>
                </div>
                @endif
        </div>
</div>

@stop