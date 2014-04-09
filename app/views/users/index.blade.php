@extends('layouts.user')

@section('main')

<h1>Todos os Usuários</h1>

<p>{{ link_to_route('users.create', 'Adicionar Novo Usuário') }}</p>

@if ($users->count())

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Usuário</th>
            <th>Senha</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Nome</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->username }}</td>
            <td>{{ $user->password }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ link_to_route('users.edit', 'Edit',
array($user->id), array('class' => 'btn btn-info')) }}</td>
            <td>
                {{ Form::open(array('method'
=> 'DELETE', 'route' => array('users.destroy', $user->id))) }}
                {{ Form::submit('Delete', array('class' =>
'btn btn-danger')) }}
                {{ Form::close() }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@else

Não há registro de usuários!

@endif

@stop