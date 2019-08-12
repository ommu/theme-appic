<?php
/**
 * @var $this ContentFaqs
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @link https://github.com/OmmuThemes/appic
 *
 */
?>

<?php //begin.FAQS ?>
<div id="faqs" class="section faq pad">
	<div class="container">
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 section-heading wow fadeInUp">
				<h2><?php echo $this->title;?></h2>
				<div class="heading-after"><span></span></div>
				<p><?php echo $this->desc;?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<div class="spacer-50"></div>
						<div class="panel-group" id="accordion">
							<div class="panel panel-default active wow fadeIn">
								<div class="panel-heading">
									<h4 data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne" class="panel-title">
										Why this app is so awesome
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in">
									<div class="panel-body">
										<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default wow fadeIn" data-wow-delay="0.1s">
								<div class="panel-heading">
									<h4 data-toggle="collapse" data-parent="#accordion" data-target="#collapseTwo"  class="panel-title">
										What technologies do we use
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse">
									<div class="panel-body">
										<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default wow fadeIn" data-wow-delay="0.2s">
								<div class="panel-heading">
									<h4 data-toggle="collapse" data-parent="#accordion" data-target="#collapseThree"  class="panel-title">
										Curabitur augue leo
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse">
									<div class="panel-body">
										<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default wow fadeIn" data-wow-delay="0.3s">
								<div class="panel-heading">
									<h4 data-toggle="collapse" data-parent="#accordion" data-target="#collapseFour" class="panel-title">
										Why this app is so awesome
									</h4>
								</div>
								<div id="collapseFour" class="panel-collapse collapse">
									<div class="panel-body">
										<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 wow fadeIn">
						<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/preview/mockabout.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>