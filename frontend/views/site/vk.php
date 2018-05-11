<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

$this->title = 'Жива шапка vk';
?>
<div class="jumbotron">
	<p class="lead"><strong>Конфигурация живой обложки</strong></p>
	<a href="https://vk.com/dota2bunker" target="_blank">Тестовая группа находится здесь, для просмотра результата</a>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<?php $f = ActiveForm::begin(); ?>

			<div role="tablist" aria-multiselectable="true">

				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="questionOne">
						<h5 class="panel-title">
							<a data-toggle="collapse" data-parent="#faq" href="#answerOne" aria-expanded="false" aria-controls="answerOne">
								Главные настройки
							</a>
						</h5>
					</div>
					<div id="answerOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="questionOne">
						<div class="panel-body">
							<?=$f->field($form, 'access_token')->textInput(['class' => 'form-control vk-text-field'])->label();?>
							<?=$f->field($form, 'group_id')->textInput(['class' => 'form-control vk-text-field'])->label("ID группы/паблика");?>
						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="questionTwo">
						<h5 class="panel-title">
							<a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#answerTwo" aria-expanded="false" aria-controls="answerTwo">
								Функция "утро-день-вечер-ночь"
							</a>
						</h5>
					</div>
					<div id="answerTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="questionTwo">
						<div class="panel-body">
							<?=$f->field($form, 'show_fullday')->checkbox(['label' => null])->label("Активация функции");?>
						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="question3">
						<h5 class="panel-title">
							<a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#answer3" aria-expanded="false" aria-controls="answer3">
								Функция "Последний вступивший участник"
							</a>
						</h5>
					</div>
					<div id="answer3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="question3">
						<div class="panel-body">
							<?=$f->field($form, 'show_sub')->checkbox(['label' => null])->label("Активация функции");?>
							<?=$f->field($form, 'font_size_sub')->textInput(['class' => 'form-control vk-text-field'])->label("Размер текста");?>
							<?=$f->field($form, 'text_angle_sub')->textInput(['class' => 'form-control vk-text-field'])->label("Угол наклона текста");?>
							<?=$f->field($form, 'text_x_sub')->textInput(['class' => 'form-control vk-text-field'])->label("Разположение текста по оси X");?>
							<?=$f->field($form, 'text_y_sub')->textInput(['class' => 'form-control vk-text-field'])->label("Разположение текста по оси Y");?>
							<?=$f->field($form, 'font_color_r_sub')->textInput(['class' => 'form-control vk-text-field'])->label("Цвет текста Red");?>
							<?=$f->field($form, 'font_color_g_sub')->textInput(['class' => 'form-control vk-text-field'])->label("Цвет текста Green");?>
							<?=$f->field($form, 'font_color_b_sub')->textInput(['class' => 'form-control vk-text-field'])->label("Цвет текста Blue");?>
							<?=$f->field($form, 'img_x_sub')->textInput(['class' => 'form-control vk-text-field'])->label("Разположение аватара по оси X");?>
							<?=$f->field($form, 'img_y_sub')->textInput(['class' => 'form-control vk-text-field'])->label("Разположение аватара по оси Y");?>
							<?=$f->field($form, 'img_size_sub')->textInput(['class' => 'form-control vk-text-field'])->label("Размер аватара");?>
							<?=$f->field($form, 'img_rounding_sub')->textInput(['class' => 'form-control vk-text-field'])->label("Размер закругления аватара");?>
						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="question4">
						<h5 class="panel-title">
							<a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#answer4" aria-expanded="false" aria-controls="answer4">
								Функция "Самый активный участник"
							</a>
						</h5>
					</div>
					<div id="answer4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="question4">
						<div class="panel-body">
							<?=$f->field($form, 'show_licker')->checkbox(['label' => null])->label("Активация функции");?>
							<?=$f->field($form, 'font_size_licker')->textInput(['class' => 'form-control vk-text-field'])->label("Размер текста");?>
							<?=$f->field($form, 'text_angle_licker')->textInput(['class' => 'form-control vk-text-field'])->label("Угол наклона текста");?>
							<?=$f->field($form, 'text_x_licker')->textInput(['class' => 'form-control vk-text-field'])->label("Разположение текста по оси X");?>
							<?=$f->field($form, 'text_y_licker')->textInput(['class' => 'form-control vk-text-field'])->label("Разположение текста по оси Y");?>
							<?=$f->field($form, 'font_color_r_licker')->textInput(['class' => 'form-control vk-text-field'])->label("Цвет текста Red");?>
							<?=$f->field($form, 'font_color_g_licker')->textInput(['class' => 'form-control vk-text-field'])->label("Цвет текста Green");?>
							<?=$f->field($form, 'font_color_b_licker')->textInput(['class' => 'form-control vk-text-field'])->label("Цвет текста Blue");?>
							<?=$f->field($form, 'img_x_licker')->textInput(['class' => 'form-control vk-text-field'])->label("Разположение аватара по оси X");?>
							<?=$f->field($form, 'img_y_licker')->textInput(['class' => 'form-control vk-text-field'])->label("Разположение аватара по оси Y");?>
							<?=$f->field($form, 'img_size_licker')->textInput(['class' => 'form-control vk-text-field'])->label("Размер аватара");?>
							<?=$f->field($form, 'img_rounding_licker')->textInput(['class' => 'form-control vk-text-field'])->label("Размер закругления аватара");?>
						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="question5">
						<h5 class="panel-title">
							<a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#answer5" aria-expanded="false" aria-controls="answer5">
								Функция "Время"
							</a>
						</h5>
					</div>
					<div id="answer5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="question5">
						<div class="panel-body">
							<?=$f->field($form, 'show_time')->checkbox(['label' => null])->label("Активация функции");?>
							<?=$f->field($form, 'timezone_time')->widget(\yiidreamteam\widgets\timezone\Picker::className(), [
								'options' => ['class' => 'form-control'],]); ?>
								<?=$f->field($form, 'font_size_time')->textInput(['class' => 'form-control vk-text-field'])->label("Размер текста");?>
								<?=$f->field($form, 'text_angle_time')->textInput(['class' => 'form-control vk-text-field'])->label("Угол наклона текста");?>
								<?=$f->field($form, 'text_x_time')->textInput(['class' => 'form-control vk-text-field'])->label("Разположение текста по оси X");?>
								<?=$f->field($form, 'text_y_time')->textInput(['class' => 'form-control vk-text-field'])->label("Разположение текста по оси Y");?>
								<?=$f->field($form, 'font_color_r_time')->textInput(['class' => 'form-control vk-text-field'])->label("Цвет текста Red");?>
								<?=$f->field($form, 'font_color_g_time')->textInput(['class' => 'form-control vk-text-field'])->label("Цвет текста Green");?>
								<?=$f->field($form, 'font_color_b_time')->textInput(['class' => 'form-control vk-text-field'])->label("Цвет текста Blue");?>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="question6">
							<h5 class="panel-title">
								<a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#answer6" aria-expanded="false" aria-controls="answer6">
									Функция "Дата"
								</a>
							</h5>
						</div>
						<div id="answer6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="question6">
							<div class="panel-body">
								<?=$f->field($form, 'show_date')->checkbox(['label' => null])->label("Активация функции");?>
								<?=$f->field($form, 'font_size_date')->textInput(['class' => 'form-control vk-text-field'])->label("Размер текста");?>
								<?=$f->field($form, 'text_angle_date')->textInput(['class' => 'form-control vk-text-field'])->label("Угол наклона текста");?>
								<?=$f->field($form, 'text_x_date')->textInput(['class' => 'form-control vk-text-field'])->label("Разположение текста по оси X");?>
								<?=$f->field($form, 'text_y_date')->textInput(['class' => 'form-control vk-text-field'])->label("Разположение текста по оси Y");?>
								<?=$f->field($form, 'font_color_r_date')->textInput(['class' => 'form-control vk-text-field'])->label("Цвет текста Red");?>
								<?=$f->field($form, 'font_color_g_date')->textInput(['class' => 'form-control vk-text-field'])->label("Цвет текста Green");?>
								<?=$f->field($form, 'font_color_b_date')->textInput(['class' => 'form-control vk-text-field'])->label("Цвет текста Blue");?>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="question7">
							<h5 class="panel-title">
								<a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#answer7" aria-expanded="false" aria-controls="answer7">
									Функция "Время отчета до события"
								</a>
							</h5>
						</div>
						<div id="answer7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="question7">
							<div class="panel-body">
								<?=$f->field($form, 'show_time_countdown')->checkbox(['label' => null])->label("Активация функции");?>
								<?= $f->field($form, 'format_time_countdown')->widget(\yii\jui\DatePicker::class, ['language' => 'ru',
								'dateFormat' => 'yyyy-MM-dd',])->label('Выберите дату окончания события: '); ?>
								<?=$f->field($form, 'font_size_time_countdown')->textInput(['class' => 'form-control vk-text-field'])->label("Размер текста");?>
								<?=$f->field($form, 'text_angle_time_countdown')->textInput(['class' => 'form-control vk-text-field'])->label("Угол наклона текста");?>
								<?=$f->field($form, 'text_x_time_countdown')->textInput(['class' => 'form-control vk-text-field'])->label("Разположение текста по оси X");?>
								<?=$f->field($form, 'text_y_time_countdown')->textInput(['class' => 'form-control vk-text-field'])->label("Разположение текста по оси Y");?>
								<?=$f->field($form, 'font_color_r_time_countdown')->textInput(['class' => 'form-control vk-text-field'])->label("Цвет текста Red");?>
								<?=$f->field($form, 'font_color_g_time_countdown')->textInput(['class' => 'form-control vk-text-field'])->label("Цвет текста Green");?>
								<?=$f->field($form, 'font_color_b_time_countdown')->textInput(['class' => 'form-control vk-text-field'])->label("Цвет текста Blue");?>
							</div>
						</div>
					</div>


				</div>
				<div class="col-sm-offset-4">
					<?= Html::submitButton('Обновить обложку', ['class' => 'btn btn-primary insta-text-field']);?>
				</div>
				<?php ActiveForm::end(); ?>
			</div>

			<div class="col-sm-10 col-sm-offset-1">
				<br>
				<?php if ($form->access_token) {?>
					<!--
					<pre>
						<?php //print_r($vk_subscriber); ?>
						<?php //print_r($vk_top_licker); ?>
					</pre>
				-->

					<img src="/img/result.png" class="responsive">
					<div class="card">
						<div class="card-block">
							<?php echo $uploadResult ?>
						</div>
					</div>
					<?php } ?>

				</div>
			</div>
		</div>