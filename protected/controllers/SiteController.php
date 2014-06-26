<?php

class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
             'coco'=>array(
                'class'=>'CocoAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->render('index');
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact() {
        $this->layout = '//layouts/column2';
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $data = new Mensaje();
                $data->nombre = $model->name;
                $data->subject = $model->subject;
                $data->email = $model->email;
                $data->mensaje = $model->body;
                $data->estado = 'Nuevo';


                if ($data->save()) {
                    Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                    $this->redirect(array('contact'));
                }
            }
        }
        $this->render('contact', array('model' => $model));
    }

    public function actionCreate() {
        $model = new Usuario;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Usuario'])) {

            $model->attributes = $_POST['Usuario'];
            $model->password = $model->hashPassword($_POST['Usuario']['password'], $session = $model->generateSalt());
            $model->session = $session;

            if ($model->save()) {
                $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /*         public function actionContacto()
      {
      $this->layout = '//layouts/column2';
      $model=new ContactForm;
      if(isset($_POST['ContactForm']))
      {
      $model->attributes=$_POST['ContactForm'];
      if($model->validate())
      {
      $name='=?UTF-8?B?'.base64_encode($model->name).'?=';
      $subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
      $headers="From: $name <{$model->email}>\r\n".
      "Reply-To: {$model->email}\r\n".
      "MIME-Version: 1.0\r\n".
      "Content-Type: text/plain; charset=UTF-8";

      mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
      Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
      $this->refresh();


      }
      }
      $this->render('contacto',array('model'=>$model));
      }
     */

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

    public function actionImagen() {

     /*   Yii::import('ext.feed.*');

// specify feed type
        $feed = new EFeed(EFeed::RSS1);
        $feed->title = 'Testing the RSS 1 EFeed class';
        $feed->link = 'http://www.ramirezcobos.com';
        $feed->description = 'This is test of creating a RSS 1.0 feed by Universal Feed Writer';
        $feed->RSS1ChannelAbout = 'http://www.ramirezcobos.com/about';
// create our item  
        $item = $feed->createNewItem();
        $item->title = 'The first feed';
        $item->link = 'http://www.yiiframework.com';
        $item->date = time();
        $item->description = 'Amaz-ii-ng <b>Yii Framework</b>';
        $item->addTag('dc:subject', 'Subject Testing');

        $feed->addItem($item);

        $feed->generateFeed();*/
        
        
    /*    
        Yii::import('ext.feed.*');
// RSS 2.0 is the default type
$feed = new EFeed();
 
$feed->title= 'Testing RSS 2.0 EFeed class';
$feed->description = 'This is test of creating a RSS 2.0 Feed';
 
$feed->setImage('Testing RSS 2.0 EFeed class','http://www.ramirezcobos.com/rss',
'http://www.yiiframework.com/forum/uploads/profile/photo-7106.jpg');
 
$feed->addChannelTag('language', 'en-us');
$feed->addChannelTag('pubDate', date(DATE_RSS, time()));
$feed->addChannelTag('link', 'http://www.ramirezcobos.com/rss' );
 
// * self reference
/*$feed->addChannelTag('atom:link','http://www.ramirezcobos.com/rss/'); //error en esta linea
*/ /*
$item = $feed->createNewItem();
 
$item->title = "first Feed";
$item->link = "http://www.yahoo.com";
$item->date = time();
$item->description = 'This is test of adding CDATA Encoded description <b>EFeed Extension</b>';
// this is just a test!!
$item->setEncloser('http://www.tester.com', '1283629', 'audio/mpeg');
 
$item->addTag('author', 'thisisnot@myemail.com (Antonio Ramirez)');
$item->addTag('guid', 'http://www.ramirezcobos.com/',array('isPermaLink'=>'true'));
 
$feed->addItem($item);
 
$feed->generateFeed();
Yii::app()->end();*/




/*
Yii::import('ext.feed.*');
 
 
$feed = new EFeed(EFeed::ATOM);
 
// IMPORTANT : No need to add id for feed or channel. It will be automatically created from link.
$feed->title = 'Testing the ATOM RSS EFeed class';
$feed->link = 'http://www.ramirezcobos.com';
 
$feed->addChannelTag('updated', date(DATE_ATOM, time()));
$feed->addChannelTag('author', array('name'=>'Antonio Ramirez Cobos'));
 
$item = $feed->createNewItem();
 
$item->title = 'The first Feed';
$item->link  = 'http://www.ramirezcobos.com';
// we can also insert well formatted date strings
$item->date ='2010/24/12';
$item->description = 'Test of CDATA Encoded description <b>EFeed Extension</b>';
 
$feed->addItem($item);
 
$feed->generateFeed();*/
   
        
        $dataProvider=new CActiveDataProvider('Noticias');

	
        
        $this->render('imagen',compact('model','dataProvider'));
        
        
        
    }

}