<?php
/**
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @created date 26 December 2017, 20:45 WIB
 * @link https://github.com/OmmuThemes/appic
 *
 */

	Yii::import('webroot.themes.appic.components.*');
	$module = strtolower(Yii::app()->controller->module->id);
	$controller = strtolower(Yii::app()->controller->id);
	$action = strtolower(Yii::app()->controller->action->id);
	$currentAction = strtolower(Yii::app()->controller->id.'/'.Yii::app()->controller->action->id);
	$currentModule = strtolower(Yii::app()->controller->module->id.'/'.Yii::app()->controller->id);
	$currentModuleAction = strtolower(Yii::app()->controller->module->id.'/'.Yii::app()->controller->id.'/'.Yii::app()->controller->action->id);
	
	/**
	 * = Global condition
	 ** Construction condition
	 */
	$setting = OmmuSettings::model()->findByPk(1,array(
		'select' => 'site_oauth, site_title',
	));

	/**
	 * = Dialog Condition
	 */
	if($this->dialogDetail == true)
		$dialogWidth = !empty($this->dialogWidth) ? $this->dialogWidth.'px' : '650px';
	else
		$dialogWidth = '';
	$display = ($this->dialogDetail == true && !Yii::app()->request->isAjaxRequest) ? 'style="display: block;"' : '';
	
	/**
	 * = pushState condition
	 */
	$title = CHtml::encode($this->pageTitle).' | '.$setting->site_title;
	$description = $this->pageDescription;
	$keywords = $this->pageMeta;
	$urlAddress = Utility::getProtocol().'://'.Yii::app()->request->serverName.Yii::app()->request->requestUri;

	if(Yii::app()->request->isAjaxRequest && !Yii::app()->getRequest()->getParam('ajax')) {
		/* if(Yii::app()->session['theme_active'] != Yii::app()->theme->name) {
			$return = array(
				'redirect' => $urlAddress,
			);

		} else { */
			$page = $this->contentOther == true ? 1 : 0;
			$dialog = $this->dialogDetail == true ? (empty($this->dialogWidth) ? 1 : 2) : 0;		// 0 = static, 1 = dialog, 2 = notifier
			$header = $this->widget('MenuMain', array(), true);
			
			if($this->contentOther == true) {
				$render = array(
					'content' => $content, 
					'other' => $this->contentAttribute,
				);
			} else {
				$render = $content;
			}
			$return = array(
				'title' => $title,
				'description' => $description,
				'keywords' => $keywords,
				'address' => $urlAddress,
				'dialogWidth' => $dialogWidth,
			);
			$return['page'] = $page;
			$return['dialog'] = $dialog;
			$return['header'] = $this->dialogDetail != true ? $header : '';
			$return['render'] = $render;
			$return['script'] = $cs=Yii::app()->getClientScript()->getOmmuScript();
		//}
		echo CJSON::encode($return);

	} else {
		$cs = Yii::app()->getClientScript();
		$cs->registerCssFile(Yii::app()->theme->baseUrl.'/plugins/bootstrap/css/bootstrap.min.css');
		$cs->registerCssFile(Yii::app()->theme->baseUrl.'/plugins/animate/animate.min.css');
		$cs->registerCssFile(Yii::app()->theme->baseUrl.'/plugins/font-awesome/css/font-awesome.min.css');
		$cs->registerCssFile(Yii::app()->theme->baseUrl.'/plugins/simple-line-icons/css/simple-line-icons.css');
		$cs->registerCssFile(Yii::app()->theme->baseUrl.'/plugins/owl.carousel/assets/owl.carousel.css');
		$cs->registerCssFile(Yii::app()->theme->baseUrl.'/plugins/owl.carousel/assets/owl.theme.default.min.css');
		$cs->registerCssFile(Yii::app()->theme->baseUrl.'/plugins/Magnific-Popup/magnific-popup.css');
		$cs->registerCssFile('https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
		$cs->registerCssFile('https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
		$cs->registerCssFile('https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i');
		$cs->registerCssFile(Yii::app()->theme->baseUrl.'/css/style.css');
		//$cs->registerCoreScript('jquery', CClientScript::POS_END);
		$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/jquery/jquery.min.js', CClientScript::POS_END);
		$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/jquery.appear/jquery.appear.js', CClientScript::POS_END);
		$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/bootstrap/js/bootstrap.min.js', CClientScript::POS_END);
		$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/superslides/jquery.superslides.min.js', CClientScript::POS_END);
		$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/owl.carousel/owl.carousel.js', CClientScript::POS_END);
		$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/Magnific-Popup/jquery.magnific-popup.min.js', CClientScript::POS_END);
		$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/waypoints/waypoints.min.js', CClientScript::POS_END);
		$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/jquery.counterup/jquery.counterup.min.js', CClientScript::POS_END);
		$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/isotope/isotope.pkgd.min.js', CClientScript::POS_END);
		$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/imagesloaded/imagesloaded.pkgd.min.js', CClientScript::POS_END);
		$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/jQuery.YoutubeBackground/jquery.youtubebackground.js', CClientScript::POS_END);
		$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/WOW/wow.min.js', CClientScript::POS_END);
		$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/bootstrap-validator/validator.min.js', CClientScript::POS_END);
		$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/js/form-scripts.js', CClientScript::POS_END);
		$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/js/script.js', CClientScript::POS_END);
		$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/Modernizr/modernizr.js', CClientScript::POS_BEGIN);
		Yii::app()->clientScript->scriptMap=array(
			'jquery.js'=>false,
		);
	?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title;?></title>
  <meta name="author" content="Ommu Platform (support@ommu.co)" />
  <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl;?>/favicon.ico" />
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo Yii::app()->theme->baseUrl;?>/images/favicon-16x16.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo Yii::app()->theme->baseUrl;?>/images/apple-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo Yii::app()->theme->baseUrl;?>/images/apple-icon-114x114.png" />
 </head>
 <body data-spy="scroll" data-target="#navbar">

	<?php //begin.Load page ?>
	<div class="animationload">
		<div class="loader"></div>
	</div>

	<?php echo $content;?>

	<?php $this->widget('ComGoogleAnalytics'); ?>

 </body>
</html>

<?php }?>