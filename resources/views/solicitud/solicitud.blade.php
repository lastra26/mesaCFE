@extends('layouts.app')
<br>
<br>
@section('content')
    <br>
    <div class="container ">
        <div class="row justify-content-start ">
            <div class="col-md-12">


                <div class="container text-center">
                    <div class="row align-items-start">
                        <div class="col-md-auto">

                            <div class="card">
                                <div class="row">
                                    <div class="col">
                                        <form action="">
                                            <!-- Nombre input -->
                                            <div class="form-outline">
                                                <input type="text" id="form8Example1" class="form-control" />
                                                <label class="form-label" for="form8Example1">Nombre</label>
                                            </div>
                                    </div>
                                    <div class="col">
                                        <!-- Email input -->
                                        <div class="form-outline">
                                            <input type="email" id="form8Example2" class="form-control" />
                                            <label class="form-label" for="form8Example2">Correo</label>
                                        </div>
                                    </div>


                                </div>

                                <hr />
                                <div class="row">
                                    <div class="col">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Zona</option>
                                            <option value="1">norte tuxtla</option>
                                            <option value="2">sur tuxtla</option>
                                            <option value="3">villaflores</option>
                                        </select>

                                    </div>

                                    <div class="col">
                                        <!-- Name input -->
                                        <div class="form-outline">
                                            <input type="text" id="form8Example4" class="form-control" />
                                            <label class="form-label" for="form8Example4">Agencia</label>
                                        </div>
                                    </div>
                                </div>

                                <hr />
                                <div class="row">

                                    <div class="col">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Jefe DTO</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>


                                    <div class="col">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Tipo de Equipo</option>
                                            <option value="1">CFEmatico</option>
                                            <option value="2">CFEturno</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="row">

                                </div>
                                <hr />
                                <div class="col">
                                    <!-- Name input -->
                                    <div class="form-outline">
                                        <input type="text" id="form8Example4" class="form-control" />
                                        <label class="form-label" for="form8Example4">Resumen del problema</label>
                                    </div>
                                </div>

                                <hr />
                                <div class="form-outline">
                                    <textarea class="form-control" id="textAreaExample" rows="4"></textarea>
                                    <label class="form-label" for="textAreaExample">Descripcion</label>
                                </div>
                                <hr />
                                <div class="col">

                                    <input type="file" class="form-control" id="customFile" />
                                </div>
                            </div>
                            </form>

                        </div>
                        <div class="col">
                            <br>

                            <img src="https://gobmx.mx/wp-content/uploads/reportar-fallas-servicio-electrico.jpg"
                                class="img-fluid" alt="...">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
