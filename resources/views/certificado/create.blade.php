@extends('layouts.app')
@section('content')
    <section>
        <div class="container">
            @if (session('status'))
                <div class="alert alert-{{ session('status') }}" role="alert">
                    {{ session('message') }}
                </div>
            @endif

            <h3>Crear nuevo Certificado para el alumno de ID: {{ $alumno->id }}</h3>
            <form method="post" enctype="multipart/form-data" action="{{ route('certificado.store') }}">
                @csrf
                @method('post')
                <div class="form-row">
                    <div class="form-group">
                        <label for="inputIdAlumno">Id Alumno</label>
                        <input type="text" class="form-control {{ $errors->has('alumno') ? 'is-invalid' : '' }} "  value="{{ $alumno->id }}" name="alumno" readonly id="alumno"/>
                        @if ($errors->has('alumno'))
                            <div class="invalid-feedback">
                                {{ $errors->first('alumno') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="inputAlumno">Alumno</label>
                        <input readonly type="text" id="inputAlumno" class="form-control"
                            value="{{ $alumno->nombre }}">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputName">Nombre de Curso o Diplomado</label>
                    <input type="text" class="form-control {{ $errors->has('nombre') }}" id="inputName" name="nombre" required placeholder="Curso o Diplomado" />
                    @if ($errors->has('nombre'))
                        <div class="invalid-feedback">
                            {{ $errors->first('nombre') }}
                        </div>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    <label for="inputFile">Archivos</label>
                    <input type="file" class="form-control" id="inputFile" name="file" required
                        placeholder="Suba un solo archivo">
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
