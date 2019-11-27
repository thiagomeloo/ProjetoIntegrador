<div class="container-fluid">
    <form method="post" action="/storeUsuario">
        <hr>
        <h5 class="font-weight-bold">Dados Pessoais</h5>
        <hr class="m-auto">
        <div class="form-group">

        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nome</label>
                <input type="text" class="form-control" placeholder="Nome Completo" name="nome" required="" value="<?=isset($usuarioAtt) ? $usuarioAtt->nome : ''?>">
            </div>
            <div class="form-group col-md-6">
                <label>CPF</label>
                <input type="text" class="form-control" placeholder="CPF" name="cpf" required="" value="<?=isset($usuarioAtt) ? $usuarioAtt->cpf : ''?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Email" name="email" required="" value="<?=isset($usuarioAtt) ? $usuarioAtt->email : ''?>">
            </div>
            <div class="form-group col-md-6">
                <label>Data de Nascimento</label>

                <input type="date" class="form-control" name="data_nascimento" required="" value="<?=isset($usuarioAtt) ? $usuarioAtt->data_nascimento : ''?>">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Numero da Identidade</label>
                <input type="number" class="form-control" placeholder="Numero da Identidade" name="identidade_numero" value="<?=isset($usuarioAtt) ? $usuarioAtt->identidade_numero : ''?>">
            </div>
            <div class="form-group col-md-3">
                <label>Orgão Expeditor</label>
                <input type="text" class="form-control" placeholder="Orgão Expeditor" name="identidade_orgao_expeditor" value="<?=isset($usuarioAtt) ? $usuarioAtt->identidade_orgao_expeditor : ''?>">
            </div>
            <div class="form-group col-md-3">
                <label>UF</label>
                <input type="text" class="form-control" placeholder="UF" name="identidade_uf" value="<?=isset($usuarioAtt) ? $usuarioAtt->identidade_uf : ''?>">
            </div>
            <div class="form-group col-md-3">
                <label>Data da Expedição</label>
                <input type="date" class="form-control" placeholder="Data da Expedição" name="identidade_data_expedicao" value="<?=isset($usuarioAtt) ? $usuarioAtt->identidade_data_expedicao : ''?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Tipo da Certidão</label>
                <select class="form-control" name="certidao_tipo">

                    <option value="certidao_nascimento" <?=isset($usuarioAtt) && $usuarioAtt->certidao_tipo == 'certidao_nascimento'? 'selected="true"' : ''?> >Certidão de Nascimento</option>
                    <option value="certidao_casamento"  <?=isset($usuarioAtt) && $usuarioAtt->certidao_tipo == 'certidao_casamento'? 'selected="true"' : ''?>>Certidão de Casamento</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label>Cartório</label>
                <input type="text" class="form-control" placeholder="Cartório" name="certidao_cartorio" value="<?=isset($usuarioAtt) ? $usuarioAtt->certidao_cartorio : ''?>">
            </div>
            <div class="form-group col-md-4">
                <label>Numero de Termo</label>
                <input type="text" class="form-control" placeholder="Numero de Termo" name="certidao_numero_de_termo" value="<?=isset($usuarioAtt) ? $usuarioAtt->certidao_numero_de_termo : ''?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Folha</label>
                <input type="text" class="form-control" placeholder="Folha" name="certidao_folha" value="<?=isset($usuarioAtt) ? $usuarioAtt->certidao_folha : ''?>">
            </div>
            <div class="form-group col-md-4">
                <label>Livro</label>
                <input type="text" class="form-control" placeholder="Livro" name="certidao_livro" value="<?=isset($usuarioAtt) ? $usuarioAtt->certidao_livro : ''?>">
            </div>
            <div class="form-group col-md-4">
                <label>Data de Emissão da Certidão</label>
                <input type="date" class="form-control" placeholder="Data de Emissão da Certidão" name="certidao_data_emissao" value="<?=isset($usuarioAtt) ? $usuarioAtt->certidao_data_emissao : ''?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Número do Título Eleitor</label>
                <input type="number" class="form-control" placeholder="Número do Título Eleitor" name="titulo_numero" value="<?=isset($usuarioAtt) ? $usuarioAtt->titulo_numero : ''?>">
            </div>
            <div class="form-group col-md-3">
                <label>Zona</label>
                <input type="text" class="form-control" placeholder="Zona" name="titulo_zona" value="<?=isset($usuarioAtt) ? $usuarioAtt->titulo_zona : ''?>">
            </div>
            <div class="form-group col-md-3">
                <label>Seção</label>
                <input type="text" class="form-control" placeholder="Seção" name="titulo_secao" value="<?=isset($usuarioAtt) ? $usuarioAtt->titulo_secao : ''?>">
            </div>
            <div class="form-group col-md-3">
                <label>UF</label>
                <input type="text" class="form-control" placeholder="UF" name="titulo_uf" value="<?=isset($usuarioAtt) ? $usuarioAtt->titulo_uf : ''?>">
            </div>
            <input type="number" class="d-none" name="tipo_user" value="<?=isset($usuarioAtt) ? $usuarioAtt->tipo_user : $tpUser?>">
            <input type="number" class="d-none" name="id" value="<?=isset($usuarioAtt) ? $usuarioAtt->id : ''?>" >
        </div>

        <hr>
        <h5 class="font-weight-bold">Endereço</h5>
        <hr>
        <div class="form-row">
            <div class="form-group col-md-5">
                <label>Rua</label>
                <input type="text" class="form-control" placeholder="Rua" name="rua" value="<?=isset($enderecoAtt) ? $enderecoAtt->rua : ''?>">
            </div>
            <div class="form-group col-md-2">
                <label>Número</label>
                <input type="number" class="form-control" placeholder="Número" name="numero" value="<?=isset($enderecoAtt) ? $enderecoAtt->numero : ''?>">
            </div>
            <div class="form-group col-md-5">
                <label>Bairro</label>
                <input type="text" class="form-control" placeholder="Bairro" name="bairro" value="<?=isset($enderecoAtt) ? $enderecoAtt->bairro : ''?>" >
            </div>
            <div class="form-group col-md-4">
                <label>Cidade</label>
                <input type="text" class="form-control" placeholder="Cidade" name="cidade" value="<?=isset($enderecoAtt) ? $enderecoAtt->cidade : ''?>">
            </div>
            <div class="form-group col-md-4">
                <label>Estado</label>
                <input type="text" class="form-control" placeholder="Estado" name="estado" value="<?=isset($enderecoAtt) ? $enderecoAtt->estado : ''?>">
            </div>
            <div class="form-group col-md-4">
                <label>CEP</label>
                <input type="text" class="form-control" placeholder="CEP" name="cep" value="<?=isset($enderecoAtt) ? $enderecoAtt->cep : ''?>">
            </div>
            <input type="number" class="d-none" name="id_endereco" value="<?=isset($enderecoAtt) ? $enderecoAtt->id : ''?>">
        </div>


        <button type="submit" class="btn bg_color_secundary btn-lg fas fa-user-plus float-right my_FontColor">
            <?=$name_btn;?>
        </button>
    </form>
</div>