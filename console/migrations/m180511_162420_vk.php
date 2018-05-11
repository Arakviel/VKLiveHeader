<?php

use yii\db\Migration;

/**
 * Class m180511_162420_vk
 */
class m180511_162420_vk extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $sql = 'CREATE TABLE vk ( id INT(11) AUTO_INCREMENT PRIMARY KEY , access_token VARCHAR(255)  , group_id INT(11) , show_fullday BOOLEAN  , show_sub BOOLEAN  , font_size_sub INT(11) , text_angle_sub INT(11) , text_x_sub INT(11) , text_y_sub INT(11) , font_color_r_sub INT(11) , font_color_g_sub INT(11) , font_color_b_sub INT(11) , img_x_sub INT(11) , img_y_sub INT(11) , img_size_sub INT(11) , img_rounding_sub INT(11) , show_licker BOOLEAN  , font_size_licker INT(11) , text_angle_licker INT(11) , text_x_licker INT(11) , text_y_licker INT(11) , font_color_r_licker INT(11) , font_color_g_licker INT(11) , font_color_b_licker INT(11) , img_x_licker INT(11) , img_y_licker INT(11) , img_size_licker INT(11) , img_rounding_licker INT(11) , show_time BOOLEAN  , timezone_time VARCHAR(255)  , font_size_time INT(11) , text_angle_time INT(11) , text_x_time INT(11) , text_y_time INT(11) , font_color_r_time INT(11) , font_color_g_time INT(11) , font_color_b_time INT(11) , show_date BOOLEAN  , font_size_date INT(11) , text_angle_date INT(11) , text_x_date INT(11) , text_y_date INT(11) , font_color_r_date INT(11) , font_color_g_date INT(11) , font_color_b_date INT(11) , show_time_countdown BOOLEAN  , format_time_countdown DATE  , font_size_time_countdown INT(11) , text_angle_time_countdown INT(11) , text_x_time_countdown INT(11) , text_y_time_countdown INT(11) , font_color_r_time_countdown INT(11) , font_color_g_time_countdown INT(11) , font_color_b_time_countdown INT(11));';
        Yii::$app->db->createCommand($sql)->execute();
    }

    public function down()
    {
        $sql = 'DROP TABLE vk;';
        Yii::$app->db->createCommand($sql)->execute();
    }
}
