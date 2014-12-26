<?php
namespace tejrajs\datatable;

use yii\base\Widget;
use yii\helpers\Html;
/**
 * This is just an example.
 */
class DataTable extends \yii\base\Widget
{
	public $message;
	
	public function init(){
		parent::init();
		if($this->message===null){
			$this->message= 'Welcome User';
		}else{
			$this->message= 'Welcome '.$this->message;
		}
	}
	
	public function run(){
		return Html::encode($this->message);
	}
}
