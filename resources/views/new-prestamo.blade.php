@extends('layout')
@section('main')
    <!--Llama a la barra de menu, components.nav -->
    <x-nav></x-nav>
    <div class="container">
        <div id="create-user" class="container col-md-6">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">
                    Solicitud de prestamo
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('crearPrestamo') }}">
                        @csrf
                        <div class="mt-4">
                            <label class="block font-medium text-sm text-gray-700" for="id_prestamo">
                                Id prestamo
                            </label>
                            <input class="form-input rounded-md shadow-sm form-control" id="id_prestamo" type="text"
                                   name="id_prestamo" placeholder="Ingresar nombre alfanumerico Ej: p1" required="required">
                            {!! $errors->first("id_prestamo", '<div class="alert alert-danger" role="alert"> :message  </div>')!!}
                        </div>

                        <div class="mt-4">
                            <div class="col">
                                <label class="block font-medium text-sm text-gray-700" for="casado">
                                    Casado
                                </label>
                                <select name="casado" class="form-control" required>
                                    <option disabled selected value>Seleccione una opcion</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                                {!! $errors->first("casado", '<div class="alert alert-danger" role="alert"> :message  </div>')!!}
                            </div>
                        </div>

                        <div class="mt-4">
                            <div class="col">
                                <label class="block font-medium text-sm text-gray-700" for="dependientes">
                                    Dependientes
                                </label>
                                <select name="dependientes" class="form-control" required>
                                    <option disabled selected value>Seleccione una opcion</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3+">3+</option>
                                </select>
                                {!! $errors->first("dependientes", '<div class="alert alert-danger" role="alert"> :message  </div>')!!}
                            </div>
                        </div>

                        <div class="mt-4">
                            <div class="col">
                                <label class="block font-medium text-sm text-gray-700" for="educacion">
                                    Nivel de educacion
                                </label>
                                <select name="educacion" class="form-control" required="">
                                    <option disabled selected value>Seleccione una opcion</option>
                                    <option value="Graduado">Graduado</option>
                                    <option value="No Graduado">No Graduado</option>
                                </select>
                                {!! $errors->first("educacion", '<div class="alert alert-danger" role="alert"> :message  </div>')!!}
                            </div>
                        </div>


                        <div class="mt-4">
                            <div class="col">
                                <label class="block font-medium text-sm text-gray-700" for="independiente">
                                    Independiente
                                </label>
                                <select name="independiente" class="form-control" required>
                                    <option disabled selected value>Seleccione una opcion</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                                {!! $errors->first("independiente", '<div class="alert alert-danger" role="alert"> :message  </div>')!!}
                            </div>
                        </div>

                        <div class="mt-4">
                            <label class="block font-medium text-sm text-gray-700" for="i_d">
                                Ingresos propios
                            </label>
                            <input class="form-input rounded-md shadow-sm form-control" id="i_d" type="number"
                                   name="i_d" required="required">
                            {!! $errors->first("i_d", '<div class="alert alert-danger" role="alert"> :message  </div>')!!}
                        </div>

                        <div class="mt-4">
                            <label class="block font-medium text-sm text-gray-700" for="i_c">
                                Ingresos del codeudor
                            </label>
                            <input class="form-input rounded-md shadow-sm form-control" id="i_c"
                                   type="number" name="i_c" required="required">
                            {!! $errors->first("i_c", '<div class="alert alert-danger" role="alert"> :message  </div>')!!}
                        </div>

                        <div class="mt-4">
                            <label class="block font-medium text-sm text-gray-700" for="c_p">
                                Cantidad de credito solicitada
                            </label>
                            <input class="form-input rounded-md shadow-sm form-control" id="c_p"
                                   type="number" name="c_p" required="required">
                            {!! $errors->first("c_p", '<div class="alert alert-danger" role="alert"> :message  </div>')!!}
                        </div>

                        <div class="mt-4">
                            <label class="block font-medium text-sm text-gray-700" for="p_p">
                                Plazo del credito
                            </label>
                            <input class="form-input rounded-md shadow-sm form-control" id="p_p"
                                   type="number" name="p_p" required="required">
                            {!! $errors->first("p_p", '<div class="alert alert-danger" role="alert"> :message  </div>')!!}
                        </div>

                        <div class="mt-4">
                            <div class="col">
                                <label class="block font-medium text-sm text-gray-700" for="historia_credito">
                                    Historia Crediticia
                                </label>
                                <select name="historia_credito" class="form-control" required>
                                    <option disabled selected value>Seleccione una opcion</option>
                                    <option value="1">Si</option>
                                    <option value="0">No</option>
                                </select>
                                {!! $errors->first("historia_credito", '<div class="alert alert-danger" role="alert"> :message  </div>')!!}
                            </div>
                        </div>

                        <div class="mt-4">
                            <div class="col">
                                <label class="block font-medium text-sm text-gray-700" for="tipo_propiedad">
                                    Tipo de propiedad
                                </label>
                                <select name="tipo_propiedad" class="form-control" required>
                                    <option disabled selected value>Seleccione una opcion</option>
                                    <option value="Urbana">Urbana</option>
                                    <option value="Rural">Rural</option>
                                    <option value="Semi Urbana">Semi Urbana</option>
                                </select>
                                {!! $errors->first("tipo_propiedad", '<div class="alert alert-danger" role="alert"> :message  </div>')!!}
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button type="submit"
                                    class="inline-flex items-center px-4 py-2 border border-transparent
                                     rounded-md font-semibold text-xs text-white uppercase tracking-widest
                                     focus:outline-none focus:shadow-outline-gray ml-4 btn btn-primary">
                                Solicitar prestamo
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
