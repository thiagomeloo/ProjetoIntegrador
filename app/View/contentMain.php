<div class="container-fluid">
    <hr>
    <div class="container row">
        <div class="col-auto d-flex justify-content-center">
            <img src="assets/img/user-icon.jpg" name="aboutme" class="maxTam rounded-circle img-profile mx-auto">
        </div>
        <div class="col-auto mt-3">
            <a class="btn btn-circle bg_color_btn float-right" href="\editarUsuario?id=<?=$usuario->id?>&type=1">
                <i class="btn fas fa-user-edit fa-1x my_FontColor"></i>
            </a>
            <h4 class="row"><?=$usuario->nome?></h4>
            <label class="row">E-mail: <?=$usuario->email?></label>
            <label class="row"> Turma: TADS4N  </label>
        </div>

    </div>
    <hr>
    <div class="container row">
        <div class="col row"><label>CPF: <?=$usuario->cpf?></label></div>
        <div class="col row"><label>Data de Nascimento: <?=$usuario->data_nascimento?></div>
    </div>
    <hr>
    <div class="container row">
        <div class="col">
            <label class="row">Nº identidade: <?=$usuario->identidade_numero != null ? $usuario->identidade_numero : ''?></label>
            <label class="row">UF: <?=$usuario->identidade_uf != null ? $usuario->identidade_uf : ''?></label>
        </div>
        <div class="col">
            <label class="row">Orgão Expeditor: <?=$usuario->identidade_orgao_expeditor != null ? $usuario->identidade_orgao_expeditor : ''?></label>
            <label class="row">Data de Expedição: <?=$usuario->identidade_data_expedicao != null ? $usuario->identidade_data_expedicao : ''?></label>
        </div>
    </div>
    <hr>
    <div class="container row">
        <div class="col">
            <label class="row">Tipo da Certidão: <?=$usuario->certidao_tipo != null ? $usuario->certidao_tipo : ''?></label>
            <label class="row">Nº de Termo: <?=$usuario->certidao_numero_de_termo != null ? $usuario->certidao_numero_de_termo : '' ?></label>
            <label class="row">Livro: <?=$usuario->certidao_livro != null ? $usuario->certidao_livro : ''?></label>
        </div>
        <div class="col">
            <label class="row">Cartório: <?=$usuario->certidao_cartorio != null ? $usuario->certidao_cartorio : ''?></label>
            <label class="row">Folha: <?=$usuario->certidao_folha != null ? $usuario->certidao_folha : ''?></label>
            <label class="row">Data de Emissão: <?=$usuario->certidao_data_emissao != null ? $usuario->certidao_data_emissao : ''?></label>
        </div>
    </div>
    <hr>
    <div class="container row">
        <div class="col">
            <label class="row">Nº Título: <?=$usuario->titulo_numero != null ? $usuario->titulo_numero : '' ?></label>
            <label class="row">Zona: <?=$usuario->titulo_zona != null ? $usuario->titulo_zona : '' ?></label>
        </div>
        <div class="col">
            <label class="row">Seção: <?=$usuario->titulo_secao != null ? $usuario->titulo_secao : ''?></label>
            <label class="row">UF: <?=$usuario->titulo_uf != null ? $usuario->titulo_uf : ''?></label>
        </div>
    </div>
    <hr>
    <div class="container row">
        <div class="col">
            <label class="row" >Rua: <?=$enderecoUsuario->rua != null ? $enderecoUsuario->rua : ''?></label>
            <label class="row">Número: <?=$enderecoUsuario->numero != null ? $enderecoUsuario->numero : ''?></label>
            <label class="row">Bairro: <?=$enderecoUsuario->bairro != null ? $enderecoUsuario->bairro : ''?></label>
        </div>
        <div class="col">
            <label class="row">Cidade: <?=$enderecoUsuario->cidade != null ? $enderecoUsuario->cidade : ''?></label>
            <label class="row">Estado: <?=$enderecoUsuario->estado != null ? $enderecoUsuario->estado: ''?></label>
            <label class="row">CEP: <?=$enderecoUsuario->cep != null ? $enderecoUsuario->cep : ''?></label><br>
        </div>
    </div>
    <hr>
</div>