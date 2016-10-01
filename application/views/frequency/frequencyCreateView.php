<form action="<?php echo site_url('insert'); ?>" method="post" class="form-group">
    <div class="row">
        <div class="form-group col-md-offset-4 col-md-4">
            <label for="nameType">Tipo da frequencia:</label>
            <input placeholder="Tipo da frequencia  .." type="text" class="form-control" name="frequency[nameType]">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-offset-4 col-md-4">
            <button class="btn btn-success" type="submit">Enviar</button>
            <a href="<?php echo site_url('') ?>" class="btn btn-default">Voltar</a>
        </div>
    </div>
</form>