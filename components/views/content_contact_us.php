<?php
/**
 * @var $this ContentContactUs
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @link https://github.com/OmmuThemes/appic
 *
 */
?>

<?php //begin.CONTACT ?>
<div id="contact" class="section contact pad">
	<div class="container">
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 section-heading wow fadeInUp">
				<h2><?php echo $this->title;?></h2>
				<div class="heading-after"><span></span></div>
				<p><?php echo $this->desc;?></p>
			</div>
			<div class="col-xs-12 spacer-25"></div>
		</div>
		<div class="row wow fadeInUp">
			<div class="col-md-4">
				<div class="contact-info clearfix">
					<div class="box-icon-3">
						<div class="body-content">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<h4><?php echo Yii::t('phrase', 'Phone Number');?></h4>
							<span>(251) 546-9442</span>
						</div>
					</div>
					<div class="box-icon-3">
						<div class="body-content">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<h4><?php echo Yii::t('phrase', 'Phone Number');?></h4>
							<span>(251) 546-9442</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<form action="php/form-process.php" class="form-contact" id="contactForm" data-toggle="validator" novalidate="" method="post">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" required name="contact_names" placeholder="Full Name...">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="email" class="form-control" required name="contact_names" placeholder="Enter Address...">
								<div class="help-block with-errors"></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
									<textarea class="form-control" name="contact_message" rows="6" placeholder="Write message"></textarea>
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="col-md-12 text-right">
							<div class="form-group">
								<div id="success"></div>
								<button type="submit" class="btn btn-primary"><span><?php echo Yii::t('phrase', 'SEND MESSAGE');?></span></button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>