<?php 
/**
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @created date 26 December 2017, 20:45 WIB
 * @link https://github.com/OmmuThemes/appic
 *
 */

 $this->beginContent('//layouts/default');
	Yii::import('webroot.themes.'.Yii::app()->theme->name.'.components.*');
	$module = strtolower(Yii::app()->controller->module->id);
	$controller = strtolower(Yii::app()->controller->id);
	$action = strtolower(Yii::app()->controller->action->id);
	$currentAction = strtolower(Yii::app()->controller->id.'/'.Yii::app()->controller->action->id);
	$currentModule = strtolower(Yii::app()->controller->module->id.'/'.Yii::app()->controller->id);
	$currentModuleAction = strtolower(Yii::app()->controller->module->id.'/'.Yii::app()->controller->id.'/'.Yii::app()->controller->action->id);
?>

<?php //begin.HEADER ?>
<div id="header" class="header-style">
	<?php //begin.NAVBAR SECTION ?>
	<div class="navbar navbar-main navbar_c1">
		<div class="container container-nav">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html">
					<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/logo.png" alt="" />
				</a>
			</div>
			<nav class="collapse navbar-collapse" id="navbar" data-hover="dropdown" data-animations="fadeInDownNew fadeInRightNew fadeInUpNew fadeInLeftNew">
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="#header">Home</a> </li>
					<li> <a href="#info">Work</a> </li>
					<li> <a href="#feautures">Feautures</a> </li>
					<li> <a href="#download">Downloads</a> </li>
					<li> <a href="#faqs">Faqs</a></li>
					<li> <a href="#contact">Contact Us</a></li>
				</ul>
			</nav>
		</div>
	</div>
</div>

<?php echo $content;?>

<?php $this->widget('Footer'); //Footer ?>

<?php $this->endContent(); ?>