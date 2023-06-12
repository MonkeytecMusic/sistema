@extends('layouts/layoutAdmin')
@extends('layouts/layoutPrincipalAdmin')
@extends('shared/navbar')
@section('contenido')
    <div class="container" style="color: white;">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Creditos deportivos</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="{{ route('nuevoCredDeportivo') }}" class="btn btn-primary">Agregar registro</a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <table id="example" class="table table-bordered nowrap" style="width:100%; color:white;">
                    <thead>
                        <tr>
                            <th>MOOC</th>
                            <th>Evidencia</th>
                            <th>Carpeta oficina</th>
                            <th>No de control</th>
                            <th>fecha de registro</th>
                            <th>Estado</th>
                            <th>Liberacion</th>
                            <th>Eliminar registro</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td style="color: white;">
                                    @if ($item->mooc == '')
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-3">
                                                <a href="{{ route('nuevoMooc', $item->id) }}" class="btn btn-danger"><img
                                                        src="https://cdn-icons-png.flaticon.com/512/84/84459.png"
                                                        width="20px" height="20px"></a>
                                            </div>
                                        </div>
                                    @else
                                        <div class="row">
                                            <div class="col-6">
                                                <a href="{{ asset('deportivos/mooc/' . $item->mooc) }}" target="_blank"
                                                    class="btn btn-light">
                                                    <img src="https://icones.pro/wp-content/uploads/2021/05/icone-oeil-beurre-noir.png"
                                                        width="20px" height="20px">
                                                </a>
                                            </div>
                                            <div class="col-6">
                                                <a href="{{ route('eliminarMoocDeportivos', $item->id) }}"
                                                    class="btn btn-danger">
                                                    <img src="https://cdn.icon-icons.com/icons2/602/PNG/512/Delete_File_icon-icons.com_55932.png"
                                                        width="20px" height="20px">
                                                </a>
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                            </div>
                                        </div>
                                    @endif
                                </td>
                                <td style="color: white;">
                                    @if ($item->nombreArchivo == '')
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-3">
                                                <a href="{{ route('editarEvidencia', $item->id) }}"
                                                    class="btn btn-danger"><img
                                                        src="https://cdn-icons-png.flaticon.com/512/84/84459.png"
                                                        width="20px" height="20px"></a>
                                            </div>
                                        </div>
                                    @else
                                        <div class="row">
                                            <div class="col-6">
                                                <a href="{{ asset('deportivos/evidencia/' . $item->nombreArchivo) }}"
                                                    target="_blank" class="btn btn-light">
                                                    <img src="https://icones.pro/wp-content/uploads/2021/05/icone-oeil-beurre-noir.png"
                                                        width="20px" height="20px">
                                                </a>
                                            </div>
                                            <div class="col-6">
                                                <a href="{{ route('eliminarEvidenciaDeportivos', $item->id) }}"
                                                    class="btn btn-danger">
                                                    <img src="https://cdn.icon-icons.com/icons2/602/PNG/512/Delete_File_icon-icons.com_55932.png"
                                                        width="20px" height="20px">
                                                </a>
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                            </div>
                                        </div>
                                    @endif
                                </td>
                                <td style="color: white;">{{ $item->carpetaOficina }}</td>
                                <td style="color: white;">{{ $item->estudiante_id }}</td>
                                <td style="color: white;">{{ $item->fechaRegistro }}</td>
                                <td style="color: white;">
                                    @if ($item->estado == 'En tramite')
                                        <a href="{{ route('liberacion', $item->id) }}"
                                            class="btn btn-danger">{{ $item->estado }}</a>
                                    @else
                                        <a href="#" class="btn btn-success">{{ $item->estado }}</a>
                                    @endif
                                </td>
                                <td>
                                    @if ($item->mooc == '' && $item->nombreArchivo == '')
                                    @else
                                        <a href="{{ asset('deportivos/liberaciones/' . $item->liberacion) }}"
                                            target="_blank" class="btn btn-light">
                                            <img src="https://icones.pro/wp-content/uploads/2021/05/icone-oeil-beurre-noir.png"
                                                width="20px" height="20px" class="ml-4">
                                        </a>
                                    @endif
                                </td>
                                <td style="color: white;">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-3">
                                            <a href="{{ route('show', $item->id) }}" class="btn btn-danger"><img
                                                    src="https://cdn-icons-png.flaticon.com/512/1214/1214594.png"
                                                    width="20px" height="20px"></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
