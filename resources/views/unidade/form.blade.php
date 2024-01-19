{{-- resources/views/unidade/form.blade.php --}}

<form action="{{ $action }}" method="POST">
    @csrf
    @method($method)

    <div class="form-group">
        <label for="nome_fantasia">Nome Fantasia</label>
        <input type="text" class="form-control" name="nome_fantasia" id="nome_fantasia"
            value="{{ old('nome_fantasia', $unidade->nome_fantasia ?? '') }}" required>
    </div>

    <div class="form-group">
        <label for="razao_social">Razão Social</label>
        <input type="text" class="form-control" name="razao_social" id="razao_social"
            value="{{ old('razao_social', $unidade->razao_social ?? '') }}" required>
    </div>

    <div class="form-group">
        <label for="cnpj">CNPJ</label>
        <input type="text" class="form-control" name="cnpj" id="cnpj"
            value="{{ old('cnpj', $unidade->cnpj ?? '') }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
