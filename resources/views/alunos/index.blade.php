@extends('templates.main', ['titulo' => "Alunos", 'rota' => "alunos.create"])

@section('titulo') Alunos @endsection

@section('conteudo')
<div class="row">
        <div class="col">
            <x-datatable 
                title="Alunos" 
                crud="alunos" 
                :header="['id','nome']" 
                :data="$dados"
                :acoes="[true, true, true]"
            /> 
        </div>
    </div>
@endsection