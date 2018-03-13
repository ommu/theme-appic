<?php
/**
 * @var $this SiteController
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2012 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/ommu/ommu
 *
 */

	Yii::import('webroot.themes.'.Yii::app()->theme->name.'.components.*');

	$condition = 0;
	$model = OmmuThemes::model()->findByAttributes(array(
		'default_theme'=>1,
		'folder'=>Yii::app()->theme->name,
	));
	$configTheme = unserialize($model->config);
	if($model != null && is_array($configTheme) && !empty($configTheme))
		$condition = 1;
?>

<?php $this->widget('ContentMain', array(
	'template' => $configTheme['template']['option'],
	'title' => $configTheme['template']['title'],
	'desc' => $configTheme['template']['desc'],
	'animation_title' => $configTheme['template']['animation-title'],
	'animation_text' => $configTheme['template']['animation-text'],
)); //Main ?>

<?php if(!$condition || in_array($configTheme['intro']['publish'], array('', 1))) {
	$this->widget('ContentIntro');
} //Intro ?>

<?php if(!$condition || in_array($configTheme['workinfo']['publish'], array('', 1))) {
	$this->widget('ContentWorkInfo', array(
		'title' => $configTheme['workinfo']['title'],
		'desc' => $configTheme['workinfo']['desc'],
	));
 } //WorkInfo ?>

<?php if(!$condition || in_array($configTheme['feature']['publish'], array('', 1))) {
	$this->widget('ContentFeature', array(
		'title' => $configTheme['feature']['title'],
		'desc' => $configTheme['feature']['desc'],
	));
} //Features ?>

<?php if(!$condition || in_array($configTheme['video']['publish'], array('', 1))) {
	$this->widget('ContentVideo', array(
		'source' => $configTheme['video']['source'],
	));
} //Video ?>

<?php if(!$condition || in_array($configTheme['screenshot']['publish'], array('', 1))) {
	$this->widget('ContentScreenshot', array(
		'title' => $configTheme['screenshot']['title'],
		'desc' => $configTheme['screenshot']['desc'],
	));
} //Screenshot ?>

<?php if(!$condition || in_array($configTheme['team']['publish'], array('', 1))) {
	$this->widget('ContentTeam', array(
		'title' => $configTheme['team']['title'],
		'desc' => $configTheme['team']['desc'],
	));
} //Team ?>

<?php if(!$condition || in_array($configTheme['testimony']['publish'], array('', 1))) {
	$this->widget('ContentTestimonial', array(
		'title' => $configTheme['testimony']['title'],
		'desc' => $configTheme['testimony']['desc'],
	));
} //Testimonial ?>

<?php if(!$condition || in_array($configTheme['price']['publish'], array('', 1))) {
	$this->widget('ContentPrice', array(
		'title' => $configTheme['price']['title'],
		'desc' => $configTheme['price']['desc'],
	));
} //Price ?>

<?php if(!$condition || in_array($configTheme['download']['publish'], array('', 1))) {
	$this->widget('ContentDownload', array(
		'title' => $configTheme['download']['title'],
		'desc' => $configTheme['download']['desc'],
	));
} //Download ?>

<?php if(!$condition || in_array($configTheme['faq']['publish'], array('', 1))) {
	$this->widget('ContentFaqs', array(
		'title' => $configTheme['faq']['title'],
		'desc' => $configTheme['faq']['desc'],
	));
} //Faqs ?>

<?php if(!$condition || in_array($configTheme['newsletter']['publish'], array('', 1))) {
	$this->widget('ContentNewsletter');
} //Newsletter ?>

<?php if(!$condition || in_array($configTheme['contact-us']['publish'], array('', 1))) {
	$this->widget('ContentContactUs', array(
		'title' => $configTheme['contact-us']['title'],
		'desc' => $configTheme['contact-us']['desc'],
	));
} //ContentContactUs ?>