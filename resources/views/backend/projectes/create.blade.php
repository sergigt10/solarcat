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
                            <h2>Inserir nou projecte</h2>
                            <p> * Camps obligatoris </p>
                            <br>
                            <form class="forms-sample" method="POST" action="{{ route('backend.projectes.store') }}" enctype="multipart/form-data" novalidate>
                                @csrf
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
                                        <input name="titol_cat" type="text" class="form-control @error('titol_cat') is-invalid @enderror" id="exampleInputEmail3" placeholder="Títol CAT" value="{{ old('titol_cat') }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail3">Títol ESP *:</label>
                                        <input name="titol_esp" type="text" class="form-control @error('titol_esp') is-invalid @enderror" id="exampleInputEmail3" placeholder="Títol ESP" value="{{ old('titol_esp') }}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail3">Descripció CAT *:</label>
                                        {{-- <input id="descripcio" type="hidden" name="descripcio" value="{{ old('descripcio') }}"> --}}
                                        <textarea
                                            class="form-control @error('descripcio_cat') is-invalid @enderror" 
                                            id="summernoteExample" 
                                            name="descripcio_cat" 
                                        >
                                            {{ old('descripcio_cat') }}
                                        </textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail3">Descripció ESP *:</label>
                                        {{-- <input id="descripcio" type="hidden" name="descripcio" value="{{ old('descripcio') }}"> --}}
                                        <textarea
                                            class="form-control @error('descripcio_esp') is-invalid @enderror" 
                                            id="summernoteExample2" 
                                            name="descripcio_esp" 
                                        >
                                            {{ old('descripcio_esp') }}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail3">Ordre (1,2,3,4,...):</label>
                                        <input name="ordre" type="number" class="form-control" id="exampleInputEmail3" placeholder="Ordre" value="{{ old('ordre') }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail3">Actiu?:</label>
                                        <select id="actiu" name="actiu" class="form-control js-example-basic-single w-100">
                                            <option value="1"
                                                {{ old('actiu') == "Si" ? 'selected' : '' }}
                                            >
                                                Si
                                            </option>
                                            <option value="0"
                                                {{ old('actiu') == "No" ? 'selected' : '' }}
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
                                                <h4 style="color:red">Pujar imatge 1 en format: jpg, png o gif</h4>
                                                <br>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                    <div class="form-group">
                                                        <label>Imatge 1 *</label>
                                                        <input name="imatge1" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge1" type="text" class="form-control @error('imatge1') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge 1" value="">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge 1</button>
                                                            </span>
                                                        </div>
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
                                                <h4 style="color:red">Pujar imatge 2 en format: jpg, png o gif</h4>
                                                <br>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                    <div class="form-group">
                                                        <label>Imatge 2</label>
                                                        <input name="imatge2" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge2" type="text" class="form-control @error('imatge2') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge 2" value="">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge 2</button>
                                                            </span>
                                                        </div>
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
                                                <h4 style="color:red">Pujar imatge 3 en format: jpg, png o gif</h4>
                                                <br>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                    <div class="form-group">
                                                        <label>Imatge 3</label>
                                                        <input name="imatge3" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge3" type="text" class="form-control @error('imatge3') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge 3" value="">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge 3</button>
                                                            </span>
                                                        </div>
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
                                                <h4 style="color:red">Pujar imatge 4 en format: jpg, png o gif</h4>
                                                <br>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                    <div class="form-group">
                                                        <label>Imatge 4</label>
                                                        <input name="imatge4" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge4" type="text" class="form-control @error('imatge4') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge 4" value="">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge 4</button>
                                                            </span>
                                                        </div>
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
                                                <h4 style="color:red">Pujar imatge 5 en format: jpg, png o gif</h4>
                                                <br>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                    <div class="form-group">
                                                        <label>Imatge 5</label>
                                                        <input name="imatge5" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge5" type="text" class="form-control @error('imatge5') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge 5" value="">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge 5</button>
                                                            </span>
                                                        </div>
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
                                                <h4 style="color:red">Pujar imatge 6 en format: jpg, png o gif</h4>
                                                <br>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                    <div class="form-group">
                                                        <label>Imatge 6</label>
                                                        <input name="imatge6" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge6" type="text" class="form-control @error('imatge6') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge 6" value="">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge 6</button>
                                                            </span>
                                                        </div>
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
                                                <h4 style="color:red">Pujar imatge 7 en format: jpg, png o gif</h4>
                                                <br>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                    <div class="form-group">
                                                        <label>Imatge 7</label>
                                                        <input name="imatge7" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge7" type="text" class="form-control @error('imatge7') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge 7" value="">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge 7</button>
                                                            </span>
                                                        </div>
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
                                                <h4 style="color:red">Pujar imatge 8 en format: jpg, png o gif</h4>
                                                <br>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                    <div class="form-group">
                                                        <label>Imatge 8</label>
                                                        <input name="imatge8" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge8" type="text" class="form-control @error('imatge8') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge 8" value="">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge 8</button>
                                                            </span>
                                                        </div>
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
                                                <h4 style="color:red">Pujar imatge 9 en format: jpg, png o gif</h4>
                                                <br>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                    <div class="form-group">
                                                        <label>Imatge 9</label>
                                                        <input name="imatge9" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge9" type="text" class="form-control @error('imatge9') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge 9" value="">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge 9</button>
                                                            </span>
                                                        </div>
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
                                                <h4 style="color:red">Pujar imatge 10 en format: jpg, png o gif</h4>
                                                <br>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                    <div class="form-group">
                                                        <label>Imatge 10</label>
                                                        <input name="imatge10" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge10" type="text" class="form-control @error('imatge10') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imatge 10" value="">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Cercar imatge 10</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    </div>
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