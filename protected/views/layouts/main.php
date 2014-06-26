<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="es" />

        <meta name="description" content="Aplicación de Encuestas en Linea Vota Bolivia tu Voto Cuenta que esperas" />
        
        <meta property="og:title" content="Vota Bolivia" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://votabolivia.hol.es/" />
        <meta property="og:image" content="http://votabolivia.hol.es/images/voto.jpg" />
        <meta property="og:site_name" content="Vota Bolivia" />
        <meta property="og:description" content="Aplicación de Encuestas en Linea Vota Bolivia tu Voto Cuenta que esperas" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:description" content="Aplicación de Encuestas en Linea Vota Bolivia tu Voto Cuenta que esperas" />

        <!-- Favicons
================================================== -->
        <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/public/images/favicon.ico">
            <link rel="apple-touch-icon" href="<?php echo Yii::app()->request->baseUrl; ?>/public/images/apple-touch-icon.png">
                <link rel="apple-touch-icon" sizes="72x72" href="<?php echo Yii::app()->request->baseUrl; ?>/public/images/apple-touch-icon-72x72.png">
                    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo Yii::app()->request->baseUrl; ?>/public/images/apple-touch-icon-114x114.png">

                        <!-- blueprint CSS framework -->

                        <?php Yii::app()->bootstrap->register(); ?>  
                        <?php
                        $baseUrl = Yii::app()->baseUrl;
                        $cs = Yii::app()->getClientScript();
                        $cs->registerCssFile($baseUrl . '/public/css/style.css');
                        ?>

                        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
                        <?php //echo CHtml::encode(Yii::app()->name); ?>
                        </head>

                        <body>
                            <?php
                            $this->widget('bootstrap.widgets.TbNavbar', array(
                                'brandLabel' => Yii::app()->name,
                                'color' => TbHtml::NAVBAR_COLOR_INVERSE,
                                'display' => null, // default is static to top
                                'items' => array(
                                    array(
                                        'class' => 'bootstrap.widgets.TbNav',
                                        'items' => array(
                                            array('label' => 'Departamento', 'url' => '#', 'items' => array(
                                                    array('label' => 'Crear', 'url' => array('/departamento/create')),
                                                    array('label' => 'Administrar', 'url' => array('/departamento/admin')),
                                                    array('label' => 'Ver', 'url' => array('/noticias/index')),
                                                ),
                                                'visible' => !Yii::app()->user->isGuest),
                                            array('label' => 'Provincia', 'url' => '#', 'items' => array(
                                                    array('label' => 'Crear', 'url' => array('/provincia/create')),
                                                    array('label' => 'Administrar', 'url' => array('/provincia/admin')),
                                                    array('label' => 'Ver', 'url' => array('/provincia/index')),
                                                ),
                                                'visible' => !Yii::app()->user->isGuest),
                                            array('label' => 'Edad', 'url' => '#', 'items' => array(
                                                    array('label' => 'Crear', 'url' => array('/edad/create')),
                                                    array('label' => 'Administrar', 'url' => array('/edad/admin')),
                                                    array('label' => 'Ver', 'url' => array('/edad/index')),
                                                ),
                                                'visible' => !Yii::app()->user->isGuest),
                                            array('label' => 'Formacion', 'url' => '#', 'items' => array(
                                                    array('label' => 'Crear', 'url' => array('/formacion/create')),
                                                    array('label' => 'Administrar', 'url' => array('/formacion/admin')),
                                                    array('label' => 'Ver', 'url' => array('/formacion/index')),
                                                ),
                                                'visible' => !Yii::app()->user->isGuest),
                                            array('label' => 'Sexo', 'url' => '#', 'items' => array(
                                                    array('label' => 'Crear', 'url' => array('/sexo/create')),
                                                    array('label' => 'Administrar', 'url' => array('/sexo/admin')),
                                                    array('label' => 'Ver', 'url' => array('/sexo/index')),
                                                ),
                                                'visible' => !Yii::app()->user->isGuest),
                                            array('label' => 'Ocupacion', 'url' => '#', 'items' => array(
                                                    array('label' => 'Crear', 'url' => array('/Ocupacion/create')),
                                                    array('label' => 'Administrar', 'url' => array('/Ocupacion/admin')),
                                                    array('label' => 'Ver', 'url' => array('/Ocupacion/index')),
                                                ),
                                                'visible' => !Yii::app()->user->isGuest),
                                            array('label' => 'Candidato', 'url' => '#', 'items' => array(
                                                    array('label' => 'Crear', 'url' => array('/candidato/create')),
                                                    array('label' => 'Administrar', 'url' => array('/candidato/admin')),
                                                    array('label' => 'Ver', 'url' => array('/candidato/index')),
                                                ),
                                                'visible' => !Yii::app()->user->isGuest),
                                            array('label' => 'Voto', 'url' => '#', 'items' => array(
                                                    array('label' => 'Crear', 'url' => array('/voto/create')),
                                                    array('label' => 'Administrar', 'url' => array('/voto/admin')),
                                                    array('label' => 'Ver', 'url' => array('/voto/index')),
                                                ),
                                                'visible' => !Yii::app()->user->isGuest),
                                            //array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                                            array('label' => 'Inicio', 'url' => array('/voto/portada'), 'visible' => true),
                                            array('label' => 'Voto', 'url' => array('/voto/create'), 'visible' => true),
                                            array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                                        ),
                                    ),
                                ),
                            ));
                            ?>   


                            <div class="container" id="wrap">

                                <?php if (isset($this->breadcrumbs)): ?>
                                    <?php
                                    $this->widget('zii.widgets.CBreadcrumbs', array(
                                        'links' => $this->breadcrumbs,
                                    ));
                                    ?><!-- breadcrumbs -->
                                <?php endif ?>

                                <?php echo $content; ?>

                                <div class="clear"></div>
                            </div><!-- page -->
                            
                                <footer class="padding">
                                    <div class="container text-center">
                                        &copy; Company 2014
                                    </div>
                                </footer>
                            




                        </body>
                        </html>
