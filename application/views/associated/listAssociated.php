
<div class="well well-lg">
  <div class="page-header">
    <h2>Associados</h2>
    <a class="btn btn-success" href="<?= base_url('associated/new') ?>"><span class="glyphicon glyphicon-plus"></span> Cadastrar Associado</a>
  </div>

  <div class="">
    <table class="table table-responsive table-striped table-hover">
      <thead>
        <tr>
          <td>ID</td>
          <td>Nome</td>
          <td>Data Nascimento</td>
          <td>RG</td>
          <td>CPF</td>
          <td>Ações</td>
        </tr>
      </thead>
      <tbody>
        <?php foreach($associated as $associate): ?>
        <tr>
          <td><a href="<?=base_url('associated/'. $associate->id_associate)?>"><?= $associate->id_associate ?></a></td>
          <td><?= $associate->name_associate ?></td>
          <td><?= date_format(date_create($associate->birth_date), 'd/m/y')?></td>
          <td><?= $associate->rg ?></td>
          <td><?= $associate->cpf ?></td>

          <td>
            <div class="btn-group">
              <a class="btn btn-info" href="<?= base_url('associated-detail/'. $associate->id_associate) ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
              <a class="btn btn-primary" href="<?= base_url('associated/edit/'. $associate->id_associate) ?>"><span class="glyphicon glyphicon-edit"></span></a>
              <a class="btn btn-warning" href="<?= base_url('associated/'. $associate->id_associate .'/collections') ?>"><span class="glyphicon glyphicon-usd"></span></a>
            </div>
          </td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
    <div class="row">
        <div class="col-md-12 text-center">
            <?= $pagination ?>
        </div>
    </div>
  </div>

</div>