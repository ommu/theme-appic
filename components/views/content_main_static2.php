<?php
/**
 * @var $this ContentMain
 * version: 0.0.1
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/OmmuThemes/appic
 *
 */
?>

<?php //begin.head-text-area ?>
<div class="section site-header header-style-2 banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="head-text-area type-2 text-center">
					<div class="h-text-inner">
						<h2 class="type-headings wow fadeInDown"><?php echo $this->title;?></h2>
						<p class="excerpt"><?php echo $this->desc;?></p>
						<a href="#" class="btn btn-primary action-btn wow fadeInUp"><span><?php echo Yii::t('phrase', 'GET STARTED');?></span></a>
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