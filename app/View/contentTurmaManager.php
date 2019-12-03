<hr>
<div class="col-auto mt-3">
    <h4 class="row col-auto">Nome da turma</h4>
    <a class="col-sm col-lg-auto btn btn-lg fas fas fa-plus-circle bg_color_btn my_FontColor float-right" role="button" href="/cadastrarDisciplina"> Cadastrar Disciplina </a>
    <div class="row">
        <label class="col-auto">Id: </label>
        <label class="col-auto"> Quantidade maxima de alunos:   </label>
        <label class="col-auto">Turno: </label>
        <label class="col-auto"> Data de Inicio das matriculas:   </label>
        <label class="col-auto"> Data de Fim das matriculas:   </label>
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
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?=$disciplina->nome ?></h5>
                        <p class="card-text"><?=$disciplina->id_professor->nome ?></p>
                        <p class="card-text">Qtd Aulas: <?=$disciplina->qtd_aulas ?></p>
                        <a class="btn btn-circle bg_color_btn float-left m-1" href="\editarDisciplina">
                            <i class="btn fas fa-edit fa-1x my_FontColor"></i>
                        </a>
                        <a class="btn btn-circle bg_color_btn float-left m-1" href="#" data-toggle="modal" data-target="#exampleModalLong">
                            <i class="btn fas fa-history fa-1x my_FontColor"></i>
                        </a>
                        <a class="btn btn-circle bg_color_btn float-left m-1" href="\deletarDisciplina">
                            <i class="btn fas fa-times fa-1x my_FontColor"></i>
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
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="timeline container-fluid">
                    <li>
                        <a target="_blank" href="https://www.totoprayogo.com/#">New Web Design</a>
                        <a href="#" class="float-right">21 March, 2014</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                    </li>
                    <li>
                        <a href="#">21 000 Job Seekers</a>
                        <a href="#" class="float-right">4 March, 2014</a>
                        <p>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                    </li>
                    <li>
                        <a href="#">Awesome Employers</a>
                        <a href="#" class="float-right">1 April, 2014</a>
                        <p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio, tincidunt vitae nunc vitae, mollis pharetra velit. Sed nec tempor nibh...</p>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.totoprayogo.com/#">New Web Design</a>
                        <a href="#" class="float-right">21 March, 2014</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                    </li>
                    <li>
                        <a href="#">21 000 Job Seekers</a>
                        <a href="#" class="float-right">4 March, 2014</a>
                        <p>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                    </li>
                    <li>
                        <a href="#">Awesome Employers</a>
                        <a href="#" class="float-right">1 April, 2014</a>
                        <p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio, tincidunt vitae nunc vitae, mollis pharetra velit. Sed nec tempor nibh...</p>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.totoprayogo.com/#">New Web Design</a>
                        <a href="#" class="float-right">21 March, 2014</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                    </li>
                    <li>
                        <a href="#">21 000 Job Seekers</a>
                        <a href="#" class="float-right">4 March, 2014</a>
                        <p>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                    </li>
                    <li>
                        <a href="#">Awesome Employers</a>
                        <a href="#" class="float-right">1 April, 2014</a>
                        <p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio, tincidunt vitae nunc vitae, mollis pharetra velit. Sed nec tempor nibh...</p>
                    </li>
                </ul>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg_color_btn" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>