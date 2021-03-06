<?php
namespace backend\assets;

use yii\web\AssetBundle;

class BowerAsset extends AssetBundle
{
    public $sourcePath = '@bower';
    public $css = [
        //'fontawesome/css/font-awesome.min.css', //"Шрифтовые иконки для использования с Twitter Bootstrap"
       // 'backend/plugins/iCheck/flat/blue.css', //ПЛАГИН ДЛЯ СОЗДАНИЯ ЧЕКБОКСОВ И РАДИО КНОПОК
        //'backend/plugins/morris/morris.css', //Хорошо оформленные диаграммы
    ];
    public $js = [

        //'backend/plugins/jQuery/jQuery-2.1.4.min.js',
        'backend/plugins/jqueryUi/jquery-ui.min.js',
        'backend/dist/js/app.min.js',
        'bootstrap/dist/js/bootstrap.min.js',
     ];
}