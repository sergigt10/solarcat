@extends('backend.layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('backend/vendors/css/vendor.bundle.addons.css') }}">
@endsection

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <!-- Missatges enviats desde el controller -->
                    @if(session('estat'))
                        <div class="alert alert-success" role="alert">
                            {{ session('estat') }}
                        </div>
                    @endif
                    <br>
                    <h2>Projectes</h2>
                    <br>
                    <h4><a href="{{ route('backend.projectes.create') }}"><i class="mdi mdi-plus menu-icon"></i> Inserir</a></h4>
                    <br>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="order-listing" class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Ordre</th>
                                            <th>Títol</th>
                                            <th data-orderable="false">Editar</th>
                                            <th data-orderable="false">Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($projectes as $projecte)
                                            <tr>
                                                <td>
                                                    <a href="{{ route('backend.projectes.edit', ['projecte' => $projecte->id]) }}" style="color: black;">
                                                        {{ $projecte->ordre }}
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('backend.projectes.edit', ['projecte' => $projecte->id]) }}" style="color: black;">
                                                        {{ $projecte->titol_cat }}
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('backend.projectes.edit', ['projecte' => $projecte->id]) }}" style="color: black;">
                                                        <i class="mdi mdi-pencil menu-icon"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="" style="color: black;" data-toggle="modal" data-target="#exampleModalCenter{{$projecte->id}}">
                                                        <i class="mdi mdi-close-circle menu-icon"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <div class="modal fade" id="exampleModalCenter{{$projecte->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Esborrar?</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                    <div class="modal-body">
                                                        Segur que vols esborrar
                                                    </div>
                                                        <div class="modal-footer">
                                                            <form class="pull-right" action="{{ route('backend.projectes.destroy', ['projecte' => $projecte->id]) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" value="Esborrar" class="btn btn-danger">
                                                            </form>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel·lar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>       

@endsection

@section('scripts')
    <script src="{{ asset('backend/vendors/js/vendor.bundle.addons.js') }}"></script>
    <script src="{{ asset('backend/js/data-table.js') }}"></script>
@endsection