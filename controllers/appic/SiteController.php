<?php
/**
 * SiteController
 * @var $this SiteController
 * Reference start
 *
 * TOC :
 *	Index
 *
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)811-2540-432
 * @copyright Copyright (c) 2017 OMMU (www.ommu.id)
 * @link https://github.com/OmmuThemes/appic
 *
 *----------------------------------------------------------------------------------------------------------
 */

class SiteController extends Controller
{
	/**
	 * Initialize public template
	 */
	public function init() 
	{
		Yii::app()->theme = 'appic';
		$this->layout = 'default';
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
				'actions'=>array('index'),
				'users'=>array('*'),
			),
		);
	}
	
	/**
	 * Displays the login page
	 */
	public function actionIndex()
	{
		$this->pageTitle = Yii::t('phrase', 'Main | Appic - Creative Mobile App Landing Page Template');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('/appic/site/front_index');
	}
}