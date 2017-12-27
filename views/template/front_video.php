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
<div id="video" class="section header-style-3 banner">
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
						<a href="#" class="btn btn-primary available active wow fadeInUp">
							<div class="z-fix">
								<i class="fa fa-apple available-cell" aria-hidden="true"></i>
								<p class="available-cell">Available <span>on App Store</span></p>
							</div>
						</a>
						<a href="#" class="btn btn-primary available wow fadeInUp" data-wow-delay="0.1s">
							<div class="z-fix">
								<i class="fa fa-android available-cell" aria-hidden="true"></i>
								<p class="available-cell">Available <span>on Google Store</span></p>
							</div>
						</a>
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