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
                <input type="text" class="form-control" placeholder="Nome Completo" name="nome" required="" value="<?=isset($usuarioAtt) ? $usuarioAtt->nome : ''?>" <?= isset($type) && $type == 1? 'disabled': ''?>>
            </div>
            <div class="form-group col-md-6">
                <label>CPF</label>
                <input type="text" class="form-control" placeholder="CPF" name="cpf" required="" value="<?=isset($usuarioAtt) ? $usuarioAtt->cpf : ''?>" <?= isset($type) && $type == 1? 'disabled': ''?> >
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Email" name="email" required="" value="<?=isset($usuarioAtt) ? $usuarioAtt->email : ''?>">
            </div>
            <div class="form-group col-md-6">
                <label>Data de Nascimento</label>

                <input type="date" class="form-control" name="data_nascimento" required="" value="<?=isset($usuarioAtt) ? $usuarioAtt->data_nascimento : ''?>" <?= isset($type) && $type == 1? 'disabled': ''?>>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Numero da Identidade</label>
                <input type="number" class="form-control" placeholder="Numero da Identidade" name="identidade_numero" value="<?=isset($usuarioAtt) ? $usuarioAtt->identidade_numero : ''?>" <?= isset($type) && $type == 1? 'disabled': ''?>>
            </div>
            <div class="form-group col-md-3">
                <label>Orgão Expeditor</label>
                <input type="text" class="form-control" placeholder="Orgão Expeditor" name="identidade_orgao_expeditor" value="<?=isset($usuarioAtt) ? $usuarioAtt->identidade_orgao_expeditor : ''?>" <?= isset($type) && $type == 1? 'disabled': ''?>>
            </div>
            <div class="form-group col-md-3">
                <label>UF</label>
                <input type="text" class="form-control" placeholder="UF" name="identidade_uf" value="<?=isset($usuarioAtt) ? $usuarioAtt->identidade_uf : ''?>" <?= isset($type) && $type == 1? 'disabled': ''?>>
            </div>
            <div class="form-group col-md-3">
                <label>Data da Expedição</label>
                <input type="date" class="form-control" placeholder="Data da Expedição" name="identidade_data_expedicao" value="<?=isset($usuarioAtt) ? $usuarioAtt->identidade_data_expedicao : ''?>" <?= isset($type) && $type == 1? 'disabled': ''?>>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Tipo da Certidão</label>
                <select class="form-control" name="certidao_tipo" <?= isset($type) && $type == 1? 'disabled': ''?>>

                    <option value="certidao_nascimento" <?=isset($usuarioAtt) && $usuarioAtt->certidao_tipo == 'certidao_nascimento'? 'selected="true"' : ''?> >Certidão de Nascimento</option>
                    <option value="certidao_casamento"  <?=isset($usuarioAtt) && $usuarioAtt->certidao_tipo == 'certidao_casamento'? 'selected="true"' : ''?>>Certidão de Casamento</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label>Cartório</label>
                <input type="text" class="form-control" placeholder="Cartório" name="certidao_cartorio" value="<?=isset($usuarioAtt) ? $usuarioAtt->certidao_cartorio : ''?>" <?= isset($type) && $type == 1? 'disabled': ''?>>
            </div>
            <div class="form-group col-md-4">
                <label>Numero de Termo</label>
                <input type="text" class="form-control" placeholder="Numero de Termo" name="certidao_numero_de_termo" value="<?=isset($usuarioAtt) ? $usuarioAtt->certidao_numero_de_termo : ''?>" <?= isset($type) && $type == 1? 'disabled': ''?>>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Folha</label>
                <input type="text" class="form-control" placeholder="Folha" name="certidao_folha" value="<?=isset($usuarioAtt) ? $usuarioAtt->certidao_folha : ''?>" <?= isset($type) && $type == 1? 'disabled': ''?>>
            </div>
            <div class="form-group col-md-4">
                <label>Livro</label>
                <input type="text" class="form-control" placeholder="Livro" name="certidao_livro" value="<?=isset($usuarioAtt) ? $usuarioAtt->certidao_livro : ''?>" <?= isset($type) && $type == 1? 'disabled': ''?>>
            </div>
            <div class="form-group col-md-4">
                <label>Data de Emissão da Certidão</label>
                <input type="date" class="form-control" placeholder="Data de Emissão da Certidão" name="certidao_data_emissao" value="<?=isset($usuarioAtt) ? $usuarioAtt->certidao_data_emissao : ''?>" <?= isset($type) && $type == 1? 'disabled': ''?>>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Número do Título Eleitor</label>
                <input type="number" class="form-control" placeholder="Número do Título Eleitor" name="titulo_numero" value="<?=isset($usuarioAtt) ? $usuarioAtt->titulo_numero : ''?>" <?= isset($type) && $type == 1? 'disabled': ''?>>
            </div>
            <div class="form-group col-md-3">
                <label>Zona</label>
                <input type="text" class="form-control" placeholder="Zona" name="titulo_zona" value="<?=isset($usuarioAtt) ? $usuarioAtt->titulo_zona : ''?>" <?= isset($type) && $type == 1? 'disabled': ''?>>
            </div>
            <div class="form-group col-md-3">
                <label>Seção</label>
                <input type="text" class="form-control" placeholder="Seção" name="titulo_secao" value="<?=isset($usuarioAtt) ? $usuarioAtt->titulo_secao : ''?>" <?= isset($type) && $type == 1? 'disabled': ''?>>
            </div>
            <div class="form-group col-md-3">
                <label>UF</label>
                <input type="text" class="form-control" placeholder="UF" name="titulo_uf" value="<?=isset($usuarioAtt) ? $usuarioAtt->titulo_uf : ''?>" <?= isset($type) && $type == 1? 'disabled': ''?>>
            </div>
            <input type="number" class="d-none" name="tipo_user" value="<?=isset($usuarioAtt) ? $usuarioAtt->tipo_user : $tpUser?>">
            <input type="number" class="d-none" name="id" value="<?=isset($usuarioAtt) ? $usuarioAtt->id : ''?>" >
        </div>


        <?php if(isset($tpUser) && $tpUser == 3) {?>
            <hr>
            <h5 class="font-weight-bold">Turma</h5>
            <hr>
            <div class="form-group">
            <label>Turma</label>
            <select class="form-control" name="id_turma">

                <?php
                        foreach ($turmas as $turma) {?>

                            <option value="<?= $turma->id ?>" <?= isset($turmaAtt->id) && $turmaAtt->id == $turma->id ? 'selected="true"' : '' ?> > <?= $turma->nome ?> </option>

                <?php
                        }
               ?>
            </select>
        </div>
        <hr>
        <h5 class="font-weight-bold">Responsáveis <div class="p-2 btn btn-circle bg_color_secundary fas fa-user-plus my_FontColor" onclick="newResp()"> </div> </h5>


            <hr>
        <div id="content_resp">
            <?php if($name_btn != "Atualizar" && $tpUser == 3){  ?>
            <div class="row">
                <div class="form-group col">
                    <label>Nome</label>
                    <input type="text" class="form-control" placeholder="Nome" name="nome_responsavel[]" value="">
                    <input type="number" class="d-none" placeholder="id" name="id_responsavel[]" value="" >
                    <input type="number" class="d-none" placeholder="id" name="id_al_resp[]" value="" >

                </div>
                <div class="col">
                    <label>CPF</label>
                    <input type="text" class="form-control" placeholder="CPF" name="cpf_responsavel[]" value="">
                </div>
                <div class="col">
                    <label>data Nascimento</label>
                    <input type="date" class="form-control"  name="data_responsavel[]" value="">
                </div>
            </div>
            <?php
               }else{
                if(isset($respAtt))
                    foreach ($respAtt as $resp) {?>
            <div class="row">
                <div class="form-group col">
                    <label>Nome</label>
                    <input type="text" class="form-control" placeholder="Nome" name="nome_responsavel[]" value="<?= $resp->id_responsavel->nome ?>">
                    <input type="number" class="d-none" placeholder="id" name="id_responsavel[]" value="<?= $resp->id_responsavel->id ?>" >
                    <input type="number" class="d-none" placeholder="id" name="id_al_resp[]" value="<?= $resp->id ?>" >
                </div>
                <div class="col">
                    <label>CPF</label>
                    <input type="text" class="form-control" placeholder="CPF" name="cpf_responsavel[]" value="<?= $resp->id_responsavel->cpf ?>">
                </div>
                <div class="col">
                    <label>data Nascimento</label>
                    <input type="date" class="form-control"  name="data_responsavel[]" value="<?= $resp->id_responsavel->data_nascimento ?>">
                </div>
            </div>
            <?php }
            }
            ?>

        </div>



        <?php } ?>


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