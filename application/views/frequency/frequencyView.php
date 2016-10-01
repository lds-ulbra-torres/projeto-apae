<div class="col-md-offset-2 col-md-8">
    <h4>Frequências - </h4>
    <a class="btn btn-success" href="<?php echo site_url('insert-view'); ?>">Nova Frequência</a>
    <br><br>
    <table class="table table-responsive">
        <thead>
        <tr>
            <th class="col-md-1">ID</th>
            <th class="col-md-9">Tipo</th>
            <th class="col-md-2" style="text-align: center" colspan="2">Ações</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if ($frequencies != null) {
            foreach ($frequencies as $frequency): ?>
                <tr>
                    <td><?php echo $frequency['idFrequency']; ?></td>
                    <td><?php echo $frequency['nameType']; ?></td>
                    <td><a class="btn btn-primary"
                           href="<?php echo site_url('update-view') . "/" . $frequency['idFrequency']; ?>">Editar</a>
                    </td>
                    <td><a class="btn btn-danger"
                           href="<?php echo site_url('delete') . "/" . $frequency['idFrequency']; ?>">Excluir</a></td>
                </tr>
            <?php endforeach;
        } ?>
        </tbody>
    </table>
</div>