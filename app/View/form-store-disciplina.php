<div class="container-fluid">
    <form method="post" action="/storeDisciplina">
        <hr>
        <h5 class="font-weight-bold">Dados da Disciplina</h5>
        <hr class="m-auto">
        <div class="form-group">

        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nome</label>
                <input type="text" class="form-control" placeholder="Nome" name="nome" required="" value="<?=isset($disciplinaAtt) ? $disciplinaAtt->nome : ''?>">
            </div>
            <div class="form-group col-md-3">
                <label>Quantidade de Aulas</label>
                <input type="number" class="form-control" placeholder="Quantidade de Aulas" name="qtd_aulas" required="" value="<?=isset($disciplinaAtt) ? $disciplinaAtt->qtd_aulas : ''?>">
            </div>
            <div class="form-group col-md-3">
                <label>Professor</label>
                <select class="form-control" name="id_professor">
                    <?php

                    foreach($professores as $professor){?>

                        <option value="<?=$professor->id?>" <?=isset($disciplinaAtt->id_professor->id)  && $disciplinaAtt->id_professor->id == $professor->id ? 'selected="true"' : ''?> > <?=$professor->nome?> </option>

                    <?php } ?>
                </select>
            </div>
        </div>
        <input type="number" class="d-none" name="id" value="<?=isset($disciplinaAtt->id) ? $disciplinaAtt->id : '' ?>" >
        <input type="number" class="d-none" name="id_turma" value="<?=isset($disciplinaAtt->id_turma) ? $disciplinaAtt->id_turma : $turma->id?>" >

        <button type="submit" class="btn bg_color_secundary btn-lg fas fa-user-plus float-right my_FontColor">
            <?=$name_btn;?>
        </button>
    </form>
</div>
