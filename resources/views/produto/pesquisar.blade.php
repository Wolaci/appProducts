@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('visualizar.produto') }}">Produtos</a></li>
                    <li class="breadcrumb-item active">Pesquisar</li>
                </ol>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

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
                        @if(count($resultado))
                        <div class="alert alert-success" role="alert">
                            Produto Encontrado!
                        </div>
                        @foreach ($resultado as $resultado)
                            <tr>
                                <th scope="row">{{ $resultado->id }}</th>
                                <td>{{ $resultado->name }}</td>
                                <td>{{ $resultado->descricao }}</td>
                                <td>{{ $resultado->data }}</td>
                                <td>R${{ $resultado->preco }}</td>
                                <td>{{ $resultado->lote }}</td>
                                <td>{{ $resultado->avaliacao }}</td>
                                <td>
                                    <a href="{{ route('detalhar.produto', $resultado->id) }}" class="btn btn-success">Detalhe</a>
                                    <!-- <button type="button" class="btn btn-primary">Editar</button> -->
                                    <a href="{{ route('editar.produto', $resultado->id) }}" class="btn btn-primary">Editar</a>
                                    <a href="javascript:confirm('Apagar produto?') ? window.location.href='{{ route('deletar.produto', $resultado->id) }}' : false" class="btn btn-danger">Deletar</a>
                                </td>
                            </tr>
                        @endforeach
                        @else
                        <div class="alert alert-danger" role="alert">
                            Produto não encontrado!
                        </div>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
