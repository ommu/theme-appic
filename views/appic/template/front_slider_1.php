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
<div id="slides" class="section banner header-style-3">
	<ul class="slides-container">
		<li>
			<div class="banner-slide" style="background: url(<?php echo Yii::app()->theme->baseUrl;?>/images/samuel-schwendener-226132.jpg) no-repeat center center / cover;">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="head-text-area type-3 text-center">
								<div class="h-text-inner">
									<h2 class="type-headings wow fadeInDown" data-animation-in="fadeInUp">Showcase your software with landing</h2>
									<p class="excerpt wow fadeIn" data-animation-in="fadeIn">Praesent ullamcorper viverra malesuada. In malesuada, tellus ut facilisis tristique.</p>
									<a href="#" class="btn btn-primary action-btn wow fadeInUp" data-animation-in="fadeInUp"><span>GET STARTED</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</li>
		<li>
			<div class="banner-slide" style="background: url(<?php echo Yii::app()->theme->baseUrl;?>/images/preview/teemu-paananen-376238b.jpg) no-repeat center center / cover;">
				<div class="container">
					<div class="row">
						<div class="col-lg-offset-2 col-lg-8">
							<div class="head-text-area type-3 text-center">
								<div class="h-text-inner">
									<h2 class="type-headings wow fadeInDown" data-animation-in="fadeInUp">View Demo</h2>
									<a href="https://player.vimeo.com/video/139021324" class="play popup-vimeo wow fadeIn" data-animation-in="fadeIn">
										<i class="fa fa-play wow fadeIn" data-animation-in="fadeIn" aria-hidden="true"></i>
									</a>
									<p class="excerpt wow fadeInUp" data-animation-in="fadeInUp">Praesent ullamcorper viverra malesuada. In malesuada, tellus ut facilisis tristique, magna risus consectetur libero, in sagittis libero turpis non mi.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</li>
		<li>
			<div class="banner-slide" style="background: url(<?php echo Yii::app()->theme->baseUrl;?>/images/preview/goran-ivos-245581b.jpg) no-repeat center center / cover;">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="head-text-area type-3 text-center">
								<div class="h-text-inner">
									<h2 class="type-headings wow fadeInDown" data-animation-in="fadeInUp">Download awesome Appic today!</h2>
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
		</li>
	</ul>

	<nav class="slides-navigation">
		<a href="#" class="next">
			<i class="fa fa-chevron-right"></i>
		</a>
		<a href="#" class="prev">
			<i class="fa fa-chevron-left"></i>
		</a>
	</nav>
	
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