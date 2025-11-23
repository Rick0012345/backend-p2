<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Categorias</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Categorias</h1>
    <a href="{{ route('categorias.create') }}">Nova Categoria</a>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->nome }}</td>
                <td>{{ $category->descricao }}</td>
                <td>
                    <a href="{{ route('categorias.edit', $category) }}">Editar</a>
                    <form action="{{ route('categorias.destroy', $category) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $categories->links() }}
</body>
</html>
