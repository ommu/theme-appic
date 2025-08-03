<?php
/**
 * @var $this ContentNewsletter
 *
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)811-2540-432
 * @copyright Copyright (c) 2017 OMMU (www.ommu.id)
 * @link https://github.com/OmmuThemes/appic
 *
 */
?>

<?php //begin.NEWSLETTER ?>
<div class="container newsletter wow fadeInUp">
	<div class="newsletter-bg">
		<div class="row">
			<div class="col-sm-12 col-md-6">
				<div class="newsletter-text">
					<h2><?php echo Yii::t('phrase', 'Subscribe for newsletter');?></h2>
					<span><?php echo Yii::t('phrase', 'This call wife do so sigh no gate felt.');?></span>
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<form action="php/newsletter.php" method="post">
					<input id="email_newsletter" class="form-control" type="email" name="nf_email" placeholder="Enter Your Email" maxlength="50">
					<button type="submit" class="btn btn-primary disabled"><span><?php echo Yii::t('phrase', 'Subscribe');?></span></button>
				</form>
			</div>
		</div>
	</div>
</div>