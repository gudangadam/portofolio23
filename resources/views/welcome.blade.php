@extends('layout')
@section('content')
    
    <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
                 
                <!-- {{--ruby style for if(!)--}}
                @unless (empty($orang))
                    ada orang
                @endunless

                {{--php style--}}
                @if (empty($orang))
                    ga ada
                @else
                    ada orang
                @endif 

                @foreach($orang as $keluarga)
                <li>{{$keluarga}}</li>
                @endforeach -->

            </div>
        </div>
@stop

@section('footer')
    <script>
        //alert('selamat datang');
    </script>
@stop