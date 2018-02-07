<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			 'captcha'=>array(
				'class'=>'CCaptchaAction',
				'transparent'=>true,
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

	public function actionPage(){
		$url = Yii::app()->request->getQuery("url");

header("Content-Type:text/html;charset=utf-8");

		print_r(file_get_contents("compress.zlib://".$url));
	}


	public function actionDom(){
		$this->render('dom');
	}

	public function actionReflected(){
		$this->render('reflected');
	}

	public function actionPersistent(){
		$dataProvider=new CActiveDataProvider('Contact');

		$model=new Contact;

		if(isset($_POST['ajax']) && $_POST['ajax']==='contact-form'){
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		if(isset($_POST['Contact'])) {
			$model->attributes=$_POST['Contact'];
			if($model->validate()) {
				//
				if(!Yii::app()->user->isGuest){
					$model->uid=Yii::app()->user->id;
				}

				if($model->save()){
					Yii::app()->user->setFlash('contact','');
					$this->refresh();
				}
			}
		}
		$this->render('persistent',array('model'=>$model, 'dataProvider'=>$dataProvider));
	}

	public function actionCsrf(){
		$this->render('csrf');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError() {
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}

	public function actionAbout(){
		$this->render('about');
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact() {
		$model=new Contact;

		if(isset($_POST['ajax']) && $_POST['ajax']==='contact-form'){
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		if(isset($_POST['Contact'])) {
			$model->attributes=$_POST['Contact'];
			if($model->validate()) {
				//
				if(!Yii::app()->user->isGuest){
					$model->uid=Yii::app()->user->id;
				}

				if($model->save()){
					Yii::app()->user->setFlash('contact','');
					$this->refresh();
				}
			}
		}
		$this->render('contact',array('model'=>$model));
	}

}
