<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    //public $basePath = '@webroot/backend/assets';
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    //public $sourcePath = '@backend/web';
    public $css = [
        'css/AdminLTE.min.css',
         'css/skins/_all-skins.min.css',
        'css/admin.css'

  /*
        'bootstrap/css/bootstrap.min.css',
        //'plugins/font-awesome/css/font-awesome.min.css',//"Шрифтовые иконки для использования с Twitter Bootstrap"

        //'plugins/ionicons/css/ionicons.min.css',
        'dist/css/AdminLTE.min.css',
        'dist/css/skins/_all-skins.min.css',
        'plugins/iCheck/flat/blue.css',//ПЛАГИН ДЛЯ СОЗДАНИЯ ЧЕКБОКСОВ И РАДИО КНОПОК
        'plugins/morris/morris.css', //Хорошо оформленные диаграммы
        'plugins/jvectormap/jquery-jvectormap-1.2.2.css', // отображения векторной карты мира

        'plugins/datepicker/datepicker3.css', // дата и время
        'plugins/daterangepicker/daterangepicker-bs3.css',//  диапазон дат
        'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css', //текстовый редактор
*/

    ];
    public $js = [
       // 'js/jQuery-2.1.4.min.js',
       // 'js/jquery-ui.min.js',
/*
         'plugins/jqueryUi/jquery-ui.min.js',
        'plugins/jQuery/jQuery-2.1.4.min.js',
        'plugins/input-mask/jquery.inputmask.js',
        'plugins/input-mask/jquery.inputmask.date.extensions.js',
        'plugins/input-mask/jquery.inputmask.extensions.js',
        //'dist/js/satusoftware_datemask.js',
       // 'dist/js/jquery-ui.min.js',
        //'dist/js/satusoftware.js',
        'bootstrap/js/bootstrap.min.js',
        //'dist/js/raphael-min.js',
        'plugins/morris/morris.min.js',
        'plugins/sparkline/jquery.sparkline.min.js',
        'plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
        'plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
        'plugins/knob/jquery.knob.js',
        'dist/js/moment.min.js',
        'plugins/daterangepicker/daterangepicker.js',
        'plugins/datepicker/bootstrap-datepicker.js',
        'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
        'plugins/slimScroll/jquery.slimscroll.min.js',
        'plugins/fastclick/fastclick.min.js',
        'dist/js/app.min.js',
        'plugins/ckeditor/ckeditor.js',
        //'dist/js/satusoftware_editor1.js',
        //'dist/js/satusoftware_editor2.js',
        'dist/js/pages/dashboard.js',
        'dist/js/demo.js',
*/
    ];
    public $depends = [

        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'common\assets\FontAwesome',
        'common\assets\Html5ShivAsset',
        'common\assets\RespondAsset',
        'backend\assets\BowerAsset',
        //'backend\assets\Html5ShivAsset',

        //
        //'backend\assets\BackendAsset',
    ];
}
