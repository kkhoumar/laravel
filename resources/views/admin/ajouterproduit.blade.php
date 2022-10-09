@extends('layout.layout')

@section('content')
    <form  method="post" action="{{route('sauveproduit')}}" name="f">
        {{ csrf_field() }}
        <h3 style="color: red">Ajouter un nouveau Produit</h3>
        {{-- flash message --}}
        @if (Session::has('message'))
        <div class="alert alert-success">
            {{Session::get('status')}}
        </div>
      @endif
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
        </div>
      @endif
    
    <div>
        <label for="">nom du produit</label>
        <input type="text" name="nom" class="form-control">
    </div>

    <div>
        <label for="">la categorie produit</label>

        <select name="categorie_produit" id="cars" class="form-control">
        @foreach ($category as $categorie )
        <option value=""></option>
        <option value="">{{$categorie->Categorie,null}}</option>
        @endforeach
    </select>
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