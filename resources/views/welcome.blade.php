@extends('layouts.app')

@section('content')
<div class="row gap-2 my-3">
    <h1 class="text-danger">
        Movies List
    </h1>
    @forelse ($movies as $movie)
       <div class="col-5">
            <div class="card p-2 bg-dark text-white">
                {{$movie->title}}

                <div class="nationality">
                    {{$movie->nationality}}
                </div>

                <div class="vote">
                    {{$movie->vote}}
                </div>
            </div>
       </div>
    @empty
        
    @endforelse

</div>
@endsection