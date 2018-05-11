<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;
/*/ CONFIG.PHP
$access_tocken = "d43f99fb1767793e09b70e9180f11cfa0dd61f654d8a2de0338859873fbcfdaa75fe960cc7f11e1c82d12";
$group_id = "131095370";
/*/

/*/ DATE_COUNT_DOWN.PHP
// Показывать обратный отчет до окончания события [true - показывать false - нет]
$show_time_countdown = false;

// Установите дату и время окончания
// В Формате: Год-Месяц-Число Часы-Минуты-Секунды
$dateCountdown = '2017-12-31 23:59:59'; 

//Шрифт
$time_countdown_font_name = 'Roboto-Regular.ttf';

// Размер шрифта
$time_countdown_font_size = 26;

// Цвет текста
$time_countdown_font_color = '255,255,255';

// Координаты отсчета по оси Х
$time_countdown_text_pixel_x = '795';

// Координаты отсчета по оси Y
$time_countdown_text_pixel_y = '385';
/*/

/*/DATE_TIME.PHP
// Часовой пояс
// Полный список http://php.net/manual/ru/timezones.php
date_default_timezone_set('Europe/Moscow');

//ВРЕМЯ
// Включить true, выключить false
$time_enable = false;

// Координаты текста по оси x y
$time_text_x = '785';
$time_text_y = '230';

// Шрифт ложить в папку fonts
$time_font_name = 'Roboto-Regular.ttf';

// Цвет шрифта в формате rgb
$time_font_color = '255, 255, 255';

// Размер шрифта
$time_font_size = 20;

//ДАТА

// Включить true, выключить false
$date_enable = false;

// Координаты текста по оси x y
$date_text_x = '800';
$date_text_y = '270';

// Шрифт ложить в папку fonts
$date_font_name = 'Roboto-Regular.ttf';

// Цвет шрифта в формате rgb
$date_font_color = '255, 255, 255';

// Размер шрифта
$date_font_size = 20;
/*/

/*/ LAST_SUBSCRIBER.PHP
// Включить true, выключить false
$subscriber_enable = true;

// Координаты текста по оси x y
$subscriber_text_x = '470';
$subscriber_text_y = '360';

// Координаты авы по оси x y
$subscriber_img_x = '380';
$subscriber_img_y = '156';

// Размер аватара
$subscriber_img_size = '174';

// Круглая аватарка true, квадратная false
$subscriber_img_rounding_off = true;

// Шрифт ложить в папку fonts
$subscriber_font_name = 'Roboto-Regular.ttf';

// Цвет шрифта в формате rgb
$subscriber_font_color = '255,255,255';

// Размер шрифта
$subscriber_font_size = 24;
/*/

/*/SHOW_TIME_OF_DAY.PHP
// Менять обложку в зависимости от времени суток [true - показывать false - нет]
// Если стоит false то просто нужно закинуть шаблон обложки в папку header с названием morning_bg.jpg 
// остальные 3 файла не обязательны
$show_time_of_day = true; 

// Путь к изображению которое будет браться за основу.
// Положите файлы обложек morning_bg.jpg, day_bg.jpg, evening_bg.jpg и night_bg.jpg 
// в папку header если $show_time_of_day = true
// Минимальный размер обложки 795 x 200px рекомендованый 1590 x 400px
// ВСЕ 4 ФАЙЛА ДОЛЖНЫ БЫТЬ ОДИНАКОВЫХ РАЗМЕРОВ 1590x400px ИЛИ 795 x 200px
$image_bg = array(
    'morning' => 'img/morning.png', // Утро (с 4:00 до 12:00)
    'day' => 'img/day.png',         // День (с 12:00 до 18:00)
    'evening' => 'img/evening.png', // Вечер (c 18:00 до 24:00)
    'night' => 'img/night.png',     // Ночь (c 24:00 до 4:00)
  );

  /*/

