<?php defined('SYSPATH') or die('No direct script access.'); ?>
<html>
    <head><title>Desafio JP7</title>
<meta charset="utf-8">
<!--include do init para o bootstrap -->
<?php include(kohana::find_file('views/templates','init', 'php')) ?>
</head>
<body>    
    <div class="form-group">
        <div class="col-md-12">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">
                        <center><h4><?php echo 'Desafio JP7'; ?></h4></center>
                    </div>
                    <div class="panel panel-body">
                <?= form::open('home/desafio',array('enctype' => 'multipart/form-data')); ?>
                        <div class="col-md-12">
                            <div class="col-sm-12">
                                <span class="file-input file-input-new">
                                    <i class="glyphicon glyphicon-folder-open"></i>
                                        &nbsp;Procurar arquivo … 
                                        <input id="arquivo" name="arquivo" type="file"><!-- O input file para enviar o arquivo -->
                                </span>
                            </div>
                            <div class="row">
                                <div class="col-lg-10"></div>
                                <div class="col-lg-2">
                                    <input class="btn bg-primary" type="submit" name="Ok">
                               </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>   
                           
        </div>    
    </div>
</body>
</html>



