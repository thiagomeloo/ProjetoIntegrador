<div class="container-fluid">
    <form method="post" action="/adicionarUsuario">
        <hr>
        <h5 class="font-weight-bold">Dados Pessoais</h5>
        <hr>
        <div class="form-group">

        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nome</label>
                <input type="text" class="form-control" placeholder="Nome Completo" name="nome">
            </div>
            <div class="form-group col-md-6">
                <label>CPF</label>
                <input type="text" class="form-control" placeholder="CPF">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Email" name="email">
            </div>
            <div class="form-group col-md-6">
                <label>Data de Nascimento</label>
                <input type="date" class="form-control" placeholder="Data de Nascimento">
            </div>
        </div>

        <hr>
        <h5 class="font-weight-bold">Endereço</h5>
        <hr>
        <div class="form-row">
            <div class="form-group col-md-5">
                <label>Rua</label>
                <input type="text" class="form-control" placeholder="Rua">
            </div>
            <div class="form-group col-md-2">
                <label>Número</label>
                <input type="number" class="form-control" placeholder="Número">
            </div>
            <div class="form-group col-md-5">
                <label>Bairro</label>
                <input type="text" class="form-control" placeholder="Bairro">
            </div>
            <div class="form-group col-md-4">
                <label>Cidade</label>
                <input type="text" class="form-control" placeholder="Cidade">
            </div>
            <div class="form-group col-md-4">
                <label for="inputPassword4">Estado</label>
                <input type="password" class="form-control" placeholder="Estado">
            </div>
            <div class="form-group col-md-4">
                <label for="inputPassword4">CEP</label>
                <input type="password" class="form-control" placeholder="CEP">
            </div>
        </div>


        <button type="submit" class="btn bg_color_primary my_FontColor">Cadastrar</button>
    </form>
</div>