/*/ TOP_LIKER
// Включить true, выключить false
$liker_enable = true;

// Координаты текста по оси x y
$liker_text_x = '1110';
$liker_text_y = '360';

// Координаты авы по оси x y
$liker_img_x = '1023';
$liker_img_y = '156';

// Размер аватара
$liker_img_size = '174';

// Круглая аватарка true, квадратная false
$liker_img_rounding_off = true;

// Шрифт ложить в папку fonts
$liker_font_name = 'Roboto-Regular.ttf';

// Цвет шрифта в формате rgb
$liker_font_color = '255,255,255';

// Размер шрифта
$liker_font_size = 24;
/*/
define('BASEPATH', str_replace('\\', '/', __DIR__.'/../web/'));

class VkForm extends ActiveRecord {
    /*/
    public $access_token;
    public $group_id;
    public $show_fullday;

    public $show_sub;
    public $font_size_sub;
    public $text_angle_sub;
    public $text_x_sub;
    public $text_y_sub;
    public $font_color_r_sub;
    public $font_color_g_sub;
    public $font_color_b_sub;
    public $img_x_sub;
    public $img_y_sub;
    public $img_size_sub;
    public $img_rounding_sub;

    public $show_licker;
    public $font_size_licker;
    public $text_angle_licker;
    public $text_x_licker;
    public $text_y_licker;
    public $font_color_r_licker;
    public $font_color_g_licker;
    public $font_color_b_licker;
    public $img_x_licker;
    public $img_y_licker;
    public $img_size_licker;
    public $img_rounding_licker;

    public $show_time;
    public $timezone_time;
    public $font_size_time;
    public $text_angle_time;
    public $text_x_time;
    public $text_y_time;
    public $font_color_r_time;
    public $font_color_g_time;
    public $font_color_b_time;


    public $show_date;
    public $font_size_date;
    public $text_angle_date;
    public $text_x_date;
    public $text_y_date;
    public $font_color_r_date;
    public $font_color_g_date;
    public $font_color_b_date;



    public $show_time_countdown;
    public $format_time_countdown;
    public $font_size_time_countdown;
    public $text_angle_time_countdown;
    public $text_x_time_countdown;
    public $text_y_time_countdown;
    public $font_color_r_time_countdown;
    public $font_color_g_time_countdown;
    public $font_color_b_time_countdown;
    /*/
    public static function tableName() {
        return 'vk';
    }

