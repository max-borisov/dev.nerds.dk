<?php
namespace frontend\components;

use Yii;
use yii\base\Component;
use yii\base\Exception;
use yii\helpers\VarDumper;

class HelperBase extends Component
{
    /**
     * Terminate app
     */
    public static function end()
    {
        Yii::$app->end();
    }

    /**
     * Print variable
     * @param mixed $data Number/string/array/object to be printed
     * @param bool $terminate Whether terminate app or not
     */
    public static function dump($data, $terminate = false)
    {
        echo '<pre>';
        VarDumper::dump($data, 10, true);
        echo '</pre>';

        if (true === $terminate) {
            self::end();
        }
    }

    /**
     * Get specified app parameter
     * @param $key Param name
     * @return mixed
     */
    public static function getParam($key)
    {
        if (isset(Yii::$app->params[$key])) {
            return Yii::$app->params[$key];
        }
        return null;
    }

    /**
     * @todo Add test
     * @param $url Requested url
     * @param array $params
     * @return mixed
     * @throws \yii\base\Exception
     */
    public static function curl($url, $params = [])
    {
        if (empty($url)) {
            throw new Exception('Url parameter is empty.');
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url); // set url to post to

        if (isset($params['method'])
            && $params['method'] == 'post'
            && isset($params['post_fields'])) {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $params['post_fields']);
        }
        // Массив устанавливаемых HTTP-заголовков
        if (isset($params['set_headers'])
            && $params['set_headers'] == true
            && !empty($params['headers_list'])
            && is_array($params['headers_list'])) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $params['headers_list']);
        }

        // для включения заголовков в вывод.
        if (isset($params['headers']) && $params['headers'] == true) {
            curl_setopt($ch, CURLOPT_HEADER, 1);
        }
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        if (isset($params['https']) && $params['https'] == true) {
            curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false);
        }
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    public static function logger($msg = '', $file = null, $params = [])
    {
        $defaultFile = Yii::getAlias('@app') . '/runtime/logs/errors.log';
        $file = $file ? $file : $defaultFile;
        $msg = $params ? $msg . "\r\n\r\n" . json_encode($params) . "\r\n" : $msg;
        $msg = date('d/m/Y H:i') . "\r\n" . $msg . "\r\n---------------" . "\r\n";
        return error_log($msg, 3, $file);
    }

    /**
     * Encode email make it safe to show in html code
     * @param $email Source email
     * @return string Encoded string
     */
    public static function encodeEmail($email)
    {
        $output = '';
        for ($i = 0; $i < strlen($email); $i++)
        {
            $output .= '&#'.ord($email[$i]).';';
        }
        return $output;
    }

    /**
     * Make long description shorter
     * @param $text Text to be shortened
     * @param $maxLen max text length
     * @return string
     */
    public static function makeShortText($text, $maxLen)
    {
        if (strlen($text) <= $maxLen) return $text;
        return $text = substr($text, 0, $maxLen) . '...';
    }

    public static function formatPostDate($date)
    {
        return date('d/m-Y', strtotime($date));
    }

    public static function checkRemoteFileExistence($url)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_exec($ch);
        $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $statusCode;
    }
}