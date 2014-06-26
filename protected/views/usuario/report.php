<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'usuario-grid',
	'dataProvider'=>$dataProvider,
	'filter'=>$model,       
	'columns'=>array(
		'id',
		'username',
		'password',
		'email',
		'session',
		'profile',
		/*
		'nombre',
		'apellido',
		'telefono',
		'celular',
		'acceso',
		'estado',
		'fecha',
		'grupo',
		'verficado',
		'ip',
		'modificado',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); 

