@extends('layout.layout')

@section('content')
    <form  method="post" action="{{route('sauveproduit')}}" name="f">
        {{ csrf_field() }}
        <h3 style="color: red">Ajouter un nouveau Produit</h3>
    
    <div>
        <label for="">nom du produit</label>
        <input type="text" name="nom" class="form-control">
    </div>

    <div>
        <label for="">la categorie produit</label>
        <input type="text" name="categorie" class="form-control">
    </div>

    
    <div>
        <label for="">prix du produit</label>
        <input type="text" name="prix" class="form-control">
    </div>

    <div>
        <label for="">Description produit</label>
        <input type="text" name="decription" class="form-control">
    </div>

    <div>
        <label for="">image produit</label>
        <input type="file" name="image" class="form-control">
    </div>
    <div>
        <input type="submit" name="ajouter" value="ajouter" class="btn btn-primary" 
        style="font-size:20PX;width:250px;margin-top:12px"> 
            {{-- <button disabled="disabled"  class="btn btn-primary form-control">ajouter</button> --}}
    </div>
    </form>
@endsection 