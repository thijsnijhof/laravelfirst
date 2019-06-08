@extends('layout.app')

    {{-- @push()
    <link href="{{ asset('css/styles.css')}}" rel="stylesheet">
    @endpush --}}

    @section('appContent')
        
            @component('layout.welcome')
                <strong>Welcome to our web.</strong>   
                @slot('link')
                        <a href="#">Click here!</a>
                @endslot
            @endcomponent

            <br/>

                <div>
                        The Code is <strong>{{ $code }}</strong>
                </div>
                <div>
                        The Color is <strong>{{ $color }}</strong>
                </div>
                <div>
                        @foreach ($cars as $car)
                        <div>{{ $car }}</div>
                        @endforeach
                </div>

                <div>
                        @for ($i = 0; $i < 5; $i++)
                                <div>Current number is: {{$i}}</div>
                        @endfor
                </div>

                <hr/>

                @if($color === 'red')
                        <div>The color is red</div>
                @else 
                        <div>The color is not red</div>
                @endif

                <hr/>

                <div>
                {{-- @empty to check if !empty --}}
                @isset($hobbies)
                        @foreach ($hobbies as $hobbie)
                                <div>{{$hobbie}}</div>
                        @endforeach
                @endisset
                </div>
    @stop