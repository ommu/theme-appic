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
<div class="section site-header header-style-3 banner">
	<svg viewBox="0 0 100 23">
		<path fill="#ffffff" d="M0 30 V12 Q30 17 55 12 T100 11 V30z"></path>
	</svg>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="head-text-area type-3 text-center">
					<div class="h-text-inner">
						<h2 class="type-headings wow fadeInDown cd-headline slide"><span>Showcase your software with</span>
							<span class="cd-words-wrapper">
							<b class="is-visible">best way</b>
							<b>landing</b>
							<b>Appic</b>
							</span>
						</h2>
						<p class="excerpt">Praesent ullamcorper viverra malesuada. In malesuada, tellus ut facilisis tristique.</p>
						<a href="#" class="btn btn-primary action-btn wow fadeInUp"><span>GET STARTED</span></a>
					</div>
				</div>
			</div>
		</div>
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