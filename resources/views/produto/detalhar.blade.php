@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('visualizar.produto') }}">Produtos</a></li>
                        <li class="breadcrumb-item active">Adicionar</li>
                    </ol>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="endereco">Nome:</label>  
                        <input class="form-control" name="name" type="text" value="{{ $produto->name }}" readonly>
                    </div>                      
                    <div class="form-group">
                        <label for="endereco">Descrição:</label>  
                        <input class="form-control" name="descricao" type="text" value="{{ $produto->descricao }}" readonly>
                    </div>  
                    <div class="form-group">
                        <label for="nome">Data:</label>  
                        <input class="form-control" name="data" value="{{ $produto->data }}" type="date" readonly>
                    </div>  
                    <div class="form-group">
                        <label for="nome">Preço:</label>  
                        <input class="form-control" name="preco" value="{{ $produto->preco }}" type="number" readonly>
                    </div>  
                    <div class="form-group">
                        <label for="endereco">Lote:</label>  
                        <input class="form-control" name="lote" type="number" value="{{ $produto->lote }}" readonly>
                    </div> 
                    <div class="form-group">
                        <label for="endereco">Avaliação:</label>  
                        <input class="form-control" name="avaliacao" type="number" value="{{ $produto->avaliacao }}" readonly>
                    </div>                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
