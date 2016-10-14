<?php
/**
 * Created by PhpStorm.
 * User: LeoSorgetz
 * Date: 30/09/2016
 * Time: 11:11
 */
//var_dump($frequency);
?>
<form action="<?= site_url('update') . '/' . $frequency[0]['idFrequency']; ?>" method="post" class="form-group">
    <input type="hidden" value="<?= $frequency[0]['idFrequency'] ?>" name="frequency[idFrequency]">
    <div class=" row">
        <div class="form-group col-md-offset-4 col-md-4">
            <label for="nameType">Tipo da frequencia:</label>
            <input placeholder="Tipo da frequencia  .." value="<?= $frequency[0]['frequency_description'] ?>"
                   type="text"
                   class="form-control" name="frequency[frequency_description]" required>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-offset-4 col-md-4">
            <button class="btn btn-success" type="submit">Enviar</button>
            <a href="<?= site_url('') ?>" class="btn btn-default">Voltar</a>
        </div>
    </div>
</form>
