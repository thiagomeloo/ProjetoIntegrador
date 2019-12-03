<?php

use Ifnc\Tads\Helper\Util;

?>
<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4 margin_topo">
        <h3 class="my_FontColor col-auto">Gerenciar Turma</h3>
        <a class="col-sm col-lg-auto btn btn-lg fas fas fa-plus-circle bg_color_btn my_FontColor" role="button" href="/cadastrarTurma"> Cadastrar Turma </a>
    </div>

    <div class="row">
        <div class="col-md-6 col-xl-4 mb-4">
            <div class="card shadow border-left-success py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col mr-2">
                            <div class="text-uppercase text-success font-weight-bold text-xs mb-1"><span>Turmas Cadastradas</span></div>
                            <div class="text-dark font-weight-bold h5 mb-0"><span><?=$qtdTurma?></span></div>
                        </div>
                        <div class="col-auto"><i class="fas fa-user-check fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-4 mb-4">
            <div class="card shadow border-left-danger py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col mr-2">
                            <div class="text-uppercase text-danger font-weight-bold text-xs mb-1"><span>Turmas Cadastradas</span></div>
                            <div class="text-dark font-weight-bold h5 mb-0"><span><?=$qtdTurma?></span></div>
                        </div>
                        <div class="col-auto"><i class="fas fa-user-times fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div> <div class="col-md-6 col-xl-4 mb-4">
            <div class="card shadow border-left-primary py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col mr-2">
                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span>Turmas Cadastradas</span></div>
                            <div class="text-dark font-weight-bold h5 mb-0"><span><?=$qtdTurma?></span></div>
                        </div>
                        <div class="col-auto"><i class="fas fa-users fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-2 mb-2">
        <form>
            <div class="row">
                <div class="col-xl-8">
                    <input type="text" class="form-control" placeholder="Buscar">
                </div>
                <div class="form-check col-auto m-auto pt-1">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                    <label class="form-check-label" for="gridRadios1">
                        Buscar Por Id
                    </label>
                </div>
                <div class="form-check col-auto m-auto pt-1">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                        Buscar Por Nome
                    </label>
                </div>
            </div>
        </form>
    </div>
    <div class="table-responsive table-overflow tb_container" style="max-height: 50vh ;">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nome</th>
                <th scope="col">Qtd_max_alunos</th>
                <th scope="col">turno</th>
                <th scope="col">Data inicio matricula</th>
                <th scope="col">Data final matricula</th>
                <th scope="col">Ação</th>
            </tr>
            </thead>
            <tbody>

            <?php

            foreach($turmas as $turma){ ?>
                <tr>
                    <th scope="row"><?=$turma->id?></th>
                    <td><?=$turma->nome != null ? $turma->nome : ''?></td>
                    <td><?=$turma->qtd_max_alunos != null ? $turma->qtd_max_alunos : ''?></td>
                    <td><?=$turma->qtd_max_alunos != null ? $turma->qtd_max_alunos : ''?></td>
                    <td><?=$turma->data_inicio_matricula != null ? Util::data($turma->data_inicio_matricula) : ''?></td>
                    <td><?=$turma->data_final_matricula != null ? Util::data($turma->data_final_matricula) : ''?></td>
                    <td>
                        <a class="btn btn-circle bg_color_btn" href="\editarTurma?id='<?=$turma->id?>'" >
                            <i class="btn fas fa-edit fa-1x my_FontColor"></i>
                        </a>

                        <a class="btn btn-circle bg_color_btn" href="\turmaManager?id=<?=$turma->id?>">
                            <i class="btn fas fa-external-link-alt fa-1x my_FontColor"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>


