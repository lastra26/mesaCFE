@extends('layouts.app')
<br>
<br>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">

                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                            type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Abiertos
                            <i class="fas fa-envelope-open-text"></i>
                        </button>

                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                            type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">En Proceso
                            <i class="fas fa-arrow-right-arrow-left"></i> </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
                            type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Pendientes
                            <i class="fas fa-exclamation"></i> </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
                            type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Atendido
                            <i class="fas fa-check"></i>
                        </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
                            type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Cerrados
                            <i class="fas fa-check-double"></i>
                        </button>
                    </li>

                    <a class="btn btn-primary btn-floating" href="/solicitud"><i class="fas fa-pen-to-square"></i></a>

                    </button>
                </ul>


                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                        tabindex="0">

                        <table class="table table-striped table-hover">

                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($solicitudes as $solicitud)
                                    <tr>
                                        <th scope="row">{{ $solicitud->id }}</th>
                                        <td>{{ $solicitud->nombreSolicitante }}</td>
                                        <td>{{ $solicitud->argumentos }}</td>
                                        <td>@mdo</td>
                                    </tr>
                                @endforeach
                            </tbody>

                            <tbody>
                                @foreach ($solicitudes as $solicitud)
                                    <tr>
                                        <th scope="row">{{ $solicitud->id }}</th>
                                        <td>{{ $solicitud->nombreSolicitante }}</td>
                                        <td>{{ $solicitud->argumentos }}</td>
                                        <td>@mdo</td>
                                    </tr>
                                @endforeach
                            </tbody>

                            <tbody>
                                @foreach ($solicitudes as $solicitud)
                                    <tr>
                                        <th scope="row">{{ $solicitud->id }}</th>
                                        <td>{{ $solicitud->nombreSolicitante }}</td>
                                        <td>{{ $solicitud->argumentos }}</td>
                                        <td>@mdo</td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>

                    </div>
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                        tabindex="0">

                        <div class="my-3 p-3 bg-body rounded shadow-sm">
                            <h6 class="border-bottom pb-2 mb-0">Suggestions</h6>
                            <div class="d-flex text-body-secondary pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#007bff" /><text x="50%" y="50%"
                                        fill="#007bff" dy=".3em">32x32</text>
                                </svg>
                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Full Name</strong>
                                        <a href="#">Follow</a>
                                    </div>
                                    <span class="d-block">@username</span>
                                </div>
                            </div>
                            <div class="d-flex text-body-secondary pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#007bff" /><text x="50%"
                                        y="50%" fill="#007bff" dy=".3em">32x32</text>
                                </svg>
                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Full Name</strong>
                                        <a href="#">Follow</a>
                                    </div>
                                    <span class="d-block">@username</span>
                                </div>
                            </div>
                            <div class="d-flex text-body-secondary pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#007bff" /><text x="50%"
                                        y="50%" fill="#007bff" dy=".3em">32x32</text>
                                </svg>
                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Full Name</strong>
                                        <a href="#">Follow</a>
                                    </div>
                                    <span class="d-block">@username</span>
                                </div>
                            </div>
                            <small class="d-block text-end mt-3">
                                <a href="#">All suggestions</a>
                            </small>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                        tabindex="0">
                        <table class="table table-striped table-hover">

                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($solicitudes as $solicitud)
                                    <tr>
                                        <th scope="row">{{ $solicitud->id }}</th>
                                        <td>{{ $solicitud->nombreSolicitante }}</td>
                                        <td>{{ $solicitud->argumentos }}</td>
                                        <td>@mdo</td>
                                    </tr>
                                @endforeach
                            </tbody>

                            <tbody>
                                @foreach ($solicitudes as $solicitud)
                                    <tr>
                                        <th scope="row">{{ $solicitud->id }}</th>
                                        <td>{{ $solicitud->nombreSolicitante }}</td>
                                        <td>{{ $solicitud->argumentos }}</td>
                                        <td>@mdo</td>
                                    </tr>
                                @endforeach
                            </tbody>

                            <tbody>
                                @foreach ($solicitudes as $solicitud)
                                    <tr>
                                        <th scope="row">{{ $solicitud->id }}</th>
                                        <td>{{ $solicitud->nombreSolicitante }}</td>
                                        <td>{{ $solicitud->argumentos }}</td>
                                        <td>@mdo</td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                    <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab"
                        tabindex="0">

                        <div class="my-3 p-3 bg-body rounded shadow-sm">
                            <h6 class="border-bottom pb-2 mb-0">Suggestions</h6>
                            <div class="d-flex text-body-secondary pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#007bff" /><text x="50%"
                                        y="50%" fill="#007bff" dy=".3em">32x32</text>
                                </svg>
                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Full Name</strong>
                                        <a href="#">Follow</a>
                                    </div>
                                    <span class="d-block">@username</span>
                                </div>
                            </div>
                            <div class="d-flex text-body-secondary pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#007bff" /><text x="50%"
                                        y="50%" fill="#007bff" dy=".3em">32x32</text>
                                </svg>
                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Full Name</strong>
                                        <a href="#">Follow</a>
                                    </div>
                                    <span class="d-block">@username</span>
                                </div>
                            </div>
                            <div class="d-flex text-body-secondary pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#007bff" /><text x="50%"
                                        y="50%" fill="#007bff" dy=".3em">32x32</text>
                                </svg>
                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">Full Name</strong>
                                        <a href="#">Follow</a>
                                    </div>
                                    <span class="d-block">@username</span>
                                </div>
                            </div>
                            <small class="d-block text-end mt-3">
                                <a href="#">All suggestions</a>
                            </small>
                        </div>
                    </div>
                </div>






            </div>
        </div>
    </div>
@endsection
