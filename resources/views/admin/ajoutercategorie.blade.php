@extends('layout.layout')


@section('content')
    <form  method="post" action="{{route('sauvecategorie')}}">
        {{ csrf_field() }}
        <h3 style="color: red">Ajouter une nouvelle catégorie</h3>

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
     
    <div>
        <label for="">nom de la categorie</label>
        <input type="text" name="categorie" class="form-control">
    </div>
    <div>
        <input type="submit" name="ajouter" value="ajouter" class="btn btn-primary" 
        style="font-size:20PX;width:250px;margin-top:12px"> 
            {{-- <button disabled="disabled"  class="btn btn-primary form-control">ajouter</button> --}}
    </div>
    </form>
@endsection 