@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
@endsection

@section('content')
    <div class="container">
        <h1 class="text-center mt-4">
            Registrar Establecimiento
        </h1>

        <div class="mt-5 row justify-content-center">
            <form
                action=""
                class="col-md-9 col-xs-12 card card-body"
            >
                <fieldset class="border p-4">
                    <legend class="text-primary">Nombre y Categoria</legend>


                    {{-- NONMBRE DEL ESTABLECIMIENTO --}}
                    <div class="form-group">
                        <label for="nombre text-body">Nombre Establecimiento</label>
                        <input
                            id="nombre"
                            type="text"
                            class="form-control @error('nombre') is-invalid @enderror"
                            placeholder="Nombre del Establecimiento"
                            value="{{old('nombre')}}"
                        >

                        @error('nombre')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    {{-- CATEGORIA DEL ESTABLECIMIENTO --}}
                    <div class="form-group">
                        <label for="categoria text-body">Categoria del Establecimiento</label>
                        <select
                            id="categoria"
                            name="categoria_id"
                            class="form-control @error('categoria_id') is-invalid @enderror"
                        >
                            <option value="" selected disabled>-- Seleccione --</option>

                            @foreach ($categorias as $categoria)
                                <option
                                    value="{{$categoria->id}}"
                                            {{old('categoria_id') == $categoria->id ? 'selected' : ''}}
                                >
                                {{$categoria->nombre}}
                                </option>
                            @endforeach
                        </select>

                        @error('categoria')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    {{-- IMAGEN DEL ESTABLECIMIENTO --}}
                    <div class="form-group">
                        <label for="nombre text-body">Imagen Principal</label>
                        <input
                            id="imagen_principal"
                            type="file"
                            class="form-control @error('imagen_principal') is-invalid @enderror"
                            value="{{old('imagen_principal')}}"
                        >

                        @error('imagen_principal')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </fieldset>

                 {{--UBICACION --}}
                <fieldset class="border p-4">
                    <legend class="text-primary">Ubicacion del Establecimiento</legend>

                    <div class="form-group">
                        <label for="categoria" class="text-dark">Ubicacion del Establecimiento</label>
                        <input
                            id="formbuscador"
                            type="text"
                            class="form-control"
                            placeholder="Calle del negocio o Establecimiento"
                        >
                        <p class="text-secondary mt-5 mb-3 text-center">El asistente colocara una direccion estimada, mueve el Pin hacia el lugar correcto</p>
                    </div>

                    <div class="form-group">
                        <div id="mapa" style="height: 400px;"></div>
                    </div>

                    <p class="informacion">Confirma que los siguientes campos son correctos</p>

                    <div class="form-group">
                        <label for="direccion">Direccion</label>

                        <input
                            type="text"
                            id="direccion"
                            class="form-control @error('direccion') is-invalid @enderror"
                            placeholder="Direccion"
                            value="{{ old('direccion') }}"
                        >
                        @error('direccion')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="colonia">Colonia</label>

                        <input
                            type="text"
                            id="colonia"
                            class="form-control @error('colonia') is-invalid @enderror"
                            placeholder="Localidad"
                            value="{{old('colonia')}}"
                        >
                        @error('colonia')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin="">
    </script>

    <script>

    </script>
@endsection
