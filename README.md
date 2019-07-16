# yii2-cookieconsent

Yii2 CookieConsent Asset
=====================

## Installation

The preferred way to install this yii2-extension is through [composer](http://getcomposer.org/download/).

Either run

```sh
composer require "tsanchev/yii2-cookieconsent"
```

or add

```json
"tsanchev/yii2-cookieconsent": "*"
```

to the require section of your composer.json.

Add the asset in AppAsset as dependancy

```php
class AppAsset extends AssetBundle
{
    //...
    public $depends = [
        //...
        'tsanchev\cookieconsent\CookieConsentAsset',
    ];
}
```


## License

This project is released under the terms of the BSD-3-Clause [license](LICENSE).
Read more [here](http://choosealicense.com/licenses/bsd-3-clause).

