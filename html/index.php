<?php header ("Cache-Control: no-cache? must-revalidate");
header ("Pragma: no-cache");
?>
<!DOCTYPE html>
<html lang="ru">
 <head>
 	 <meta charset="windows-1251">
  <meta http-equiv="content-type" content="text/html; charset=windows-1251">
  <title>Бесплатная консультация по CRM-системам</title>
  <!--[if lt IE 9]> 
   <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
  <![endif]-->
  
  <link rel="stylesheet" href="style.css">
  <script type="text/javascript" src="check.js"></script>
  <script type="text/javascript" src="multivalue.js"></script>
  
 </head>
<?php

if (!empty ($_POST)){
// Обработчик
include "zform.php";

exit();
}
?>

 <body>
<header class="header">
	<img src="images/bs_logo_top.png" alt="Berner & Stafford" />
</header>
	<div class="container image">
		<div>
			<h1>Как выбрать CRM-систему*<br/>которая подойдет вашей компании?<br/>Получите <span style="color: #B32B14;">бесплатную</span> консультацию </h1>
			<p class="footnote">* CRM, CRM-система (сокращение от англ. Customer<br/>Relationship Management) &mdash; Система управления<br/>взаимоотношениями с&nbsp;клиентами.
			<a href="http://ru.wikipedia.org/wiki/CRM-система" target="_blank">Подробнее&hellip;</a>
			</p>
		</div>
	</div>
 	<div class="container">
 	<div class="main">
 		<div class="question">
 			<div class="content">
 				<h2>Зачем нужна CRM-система?</h2>
 			</div>
 		</div>
 		<div class="answer">
 			<div class="content">
 				<p>Это очень выгодная инвестиция, ведь работа с клиентами &mdash; единственный источник дохода. CRM выводит отношения с&nbsp;клиентами на новый уровень и&nbsp;резко увеличивает объем продаж. Закажите консультацию, и вы узнаете, что ваша компания может получить от&nbsp;внедрения CRM.</p>
 			</div>
 		</div>
 		<div class="tail"></div>
 		
 		<div class="question">
 			<div class="content">
 				<h2>Как понять, какую CRM выбрать?</h2>
 			</div>
 		</div>
 		<div class="answer">
 			<div class="content">
 				<p>Наши специалисты выяснят специфику вашего бизнеса, масштабы внедрения будущей CRM, задачи, которые вы ставите перед ней, и&nbsp;подскажут, какие системы и в какой комплектации вам стоит рассмотреть.</p>
 			</div>
 		</div>
 		<div class="tail"></div>
 		
 		<div class="question_2str">
 			<div class="content">
 				<h2>У нас был печальный опыт неудачного<br/>внедрения.</h2>
 			</div>
 		</div>
 		<div class="answer">
 			<div class="content">
 				<p>На презентации специалисты объяснят, что делалось неправильно, разберут типовые ошибки, расскажут, как ведется грамотное внедрение.</p>
 			</div>
 		</div>
 		<div class="tail"></div>
 		
 		<div class="question">
 			<div class="content">
 				<h2>Сколько стоит проект по внедрению CRM?
 				</h2>
 			</div>
 		</div>
 		<div class="answer">
 			<div class="content">
 				<p>Важно купить систему со всем необходимым функционалом, но&nbsp;и&nbsp;не&nbsp;переплатить за излишества. Как понять, какую систему можно купить на уже выделенный бюджет? Сколько стоит подходящая вам по функционалу система? На эти вопросы помогут найти ответ наши консультанты.</p>
 			</div>
 		</div>
 		<div class="tail"></div>
 		
	</div>
	<div class="sidebar">		
		<div class="side_form">
			<div class="content">
				<h3>Заполни анкету-заявку!</h3>
				<p>для того что бы получить бесплатную консультацию</p>
			</div>
			<form class="content" name="myform2" method="post" ENCTYPE="multipart/form-data" onsubmit="return SendForm();">

			<p class="f_line_text">Фамилия<span class="red">*</span></p>
			<div class="form_line"><input type="text" name="last_name" id="last_name1" class="f_line"></div>

			<div class="col1">
				<p class="f_line_text">Имя<span class="red">*</span></p>
				<div class="form_line"><input type="text" name="name" id="name1" class="f_line"></div>
			</div>
			<div class="col2">
				<p class="f_line_text">Отчество</p>
				<div class="form_line"><input type="text" name="father_name" id="father_name1" class="f_line"></div>
			</div>

			<p class="f_line_text">Город<span class="red">*</span></p>
			<div class="form_line"><input type="text" name="city" id="city1" class="f_line"></div>		
			<p class="f_line_text">e-mail<span class="red">*</span></p>
			<div class="form_line"><input type="text" name="email" id="email1" class="f_line"></div>
			<p class="f_line_text">Контактный телефон<span class="red">*</span></p>
			<div class="form_line"><input type="text" name="phone_number" id="phone_number1" class="f_line"></div>
			<p class="footnote"><span class="red">*</span> Поля, обязательные для заполнения</p>
			<input type="image" src="images/gray_btn.png" id="go_image" alt="button">
			</form>
			<div class="tail"></div>
		</div>
	</div>
	<div class="space"></div>
	</div>
	<div class="container">
		<div class="genius"><img src="images/genius_lrg.png" alt="" /></div>
	</div>
	<footer class="footer">
		<div class="container">
		<img src="images/bs_logo_footer.png" alt="" width="85" height="25" />
		<p>&copy; 2009-2011 &laquo;Berner&amp;Stafford&raquo; <br />
		Адрес: 127083, г. Москва, ул. 8 Марта, д.10 стр.1.<br />
		Телефон: +7 (495) 927-01-48; e-mail: <a href="mailto:info@bernerandstafford.ru">info@bernerandstafford.ru</a> </p>
		<div class="sidebar "><p><br/><br/>Дизайн: <a href="mailto:shushakov@gmail.com">kotkota studio</a></p></div>
		</div>
	</footer>
	
	<script type="text/javascript" language="javascript"> var lh_clid="5023a066e65d04217e000036"; document.write(unescape("%3Cscript src='" + 'http:' +"//track.leadhit.ru/track.js' type='text/javascript'%3E%3C/script%3E")); </script>
	<script type="text/javascript">
	
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-10560192-2']);
	_gaq.push(['_trackPageview']);
	
	(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	
	</script>
	
 </body>
 </html>