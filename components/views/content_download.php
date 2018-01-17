<?php
/**
 * @var $this ContentDownload
 * version: 0.0.1
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
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
							<p class="available-cell">Available <span>on App Store</span></p>
						</div>
					</a>
					<a href="#" class="btn btn-primary available wow fadeInUp">
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