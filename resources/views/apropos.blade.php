@extends('layouts.app')


@section('content')

<body>
<div class="container">
  <strong>Ali Tebbal</strong><br>
  420-5H6 MO Applications Web transactionnelles.<br>
  Automne 2023, Collège Montmorency.<br>
<br>
<h4>TRENDS SHOP</h4>
    
<p>Trends shop vous permet d'accédéer au tendances les plus recentes et les plus exclusif, le site vous permet d'ajouter des souliers<br>
les modifier ou les supprimer.</p>

<p>La page d'accueil affiche les différents souliers disponible avec leur date de sortie.</p>

Les langues disponible sur le site :
<ul>
    <li>Français</li>
    <li>Anglais</li>
    <li>Espagnol</li>
</ul>

<h3>Base de données utilisée par l'application: </h3>
<img src="{{ asset('/images/bd.JPG')}}" width="600px" height="500px">

</div>
</body>

@endsection 