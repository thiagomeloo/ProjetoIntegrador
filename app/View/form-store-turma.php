<div class="container-fluid">
    <form method="post" action="/storeTurma">
        <hr>
        <h5 class="font-weight-bold">Dados da Turma</h5>
        <hr class="m-auto">
        <div class="form-group">

        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nome</label>
                <input type="text" class="form-control" placeholder="Nome" name="nome" required="" value="<?=isset($turmaAtt) ? $turmaAtt->nome : ''?>">
            </div>
            <div class="form-group col-md-3">
                <label>Quantidade Maxima de Alunos</label>
                <input type="number" class="form-control" placeholder="Quantidade Maxima de Alunos" name="qtd_max_alunos" required="" value="<?=isset($turmaAtt) ? $turmaAtt->qtd_max_alunos : ''?>">
            </div>
            <div class="form-group col-md-3">
                <label>Turno</label>
                <select class="form-control" name="turno">
                    <option value="matutino" <?=isset($turmaAtt) && $turmaAtt->turno == 'matutino'? 'selected="true"' : ''?> >Matutino</option>
                    <option value="vespertino"  <?=isset($turmaAtt) && $turmaAtt->turno == 'vespertino'? 'selected="true"' : ''?>>Vespertino</option>
                    <option value="noturno"  <?=isset($turmaAtt) && $turmaAtt->turno == 'noturno'? 'selected="true"' : ''?>>Noturno</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Data Início Matricula</label>
                <input type="date" class="form-control" placeholder="Data Início Matricula" name="data_inicio_matricula" required="" value="<?=isset($turmaAtt) ? $turmaAtt->data_inicio_matricula : ''?>">
            </div>
            <div class="form-group col-md-6">
                <label>Data Fim Matricula</label>

                <input type="date" class="form-control" name="data_final_matricula" required="" value="<?=isset($turmaAtt) ? $turmaAtt->data_final_matricula : ''?>">
            </div>
        </div>
        <input type="number" class="d-none" name="id" value="<?=isset($turmaAtt) ? $turmaAtt->id : ''?>" >

        <button type="submit" class="btn bg_color_secundary btn-lg fas fa-user-plus float-right my_FontColor">
            <?=$name_btn;?>
        </button>
    </form>
</div>
