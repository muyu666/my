<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class GameController extends Controller{

	public function actionIndex(){
		return $this->render('add');
	}

	public function actionAdd_do(){

		$name = Yii::$app->request->post('name');
		$phone = Yii::$app->request->post('phone');
		$email = Yii::$app->request->post('email');
		$num = Yii::$app->request->post('num');

		$time = date("Y-m-d H:i:s",time());
		// var_dump($time);exit;
		$type = Yii::$app->request->post('type');
		// echo json_encode($type);die;
		
		$sql = "insert into person (name,phone,email,num,time,type) values('$name','$phone','$email','$num','$time','$type')";
		$data = Yii::$app->db->createCommand($sql)->execute();
		
		if ($data) {
			echo json_encode("true");
		}
			
	}

	public function actionShow(){

		$name = Yii::$app->request->post('name');
		$phone = Yii::$app->request->post('phone');
		$email = Yii::$app->request->post('email');
		$num = Yii::$app->request->post('num');

		$time = date("Y-m-d H:i:s",time());
		// var_dump($time);exit;
		$type = Yii::$app->request->post('type');

		$sql = "select * from person";
		$data =Yii::$app->db->createCommand($sql)->queryAll();

		return $this->render('list',['data'=>$data]);
	}

	public function actionUpd(){
		$id = Yii::$app->request->get('id');
		// var_dump($id);die;
		$data = Yii::$app->db->createCommand("select * from person")->queryAll();

		return $this->render('update',['data'=>$data]);
	}

	public function actionCha(){

		$data = "select * from person";
		if ($data) {
			echo json_encode('true');
		}
	}
}