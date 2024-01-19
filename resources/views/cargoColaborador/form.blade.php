{{-- resources/views/cargoColaborador/form.blade.php --}}

<form action="{{ $action }}" method="POST">
    @csrf
    @method($method)

    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome"
            value="{{ old('nome', $cargoColaborador->colaborador->nome ?? '') }}" required>
    </div>

    <div class="form-group">
        <select name="unidade_id" class="form-control" id="unidade_id" required>
            <option value="{{ old('unidade_id', $cargoColaborador->colaborador->unidade->id ?? '') }}">
                {{ old('unidade_id', $cargoColaborador->colaborador->unidade->nome_fantasia ?? 'Insira uma unidade') }}
            </option>
            @foreach ($unidades as $unidade)
                <option value="{{ $unidade->id }}">
                    {{ $unidade->nome_fantasia }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <select name="cargo_id" class="form-control" id="cargo_id" required>
            <option value="{{ old('cargo_id', $cargoColaborador->cargo->id ?? '') }}">
                {{ old('cargo_id', $cargoColaborador->cargo->cargo ?? 'Insira um cargo') }}</option>
            @foreach ($cargos as $cargo)
                <option value="{{ $cargo->id }}">
                    {{ $cargo->cargo }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control" name="cpf" id="cpf"
            value="{{ old('cpf', $cargoColaborador->colaborador->cpf ?? '') }}" required maxlength="18"
            oninput="this.value = this.value.replace(/[^0-9,.-]/g, '')">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" id="email"
            value="{{ old('email', $cargoColaborador->colaborador->email ?? '') }}" required>
    </div>

    <div class="form-group">
        <label for="nota_desempenho">Nota de Desempenho</label>
        <input type="text" class="form-control" name="nota_desempenho" id="nota_desempenho"
            value="{{ old('nota_desempenho', $cargoColaborador->nota_desempenho ?? '') }}" required>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>

</form>
