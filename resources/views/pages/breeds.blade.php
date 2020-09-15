@extends('layouts.app')

@section('content')
        <h1>Welcome to Breeds page</h1>
        
        <p>This is for Breeds</p>
        <div class="content">
            <div class="container">
                <div class="col-md-4 w3ls_dresses_grid_left">
                    <div class="w3ls_dresses_grid_left_grid">
                        <h3>Categories of Breeds</h3>
                            <div class="w3ls_dresses_grid_left_grid_sub">
                                <div class="ecommerce_dres-type">
                                    <ul>
                                        @if(count($data) > 0)  
                                            @foreach($data as $item)
                                                <li><a href="/singlebreeds/{{$item->id}}">{{$item->name}}</a></li>

                                            @endforeach

                                        @endif
                                    </ul>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
@endsection