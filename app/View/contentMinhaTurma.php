<?php

use Ifnc\Tads\Helper\Util;

?>
<hr>
<div class="col-auto mt-3">
    <h4 class="row col-auto"> <?=$turma->nome ?> </h4>
    <div class="row">
        <label class="col-auto">Id: <?=$turma->id ?> </label>
        <label class="col-auto"> Quantidade maxima de alunos: <?=$turma->qtd_max_alunos ?> </label>
        <label class="col-auto">Turno: <?=$turma->turno ?> </label>
        <label class="col-auto"> Data de inicio das matriculas: <?= Util::data($turma->data_inicio_matricula); ?> </label>
        <label class="col-auto"> Data de fim das matriculas: <?= Util::data($turma->data_final_matricula);  ?> </label>
    </div>

</div>

<hr class="mb-0">
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active text-danger" id="home-tab" data-toggle="tab" href="#disciplinas" role="tab" aria-controls="home" aria-selected="true">Disciplinas</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-danger" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Alunos</a>
    </li>
</ul>
<div class="tab-content" id="myTabContent">

    <div class="tab-pane fade show active" id="disciplinas" role="tabpanel" aria-labelledby="profile-tab">
        <div class="row row-cols-1 row-cols-md-2 p-3">

            <?php foreach($disciplinas as $disciplina){ ?>

            <div class="col-auto mb-4">
                <div class="card <?=$disciplina->type_border ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?=$disciplina->disciplina->nome ?></h5>
                        <p class="card-text">Professor: <?=$disciplina->disciplina->id_professor->nome ?></p>
                        <p class="card-text">Qtd Aulas: <?=$disciplina->disciplina->qtd_aulas ?></p>

                        <?php if($disciplina->type_border != "border-success"){?>
                        <a class="btn btn-circle bg_color_btn float-left m-1" href="<?=$disciplina->link?>" >
                            <i class="btn fas fa-<?=$disciplina->type_btn?> > fa-1x my_FontColor"></i>
                        </a>
                        <?php } ?>
                        <a class="btn btn-circle bg_color_btn float-left m-1" href="#" data-toggle="modal" data-target="#ModalHistorico" onclick="getHistorico(<?=$disciplina->id ?>)">
                            <i class="btn fas fa-history fa-1x my_FontColor"></i>
                        </a>

                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">


    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="ModalHistorico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Histórico de alterações</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <ul class="timeline container-fluid" id="ulModal">


                </ul>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg_color_btn" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>