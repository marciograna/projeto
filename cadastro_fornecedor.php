<h1>Cadastro de fornecedores</h1>

<form action="?page=salvar_forn" method="POST">
    <input type="hidden" name="acao_forn" value="cadastrar_forn">
    <div class="mb-3">
        <label>nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label></label>cnpj
        <input type="number" name="cnpj" class="form-control">
    </div>
    <div class="mb-3">
        <label>telefone</label>
        <input type="number" name="telefone" class="form-control">
    </div>
    <div class="mb-3">
        <label>email</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>endereço</label>
        <input type="text" name="endereco" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
    