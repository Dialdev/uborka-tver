<?php

    if (count ($_POST) > 0) {
        include "class.phpmailer.php";
        $text='';
				
        if ($_POST['m_order_contact_person_1066']) $text = "<b>Контактное лицоjj:</b> ".$_POST['m_order_contact_person_1066']." <br> 
		<b>Телефон:</b> ".$_POST['m_order_phone_1066']." <br>
		<b>E-mail:</b> ".$_POST['m_order_email_1066']." <br>
		<b>Название услуги:</b> ".$_POST['m_order_service_name_1066']." <br>
		<b>Дополнительная информация (если необходимо):</b> ".$_POST['m_order_descr_1066'];
		
		$add = false;
        if (!$_POST['m_order_contact_person_1066']) $add[] = 'Не указано контактное лицо';
        if (!$_POST['m_order_phone_1066']) $add[] = 'Не указан телефон';
		 if (!$_POST['m_order_service_name_1066']) $add[] = 'Не указано название услуги';
        /*if(!preg_match("/^\+?[0-9\ \-\(\)]{1,}$/u", $_POST['phone'])) $add[] = 'Номер телефона задан в неверном формате';*/
       

        if ($add) echo implode(', ', $add);

        else {

            $mail = new PHPMailer(true); //defaults to using php "mail()"; the true param means it will throw exceptions on errors, which we need to catch
            try {

                //$mail->Encoding = "UTF-8";

               // $mail->SetFrom('info@'.$_SERVER['HTTP_HOST']);
                $mail->Subject = "Заказ услуги с сайта1 ".$_SERVER['HTTP_HOST'];
                //    $text = $message;

                $mail->MsgHTML($text);

               /* $text = str_replace("<br/>", "\n", $text); */
                $text = strip_tags($text);
                $mail->AltBody = $text;

				$mail->AddAddress('chistiydom.tver@mail.ru');
				$mail->AddAddress('bertova@tvernet.ru');
				$mail->AddAddress('az@vzletmedia.com');
				
		
				
                // отправляем наше письмо
                if($mail->Send())
                {
                    echo "Ваше письмо успешно отправлено.";
                }
            }

            catch (phpmailerException $e) {
                echo "Ошибка отправки!";
            }     catch (Exception $e) {
                echo "Ошибка отправки!";
            }


        }

    }
?>