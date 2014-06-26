<?php
class GActiveRecord extends CActiveRecord
{
        
    public function behaviors()
        {
                return array(
                        'GCamposBehavior' => array(
                                'class' => 'ext.campos.GCamposBehavior',
                                'campoFechaCreacion' => 'Fecha',
                                'campoNavegador' => 'Navegador',                                
                                'campoIp' => 'Ip',
                                ),
                );
        }
}     


/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
