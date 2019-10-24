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
                    <form action="{{ route('salvar.produto') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="endereco">Nome:</label>  
                            <input type="text" name="name" class="form-control" placeholder="Nome do produto" required/> 
                        </div> 
                            @if($errors->any())
                                @foreach($errors->get('name') as $message)
                                        <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                        </div>
                                @endforeach
                            @endif                   
                        <div class="form-group">
                            <label for="endereco">Descrição:</label>  
                            <input type="text" name="descricao" class="form-control" placeholder="Descrição do produto" required/> 
                        </div> 
                            @if($errors->any())
                                @foreach($errors->get('descricao') as $message)
                                        <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                        </div>
                                @endforeach
                            @endif                                                 
                        <div class="form-group">
                            <label for="nome">Data:</label>  
                            <input type="date" name="data" class="form-control" placeholder="data" required/>
                        </div> 
                            @if($errors->any())
                                @foreach($errors->get('data') as $message)
                                        <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                        </div>
                                @endforeach
                            @endif                          
                        <div class="form-group">
                            <label for="nome">Preço:</label>  
                            <input type="number" name="preco" class="form-control" placeholder="Preço do Produto" required/>
                        </div> 
                            @if($errors->any())
                                @foreach($errors->get('preco') as $message)
                                        <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                        </div>
                                @endforeach
                            @endif                         
                        <div class="form-group">
                            <label for="endereco">Lote:</label>  
                            <input type="number" name="lote" class="form-control" placeholder="Lote do produto" required/> 
                        </div>
                            @if($errors->any())
                                @foreach($errors->get('lote') as $message)
                                        <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                        </div>
                                @endforeach
                            @endif                          
                        <div class="form-group">
                            <label for="endereco">Avaliação:</label>  
                            <input type="number" name="avaliacao" class="form-control" placeholder="avaliacao" required/> 
                        </div> 
                            @if($errors->any())
                                @foreach($errors->get('avaliacao') as $message)
                                        <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                        </div>
                                @endforeach
                            @endif                                                                                               
                        <button type="submit" class="btn btn-success">Adicionar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
