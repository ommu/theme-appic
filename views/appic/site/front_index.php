<?php
/**
 * @var $this AppicController
 * @var $error array
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @link https://github.com/OmmuThemes/appic
 *
 */

	$this->breadcrumbs=array(
		'Main',
	);
?>

<?php //begin.head-text-area ?>
<div class="section site-header header-style-3 banner landing">
	<svg viewBox="0 0 100 23">
		<path fill="#ffffff" d="M0 30 V12 Q30 17 55 12 T100 11 V30z"></path>
	</svg>
	<div class="container">
		<div class="row">
			<div class="col-md-offset-1 col-lg-10">
				<div class="head-text-area type-3 text-center">
					<div class="h-text-inner">
						<h1 class="type-headings wow fadeInDown">
						<?php echo Yii::t('phrase', 'Showcase your software with Appic');?>
						</h1>
						<p class="excerpt wow fadeIn cd-headline slide">
							<span class="cd-words-wrapper">
							  <b class="is-visible"><?php echo Yii::t('phrase', 'Modern, flexible, well crafted HTML template');?></b>
							  <b><?php echo Yii::t('phrase', 'Beautiful and unique concepts');?></b>
							  <b><?php echo Yii::t('phrase', 'Powered by Bootstrap framework');?></b>
							</span>
						</p>
						<a href="#demos" class="btn btn-primary action-btn wow fadeInUp"><span><?php echo Yii::t('phrase', 'WATH DEMOS');?></span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php //begin.DEMOS ?>
<div id="demos" class="section intro pad">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="demo-box wow fadeIn">
					<a href="<?php echo Yii::app()->createUrl('appictemplate/static1');?>" target="_blank"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/preview/demo1.jpg" alt=""></a>
					<h4 class="demo-title"><?php echo Yii::t('phrase', 'Static Image 1');?></h4>
				</div>
			</div>
			<div class="col-md-4">
				<div class="demo-box wow fadeIn" data-wow-delay="0.1s">
					<a href="<?php echo Yii::app()->createUrl('appictemplate/static2');?>" target="_blank"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/preview/demo2.jpg" alt=""></a>
					<h4 class="demo-title"><?php echo Yii::t('phrase', 'Static Image 2');?></h4>
				</div>
			</div>
			<div class="col-md-4">
				<div class="demo-box wow fadeIn" data-wow-delay="0.2s">
					<a href="<?php echo Yii::app()->createUrl('appictemplate/animated');?>" target="_blank"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/preview/demo3.jpg" alt=""></a>
					<h4 class="demo-title"><?php echo Yii::t('phrase', 'Animated Headlines');?></h4>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="demo-box wow fadeIn">
					<a href="<?php echo Yii::app()->createUrl('appictemplate/slider1');?>" target="_blank"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/preview/demo4.jpg" alt=""></a>
					<h4 class="demo-title"><?php echo Yii::t('phrase', 'Slider 1');?></h4>
				</div>
			</div>
			<div class="col-md-4">
				<div class="demo-box wow fadeIn" data-wow-delay="0.1s">
					<a href="<?php echo Yii::app()->createUrl('appictemplate/slider2');?>" target="_blank"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/preview/demo5.jpg" alt=""></a>
					<h4 class="demo-title"><?php echo Yii::t('phrase', 'Slider 2');?></h4>
				</div>
			</div>
			<div class="col-md-4">
				<div class="demo-box wow fadeIn" data-wow-delay="0.2s">
					<a href="<?php echo Yii::app()->createUrl('appictemplate/video');?>" target="_blank"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/preview/demo6.jpg" alt=""></a>
					<h4 class="demo-title"><?php echo Yii::t('phrase', 'Video Background');?></h4>
				</div>
			</div>
		</div>
	</div>
</div>

<?php //begin.FOOTER ?>
<div class="section footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="text-center">
					<h4 class="demo-title white">
						<?php echo Yii::t('phrase', 'Create Your Website With Our Mobile App Template');?>
					</h4>
					<a href="https://github.com/OmmuThemes/appic" target="_blank" class="btn btn-primary action-btn wow fadeInUp"><span><?php echo Yii::t('phrase', 'Get Now!');?></span></a>
				</div>
			</div>
		</div>
	</div>
</div>