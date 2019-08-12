<?php 
/**
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @created date 26 December 2017, 20:45 WIB
 * @link https://github.com/OmmuThemes/appic
 *
 */

 $this->beginContent('//layouts/default');
 	Yii::import('webroot.themes.appic.components.*');
	$module = strtolower(Yii::app()->controller->module->id);
	$controller = strtolower(Yii::app()->controller->id);
	$action = strtolower(Yii::app()->controller->action->id);
	$currentAction = strtolower(Yii::app()->controller->id.'/'.Yii::app()->controller->action->id);
	$currentModule = strtolower(Yii::app()->controller->module->id.'/'.Yii::app()->controller->id);
	$currentModuleAction = strtolower(Yii::app()->controller->module->id.'/'.Yii::app()->controller->id.'/'.Yii::app()->controller->action->id);
?>

<?php $this->widget('MenuMain'); //Mainmenu ?>

<?php echo $content;?>

<?php $this->widget('Footer'); //Footer ?>

<?php $this->endContent(); ?>