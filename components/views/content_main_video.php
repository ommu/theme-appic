<?php
/**
 * @var $this ContentMain
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @link https://github.com/OmmuThemes/appic
 *
 */
?>

<?php //begin.head-text-area ?>
<div id="video" class="section header-style-3 banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="head-text-area type-3 text-center">
					<div class="h-text-inner">
						<h2 class="type-headings wow fadeInDown cd-headline slide"><span><?php echo $this->animation_title;?></span>
							<span class="cd-words-wrapper">
							<?php 
							$i=0;
							foreach ($this->animation_array as $value) {
								$i++;
								if($i == 1)
									echo '<b class="is-visible">'.$value.'</b>';
								else
									echo '<b>'.$value.'</b>';
							}?>
							</span>
						</h2>
						<p class="excerpt"><?php echo $this->desc;?></p>
						<a href="#" class="btn btn-primary available active wow fadeInUp">
							<div class="z-fix">
								<i class="fa fa-apple available-cell" aria-hidden="true"></i>
								<p class="available-cell"><?php echo Yii::t('phrase', 'Available <span>{string}</span>', array('{string}'=>'on App Store'));?> </p>
							</div>
						</a>
						<a href="#" class="btn btn-primary available wow fadeInUp" data-wow-delay="0.1s">
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
</div>