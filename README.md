Yii PHP Framework Version 2 / NYX MVC
=====================================

NYX MVC adds more functionality to the following YII2 MVC Classes: `\yii\base\Model`, `\yii\db\ActiveRecord`, `\yii\web\Controller` and `\yii\web\View`.

[![Latest Stable Version](https://poser.pugx.org/nyx-solutions/yii2-nyx-mvc/v/stable)](https://packagist.org/packages/nyx-solutions/yii2-nyx-mvc)
[![Total Downloads](https://poser.pugx.org/nyx-solutions/yii2-nyx-mvc/downloads)](https://packagist.org/packages/nyx-solutions/yii2-nyx-mvc)
[![Latest Unstable Version](https://poser.pugx.org/nyx-solutions/yii2-nyx-mvc/v/unstable)](https://packagist.org/packages/nyx-solutions/yii2-nyx-mvc)
[![License](https://poser.pugx.org/nyx-solutions/yii2-nyx-mvc/license)](https://packagist.org/packages/nyx-solutions/yii2-nyx-mvc)
[![Monthly Downloads](https://poser.pugx.org/nyx-solutions/yii2-nyx-mvc/d/monthly)](https://packagist.org/packages/nyx-solutions/yii2-nyx-mvc)
[![Daily Downloads](https://poser.pugx.org/nyx-solutions/yii2-nyx-mvc/d/daily)](https://packagist.org/packages/nyx-solutions/yii2-nyx-mvc)
[![composer.lock](https://poser.pugx.org/nyx-solutions/yii2-nyx-mvc/composerlock)](https://packagist.org/packages/nyx-solutions/yii2-nyx-mvc)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
php composer.phar require --prefer-dist nyx-solutions/yii2-nyx-mvc "*"
```

or add

```
"nyx-solutions/yii2-nyx-mvc": "*"
```

to the require section of your `composer.json` file.

## Usage

### Models

Just use `extends` in your base class:

```php
class Model extends \nyx\mvc\base\Model
{
}
```

### ActiveRecord Models

Just use `extends` in your base class:

```php
class ActiveRecordModel extends \nyx\mvc\base\ActiveRecord
{
}
```

### Controllers:

Just use `extends` in your base class:

```php
class Controller extends \nyx\mvc\web\Controller
{
}
```

### Views:

Just use `extends` in your base class:

```php
namespace frontend\components\web;

class View extends \nyx\mvc\web\View
{
}
```

And configure your View in the `components` section of your Yii2 configuration file.

```php
'components' => [
    'view' => [
        'class' => 'frontend\components\web\View'
    ]
]
```

## License

**yii2-nyx-mvc** is released under the BSD 3-Clause License. See the bundled `LICENSE.md` for details.

![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)
