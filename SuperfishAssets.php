<?php
/**
 * Assets class file
 *
 * @author Oleg Martemjanov
 */
namespace demogorgorn\superfish;

use yii\web\AssetBundle;
use Yii;

class SuperfishAssets extends AssetBundle
{
	public $sourcePath = '@bower/superfish/dist/';
	public $css = [
		'css/superfish.css',
        'css/superfish-navbar.css',
        'css/superfish-vertical.css',
	 ];
	public $js = [
		'js/hoverIntent.js',
		'js/superfish.min.js',
		'js/supersubs.js',
	];
	public $depends = [
		'yii\web\JqueryAsset',
	];
}
