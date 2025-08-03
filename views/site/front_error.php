<?php
/**
 * @var $this SiteController
 * @var $error array
 *
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)811-2540-432
 * @copyright Copyright (c) 2012 OMMU (www.ommu.id)
 * @link https://github.com/ommu/ommu
 *
 */

	$this->breadcrumbs=array(
		'Error',
	);

	Yii::import('webroot.themes.appic.components.*');
	
	$configTheme = Yii::app()->controller->themeSetting;
?>

<?php //begin.head-text-area ?>
<div class="section site-header header-style-3 banner landing">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-1 col-lg-10">
				<div class="head-text-area type-3 text-center">
					<div class="h-text-inner">
						<h1 class="type-headings wow fadeInDown">
							Error <?php echo $code; ?>
						</h1>
						<p class="excerpt"><?php echo CHtml::encode($message); ?></p>
						<a href="<?php echo Yii::app()->createUrl('site/index');?>" class="btn btn-primary action-btn wow fadeInUp"><span>Back to Home</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->widget('ContentContactUs', array(
	'title' => $configTheme['contact-us']['title'],
	'desc' => $configTheme['contact-us']['desc'],
)); //ContentContactUs ?>