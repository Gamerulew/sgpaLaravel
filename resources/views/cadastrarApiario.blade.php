@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">Cadastrar apiário</div>
                        <div class="float-right"><a href="{{route('apiarios')}}" class="btn btn-sm btn-success">Voltar</a></div>
                    </div>

                    <div class="card-body">
                        @csrf
                        <form action="{{route('cadastrarApiarioPost')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    @if(session('erro'))
                                        <div class="alert alert-danger" role="alert">
                                            {{session('erro')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Nome</label>
                                    <input type="text" class="form-control" name="nome" id="nome" required>
                                </div>
                                <div class="col-md-8">
                                    <label>Localização</label>
                                    <input type="text" class="form-control" name="localizacao" id="localizacao" required>
                                </div>
                            </div>
                            <hr>
                            <h6 class="font-weight-bold">Total de caixas</h6>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Melgueiras</label>
                                    <input type="number" class="form-control" name="melgueiras" id="melgueiras" required>
                                </div>
                                <div class="col-md-4">
                                    <label>Ninhos</label>
                                    <input type="number" class="form-control" name="ninhos" id="ninhos" required>
                                </div>
                                <div class="col-md-4">
                                    <label>Enxames</label>
                                    <input type="number" class="form-control" name="enxames" id="enxames" required>
                                </div>
                            </div>
                            <div class="row my-2 text-right">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success">Cadastrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

