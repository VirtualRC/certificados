@extends('layouts.app')
@section('content')
<section>
  <div class="container">
    @if (session('status'))
      <div class="alert alert-{{session('status')}}" role="alert">
          {{ session('message') }}
      </div>
    @endif
    <h1>Crear nuevo alumno</h1>
    <form method="post" action="{{route('alumno.store')}}" >
      @csrf
      @method('post')
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputName">Nombre completo</label>
            <input type="text" class="form-control" id="inputName" name="nombre" placeholder="Nombre completo">
          </div>
          <div class="form-group col-md-6">
            <label for="inputDni">Dni</label>
            <input type="text" class="form-control" id="inputDni" name="dni" placeholder="Dni">
          </div>
        </div>
        
        <div class="form-row">
          <div class="form-group py-2">
            <button type="submit" class="btn btn-primary">Crear</button>
          </div>

        </div>
      </form>
  </div>
</section>
    
@endsection