<?php
/**
 * @var $this TemplateController
 * @var $error array
 *
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)811-2540-432
 * @copyright Copyright (c) 2017 OMMU (www.ommu.id)
 * @link https://github.com/OmmuThemes/appic
 *
 */

	$this->breadcrumbs=array(
		'Main',
	);
	Yii::import('webroot.themes.appic.components.*');
?>

<?php $this->widget('ContentMain', array(
	'template'=>'static1',
)); //Main ?>
<?php $this->widget('ContentIntro'); //Intro ?>
<?php $this->widget('ContentWorkInfo'); //WorkInfo ?>
<?php $this->widget('ContentFeature'); //Features ?>
<?php $this->widget('ContentVideo'); //Video ?>
<?php $this->widget('ContentScreenshot'); //Screenshot ?>
<?php $this->widget('ContentTeam'); //Team ?>
<?php $this->widget('ContentTestimonial'); //Testimonial ?>
<?php $this->widget('ContentPrice'); //Price ?>
<?php $this->widget('ContentDownload'); //Download ?>
<?php $this->widget('ContentFaqs'); //Faqs ?>
<?php $this->widget('ContentNewsletter'); //Newsletter ?>
<?php $this->widget('ContentContactUs'); //ContentContactUs ?>