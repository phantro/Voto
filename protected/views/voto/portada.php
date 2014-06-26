<?php
/* @var $this VotoController */
?>
</div>

<section class="padding theme landing">
    <div class="container" id="wrap">
        <!-- Main hero unit for a primary marketing message or call to action -->
        <div>
            <h1><strong>Vota</strong>Bolivia!</h1>
            <h2>Aplicación para Encuestas de las Elecciones Presidenciales 2014<a href="<?php echo Yii::app()->createUrl('voto/create'); ?>"> Votar.</a></h2>
            <div class="row-fluid">
                <div class="span2">&nbsp;</div>
                <div class="span4">
                    <a href="<?php echo Yii::app()->createUrl('voto/create'); ?>" class="btn btn-primary btn-large btn-block">Vota Bolivia &raquo;</a>
                </div>
                <div class="span4">
                    <a href="#" class="btn btn-large btn-block">Resultados</a>
                </div>
                <div class="span2">&nbsp;</div>
            </div>
        </div>
    </div> <!-- /container -->
</section>


<section class="espacio">
    <div class="container">
        <div class="row">
            <h1 align="center">Equipo de Desarrollo</h1>
            <br/>

            <div class="span3 text-center">
                <?php echo TbHtml::imageCircle(Yii::app()->baseUrl . '/images/imagen.jpg'); ?>
                <h3>Franz Robert Miranda</h3>
                <p>Developers</p>
                
            </div>
            <div class="span3 text-center">
                <?php echo TbHtml::imageCircle(Yii::app()->baseUrl . '/images/imagen.jpg'); ?>
                <h3>Cesar Gutierrez Olmos</h3>
                <p>Developers</p>

            </div>
            <div class="span3 text-center">
                <?php echo TbHtml::imageCircle(Yii::app()->baseUrl . '/images/imagen.jpg'); ?>
                <h3>Franz Carlos Canaviri</h3>
                <p>Developers</p>

            </div>
            <div class="span3 text-center">
                <?php echo TbHtml::imageCircle(Yii::app()->baseUrl . '/images/imagen.jpg'); ?>
                <h3>Ismael Cardenas</h3>
                <p>Developers</p>

            </div>
        </div>
    </div>
</section>

<section class="espacio">
    <div class="container">
        <div class="row">
            <h1 align="center">Products Owner</h1>
            <br/>

            <div align="center" class="text-center">
                <?php echo TbHtml::imageCircle(Yii::app()->baseUrl . '/images/mujer.jpg'); ?>
                <h3>Flor Lurici</h3>
                <p>Products Owner</p>
                
            </div>
           
        </div>
    </div>
</section>