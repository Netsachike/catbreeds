@extends('layouts.app')

@section('content')
        <h1>Welcome to Breeds page</h1>
        
        <p>This is for singleBreeds</p>
       
        @if(count($data) > 0)  
             @foreach($data as $item)
                <img style="width: 100%" style="height: 10%" src="{{$item->url}}">
               
             @endforeach

        @endif
@endsection