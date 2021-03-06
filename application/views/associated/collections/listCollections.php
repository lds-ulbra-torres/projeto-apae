<div class="well well-lg">
  <?= $this->session->flashdata('alert') ?>
  <div class="page-header">
    <h2>Doações <strong><?=$name_associate?></strong></h2>
    <a class="btn btn-default" href="<?=base_url('associated')?>"><span class="glyphicon glyphicon-arrow-left"></span> Voltar</a>
    <a class="btn btn-success" href="collections/new"><span class="glyphicon glyphicon-plus"></span> Cadastrar Cobrança</a>
  </div>

  <?= $this->session->flashdata('alert') ?>
  <table class="table table-collections table-responsive table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Vencimento</th>
        <th>Nro Parcela</th>
        <th>Valor</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($collections as $c): ?>
        <?php $baseUrl = base_url('associated/'. $c->id_associate .'/collections') ?>
        <tr>
          <td><a href="<?=$baseUrl .'/'. $c->id_collection?>"><?= $c->id_collection ?></a></td>
          <td><?= date_format(date_create($c->duo_date_collection), 'd/m/y') ?></td>
          <td><?= $c->num_collection ?></td>
          <td><?= 'R$ '. number_format($c->value_collection, 2, ',', '.')?></td>
          <td>
            <?php if ($c->payday_collection != NULL) { ?>
              <span class="label label-success">Pago dia <?=date_format(date_create($c->payday_collection), 'd/m/y')?> </span>
            <?php } else if ($c->payday_collection == NULL && $c->duo_date_collection < date('Y-m-d') ) { ?>
              <span class="label label-danger">Vencido há <?=date_create($c->duo_date_collection)->diff(new DateTime())->d?> dia(s)</span>
            <?php } else { ?>
              <span class="label label-warning">Pendente</span>
            <?php } ?>
          </td>
          <td>
            <div class="btn-group">
              <a class="btn btn-info btn-sm" href="<?=$baseUrl .'/'. $c->id_collection?>"><span class="glyphicon glyphicon-eye-open"></span></a>
              <a class="btn btn-primary btn-sm" href="<?=$baseUrl .'/'. $c->id_collection .'/edit'?>"><span class="glyphicon glyphicon-edit"></span></a>
              <a data-model="<?=$c->id_collection?>" data-toggle="modal" data-target="#delete_modal" class="btn btn-danger btn-sm" href="#"><span class="glyphicon glyphicon-trash"></span></a>
            </div>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
  <div class="row">
    <div class="col-md-12 text-center">
      <?= $pagination ?>
    </div>
  </div>
</div>

<div class="modal fade" id="delete_modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Confirmar Exclusão</h4>
      </div>
      <div class="modal-body">
        <p>Tem certeza que deseja apagar esta Cobrança?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-arrow-left"></span> Voltar</button>
        <a data-dismiss="modal" id="confirmDelete" type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Apagar</a>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  (function() {
    var id, button;
    $('#delete_modal').on('show.bs.modal', function(e) {
      button = $(e.relatedTarget);
      id = button.data('model');
    })
    $('#confirmDelete').on('click', function() {
      $.ajax({
        url: 'collections/delete/'+id,
        type: 'POST',
        success: function(data) {
          $(button).closest('tr').remove();
        },
        error: function(err) {
          console.error(err);
        }
      });
    })
  })();
</script>
