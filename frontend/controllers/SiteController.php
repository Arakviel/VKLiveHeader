<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\helpers\Html;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\VkForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionVk()
    {
        //$form = new VkForm();
        $form = VKForm::findOne(1);
        $form2 = new VkForm();

        date_default_timezone_set($timezone_time);

        //нужно сразу "пытатся загрузить данные, так как крон будет сылатся на файл vk.php"
        $vk_subscriber = $form->getSubscriber($form->access_token, $form->show_sub, $form->group_id);
        $vk_top_licker = $form->getTopLicker($form->access_token, $form->show_licker, $form->group_id);

            //$form->drawSubscriber ($show_sub, $form->timeToDayBg($show_fullday), 14, 0, 470, 355, [255,255,255], BASEPATH. 'fonts/Roboto-Regular.ttf', $vk_subscriber['first_name'], $vk_subscriber['last_name'], BASEPATH. 'img/result.png', $vk_subscriber['user_photo'],395  ,156 ,150 ,75 );
        $form->drawSubscriber ($form->show_sub, $form->timeToDayBg($form->show_fullday), $form->font_size_sub, $form->text_angle_sub, $form->text_x_sub, $form->text_y_sub, [$form->font_color_r_sub,$form->font_color_g_sub,$form->font_color_b_sub], BASEPATH. 'fonts/Roboto-Regular.ttf', $vk_subscriber['first_name'], $vk_subscriber['last_name'], BASEPATH. 'img/result.png', $vk_subscriber['user_photo'], $form->img_x_sub, $form->img_y_sub, $form->img_size_sub, $form->img_rounding_sub);
            //$form->drawLicker ($show_licker, $form->timeToDayBg($show_fullday), 14, 0, 1110, 355, [255,255,255], BASEPATH. 'fonts/Roboto-Regular.ttf', $vk_top_licker['first_name'], $vk_top_licker['last_name'], BASEPATH. 'img/result.png', $vk_top_licker['user_photo'],1040 ,156, 150 ,75 );
        $form->drawLicker ($form->show_licker, $form->timeToDayBg($show_fullday), $form->font_size_licker, $form->text_angle_licker, $form->text_x_licker, $form->text_y_licker, [$form->font_color_r_licker,$form->font_color_g_licker,$form->font_color_b_licker], BASEPATH. 'fonts/Roboto-Regular.ttf', $vk_top_licker['first_name'], $vk_top_licker['last_name'], BASEPATH. 'img/result.png', $vk_top_licker['user_photo'], $form->img_x_licker, $form->img_y_licker, $form->img_size_licker, $form->img_rounding_licker);
            //$form->drawTXT ($show_time,  BASEPATH. 'img/result.png', 14, 0, 60, 30, [255,255,255], 'fonts/Roboto-Regular.ttf', date("H:i"));
        $form->drawTXT ($form->show_time,  BASEPATH. 'img/result.png', $form->font_size_time, $form->text_angle_time, $form->text_x_time, $form->text_y_time, [$form->font_color_r_time,$form->font_color_g_time,$form->font_color_b_time], 'fonts/Roboto-Regular.ttf', date("H:i"));
            //$form->drawTXT ($show_date,  BASEPATH. 'img/result.png', 14, 0, 60, 60, [255,255,255], 'fonts/Roboto-Regular.ttf', date("d.m.y"));
        $form->drawTXT ($form->show_date,  BASEPATH. 'img/result.png', $form->font_size_date, $form->text_angle_date, $form->text_x_date, $form->text_y_date, [$form->font_color_r_date,$form->font_color_g_date,$form->font_color_b_date], 'fonts/Roboto-Regular.ttf', date("d.m.y"));
            //$dateCountdown = '2018-12-31 23:59:59'; 
        $form->drawTXT ($form->show_date,  BASEPATH. 'img/result.png', $form->font_size_time_countdown, $form->text_angle_time_countdown, $form->text_x_time_countdown, $form->text_y_time_countdown, [$form->font_color_r_time_countdown,$form->font_color_g_time_countdown,$form->font_color_b_time_countdown], 'fonts/Roboto-Regular.ttf', $form->timeCountdown($form->format_time_countdown));

        $uploadResult = $form->uploadCover($form->access_token, $form->group_id);

        if($form->load(Yii::$app->request->post()) && $form->save()) {
            Yii::$app->session->setFlash('success', 'Данные обновлены');
            /*/
            $access_token = Html::encode($form->access_token);
            $group_id = Html::encode($form->group_id);

            $show_fullday = $form->show_fullday;

            $show_sub =  $form->show_sub;
            $font_size_sub = Html::encode($form->font_size_sub);
            $text_angle_sub = Html::encode($form->text_angle_sub);
            $text_x_sub = Html::encode($form->text_x_sub);
            $text_y_sub = Html::encode($form->text_y_sub);
            $font_color_r_sub = Html::encode($form->font_color_r_sub);
            $font_color_g_sub = Html::encode($form->font_color_g_sub);
            $font_color_b_sub = Html::encode($form->font_color_b_sub);
            $img_x_sub = Html::encode($form->img_x_sub);
            $img_y_sub = Html::encode($form->img_y_sub);
            $img_size_sub = Html::encode($form->img_size_sub);
            $img_rounding_sub = Html::encode($form->img_rounding_sub);


            $show_licker = $form->show_licker;
            $font_size_licker = Html::encode($form->font_size_licker);
            $text_angle_licker = Html::encode($form->text_angle_licker);
            $text_x_licker = Html::encode($form->text_x_licker);
            $text_y_licker = Html::encode($form->text_y_licker);
            $font_color_r_licker = Html::encode($form->font_color_r_licker);
            $font_color_g_licker = Html::encode($form->font_color_g_licker);
            $font_color_b_licker = Html::encode($form->font_color_b_licker);
            $img_x_licker = Html::encode($form->img_x_licker);
            $img_y_licker = Html::encode($form->img_y_licker);
            $img_size_licker = Html::encode($form->img_size_licker);
            $img_rounding_licker = Html::encode($form->img_rounding_licker);


            $show_time = $form->show_time;
            $timezone_time = $form->timezone_time;
            
            $font_size_time = Html::encode($form->font_size_time);
            $text_angle_time = Html::encode($form->text_angle_time);
            $text_x_time = Html::encode($form->text_x_time);
            $text_y_time = Html::encode($form->text_y_time);
            $font_color_r_time = Html::encode($form->font_color_r_time);
            $font_color_g_time = Html::encode($form->font_color_g_time);
            $font_color_b_time = Html::encode($form->font_color_b_time);


            $show_date = $form->show_date;
            $font_size_date = Html::encode($form->font_size_date);
            $text_angle_date = Html::encode($form->text_angle_date);
            $text_x_date = Html::encode($form->text_x_date);
            $text_y_date = Html::encode($form->text_y_date);
            $font_color_r_date = Html::encode($form->font_color_r_date);
            $font_color_g_date = Html::encode($form->font_color_g_date);
            $font_color_b_date = Html::encode($form->font_color_b_date);


            $show_time_countdown = $form->show_time_countdown;
            $format_time_countdown = $form->format_time_countdown;
            $font_size_time_countdown = Html::encode($form->font_size_time_countdown);
            $text_angle_time_countdown = Html::encode($form->text_angle_time_countdown);
            $text_x_time_countdown = Html::encode($form->text_x_time_countdown);
            $text_y_time_countdown = Html::encode($form->text_y_time_countdown);
            $font_color_r_time_countdown = Html::encode($form->font_color_r_time_countdown);
            $font_color_g_time_countdown = Html::encode($form->font_color_g_time_countdown);
            $font_color_b_time_countdown = Html::encode($form->font_color_b_time_countdown);
            /*/
            /*/
            date_default_timezone_set($timezone_time);

            $vk_subscriber = $form->getSubscriber($form->access_token, $form->show_sub, $form->group_id);
            $vk_top_licker = $form->getTopLicker($form->access_token, $form->show_licker, $form->group_id);

            //$form->drawSubscriber ($show_sub, $form->timeToDayBg($show_fullday), 14, 0, 470, 355, [255,255,255], BASEPATH. 'fonts/Roboto-Regular.ttf', $vk_subscriber['first_name'], $vk_subscriber['last_name'], BASEPATH. 'img/result.png', $vk_subscriber['user_photo'],395  ,156 ,150 ,75 );
            $form->drawSubscriber ($form->show_sub, $form->timeToDayBg($form->show_fullday), $form->font_size_sub, $form->text_angle_sub, $form->text_x_sub, $form->text_y_sub, [$form->font_color_r_sub,$form->font_color_g_sub,$form->font_color_b_sub], BASEPATH. 'fonts/Roboto-Regular.ttf', $vk_subscriber['first_name'], $vk_subscriber['last_name'], BASEPATH. 'img/result.png', $vk_subscriber['user_photo'], $form->img_x_sub, $form->img_y_sub, $form->img_size_sub, $form->img_rounding_sub);
            //$form->drawLicker ($show_licker, $form->timeToDayBg($show_fullday), 14, 0, 1110, 355, [255,255,255], BASEPATH. 'fonts/Roboto-Regular.ttf', $vk_top_licker['first_name'], $vk_top_licker['last_name'], BASEPATH. 'img/result.png', $vk_top_licker['user_photo'],1040 ,156, 150 ,75 );
            $form->drawLicker ($form->show_licker, $form->timeToDayBg($show_fullday), $form->font_size_licker, $form->text_angle_licker, $form->text_x_licker, $form->text_y_licker, [$form->font_color_r_licker,$form->font_color_g_licker,$form->font_color_b_licker], BASEPATH. 'fonts/Roboto-Regular.ttf', $vk_top_licker['first_name'], $vk_top_licker['last_name'], BASEPATH. 'img/result.png', $vk_top_licker['user_photo'], $form->img_x_licker, $form->img_y_licker, $form->img_size_licker, $form->img_rounding_licker);
            //$form->drawTXT ($show_time,  BASEPATH. 'img/result.png', 14, 0, 60, 30, [255,255,255], 'fonts/Roboto-Regular.ttf', date("H:i"));
            $form->drawTXT ($form->show_time,  BASEPATH. 'img/result.png', $form->font_size_time, $form->text_angle_time, $form->text_x_time, $form->text_y_time, [$form->font_color_r_time,$form->font_color_g_time,$form->font_color_b_time], 'fonts/Roboto-Regular.ttf', date("H:i"));
            //$form->drawTXT ($show_date,  BASEPATH. 'img/result.png', 14, 0, 60, 60, [255,255,255], 'fonts/Roboto-Regular.ttf', date("d.m.y"));
            $form->drawTXT ($form->show_date,  BASEPATH. 'img/result.png', $form->font_size_date, $form->text_angle_date, $form->text_x_date, $form->text_y_date, [$form->font_color_r_date,$form->font_color_g_date,$form->font_color_b_date], 'fonts/Roboto-Regular.ttf', date("d.m.y"));
            //$dateCountdown = '2018-12-31 23:59:59'; 
            $form->drawTXT ($form->show_date,  BASEPATH. 'img/result.png', $form->font_size_time_countdown, $form->text_angle_time_countdown, $form->text_x_time_countdown, $form->text_y_time_countdown, [$form->font_color_r_time_countdown,$form->font_color_g_time_countdown,$form->font_color_b_time_countdown], 'fonts/Roboto-Regular.ttf', $form->timeCountdown($form->format_time_countdown));
            
            $uploadResult = $form->uploadCover($form->access_token, $form->group_id);
            /*/
            //$form->save();
        } else {
            Yii::$app->session->setFlash('error', 'Ошибка. Или данные старые, или отсуствует БД или ещё что-то:(');
            /*/
            $access_token = '';
            $group_id = '';

            $show_fullday = '';

            $show_sub = '';
            $font_size_sub = '';
            $text_angle_sub = '';
            $text_x_sub = '';
            $text_y_sub = '';
            $font_color_r_sub = '';
            $font_color_g_sub = '';
            $font_color_b_sub = '';
            $img_x_sub = '';
            $img_y_sub = '';
            $img_size_sub = '';
            $img_rounding_sub = '';

            $show_licker = '';
            $font_size_licker = '';
            $text_angle_licker = '';
            $text_x_licker = '';
            $text_y_licker = '';
            $font_color_r_licker = '';
            $font_color_g_licker = '';
            $font_color_b_licker = '';
            $img_x_licker = '';
            $img_y_licker = '';
            $img_size_licker = '';
            $img_rounding_licker = '';

            $show_time = '';
            $timezone_time = 'Europe/Moscow';
            $font_size_time = '';
            $text_angle_time = '';
            $text_x_time = '';
            $text_y_time = '';
            $font_color_r_time = '';
            $font_color_g_time = '';
            $font_color_b_time = '';

            $show_date = '';
            $font_size_date = '';
            $text_angle_date = '';
            $text_x_date = '';
            $text_y_date = '';
            $font_color_r_date = '';
            $font_color_g_date = '';
            $font_color_b_date = '';

            $show_time_countdown = '';
            $format_time_countdown = '';
            $font_size_time_countdown = '';
            $text_angle_time_countdown = '';
            $text_x_time_countdown = '';
            $text_y_time_countdown = '';
            $font_color_r_time_countdown = '';
            $font_color_g_time_countdown = '';
            $font_color_b_time_countdown = '';

            $access_token = '';
            $vk_subscriber = '';
            $vk_top_licker = '';
            $uploadResult = '';
            /*/
        }
        return $this->render('vk',
            ['form' => $form,
            /*/
            'access_token' => $access_token,
            'group_id' => $group_id,
            'show_fullday' => $show_fullday,

            'show_sub' => $show_sub,
            'font_size_sub' => $font_size_sub,
            'text_angle_sub' => $text_angle_sub,
            'text_x_sub' => $text_x_sub,
            'text_y_sub' => $text_y_sub,
            'font_color_r_sub' => $font_color_r_sub,
            'font_color_g_sub' => $font_color_g_sub,
            'font_color_b_sub' => $font_color_b_sub,
            'img_x_sub' => $img_x_sub,
            'img_y_sub' => $img_y_sub,
            'img_size_sub' => $img_size_sub,
            'img_rounding_sub' => $img_rounding_sub,

            'show_licker' => $show_licker,
            'font_size_licker' => $font_size_licker,
            'text_angle_licker' => $text_angle_licker,
            'text_x_licker' => $text_x_licker,
            'text_y_licker' => $text_y_licker,
            'font_color_r_licker' => $font_color_r_licker,
            'font_color_g_licker' => $font_color_g_licker,
            'font_color_b_licker' => $font_color_b_licker,
            'img_x_licker' => $img_x_licker,
            'img_y_licker' => $img_y_licker,
            'img_size_licker' => $img_size_licker,
            'img_rounding_licker' => $img_rounding_licker,

            'show_time' => $show_time,
            'timezone_time' => $timezone_time,
            'font_size_time' => $font_size_time,
            'text_angle_time' => $text_angle_time,
            'text_x_time' => $text_x_time,
            'text_y_time' => $text_y_time,
            'font_color_r_time' => $font_color_r_time,
            'font_color_g_time' => $font_color_g_time,
            'font_color_b_time' => $font_color_b_time,

            'show_date' => $show_date,
            'font_size_date' => $font_size_date,
            'text_angle_date' => $text_angle_date,
            'text_x_date' => $text_x_date,
            'text_y_date' => $text_y_date,
            'font_color_r_date' => $font_color_r_date,
            'font_color_g_date' => $font_color_g_date,
            'font_color_b_date' => $font_color_b_date,


            'show_time_countdown' => $show_time_countdown,
            'format_time_countdown' => $format_time_countdown,
            'font_size_time_countdown' => $font_size_time_countdown,
            'text_angle_time_countdown' => $text_angle_time_countdown,
            'text_x_time_countdown' => $text_x_time_countdown,
            'text_y_time_countdown' => $text_y_time_countdown,
            'font_color_r_time_countdown' => $font_color_r_time_countdown,
            'font_color_g_time_countdown' => $font_color_g_time_countdown,
            'font_color_b_time_countdown' => $font_color_b_time_countdown,

            /*/
            'vk_subscriber' => $vk_subscriber,
            'vk_top_licker' => $vk_top_licker,

            'uploadResult' => $uploadResult,
        ]
    );
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
