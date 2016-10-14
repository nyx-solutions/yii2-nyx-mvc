Yii PHP Framework Version 2 / NOX MVC
=====================================

NOX MVC adds more functionality to the following YII2 MVC Classes: `\yii\base\Model`, `\yii\db\ActiveRecord`, `\yii\web\Controller` and `\yii\web\View`.

[![Latest Stable Version](https://poser.pugx.org/nox-it/yii2-nox-mvc/v/stable)](https://packagist.org/packages/nox-it/yii2-nox-mvc)
[![Total Downloads](https://poser.pugx.org/nox-it/yii2-nox-mvc/downloads)](https://packagist.org/packages/nox-it/yii2-nox-mvc)
[![Latest Unstable Version](https://poser.pugx.org/nox-it/yii2-nox-mvc/v/unstable)](https://packagist.org/packages/nox-it/yii2-nox-mvc)
[![License](https://poser.pugx.org/nox-it/yii2-nox-mvc/license)](https://packagist.org/packages/nox-it/yii2-nox-mvc)
[![Monthly Downloads](https://poser.pugx.org/nox-it/yii2-nox-mvc/d/monthly)](https://packagist.org/packages/nox-it/yii2-nox-mvc)
[![Daily Downloads](https://poser.pugx.org/nox-it/yii2-nox-mvc/d/daily)](https://packagist.org/packages/nox-it/yii2-nox-mvc)
[![composer.lock](https://poser.pugx.org/nox-it/yii2-nox-mvc/composerlock)](https://packagist.org/packages/nox-it/yii2-nox-mvc)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
php composer.phar require --prefer-dist nox-it/yii2-nox-mvc "*"
```

or add

```
"nox-it/yii2-nox-mvc": "*"
```

to the require section of your `composer.json` file.

## Usage

### Models

Just use `extends` in your base class:

```php
class Model extends \nox\mvc\base\Model
{
}
```

### ActiveRecord Models

Just use `extends` in your base class:

```php
class ActiveRecordModel extends \nox\mvc\base\ActiveRecord
{
}
```

### Controllers:

Just use `extends` in your base class:

```php
class Controller extends \nox\mvc\web\Controller
{
}
```

### Views:

Just use `extends` in your base class:

```php
namespace frontend\components\web;

class View extends \nox\mvc\web\View
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

**yii2-nox-mvc** is released under the BSD 3-Clause License. See the bundled `LICENSE.md` for details.

![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)
