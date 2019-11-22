<div class="container-fluid">
    <form method="post" action="/adicionarUsuario">
        <hr>
        <h5 class="font-weight-bold">Dados Pessoais</h5>
        <hr class="m-auto">
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

        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Numero da Identidade</label>
                <input type="email" class="form-control" placeholder="Numero da Identidade" name="identidade_numero">
            </div>
            <div class="form-group col-md-3">
                <label>Orgão Expeditor</label>
                <input type="text" class="form-control" placeholder="Orgão Expeditor" name="identidade_orgao_expeditor">
            </div>
            <div class="form-group col-md-3">
                <label>UF</label>
                <input type="text" class="form-control" placeholder="UF" name="identidade_uf">
            </div>
            <div class="form-group col-md-3">
                <label>Data da Expedição</label>
                <input type="text" class="form-control" placeholder="Data da Expedição" name="identidade_data_expedicao">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Tipo da Certidão</label>
                <input type="text" class="form-control" placeholder="Numero da Identidade" name="certidao_tipo">
            </div>
            <div class="form-group col-md-4">
                <label>Cartório</label>
                <input type="text" class="form-control" placeholder="Cartório" name="certidao_cartorio">
            </div>
            <div class="form-group col-md-4">
                <label>Numero de Termo</label>
                <input type="text" class="form-control" placeholder="Numero de Termo" name="certidao_numero_de_termo">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Folha</label>
                <input type="text" class="form-control" placeholder="Folha" name="certidao_folha">
            </div>
            <div class="form-group col-md-4">
                <label>Livro</label>
                <input type="text" class="form-control" placeholder="Livro" name="certidao_livro">
            </div>
            <div class="form-group col-md-4">
                <label>Data de Emissão da Certidão</label>
                <input type="text" class="form-control" placeholder="Data de Emissão da Certidão" name="certidao_data_emissao">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Número do Título Eleitor</label>
                <input type="email" class="form-control" placeholder="Número do Título Eleitor" name="titulo_numero">
            </div>
            <div class="form-group col-md-3">
                <label>Zona</label>
                <input type="text" class="form-control" placeholder="Zona" name="titulo_zona">
            </div>
            <div class="form-group col-md-3">
                <label>Seção</label>
                <input type="text" class="form-control" placeholder="Seção" name="titulo_secao">
            </div>
            <div class="form-group col-md-3">
                <label>UF</label>
                <input type="text" class="form-control" placeholder="UF" name="titulo_uf">
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


        <button type="submit" class="btn bg_color_secundary btn-lg fas fa-user-plus float-right my_FontColor">
            Cadastrar
        </button>
    </form>
</div>