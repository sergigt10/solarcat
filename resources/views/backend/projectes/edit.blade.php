@extends('backend.layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('backend/vendors/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/css/vendor.bundle.addons.css') }}">
@endsection

@section('content')

    <div class="main-panel">        
        <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h2>Modificar projecte</h2>
                        <p> * Camps obligatoris </p>
                        <br>
                        <form class="forms-sample" method="post" action="{{ route('backend.projectes.update', ['projecte' => $projecte->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            @error('titol_cat')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('titol_esp')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('descripcio_cat')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('descripcio_esp')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('ordre')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('actiu')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('imatge1')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail3">Títol CAT *:</label>
                                    <input name="titol_cat" type="text" class="form-control @error('titol_cat') is-invalid @enderror" id="exampleInputEmail3" placeholder="Títol CAT" value="{{ $projecte->titol_cat }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail3">Títol ESP *:</label>
                                    <input name="titol_esp" type="text" class="form-control @error('titol_esp') is-invalid @enderror" id="exampleInputEmail3" placeholder="Títol ESP" value="{{ $projecte->titol_esp }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail3">Descripció CAT *:</label>
                                    {{-- <input id="descripcio" type="hidden" name="descripcio" value="{{ $projecte->descripcio_cat }}"> --}}
                                    <textarea
                                        class="form-control @error('descripcio_cat') is-invalid @enderror" 
                                        id="summernoteExample" 
                                        name="descripcio_cat" 
                                    >
                                        {{ $projecte->descripcio_cat }}
                                    </textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail3">Descripció ESP *:</label>
                                    {{-- <input id="descripcio" type="hidden" name="descripcio" value="{{ $projecte->descripcio_esp }}"> --}}
                                    <textarea
                                        class="form-control @error('descripcio_esp') is-invalid @enderror" 
                                        id="summernoteExample2" 
                                        name="descripcio_esp" 
                                    >
                                        {{ $projecte->descripcio_esp }}
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="exampleInputEmail3">Kw:</label>
                                    <input name="kw" type="text" class="form-control" id="exampleInputEmail3" placeholder="Kw" value="{{ $projecte->kw }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleInputEmail3">Ordre (1,2,3,4,...):</label>
                                    <input name="ordre" type="number" class="form-control" id="exampleInputEmail3" placeholder="Ordre" value="{{ $projecte->ordre }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleInputEmail3">Actiu?:</label>
                                    <select id="actiu" name="actiu" class="form-control js-example-basic-single w-100">
                                        <option value="1"
                                            {{ $projecte->actiu == "1" ? 'selected' : '' }}
                                        >
                                            Si
                                        </option>
                                        <option value="0"
                                            {{ $projecte->actiu == "0" ? 'selected' : '' }}
                                        >
                                            No
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="row grid-margin">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 style="color:red">Pujar imatge en format: jpg, png o gif</h4>
                                            <br>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imatge 1 *</label>
                                                        <input name="imatge1" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge1" type="text" class="form-control @error('imatge1') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge 1" value="{{ old('imatge1') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge 1</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <div class="form-check form-check-danger" style="float:right;">
                                                        <img src='{{ asset("/storage/$projecte->imatge1") }}' alt="Escola 30 pasos" with=200 height=92>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row grid-margin">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 style="color:red">Pujar imatge en format: jpg, png o gif</h4>
                                            <br>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imatge 2</label>
                                                        <input name="imatge2" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge2" type="text" class="form-control @error('imatge2') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge 2" value="{{ old('imatge1') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge 2</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if ($projecte->imatge2)
                                                    <div class="form-group col-md-3">
                                                        <div class="form-check form-check-danger" style="float:right;">
                                                            <input type="checkbox" class="form-check-input" name="del_img2" value="1">
                                                            Esborrar imatge 2?
                                                            <br><br>
                                                            <img src='{{ asset("/storage/$projecte->imatge2") }}' alt="Escola 30 pasos" with=200 height=92>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row grid-margin">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 style="color:red">Pujar imatge en format: jpg, png o gif</h4>
                                            <br>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imatge 3</label>
                                                        <input name="imatge3" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge3" type="text" class="form-control @error('imatge3') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge 3" value="{{ old('imatge3') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge 3</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if ($projecte->imatge3)
                                                    <div class="form-group col-md-3">
                                                        <div class="form-check form-check-danger" style="float:right;">
                                                            <input type="checkbox" class="form-check-input" name="del_img3" value="1">
                                                            Esborrar imatge 3?
                                                            <br><br>
                                                            <img src='{{ asset("/storage/$projecte->imatge3") }}' alt="Escola 30 pasos" with=200 height=92>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row grid-margin">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 style="color:red">Pujar imatge en format: jpg, png o gif</h4>
                                            <br>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imatge 4</label>
                                                        <input name="imatge4" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge4" type="text" class="form-control @error('imatge4') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge 4" value="{{ old('imatge4') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge 4</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if ($projecte->imatge4)
                                                    <div class="form-group col-md-3">
                                                        <div class="form-check form-check-danger" style="float:right;">
                                                            <input type="checkbox" class="form-check-input" name="del_img4" value="1">
                                                            Esborrar imatge 4?
                                                            <br><br>
                                                            <img src='{{ asset("/storage/$projecte->imatge4") }}' alt="Escola 30 pasos" with=200 height=92>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row grid-margin">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 style="color:red">Pujar imatge en format: jpg, png o gif</h4>
                                            <br>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imatge 5</label>
                                                        <input name="imatge5" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge5" type="text" class="form-control @error('imatge5') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge 5" value="{{ old('imatge5') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge 5</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if ($projecte->imatge5)
                                                    <div class="form-group col-md-3">
                                                        <div class="form-check form-check-danger" style="float:right;">
                                                            <input type="checkbox" class="form-check-input" name="del_img5" value="1">
                                                            Esborrar imatge 5?
                                                            <br><br>
                                                            <img src='{{ asset("/storage/$projecte->imatge5") }}' alt="Escola 30 pasos" with=200 height=92>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row grid-margin">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 style="color:red">Pujar imatge en format: jpg, png o gif</h4>
                                            <br>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imatge 6</label>
                                                        <input name="imatge6" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge6" type="text" class="form-control @error('imatge6') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge 6" value="{{ old('imatge5') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge 6</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if ($projecte->imatge6)
                                                    <div class="form-group col-md-3">
                                                        <div class="form-check form-check-danger" style="float:right;">
                                                            <input type="checkbox" class="form-check-input" name="del_img6" value="1">
                                                            Esborrar imatge 6?
                                                            <br><br>
                                                            <img src='{{ asset("/storage/$projecte->imatge6") }}' alt="Escola 30 pasos" with=200 height=92>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row grid-margin">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 style="color:red">Pujar imatge en format: jpg, png o gif</h4>
                                            <br>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imatge 7</label>
                                                        <input name="imatge7" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge7" type="text" class="form-control @error('imatge7') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge 7" value="{{ old('imatge7') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge 7</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if ($projecte->imatge7)
                                                    <div class="form-group col-md-3">
                                                        <div class="form-check form-check-danger" style="float:right;">
                                                            <input type="checkbox" class="form-check-input" name="del_img7" value="1">
                                                            Esborrar imatge 7?
                                                            <br><br>
                                                            <img src='{{ asset("/storage/$projecte->imatge7") }}' alt="Escola 30 pasos" with=200 height=92>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row grid-margin">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 style="color:red">Pujar imatge en format: jpg, png o gif</h4>
                                            <br>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imatge 8</label>
                                                        <input name="imatge8" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge8" type="text" class="form-control @error('imatge8') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge 8" value="{{ old('imatge8') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge 8</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if ($projecte->imatge8)
                                                    <div class="form-group col-md-3">
                                                        <div class="form-check form-check-danger" style="float:right;">
                                                            <input type="checkbox" class="form-check-input" name="del_img8" value="1">
                                                            Esborrar imatge 8?
                                                            <br><br>
                                                            <img src='{{ asset("/storage/$projecte->imatge8") }}' alt="Escola 30 pasos" with=200 height=92>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row grid-margin">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 style="color:red">Pujar imatge en format: jpg, png o gif</h4>
                                            <br>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imatge 9</label>
                                                        <input name="imatge9" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge9" type="text" class="form-control @error('imatge9') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge 9" value="{{ old('imatge9') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge 9</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if ($projecte->imatge9)
                                                    <div class="form-group col-md-3">
                                                        <div class="form-check form-check-danger" style="float:right;">
                                                            <input type="checkbox" class="form-check-input" name="del_img9" value="1">
                                                            Esborrar imatge 9?
                                                            <br><br>
                                                            <img src='{{ asset("/storage/$projecte->imatge9") }}' alt="Escola 30 pasos" with=200 height=92>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row grid-margin">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 style="color:red">Pujar imatge en format: jpg, png o gif</h4>
                                            <br>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imatge 10</label>
                                                        <input name="imatge10" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge10" type="text" class="form-control @error('imatge10') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge 10" value="{{ old('imatge10') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge 10</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if ($projecte->imatge10)
                                                    <div class="form-group col-md-3">
                                                        <div class="form-check form-check-danger" style="float:right;">
                                                            <input type="checkbox" class="form-check-input" name="del_img10" value="1">
                                                            Esborrar imatge 10?
                                                            <br><br>
                                                            <img src='{{ asset("/storage/$projecte->imatge10") }}' alt="Escola 30 pasos" with=200 height=92>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="funcioBoto" class="btn btn-primary mr-2" value="Guardar">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@section('scripts')
    <script src="{{ asset('backend/vendors/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('backend/js/editorDemo.js') }}"></script>
    <script src="{{ asset('backend/js/file-upload.js') }}"></script>
    <script src="{{ asset('backend/js/select2.min.js') }}"></script>
    <script src="{{ asset('backend/js/select2.js') }}"></script>
@endsection

@endsection