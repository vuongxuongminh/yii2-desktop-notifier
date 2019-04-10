# Yii2 Desktop Notifier

[![Latest Stable Version](https://poser.pugx.org/vxm/yii2-desktop-notifier/v/stable)](https://packagist.org/packages/vxm/yii2-desktop-notifier)
[![Total Downloads](https://poser.pugx.org/vxm/yii2-desktop-notifier/downloads)](https://packagist.org/packages/vxm/yii2-desktop-notifier)
[![Build Status](https://travis-ci.org/vuongxuongminh/yii2-desktop-notifier.svg?branch=master)](https://travis-ci.org/vuongxuongminh/yii2-desktop-notifier)
[![Code Coverage](https://scrutinizer-ci.com/g/vuongxuongminh/yii2-desktop-notifier/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/vuongxuongminh/yii2-desktop-notifier/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/vuongxuongminh/yii2-desktop-notifier/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/vuongxuongminh/yii2-desktop-notifier/?branch=master)
[![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](http://www.yiiframework.com/)

## About it

An extension support send desktop notify base on [JoliNotif](https://github.com/jolicode/JoliNotif) wrapper for Yii2 console controller. Works on Linux, Windows & MacOS.

## Requirements

* [PHP >= 7.1](http://php.net)
* [yiisoft/yii2 >= 2.0.13](https://github.com/yiisoft/yii2)

## Installation

Require Yii2 desktop notifier using [Composer](https://getcomposer.org):

```bash
composer require vxm/yii2-desktop-notifier
```


## Usage

<p align="center">
    <img src="resource/demo.png" width="50%">
</p>

```php

use yii\console\Controller;

/**
 * @method void desktopNotify(string $title, string $body, $icon = null)
 */
class TestController extends Controller
{
    public function actionTest()
    {
        $this->desktopNotify('VXM', 'test message');
    }
}
```
