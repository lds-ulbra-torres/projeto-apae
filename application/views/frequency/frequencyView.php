<div class="col-md-offset-2 col-md-8">
    <h4>Frequências - </h4>
    <a class="btn btn-success" href="<?= site_url('add'); ?>">Nova Frequência</a>
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
                    <td><?= $frequency['idFrequency']; ?></td>
                    <td><?= $frequency['frequency_description']; ?></td>
                    <td><a class="btn btn-primary"
                           href="<?= site_url('edit') . "/" . $frequency['idFrequency']; ?>">Editar</a>
                    </td>
                    <td><a class="btn btn-danger" data-toggle="modal" data-target="#modalExcluir">Excluir</a></td>
                </tr>
            <?php endforeach;
        } ?>
        </tbody>
    </table>
</div>

<!-- Modal excluir -->
<!-- Modal -->
<div class="modal fade" id="modalExcluir" role="dialog">
    <div class="modal-dialog">
        <!-- Corpo do modal -->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><b>Excluir -</b></h4>
            </div>
            <div class="modal-body">
                <h4>Você deseja realmente excluir essa frequência?</h4>
            </div>
            <div class="modal-footer">
                <a type="button" class="btn btn-danger"
                   href="<?= site_url('delete') . "/" . $frequency['idFrequency']; ?>">Apagar
                </a>
                <a type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</a>
            </div>
        </div>

    </div>
</div>
