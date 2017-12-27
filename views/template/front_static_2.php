<?php
/**
 * @var $this TemplateController
 * @var $error array
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/OmmuThemes/appic
 *
 */

	$this->breadcrumbs=array(
		'Main',
	);
	Yii::import('webroot.themes.'.Yii::app()->theme->name.'.components.*');
?>

<?php //begin.head-text-area ?>
<div class="section site-header header-style-2 banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="head-text-area type-2 text-center">
					<div class="h-text-inner">
						<h2 class="type-headings wow fadeInDown">Showcase your software with landing</h2>
						<p class="excerpt">Praesent ullamcorper viverra malesuada. In malesuada, tellus ut facilisis tristique.</p>
						<a href="#" class="btn btn-primary action-btn wow fadeInUp"><span>GET STARTED</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="first-circle hidden-xs hidden-sm">
		<div class="second-circle"></div>
	</div>
	<div class="head-img-inner hidden-xs hidden-sm">
		<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/preview/mockfeau-2.png" alt="">
	</div>
</div>

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