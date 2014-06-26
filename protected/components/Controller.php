<?php

/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController {

    /**
     * @var string the default layout for the controller view. Defaults to '//layouts/column1',
     * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
     */
    public $layout = '//layouts/column1';

    /**
     * @var array context menu items. This property will be assigned to {@link CMenu::items}.
     */
    public $menu = array();

    /**
     * @var array the breadcrumbs of the current page. The value of this property will
     * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
     * for more details on how to specify this property.
     */
    public $breadcrumbs = array();

    /**
     * @var array the breadcrumbs of the current page. The value of this property will
     * be assigned to seo
     * for more details on how to specify this property.
     */
    public $metaDescription="Sixpack Producciones empresa productora musical y eventos, contamos con sala de ensayo unicas en Santa Cruz - Bolivia que esperas.";
    public $metaKeywords="productora musical, santa cruz, bolivia, sixpack producciones, evento, sala de ensayo";

    public function getMetaDescription() {
        if (!$this->metaDescription)
            return Yii::app()->settings->getValue('meta_description'); //return default description
        return $this->metaDescription;
    }

    public function getMetaKeywords() {
        if (!$this->metaKeywords)
            return Yii::app()->settings->getValue('meta_keywords'); //return default keywords   
        return $this->metaKeywords;
    }

}