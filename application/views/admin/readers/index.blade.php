@extends('layouts.app')

@section('page-title')
    Leitor
@endsection

@section('content')

    @include('admin.readers.partials.description')

    @if(count($errors->all()) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

    <a href="{{ route('leitores.create') }}" class="btn btn-success">Criar</a>

    <div class="row">
        <div class="col-lg-12">
            <h2>Lista de leitores</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($readers as $reader)
                        <tr width="1%" nowrap>
                            <td>{{ $reader->name }}</td>
                            <td>
                                <a href="{{ route('leitores.edit', $reader->id) }}" class="btn btn-primary">Editar</a>
                                {{ Form::model($reader, ['route' => ['leitores.destroy', $reader->id]]) }}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::submit('Excluir', ['class' => 'btn btn-danger']) }}
                                {{ Form::close() }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection