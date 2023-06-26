@extends('layouts.base')

@section('contents')
    <h2>Avaible Movies</h2>
    
    <div class="row row-cols-3">
        @foreach ($arrMovies as $movie)
            <div class="col">
                
                <div class="card" style="width: 18rem;">
                    {{-- <img src="{{ Vite::asset('/resources/img/' . $movie->img) }}" class="card-img-top" alt=""> --}}
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-text">{{ $movie->date }}</p>
                        <a href="#" class="btn btn-primary">More</a>
                    </div>
                </div>
            </div>
        @endforeach 
    </div>
    
   
@endsection