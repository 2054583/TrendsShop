@extends('layouts.app')


@section('content')


    <h1>Modifier soulier: {{ $soulier->marque }}</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

    @endif

    <form enctype="multipart/form-data" method="post" action="{{ url('soulier/'. $soulier->id) }}" >
        @method('PATCH')
        @csrf


        <div class="form-group mb-3">
            <label for="marque">Marque:</label>
            <br>
            <input type="text" class="form-control" id="marque" placeholder="Entrez un soulier" name="marque">
        </div>

        <div class="form-group mb-3">

            <label for="taille">Ajouter la taille:</label>
            <br>
            <input type="text" name="taille" id="taille" cols="30" rows="10" class="form-control"></input>

        </div>

        <div class="form-group mb-3">
        <input type = "file" name= "photo">
 </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>

    </form>

@endsection