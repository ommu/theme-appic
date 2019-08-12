<?php
/**
 * @var $this Mainmenu
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @link https://github.com/OmmuThemes/appic
 *
 */
?>

<?php if(!($module == null && $currentAction == 'site/error')) {?>
<?php //begin.HEADER ?>
<div id="header" class="header-style">
	<?php //begin.NAVBAR SECTION ?>
	<div class="navbar navbar-main navbar_c1">
		<div class="container container-nav">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html">
					<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/logo.png" alt="" />
				</a>
			</div>
			<nav class="collapse navbar-collapse" id="navbar" data-hover="dropdown" data-animations="fadeInDownNew fadeInRightNew fadeInUpNew fadeInLeftNew">
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="#header"><?php echo Yii::t('phrase', 'Home');?></a> </li>
					<?php if(!$condition || in_array($configTheme['workinfo']['publish'], array('', 1))) {?>
					<li> <a href="#info"><?php echo Yii::t('phrase', 'Work');?></a> </li>
					<?php }
					if(!$condition || in_array($configTheme['feature']['publish'], array('', 1))) {?>
					<li> <a href="#feautures"><?php echo Yii::t('phrase', 'Feautures');?></a> </li>
					<?php }
					if(!$condition || in_array($configTheme['download']['publish'], array('', 1))) {?>
					<li> <a href="#download"><?php echo Yii::t('phrase', 'Downloads');?></a> </li>
					<?php }
					if(!$condition || in_array($configTheme['faq']['publish'], array('', 1))) {?>
					<li> <a href="#faqs"><?php echo Yii::t('phrase', 'Faqs');?></a></li>
					<?php }
					if(!$condition || in_array($configTheme['contact-us']['publish'], array('', 1))) {?>
					<li> <a href="#contact"><?php echo Yii::t('phrase', 'Contact Us');?></a></li>
					<?php }?>
				</ul>
			</nav>
		</div>
	</div>
</div>
<?php }?>