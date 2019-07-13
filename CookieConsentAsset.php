<?php

namespace frontend\assets;

use \yii\web\AssetBundle;

class CookieConsentAsset extends AssetBundle {

	public $sourcePath = '@bower/cookieconsent/build';

	public $css = [
		'cookieconsent.min.css',
	];

	public $js = [
		'cookieconsent.min.js',
	];
}
