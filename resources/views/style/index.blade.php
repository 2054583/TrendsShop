@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-10">
            <h2>Trends Shop</h2>
        </div>

        <div class="col-lg-2">
            <a class="btn btn-success" href="{{ url('style/create') }}">Ajouter un style</a>
        </div>

    </div>



    @if ($message = Session::get('success'))

        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>

    @endif



<div class="container">
    <div class="row">
        @foreach ($styles as $index => $style)
        <div class="col-md-4">
            <div class="card card-body">
                <a href="{{ url('style/'. $style->id) }}">
                <h2>
                        {{ $style->nomStyle }}
                    </h2>
                </a>
            <p>Ecrit par: {{ $style->description }} | date: {{ $style->created_at }}</p>
            <a href="{{ url('style/'. $style->id) }}" class="btn btn-outline-primary">En savoir plus</a>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection