<div class="container-fluid pt-5">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Disciplina</th>
            <th scope="col">Nota Final</th>
            <th scope="col">Faltas</th>
        </tr>
        </thead>
        <tbody>

        <?php

        foreach($boletins as $boletin){ ?>
            <tr>
                <th scope="row"><?=$boletin->id_disciplina->nome?></th>
                <td class=""><?=$boletin->nota_final?></td>
                <td class=""><?=$boletin->faltas?></td>

            </tr>
        <?php } ?>

        </tbody>
    </table>
</div>
