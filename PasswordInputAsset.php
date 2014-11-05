<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014
 * @package yii2-password
 * @version 1.2.0
 */

namespace nenad\passwordStrength;

/**
 * Asset bundle for PasswordInput Widget
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 1.0
 */
class PasswordInputAsset extends \nenad\AssetBundle
{

    public function init()
    {
        $this->setSourcePath('@vendor/kartik-v/strength-meter');
        $this->setupAssets('css', ['css/strength-meter']);
        $this->setupAssets('js', ['js/strength-meter', 'js/strength-meter-effect']);
        parent::init();
    }

}