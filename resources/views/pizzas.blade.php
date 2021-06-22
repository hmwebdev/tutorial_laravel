@extends('layouts.layout')

@section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    <img src="/img/logo_pizza_house.jpg" class="logo" alt="Pizza house logo">
                    <h1 class="main-title">Pizza House</h1>
                 <!--   @for($i = 0; $i < count($pizzas); $i++)
                        <p>{{ $pizzas[$i]['type'] }}</p>
                    @endfor
                </div>
            -->
            <p>{{ $name }}</p>
                @foreach($pizzas as $pizza)
                    <div>
                        {{ $loop-> index }} {{ $pizza['type'] }} - {{ $pizza['base'] }}
                    @if($loop -> first)
                        <span>- First in the loop</span>
                    @endif
                    </div>
                @endforeach
            </div>
          
        </div>
@endsection
