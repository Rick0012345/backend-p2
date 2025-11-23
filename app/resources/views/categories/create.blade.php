<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Criar Categoria</title>
</head>
<body>
    <h1>Criar Categoria</h1>
    <form action="{{ route('categorias.store') }}" method="POST">
        @csrf
        <div>
            <label>Nome</label>
            <input type="text" name="nome" value="{{ old('nome') }}" required>
        </div>
        <div>
            <label>Descrição</label>
            <textarea name="descricao">{{ old('descricao') }}</textarea>
        </div>
        <button type="submit">Salvar</button>
        <a href="{{ route('categorias.index') }}">Voltar</a>
    </form>
</body>
</html>
