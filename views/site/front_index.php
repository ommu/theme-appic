<?php
/**
 * @var $this SiteController
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2012 Ommu Platform (www.ommu.co)
 * @link https://github.com/ommu/ommu
 *
 */

	Yii::import('webroot.themes.appic.components.*');
	$configTheme = Yii::app()->controller->themeSetting;
?>

<?php $this->widget('ContentMain', array(
	'template' => $configTheme['template']['option'],
	'title' => $configTheme['template']['title'],
	'desc' => $configTheme['template']['desc'],
	'animation_title' => $configTheme['template']['animation-title'],
	'animation_text' => $configTheme['template']['animation-text'],
)); //Main ?>

<?php if($configTheme['intro']['publish'] != 0) {
	$this->widget('ContentIntro');
} //Intro ?>

<?php if($configTheme['workinfo']['publish'] != 0) {
	$this->widget('ContentWorkInfo', array(
		'title' => $configTheme['workinfo']['title'],
		'desc' => $configTheme['workinfo']['desc'],
	));
 } //WorkInfo ?>

<?php if($configTheme['feature']['publish'] != 0) {
	$this->widget('ContentFeature', array(
		'title' => $configTheme['feature']['title'],
		'desc' => $configTheme['feature']['desc'],
	));
} //Features ?>

<?php if($configTheme['video']['publish'] != 0) {
	$this->widget('ContentVideo', array(
		'source' => $configTheme['video']['source'],
	));
} //Video ?>

<?php if($configTheme['screenshot']['publish'] != 0) {
	$this->widget('ContentScreenshot', array(
		'title' => $configTheme['screenshot']['title'],
		'desc' => $configTheme['screenshot']['desc'],
	));
} //Screenshot ?>

<?php if($configTheme['team']['publish'] != 0) {
	$this->widget('ContentTeam', array(
		'title' => $configTheme['team']['title'],
		'desc' => $configTheme['team']['desc'],
	));
} //Team ?>

<?php if($configTheme['testimony']['publish'] != 0) {
	$this->widget('ContentTestimonial', array(
		'title' => $configTheme['testimony']['title'],
		'desc' => $configTheme['testimony']['desc'],
	));
} //Testimonial ?>

<?php if($configTheme['price']['publish'] != 0) {
	$this->widget('ContentPrice', array(
		'title' => $configTheme['price']['title'],
		'desc' => $configTheme['price']['desc'],
	));
} //Price ?>

<?php if($configTheme['download']['publish'] != 0) {
	$this->widget('ContentDownload', array(
		'title' => $configTheme['download']['title'],
		'desc' => $configTheme['download']['desc'],
	));
} //Download ?>

<?php if($configTheme['faq']['publish'] != 0) {
	$this->widget('ContentFaqs', array(
		'title' => $configTheme['faq']['title'],
		'desc' => $configTheme['faq']['desc'],
	));
} //Faqs ?>

<?php if($configTheme['newsletter']['publish'] != 0) {
	$this->widget('ContentNewsletter');
} //Newsletter ?>

<?php if($configTheme['contact-us']['publish'] != 0) {
	$this->widget('ContentContactUs', array(
		'title' => $configTheme['contact-us']['title'],
		'desc' => $configTheme['contact-us']['desc'],
	));
} //ContentContactUs ?>