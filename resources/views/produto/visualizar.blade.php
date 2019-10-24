@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Produtos</li>
                    <li class="breadcrumb-item"><a href="{{ route('adicionar.produto') }}">Adicionar</a></li>
                </ol>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>
                        <a class="btn btn-primary" href="{{ route('adicionar.produto') }}">Novo Produto</a>
                    </p>

                    <form action="{{ route('procurar.produto') }}" method="GET">
                        {{ csrf_field() }}
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                            <input type="text" class="form-control" name="descricao" placeholder="Pesquisar descrição do produto..." aria-describedby="basic-addon1">
                        </div>
                    </form>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                
                               <th>#</th>
                               <th>Nome</th>
                               <th>Descrição</th> 
                               <th>Data</th> 
                               <th>Preço</th>
                               <th>Lote</th> 
                               <th>Avaliação</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($produtos as $produto)
                            <tr>
                                <th scope="row">{{ $produto->id }}</th>
                                <td>{{ $produto->name }}</td>
                                <td>{{ $produto->descricao }}</td>
                                <td>{{ $produto->data }}</td>
                                <td>{{ $produto->preco }}</td>
                                <td>{{ $produto->lote }}</td>
                                <td>{{ $produto->avaliacao }}</td>
                                <td>
                                    <a href="{{ route('detalhar.produto', $produto->id) }}" class="btn btn-success">Detalhe</a>
                                    <!-- <button type="button" class="btn btn-primary">Editar</button> -->
                                    <a href="{{ route('editar.produto', $produto->id) }}" class="btn btn-primary">Editar</a>
                                    <a href="{{ route('deletar.produto', $produto->id) }}" class="btn btn-danger">Deletar</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div align="center">
                        {!! $produtos->links() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
