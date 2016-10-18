<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>APAE</title>
    <link rel="stylesheet" href="<?= site_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= site_url('assets/css/template.css'); ?>">
    <link rel="stylesheet" href="<?= site_url('assets/css/toastCss.css'); ?>">
    <script type="text/javascript" src="<?= site_url('assets/js/jquery-3.1.1.js'); ?>"></script>
    <script type="text/javascript" src="<?= site_url('assets/js/jquery.apae.js'); ?>"></script>

</head>
<body>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= site_url(); ?>">APAE Torres</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
            <li class="active"><a href="<?= site_url(); ?>">Home</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Frequência<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?= site_url('frequency'); ?>">Todas</a></li>
                    <li><a href="<?= site_url('add'); ?>">Nova</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
</nav>

<div class="container center" id="contents">
    <?= $contents ?>
</div>

<!-- JAVASCRIPT -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="<?= site_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
</body>
</html>