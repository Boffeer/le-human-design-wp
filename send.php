<?php

// Перед тем, как орать почему заявка не отправляется, проверь этот массив

$config = array(
	'email' => true,
	'telegram' => false,
	'google_sheets' => false,
	'logfile' => false,
	'amo' => false,
);

/**
 * @date 2021-10-18
 * @param {string} $var_name
 * @returns {any}
 */
function getSafeValue($var_name)
{
	$safe_value = strip_tags($_POST[$var_name]);
	$safe_value = htmlentities($safe_value, ENT_QUOTES, "UTF-8");
	$safe_value = htmlspecialchars($safe_value, ENT_QUOTES);
	return $safe_value;
}

function getCurrentDate()
{
	$date = new DateTime();
	$date = $date->format('d.m.Y, H:i');
	return $date;
}

?>


<?php

/**
 * EMAIL
 */
if ($config['email']) {

	$formname = getSafeValue('formname');
	$name = getSafeValue('user_name');
	$tel = getSafeValue('user_tel');

	$message_body =
		"Form: $formname<br/><br/>" .
		"Name: $name<br/><br/>" .
		"Phone: $tel<br/><br/>";

	$post_data = $_POST;
	foreach ($post_data as $key => $post) {
		if ($post != $_POST['formname'] && $post != $_POST['user_name'] && $post != $_POST['user_tel']) {
			$message_body .= $key . ": $post<br/><br/>";
		}
	}

	// $email_to = 'boffeechane@gmail.com';
	$email_to = 'nedko.pazvantov@gmail.com ';
	$email_from = 'info@le-humandesign.fr';
	$email_subject = "New Lead";

	// если форма без ошибок

	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
	$headers .= "From: <" . $email_from . ">\r\n"; // от кого письмо

	// отправляем письмо
	mail($email_to, $email_subject, $message_body, $headers);
	echo json_encode(array('status' => 'success', 'body' => $message_body));
}
?>


<?php
/**
 * Telegram
 */

if ($config['telegram']) {
	//В переменную $token нужно вставить токен, который нам прислал @botFather
	$token = "";

	//Сюда вставляем chat_id
	$chat_id = "";

	//Определяем переменные для передачи данных из нашей формы
	// if ($_POST['act'] == 'order') {
	$name = ($_POST['user_name']);
	$phone = ($_POST['user_tel']);
	// }

	//Собираем в массив то, что будет передаваться боту
	$arr = array(
		'Имя:' => $name,
		'Телефон:' => $phone
	);

	//Настраиваем внешний вид сообщения в телеграме
	foreach ($arr as $key => $value) {
		$txt .= "<b>" . $key . "</b> " . $value . "%0A";
	};

	//Передаем данные боту
	$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");
}
?>


<?php
/**
 * GOOGLE SPREADSHEETS
 */

if ($config['google_sheets']) {
	// формируем запись в таблицу google (изменить)
	$url = "https://docs.google.com/forms/d/ссылка_на_твой_опросник/formResponse";
	// массив данных (изменить entry, draft и fbzx)
	$post_data = array(
		"entry.286082292" => $_POST['user_name'],
		"entry.1033324795" => $_POST['user_tel'],
		"draftResponse" => "[,,&quot;2360450121179784330&quot;]",
		"pageHistory" => "0",
		"fbzx" => "-2360450121179784330"
	);

	// Далее не трогать
	// с помощью CURL заносим данные в таблицу google
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	// указываем, что у нас POST запрос
	curl_setopt($ch, CURLOPT_POST, 1);
	// добавляем переменные
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
	//заполняем таблицу google
	$output = curl_exec($ch);
	curl_close($ch);
}
?>

<?php
if ($config['logfile']) {

	$log_file_name = 'leads.log';

	$fp = fopen($log_file_name, 'a+');

	$date = date('Y-m-d H:i:s') . "\n";


	$formname = getSafeValue('formname');
	$name = getSafeValue('user_name');
	$tel = getSafeValue('user_tel');

	$actual_link = getActualLink();

	$log_data =
		"$actual_link\n" .
		"Форма: $formname\n" .
		"Имя: $name\n" .
		"Телефон: $tel\n";

	$text = $date . "\n" .
		$log_data . "\n" .
		"---------\n\n";

	fwrite($fp, $text);
	fclose($fp);
}
?>

<?php

if ($config['amo']) {
	// AMO lead
	$arr = array(
		"Метод доставки: " => $order_billing_last_name,
		"Город доставки: " => $order_shipping_city,
		"Адрес доставки: " => $order_shipping_address_1,
		"\n\nТовары:\n" => $zufa_amo_product_info,
		"Стоимость доставки: " => $order_shipping_totale,
		"Метод оплаты: " => $order_payment_method_title,
		"Итого с доставкой: " => $order_total,
	);
	$paramsArray = array(
		'fields[name_1]'  => $order_billing_first_name,
		'fields[502127_1][247303]'  => $order_billing_email,
		'fields[502125_1][247291]' => $order_billing_phone,
		'fields[note_2]' => '',
		// This parameters you can find at from publishing section → Wordpress shortcode
		'form_id' => '',
		'hash'    => ''
	);
	foreach ($arr as $key => $value) {
		$paramsArray['fields[note_2]'] .= $key . " " . $value . "\n";
	};

	$vars = http_build_query($paramsArray);

	$options = array(
		'http' => array(
			'method'  => 'POST',
			'header'  => 'Content-type: application/x-www-form-urlencoded',
			'content' => $vars
		)
	);

	$send_counter = 0;

	$context  = stream_context_create($options);
	file_get_contents('https://forms.amocrm.ru/queue/add', false, $context);
}
