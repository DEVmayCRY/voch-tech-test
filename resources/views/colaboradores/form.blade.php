{{-- resources/views/colaboradores/form.blade.php --}}

<form action="{{ $action }}" method="POST">
    @csrf
    @method($method)

    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" required>


    <select name="unidade_id" id="unidade_id" required>
        <option>Selecione uma unidade</option>
        @foreach ($unidades as $unidade)
            <option value="{{ $unidade->id }}">
                {{ $unidade->nome_fantasia }}</option>
        @endforeach
    </select>

    <label for="cpf">Cpf:</label>
    <input type="text" name="cpf" id="cpf" required>

    <label for="email">Email:</label>
    <input type="text" name="email" id="email" required>

    <button type="submit">Salvar</button>
</form>
