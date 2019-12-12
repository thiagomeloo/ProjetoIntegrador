<div class="container-fluid">
    <div class="table-responsive table-overflow tb_container" style="max-height: 50vh ;">
        <form method="post" action="/finalizarDisciplina">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Nota Final</th>
                    <th scope="col">Faltas</th>
                </tr>
                </thead>
                <tbody>

                <?php

                foreach($alunos as $aluno){ ?>
                    <tr>
                        <th scope="row"><?=$aluno->id_aluno->id?></th>
                        <td class=""><?=$aluno->id_aluno->nome?></td>
                        <td class=""><input  type="number" class="form-control" placeholder="Nota Final" name="notaFinal[]" required="" value=""></td>
                        <td class=""><input type="number" class="form-control" placeholder="Faltas" name="faltas[]" required="" value=""></td>
                        <input  type="number" class="d-none" placeholder="Nota Final" name="id[]" required="" value="<?=$aluno->id?>">

                    </tr>
                <?php } ?>

                </tbody>
            </table>
            <button type="submit" class="btn bg_color_secundary btn-lg fas fa-chevron-circle-down float-right my_FontColor"> Finalizar Disciplina </button>
        </form>
</div>
</div>