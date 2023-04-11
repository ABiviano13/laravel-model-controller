@extends('layouts.app')

@section('content')
<div class="row">

    @forelse ($movies as $movie)
       <div class="col-2">
            <div class="card p-2">
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