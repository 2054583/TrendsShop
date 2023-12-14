@extends('layouts.app')


@section('content')


    <h1>Modifier style: {{ $style->nomStyle }}</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

    @endif

    <form method="post" action="{{ url('style/'. $style->id) }}" >
        @method('PATCH')
        @csrf


        <div class="form-group mb-3">
            <label for="nomStyle">Nom du Style</label>
            <input type="text" class="form-control" id="nomStyle" placeholder="Entrez un style" name="nomStyle">
        </div>

        <div class="form-group mb-3">

            <label for="description">Ajouter la description:</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>

        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>

    </form>

@endsection