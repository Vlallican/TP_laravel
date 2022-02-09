@extends("base")

@section("content")
<h1>Observeur</h1>
        <div>
            {{ $observeur1->envoyer() }}
            {{ $observeur2->envoyer() }}
        </div>
@endsection