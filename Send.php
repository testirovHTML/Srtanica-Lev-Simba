<?php
if( !empty($_POST) ) {
        $message = 
        "Новое сообщение от пользователя " . $_POST['username'] . 
        "\n" ."Отправитель: " . $_POST['username'] . 
        "\n" . "E-mail: " . $_POST['usermail'] . 
        "\n" . "Сообщение: 
        \n " . $_POST['message'];

        $sendMail = mail( "perevozchikovamv@gmail.com", "Новое сообщение", $message );
        if( $sendMail ) {
            echo "Письмо успешно отправлено!";
			echo "<br /><br /><a href='/'>Вернуться на сайт.</a>";
        } else {
            echo "Упс ... кажется что-то пошло не так";
        }
    }
?>
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="/");}
window.setTimeout("changeurl();",3000);
</script>