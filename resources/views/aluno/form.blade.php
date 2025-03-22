@extends('base')
@section('titulo', 'Listagem Aluno')
@section('conteudo')

    <h3>Formulário Aluno</h3>
    <form action="{{route('aluno.store')}}" method="post">
        @csrf
        
        <label for="">Nome</label><br>
        <input type="text" name="nome"><br>

        <label for="">cpf</label><br>
        <input type="text" name="cpf"><br>
        
        <label for="">telefone</label><br>
        <input type="text" name="telefone"><br>

        <button type="submit">Salvar</button>

    </form>
@stop