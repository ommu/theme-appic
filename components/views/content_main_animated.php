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
<div class="section site-header header-style-3 banner">
	<svg viewBox="0 0 100 23">
		<path fill="#ffffff" d="M0 30 V12 Q30 17 55 12 T100 11 V30z"></path>
	</svg>
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
						<a href="#" class="btn btn-primary action-btn wow fadeInUp"><span><?php echo Yii::t('phrase', 'GET STARTED');?></span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>