    /**
    * @inheritdoc
    */
    public function rules()
    {
        return [
            [['access_token'], 'required', 'message' => 'Впишите свой access_token'],
            [['group_id'], 'required', 'message' => 'Впишите свой group_id'],
            [['show_fullday'], 'required'],

            [['show_sub'], 'required'],
            [['font_size_sub'], 'required', 'message' => 'Впишите размер текста'],
            [['text_angle_sub'], 'required', 'message' => 'Впишите угол наклона текста'],
            [['text_x_sub'], 'required', 'message' => 'Впишите X координату текста'],
            [['text_y_sub'], 'required', 'message' => 'Впишите Y координату текста'],
            [['font_color_r_sub'], 'required', 'message' => 'Впишите R от 0 до 255'],
            [['font_color_g_sub'], 'required', 'message' => 'Впишите G от 0 до 255'],
            [['font_color_b_sub'], 'required', 'message' => 'Впишите B от 0 до 255'],
            [['img_x_sub'], 'required', 'message' => 'Впишите X координату аватара'],
            [['img_y_sub'], 'required', 'message' => 'Впишите Y координату аватара'],
            [['img_size_sub'], 'required', 'message' => 'Впишите размер аватара'],
            [['img_rounding_sub'], 'required', 'message' => 'Впишите размер закругления аватара'],

            [['show_licker'], 'required'],
            [['font_size_licker'], 'required', 'message' => 'Впишите размер текста'],
            [['text_angle_licker'], 'required', 'message' => 'Впишите угол наклона текста'],
            [['text_x_licker'], 'required', 'message' => 'Впишите X координату текста'],
            [['text_y_licker'], 'required', 'message' => 'Впишите Y координату текста'],
            [['font_color_r_licker'], 'required', 'message' => 'Впишите R от 0 до 255'],
            [['font_color_g_licker'], 'required', 'message' => 'Впишите G от 0 до 255'],
            [['font_color_b_licker'], 'required', 'message' => 'Впишите B от 0 до 255'],
            [['img_x_licker'], 'required', 'message' => 'Впишите X координату аватара'],
            [['img_y_licker'], 'required', 'message' => 'Впишите Y координату аватара'],
            [['img_size_licker'], 'required', 'message' => 'Впишите размер аватара'],
            [['img_rounding_licker'], 'required', 'message' => 'Впишите размер закругления аватара'],

            [['show_time'], 'required'],
            [['timezone_time'], 'required', 'message' => 'Выберите часовой пояс'],
            [['font_size_time'], 'required', 'message' => 'Впишите размер текста'],
            [['text_angle_time'], 'required', 'message' => 'Впишите угол наклона текста'],
            [['text_x_time'], 'required', 'message' => 'Впишите X координату текста'],
            [['text_y_time'], 'required', 'message' => 'Впишите Y координату текста'],
            [['font_color_r_time'], 'required', 'message' => 'Впишите R от 0 до 255'],
            [['font_color_g_time'], 'required', 'message' => 'Впишите G от 0 до 255'],
            [['font_color_b_time'], 'required', 'message' => 'Впишите B от 0 до 255'],

            [['show_date'], 'required'],
            [['font_size_date'], 'required', 'message' => 'Впишите размер текста'],
            [['text_angle_date'], 'required', 'message' => 'Впишите угол наклона текста'],
            [['text_x_date'], 'required', 'message' => 'Впишите X координату текста'],
            [['text_y_date'], 'required', 'message' => 'Впишите Y координату текста'],
            [['font_color_r_date'], 'required', 'message' => 'Впишите R от 0 до 255'],
            [['font_color_g_date'], 'required', 'message' => 'Впишите G от 0 до 255'],
            [['font_color_b_date'], 'required', 'message' => 'Впишите B от 0 до 255'],

            [['show_time_countdown'], 'required'],
            [['format_time_countdown'], 'required', 'message' => 'Выберите дату окончания события'],
            [['font_size_time_countdown'], 'required', 'message' => 'Впишите размер текста'],
            [['text_angle_time_countdown'], 'required', 'message' => 'Впишите угол наклона текста'],
            [['text_x_time_countdown'], 'required', 'message' => 'Впишите X координату текста'],
            [['text_y_time_countdown'], 'required', 'message' => 'Впишите Y координату текста'],
            [['font_color_r_time_countdown'], 'required', 'message' => 'Впишите R от 0 до 255'],
            [['font_color_g_time_countdown'], 'required', 'message' => 'Впишите G от 0 до 255'],
            [['font_color_b_time_countdown'], 'required', 'message' => 'Впишите B от 0 до 255'],
        ];
    }

    //===VK.CLASS===//
    private $v_api = '5.73',
    $sleep = 350000;

    const BASE_URL = 'https://api.vk.com/method/';

