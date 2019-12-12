<div class="tab-content" id="myTabContent">

    <div class="tab-pane fade show active" id="disciplinas" role="tabpanel" aria-labelledby="profile-tab">
        <div class="row row-cols-1 row-cols-md-2 p-3">

            <?php foreach($disciplinas as $disciplina){ ?>

                <div class="col-auto mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?=$disciplina->nome ?></h5>
                            <p class="card-text">Qtd Aulas: <?=$disciplina->qtd_aulas ?></p>
                            <a class="btn btn-circle bg_color_btn float-left m-1" href="\finalizarDisciplinaForm?id=<?=$disciplina->id ?>">
                                <i class="btn fas fa-upload fa-1x my_FontColor"></i>
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