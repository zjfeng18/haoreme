<?php
/**
 * Created by PhpStorm.
 * User: yidashi
 * Date: 16/4/1
 * Time: 下午6:28
 */

namespace yii\helpers;

class Html extends BaseHtml
{
    public static function icon($name)
    {
        $options = ['class' => 'fa'];
        if (!StringHelper::startsWith($name, 'fa-')) {
            $name = 'fa-' . $name;
        }
        self::addCssClass($options, $name);
        return self::tag('i', '', $options);
    }

    /**
     * 标红字符串中含有的关键词
     * @param $q string 关键词
     * @param $str string 待过滤字符串
     * @return string 处理后的html
     */
    public static function weight($q, $str)
    {
        return preg_replace('/' . $q . '/i', Html::tag('span', '$0', ['style' => 'color:#f00']), $str);
    }
}