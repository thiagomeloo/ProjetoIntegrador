<div class="container-fluid">
    <form method="post" action="/storeUsuario">
        <hr>
        <h5 class="font-weight-bold">Dados da Turma</h5>
        <hr class="m-auto">
        <div class="form-group">

        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nome</label>
                <input type="text" class="form-control" placeholder="Nome" name="nome" required="" value="<?=isset($usuarioAtt) ? $usuarioAtt->nome : ''?>">
            </div>
            <div class="form-group col-md-3">
                <label>Quantidade Maxima de Alunos</label>
                <input type="number" class="form-control" placeholder="Quantidade Maxima de Alunos" name="nome" required="" value="<?=isset($usuarioAtt) ? $usuarioAtt->nome : ''?>">
            </div>
            <div class="form-group col-md-3">
                <label>Turno</label>
                <select class="form-control" name="turno">

                    <option value="matutino" <?=isset($usuarioAtt) && $usuarioAtt->certidao_tipo == 'matutino'? 'selected="true"' : ''?> >Matutino</option>
                    <option value="vespertino"  <?=isset($usuarioAtt) && $usuarioAtt->certidao_tipo == 'vespertino'? 'selected="true"' : ''?>>Vespertino</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Data Início Matricula</label>
                <input type="date" class="form-control" placeholder="Data Início Matricula" name="email" required="" value="<?=isset($usuarioAtt) ? $usuarioAtt->email : ''?>">
            </div>
            <div class="form-group col-md-6">
                <label>Data Fim Matricula</label>

                <input type="date" class="form-control" name="data_nascimento" required="" value="<?=isset($usuarioAtt) ? $usuarioAtt->data_nascimento : ''?>">
            </div>
        </div>


    <div class="row">

        <div class="col table-responsive table-overflow tb_container" style="max-height: 50vh ;">
            <h4>Disciplinas</h4>
            <table class="table text-center">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Turno</th>
                    <th scope="col">Professor</th>
                    <th scope="col">Incluir</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Tads</td>
                    <td>Matutino</td>
                    <td>Victor Oliveira</td>
                    <td><input class="col" type="checkbox" name="check" value="c"></td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Tads</td>
                    <td>Matutino</td>
                    <td>Victor Oliveira</td>
                    <td><input class="col" type="checkbox" name="check" value="c"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>


        <button type="submit" class="btn bg_color_secundary btn-lg fas fa-user-plus float-right my_FontColor">
            <?=$name_btn;?>
        </button>
    </form>
</div>