    private function curl($url, $data = false) {
        try {
            usleep(350000);

            if ($ch = curl_init($url)) {
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_HEADER, false);
                curl_setopt($ch, CURLOPT_TIMEOUT, 10);
                if($data) {
                    curl_setopt($ch, CURLOPT_POST, 1);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, ($data));
                }
                $out = curl_exec($ch);

                if (curl_errno($ch)) {
                    return null;
                } else {
                    return $out;
                }
            }
        } finally {
            curl_close($ch);
        }
        return null;
    }

    private function api($method = '', $params = array()) {
        $url = self::BASE_URL.$method;

        if (!array_key_exists('access_token', $params) && !is_null($access_token)) {
            $params['access_token'] = $access_token;
        }

        if (!array_key_exists('v', $params) && !is_null($this->v_api)) {
            $params['v'] = $this->v_api;
        }

        ksort($params);

        @$response = json_decode($this->curl($url,$params), true);

        if(($response == NULL) or isset($response['error'])){
            usleep($this->sleep);
            @$response = json_decode($this->curl($url,$params), true);

            if (($response == NULL) or isset($response['error'])) {
                usleep($this->sleep);
                @$response = json_decode($this->curl($url,$params), true);
            }

            if (($response == NULL) or isset($response['error'])) {
                //print_r($response);
                return $response;
            }
        }
        //print_r($response);
        return $response;
    }

    private function downloadImage($url,$filename){
        if(file_exists($filename)){
            @unlink($filename);
        }
        $fp = fopen($filename,'w');
        if($fp){
            $ch = curl_init ($url);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
            $result = parse_url($url);
            curl_setopt($ch, CURLOPT_REFERER, $result['scheme'].'://'.$result['host']);
            curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0');
            $raw=curl_exec($ch);
            curl_close ($ch);
            if($raw){
                fwrite($fp, $raw);
            }
            fclose($fp);
            if(!$raw){
                @unlink($filename);
                return false;
            }
            return true;
        }
        return false;
    }
    //=============//

    //==CORE.CLASS=//
    private function drawText($image_src, $size, $angle, $x, $y, $rgb, $fontfile, $text) {
        list($w_i, $h_i, $type) = getimagesize($image_src); // Получаем размеры и тип изображения (число)
        $types = array("", "gif", "jpeg", "png"); // Массив с типами изображений
        $ext = $types[$type]; // Зная "числовой" тип изображения, узнаём название типа
        if ($ext) {
            $func = 'imagecreatefrom'.$ext; // Получаем название функции, соответствующую типу, для создания изображения
            $image = $func($image_src); // Создаём дескриптор для работы с исходным изображением
        } else {
            echo 'Некорректное изображение'; // Выводим ошибку, если формат изображения недопустимый
            return false;
        }

        $color = imagecolorallocate($image, $rgb[0], $rgb[1], $rgb[2]);

        $box = @imageTTFBbox($size, 0, $fontfile, mb_strtoupper($text, 'UTF-8'));
        $width = abs($box[4] - $box[0]);
        $height = abs($box[5] - $box[1]);

        $xx -= $width/2;

        imagettftext($image, $size, $angle, $x+$xx,$y, $color, $fontfile, mb_strtoupper($text, 'UTF-8'));
        $final_img = BASEPATH .'img/result.png';
        $func = 'image'.$ext; // Получаем функция для сохранения результата
        if($types[3])
            return $func($image,$final_img); // Сохраняем изображение
        else
            return $func($final_img,$final_img, 99); // Сохраняем изображение
    }

    private function resizeImage($file, $w, $h, $crop=FALSE) {
        list($width, $height, $type) = getimagesize($file);
        $r = $width / $height;
        if ($crop) {
            if ($width > $height) {
                $width = ceil($width-($width*abs($r-$w/$h)));
            } else {
                $height = ceil($height-($height*abs($r-$w/$h)));
            }
            $newwidth = $w;
            $newheight = $h;
        } else {
            if ($w/$h > $r) {
                $newwidth = $h*$r;
                $newheight = $h;
            } else {
                $newheight = $w/$r;
                $newwidth = $w;
            }
        }

        $types = array("", "gif", "jpeg", "png"); // Массив с типами изображений
        $ext = $types[$type]; // Зная "числовой" тип изображения, узнаём название типа
        if ($ext) {
            $func = 'imagecreatefrom'.$ext; // Получаем название функции, соответствующую типу, для создания изображения
            $src = $func($file); // Создаём дескриптор для работы с исходным изображением
        } else {
            echo 'Некорректное изображение'; // Выводим ошибку, если формат изображения недопустимый
            return false;
        }

        $dst = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

        $func = 'image'.$ext; // Получаем функция для сохранения результата
        if($types[3])
            return $func($dst,$file); // Сохраняем изображение
        else
            return $func($dst,$file, 99); // Сохраняем изображение
    }

    private function drawImage($dst_im, $src_im ,$dst_x ,$dst_y ,$src_x ,$src_y ,$src_w ,$src_h, $radius) {
        list($w_i, $h_i, $type) = getimagesize($dst_im); // Получаем размеры и тип изображения (число)
        $types = array("", "gif", "jpeg", "png"); // Массив с типами изображений
        $ext = $types[$type]; // Зная "числовой" тип изображения, узнаём название типа
        if ($ext) {
            $func = 'imagecreatefrom'.$ext; // Получаем название функции, соответствующую типу, для создания изображения
            $image_dst = $func($dst_im); // Создаём дескриптор для работы с исходным изображением
        } else {
            echo 'Некорректное изображение'; // Выво`дим ошибку, если формат изображения недопустимый
            return false;
        }

        $this->resizeImage($src_im, $src_w ,$src_h, $crop=FALSE);

        list($width, $height, $type) = getimagesize($src_im); // Получаем размеры и тип изображения (число)
        $types = array("", "gif", "jpeg", "png"); // Массив с типами изображений
        $ext = $types[$type]; // Зная "числовой" тип изображения, узнаём название типа
        if ($ext) {
            $func = 'imagecreatefrom'.$ext; // Получаем название функции, соответствующую типу, для создания изображения
            $image_src = $func($src_im); // Создаём дескриптор для работы с исходным изображением
        } else {
            echo 'Некорректное изображение'; // Выводим ошибку, если формат изображения недопустимый
            return false;
        }

        
        //====
        if($radius!=width) {
            $colour = "FF00FF";

            /*
            * create mask for top-left corner in memory
            */

            $corner_image = imagecreatetruecolor($radius, $radius);
            imageantialias($corner_image, true);

            $clear_colour = imagecolorallocate($corner_image, 0, 0, 0 );

            $solid_colour = imagecolorallocate($corner_image, hexdec(substr($colour, 0, 2)), hexdec(substr($colour, 2, 2)), hexdec(substr($colour, 4, 2)));

            imagecolortransparent($corner_image, $clear_colour);
            imagefill($corner_image, 0, 0, $solid_colour);
            imagecolortransparent($image_src, $solid_colour);

            imagefilledellipse($corner_image, $radius, $radius, $radius * 2, $radius * 2, $clear_colour);

            /*
            * render the top-left, bottom-left, bottom-right, top-right corners by rotating and copying the mask
            */
            imagecopymerge($image_src, $corner_image, 0, 0, 0, 0, $radius, $radius, 100);
            $corner_image = imagerotate($corner_image, 90, 0);
            imagecopymerge($image_src, $corner_image, 0, $height - $radius, 0, 0, $radius, $radius, 100);
            $corner_image = imagerotate($corner_image, 90, 0);
            imagecopymerge($image_src, $corner_image, $width - $radius, $height - $radius, 0, 0, $radius, $radius, 100);
            $corner_image = imagerotate($corner_image, 90, 0);
            imagecopymerge($image_src, $corner_image, $width - $radius, 0, 0, 0, $radius, $radius, 100);
        }
        //====
        imagecopy($image_dst, $image_src, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h);
        $final_img = BASEPATH. '/img/result.png';
        $func = 'image'.$ext; // Получаем функция для сохранения результата

        if($types[3])
            return $func($image_dst,$final_img); // Сохраняем изображение
        else
            return $func($image_dst,$final_img, 99); // Сохраняем изображение
    }

    //=============//

    function getSubscriber($access_token, $show_sub, $group_id) {
        if($show_sub) {
            $result = [];
            $getMember = $this->api('groups.getMembers', array(
                'access_token' => $access_token,
                'group_id' => $group_id,
                'sort' => 'time_desc',
                'fields' => 'photo_200'));

            if ($getMember != null) {
                $result['first_name'] = $getMember['response']['items'][0]['first_name'];
                $result['last_name'] = $getMember['response']['items'][0]['last_name'];
                $photo_200 = $getMember['response']['items'][0]['photo_200'];

                if (!empty($result['first_name'] ) && !empty($result['last_name']) && !empty($photo_200)) {
                    $name = BASEPATH. 'img/avatar/avatar.jpg';
                    file_put_contents($name, $this->curl($photo_200));
                    $result['user_photo'] = $name;
                }
            }
        }
        else {
            $result['first_name'] = '';
            $result['last_name'] = 'lol';
            $result['user_photo'] = '';//$this->curl("https://vk.com/images/camera_200.png");
        }

        return $result;
    }

    function getTopLicker($access_token, $show_licker, $group_id) {
        if($show_licker) {
            $result = [];

            $getWall = $this->api('wall.get', array(
                'access_token' => $access_token,
                'v' => '5.73',
                'count' => 50,
                'owner_id' => '-' . $group_id,
                'extended' => '1'
            ));

            //print_r($getWall);
            //echo $access_token;

            $bestliker = array();

            foreach ($getWall['response']['items'] as $wall) {
                $likes_count = $wall['likes']['count'];

                if (date('Ymd') == date('Ymd', $wall['date'])) {
                    if ($likes_count > 0) {
                        $query = file_get_contents("https://api.vk.com/method/likes.getList?type=post&owner_id=-$group_id&item_id=".$wall['id']."&extended=1&offset=0&count=100&v=5.73&access_token=$access_token");
                        $likesGet = json_decode($query, true);
                        //print_r($likesGet);
                        foreach ($likesGet['response']['items'] as $l) {
                            if ($l['id'] > 0) {
                                if (!isset($bestliker[$l['id']])) {
                                    $bestliker[$l['id']] = 1;
                                } else {
                                    $bestliker[$l['id']]++;
                                }
                            }
                        }
                    }
                }
            }

            if (count($bestliker) > 0) {

                $value = max($bestliker);
                $day_top_user = array_search($value, $bestliker);

                $user_like = $this->api('users.get', array(
                    'access_token' => $access_token,
                    'user_ids' => $day_top_user,
                    'fields' => 'photo_200'
                ));

                $result['first_name'] = $user_like['response'][0]['first_name'];
                $result['last_name'] = $user_like['response'][0]['last_name'];

                if (!empty($result['first_name']) && !empty($result['last_name'])) {
                    $name = BASEPATH. 'img/avatar/avatar2.jpg';
                    file_put_contents($name, $this->curl($user_like['response'][0]['photo_200']));
                    $result['user_photo'] = $name;
                }
            } else {
                $result['first_name'] = "МЕСТО";
                $result['last_name'] = "СВОБОДНО";
                $name = BASEPATH. 'img/avatar/camera_200.jpg';
                $result['user_photo'] = $name;
            }
        }

        return $result;
    }

    function timeToDayBg($show_fullday){
        $image_bg = array(
            'morning' => BASEPATH.'img/morning.png', // Утро (с 4:00 до 12:00)
            'day'     => BASEPATH.'img/day.png',         // День (с 12:00 до 18:00)
            'evening' => BASEPATH.'img/evening.png', // Вечер (c 18:00 до 24:00)
            'night'   => BASEPATH.'img/night.png',     // Ночь (c 24:00 до 4:00)
        );

        $clock = date("H");
        if($show_fullday) {
            if($clock >= 04 && $clock < 12) {return $image_bg['morning'];} 
            if($clock >= 11 && $clock < 18) {return $image_bg['day'];} 
            if($clock >= 17 && $clock < 24) {return $image_bg['evening'];}
            if($clock >= 23 || $clock < 5) {return $image_bg['night'];}
        } else {
            return $image_bg['day'];
        }
    }

    private function correctForm($number, $suffix) {
        $keys = array(2, 0, 1, 1, 1, 2);
        $mod = $number % 100;
        $suffix_key = ($mod > 7 && $mod < 20) ? 2: $keys[min($mod % 10, 5)];

        return $suffix[$suffix_key];
    }

    function timeCountdown($dateCountdown) {
        $now_date = strtotime(date("Y-m-d H:i:s"));
        $future_date = strtotime($dateCountdown);
        $difference_days = $future_date - $now_date;
        $days = floor($difference_days/86400);
        $difference_hours = $difference_days % 86400;
        $hours = floor($difference_hours/3600);
        $difference_min = $difference_hours % 3600;
        $min = floor($difference_min/60);

        $array1 = array("день", "дня", "днeй");
        $word1 = $this->correctForm($days, $array1);
        $array2 = array("час", "часа", "часов");
        $word2 = $this->correctForm($hours, $array2);
        $array3 = array("минута", "минуты", "минут");
        $word3 = $this->correctForm($min, $array3);

        return ($days.' '.$word1.' '.$hours.' '.$word2.' '.$min.' '.$word3);
    }

    function drawSubscriber ($show, $image_src, $font_size, $text_angle, $text_x, $text_y, $font_color, $font_name, $first_name, $last_name, $image_dst, $last_user_photo, $img_x, $img_y, $img_size, $img_rounding) {
        if($show) {
            $this->drawText($image_src, $font_size, $text_angle, $text_x, $text_y, $font_color, $font_name, $first_name);
            
            $box = @imageTTFBbox($font_size, 0, $font_name, mb_strtoupper($first_name, 'UTF-8'));
            $height = abs($box[5] - $box[1]);

            $this->drawText($image_dst, $font_size, $text_angle, $text_x, $text_y + $height + 10, $font_color, $font_name, $last_name);

            $this->drawImage($image_dst, $last_user_photo ,$img_x ,$img_y ,0 ,0 ,$img_size ,$img_size ,$img_rounding);
        }
    }

    function drawLicker ($show, $image_src, $font_size, $text_angle, $text_x, $text_y, $font_color, $font_name, $first_name, $last_name, $image_dst, $last_user_photo, $img_x, $img_y, $img_size, $img_rounding) {
        if($show) {
            $this->drawText($image_dst, $font_size, $text_angle, $text_x, $text_y, $font_color, $font_name, $first_name);

            $box = @imageTTFBbox($font_size, 0, $font_name, mb_strtoupper($first_name, 'UTF-8'));
            $height = abs($box[5] - $box[1]);

            $this->drawText($image_dst, $font_size, $text_angle, $text_x, $text_y + $height + 10, $font_color, $font_name, $last_name);

            $this->drawImage($image_dst, $last_user_photo ,$img_x ,$img_y ,0 ,0 ,$img_size ,$img_size ,$img_rounding);
        }
    }

    function drawTXT ($show, $image_dst, $font_size, $text_angle, $text_x, $text_y, $font_color, $font_name, $text) {
        if($show)
            $this->drawText($image_dst, $font_size, $text_angle, $text_x, $text_y, $font_color, $font_name, $text);
    }

    function uploadCover($access_token, $group_id) {
        if (file_exists(BASEPATH . '/img/result.png')) {

            $getUrl = $this->api('photos.getOwnerCoverPhotoUploadServer', array(
                'access_token' => $access_token,
                'group_id' => $group_id,
                'crop_x2' => '1590'
            ));

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $getUrl['response']['upload_url']);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($ch, CURLOPT_POSTFIELDS, array('photo' => curl_file_create(BASEPATH.'/img/result.png', 'image/jpeg', 'image0')));
            $upload = json_decode(curl_exec($ch), true);
            curl_close( $ch );

            $getUrl = $this->api('photos.saveOwnerCoverPhoto', array(
                'access_token' => $access_token,
                'hash' => $upload['hash'],
                'photo' => $upload['photo'],
            ));


            $goodjob = '<div class="alert alert-success" id="myAlert">
            <a href="#" class="close">&times;</a>
            <strong>Успех!</strong> Обложка успешно загружена.
            </div>';

            $badjob = '<div class="alert alert-danger" id="myAlert">
            <a href="#" class="close">&times;</a>
            <strong>Ошибка!</strong> Обложка не была загружена.
            </div>';


            if(stripos(json_encode($getUrl), 'response":{"images":[{')) {
                return $goodjob;
            } else {
                return $badjob;
            }
        }
    }


}
