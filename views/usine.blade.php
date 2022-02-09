@extends("base")

@section("content")
<h1>Usine</h1>
<p>
{{ $renault->getNom()}} </br>
{{ $opel->getNom()}} </br>
</p>
@endsection
