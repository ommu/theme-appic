<?php
/**
 * ContentMain
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @link https://github.com/OmmuThemes/appic
 *
 */

class ContentMain extends CWidget
{
	use FileTrait;

	public $template;
	public $title;
	public $desc;
	public $animation_title;
	public $animation_text;
	public $animation_array;

	public function init() {
		if(!$this->template)
			$this->template = 'static1';
		if(!$this->title)
			$this->title = 'Showcase your software with landing';
		if(!$this->desc)
			$this->desc = 'Praesent ullamcorper viverra malesuada. In malesuada, tellus ut facilisis tristique.';
		if(!$this->animation_title)
			$this->animation_title = 'Showcase your software with';
		if(!$this->animation_text)
			$this->animation_text = 'best way, landing, Appic';
		
		$this->animation_array = $this->formatFileType($this->animation_text);
	}

	public function run() {
		$this->renderContent();
	}

	protected function renderContent() {
		$module = strtolower(Yii::app()->controller->module->id);
		$controller = strtolower(Yii::app()->controller->id);
		$action = strtolower(Yii::app()->controller->action->id);
		$currentAction = strtolower(Yii::app()->controller->id.'/'.Yii::app()->controller->action->id);
		$currentModule = strtolower(Yii::app()->controller->module->id.'/'.Yii::app()->controller->id);
		$currentModuleAction = strtolower(Yii::app()->controller->module->id.'/'.Yii::app()->controller->id.'/'.Yii::app()->controller->action->id);

		if($this->template == 'static1')
			$render = 'content_main_static1';
		else if($this->template == 'static2')
			$render = 'content_main_static2';
		else if($this->template == 'animated')
			$render = 'content_main_animated';
		else if($this->template == 'slider1')
			$render = 'content_main_slider1';
		else if($this->template == 'slider2')
			$render = 'content_main_slider2';
		else if($this->template == 'video')
			$render = 'content_main_video';

		$this->render($render,array(
			'module'=>$module,
			'controller'=>$controller,
			'action'=>$action,
			'currentAction'=>$currentAction,
			'currentModule'=>$currentModule,
			'currentModuleAction'=>$currentModuleAction,
		));
	}
}
