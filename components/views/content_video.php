<?php
/**
 * @var $this ContentVideo
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @link https://github.com/OmmuThemes/appic
 *
 */
?>

<?php //begin.VIDEO ?>
<div class="section pad wow fadeInUp">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="video-frame">
					<div class="overlay-image video-wrap">
						<div class="play">
							<i class="fa fa-play" aria-hidden="true"></i>
						</div>
					</div>
					<iframe id="video-frame" src="https://www.youtube.com/embed/<?php echo $this->source;?>?rel=0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<div class="row fact">
			<?php //begin.Facts 1 ?>
			<div class="col-xs-6 col-sm-3 col-md-3">
				<div class="box-icon-1">
					<div class="box-icon-top">
						<i class="icon-note icons" aria-hidden="true"></i>
						<h4 class="counter">86</h4>
					</div>
					<p>Project completed</p>
				</div>
			</div>
			<?php //begin.Facts 2 ?>
			<div class="col-xs-6 col-sm-3 col-md-3">
				<div class="box-icon-1">
					<div class="box-icon-top">
						<i class="icon-emotsmile icons"></i>
						<h4 class="counter">115</h4>
					</div>
					<p>Happy clients</p>
				</div>
			</div>
			<?php //begin.Facts 3 ?>
			<div class="col-xs-6 col-sm-3 col-md-3">
				<div class="box-icon-1">
					<div class="box-icon-top">
						<i class="icon-badge icons" aria-hidden="true"></i>
						<h4 class="counter">250</h4>
					</div>
					<p>Design awards</p>
				</div>
			</div>
			<?php //begin.Facts 4 ?>
			<div class="col-xs-6 col-sm-3 col-md-3">
				<div class="box-icon-1">
					<div class="box-icon-top">
						<i class="icon-cup icons" aria-hidden="true"></i>
						<h4 class="counter">125</h4>
					</div>
					<p>Cups of coffee</p>
				</div>
			</div>
		</div>
	</div>
</div>