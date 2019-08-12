<?php
/**
 * TemplateController
 * @var $this TemplateController
 * Reference start
 *
 * TOC :
 *	Index
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @link https://github.com/OmmuThemes/appic
 *
 *----------------------------------------------------------------------------------------------------------
 */

class TemplateController extends Controller
{
	/**
	 * Initialize public template
	 */
	public function init() 
	{
		Yii::app()->theme = 'appic';
		$this->layout = 'front_default';
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules() 
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','static1','static2','animated','slider1','slider2','video'),
				'users'=>array('*'),
			),
		);
	}
	
	/**
	 * Displays the login page
	 */
	public function actionStatic1()
	{
		$this->pageTitle = Yii::t('phrase', 'Static Image 1 | Appic - Creative Mobile App Landing Page Template');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('/appic/template/front_static_1');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionStatic2()
	{
		$this->pageTitle = Yii::t('phrase', 'Static Image 2 | Appic - Creative Mobile App Landing Page Template');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('/appic/template/front_static_2');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionAnimated()
	{
		$this->pageTitle = Yii::t('phrase', 'Animated Headlines | Appic - Creative Mobile App Landing Page Template');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('/appic/template/front_animated');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionSlider1()
	{
		$this->pageTitle = Yii::t('phrase', 'Slider 1 | Appic - Creative Mobile App Landing Page Template');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('/appic/template/front_slider_1');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionSlider2()
	{
		$this->pageTitle = Yii::t('phrase', 'Slider 2 | Appic - Creative Mobile App Landing Page Template');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('/appic/template/front_slider_2');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionVideo()
	{
		$this->pageTitle = Yii::t('phrase', 'Video Background | Appic - Creative Mobile App Landing Page Template');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('/appic/template/front_video');
	}
}