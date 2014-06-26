<?php

/**
 * addThis widget class file.
 *
 * @author Thiago Otaviani Vidal <thiagovidal@gmail.com>
 * @link http://www.2tov.com
 * @copyright Copyright &copy; 2010 under GPL version 3
 * MADE IN BRAZIL
 */

/**
 * addThis extends CWidget and implements a base class for a simple addThis widget.
 * more about addThis can be found on http://www.addthis.com
 * addThis API document can be fount on http://www.addthis.com/help/api-overview
 * @version $Id: 1.0
 */
class addThis extends CWidget {

    // @var string valid url of addThis script. Defaults to 'http://s7.addthis.com/js/250/addthis_widget.js'.
    public $scriptUrl = 'http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52fd523b198099c0';
    // @var boolean whether the default addThis button is visible. Defaults to true.
    public $showDefaultButton = true;
    // @var boolean whether the default addThis button caption is visible. Defaults to true.
    public $showDefaultButtonCaption = true;
    // @var array the addThis div tag attributes.
    public $htmlOptions = array();
    // @var array the addThis services to show.
    public $showServices = array();
    // @var boolean whether the services name 
    public $showServicesTitle = false;
    // @var array the addThis cofig parameters.
    public $config = array();
    // @var array the addThis share parameters.
    public $share = array();

    /**
     * Run the addThis widget.
     * This renders the body part of the assThis widget.
     */
    function run() {
        // Run parent CWidget run function.
        parent::run();

        // Get this widget id.
        $id = $this->getId();

        // Set this widget id.
        $this->htmlOptions['id'] = $id;
        // Set the default 'class' attribute of addThis 'div' otherwise add users custom 'class' attribute.
        empty($this->htmlOptions['class']) ? $this->htmlOptions['class'] = 'addthis_toolbox addthis_default_style addthis_32x32_style' : $this->htmlOptions['class'] = '' . $this->htmlOptions['class'];
        // Open default addThis div tag with htmlOptions.
        echo CHtml::openTag('div', $this->htmlOptions) . "\n";
        // Open default addThis button if showDefaultButton is set to true.
        // Check what services to show.
        if (isset($this->showServices)) {
            if ($this->showServicesTitle) {

                echo CHtml::openTag('a', array('class' => "addthis_button_facebook_like", 'fb:like:layout' => "button_count"));
                echo CHtml::closeTag('a') . "\n";
                echo CHtml::openTag('a', array('class' => "addthis_button_facebook_share", 'fb:share:layout' => "button_count"));
                echo CHtml::closeTag('a') . "\n";
                echo CHtml::openTag('a', array('class' => "addthis_button_facebook_send"));
                echo CHtml::closeTag('a') . "\n";
                echo CHtml::openTag('a', array('class' => "addthis_button_google_plusone", 'g:plusone:size' => "medium"));
                echo CHtml::closeTag('a') . "\n";
                echo CHtml::openTag('a', array('class' => "addthis_button_linkedin_counter"));
                echo CHtml::closeTag('a') . "\n";
                echo CHtml::openTag('a', array('class' => "addthis_counter addthis_pill_style"));
                echo CHtml::closeTag('a') . "\n";

            } else {
                foreach ($this->showServices as $i) {
                    echo CHtml::openTag('a', array('class' => "addthis_button_{$i}"));
                    echo CHtml::closeTag('a') . "\n";
                }
            }
            // Destroy @var showServices.
            unset($this->showServices);
        }
        if ($this->showDefaultButton) {

            echo CHtml::openTag('a', array('class' => "addthis_button_compact"));
            echo CHtml::closeTag('a') . "\n";

            echo CHtml::openTag('a', array('class' => "addthis_counter addthis_bubble_style"));
            echo CHtml::closeTag('a') . "\n";
        }
        // Close default addThis div tag.
        echo CHtml::closeTag('div');
        echo '<!-- AddThis id:{$this->id}-->';
        // Register script file, addThis config and share if are set.

        Yii::app()->clientScript->registerScriptFile($this->scriptUrl);
        // Check if addThis $config parametes are set if true place them.
        if (!empty($this->config)) {
            $config = CJavaScript::encode($this->config);
            Yii::app()->getClientScript()->registerScript(__CLASS__ . '#' . $id, "var addthis_config={$config};", false);
        }
        // Destroy addThis #config parameters.
        unset($this->config);
        // Check if addThis $share parametes are set if true place them.
        if (!empty($this->share)) {
            $share = CJavaScript::encode($this->share);
            Yii::app()->getClientScript()->registerScript(__CLASS__ . '#' . $id, "var addthis_share={$share};", false);
        }
        // Destroy addThis #share parameters.
        unset($this->share);
    }

}

