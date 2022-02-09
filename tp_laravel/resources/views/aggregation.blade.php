@extends("base")

@section("content")
<?php
while($voiture->hasNext()){
    $voitureNext = $voiture->next();
    echo "[ " . get_class($voitureNext) ." ] ";
    echo $voitureNext->nom;
    echo " : ";
    echo $voitureNext->prix;
    echo "</br>";
}
?>
@endsection