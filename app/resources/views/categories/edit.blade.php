<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Editar Categoria</title>
</head>
<body>
    <h1>Editar Categoria</h1>
    <form action="{{ route('categorias.update', $category) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Nome</label>
            <input type="text" name="nome" value="{{ old('nome', $category->nome) }}" required>
        </div>
        <div>
            <label>Descrição</label>
            <textarea name="descricao">{{ old('descricao', $category->descricao) }}</textarea>
        </div>
        <button type="submit">Atualizar</button>
        <a href="{{ route('categorias.index') }}">Voltar</a>
    </form>
</body>
</html>
