<?php
/**
 * @var $this ContentDownload
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @link https://github.com/OmmuThemes/appic
 *
 */
?>

<?php //begin.DOWNLOAD ?>
<div id="download" class="section pad download white">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6">
				<div class="center-img wow fadeIn">
					<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/preview/Iphone-7.png" alt="">
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="content-pad">
					<div class="section-heading">
						<h2 class="white wow fadeInUp"><?php echo $this->title;?></h2>
						<p class="white wow fadeInUp"><?php echo $this->desc;?></p>
					</div>
					<a href="#" class="btn btn-primary available active wow fadeInUp">
						<div class="z-fix">
							<i class="fa fa-apple available-cell" aria-hidden="true"></i>
							<p class="available-cell"><?php echo Yii::t('phrase', 'Available <span>{string}</span>', array('{string}'=>'on App Store'));?> </p>
						</div>
					</a>
					<a href="#" class="btn btn-primary available wow fadeInUp">
						<div class="z-fix">
							<i class="fa fa-android available-cell" aria-hidden="true"></i>
							<p class="available-cell"><?php echo Yii::t('phrase', 'Available <span>{string}</span>', array('{string}'=>'on Google Store'));?></p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>