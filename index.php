



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>


<meta http-equiv="Тип-содержимое" content="text/html; charset=windows-1251">
<META http-equiv=Content-Type content="text/html; charset=windows-1251">

<meta content="" name=description>

<link rel="stylesheet" type="text/css" href="stil.css">

<link rel="icon" href="favicon.ico">



<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script> 


<script type="text/javascript">

/*** 
    Simple jQuery Slideshow Script
    Released by Jon Raasch (jonraasch.com) under FreeBSD license: free to use or modify, not responsible for anything, etc.  Please link out to me if you like it :)
***/

function slideSwitch() {
    var $active = $('#slideshow DIV.active');

    if ( $active.length == 0 ) $active = $('#slideshow DIV:last');

    // use this to pull the divs in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $('#slideshow DIV:first');

    // uncomment below to pull the divs randomly
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );


    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}

$(function() {
    setInterval( "slideSwitch()", 5000 );
});

</script>

<script type="text/javascript" src="./fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="./fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="./fancybox/jquery.fancybox-1.3.4.css" media="screen" />


	<script type="text/javascript">
		$(document).ready(function() {
			/*
			*   Examples - images
			*/

			$("a#example1").fancybox();

			$("a#example2").fancybox({
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'elastic'
			});

			$("a#example3").fancybox({
				'transitionIn'	: 'none',
				'transitionOut'	: 'none'	
			});

			$("a#example4").fancybox({
				'opacity'		: true,
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'none'
			});

			$("a#example5").fancybox();

			$("a#example6").fancybox({
				'titlePosition'		: 'outside',
				'overlayColor'		: '#000',
				'overlayOpacity'	: 0.9
			});

			$("a#example7").fancybox({
				'titlePosition'	: 'inside'
			});

			$("a#example8").fancybox({
				'titlePosition'	: 'over'
			});

			$("a[rel=example_group]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over"> '  + (title.length ? '  ' + title : '') + '</span>';
				}
			});

			/*
			*   Examples - various
			*/

			$("#various1").fancybox({
				'titlePosition'		: 'inside',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});

			$("#various2").fancybox();

			$("#various3").fancybox({
				'width'				: '75%',
				'height'			: '75%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});

			$("#various4").fancybox({
				'padding'			: 0,
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});
		});
	</script>


<title>Тепло в Доме</title>
</head>


<body>
<center>
<table width="990" height="100" border="0" cellpadding="0" cellspacing="0" id="kontur">
  <tr valign="top">
    <td width="990" height="100" background="images/sapka.png" bgcolor="#FFFFFF"><table width="990" cellpadding="0" cellspacing="0">
      <tr>
        <td width="422"></td>
        <td width="275" rowspan="6"><table width="275" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="6" valign="top"></td>
          </tr>
          <tr>
            <td height="19" valign="top"><div id="text2">
              <div align="center">Звоните!</div>
            </div></td>
          </tr>
          <tr>
            <td height="40"><div id="text3">
              <div align="center">8-961-777-49-07</div>
            </div></td>
          </tr>
          <tr>
            <td height="30" valign="top"><div id="text2">
              <div align="center">(работаем без выходных)</div>
            </div></td>
          </tr>
          <tr>
            <td height="30" valign="bottom"><div id="st300">
              <div align="center"><a href="#?w=700" rel="popup_contact2" class="poplight2">Вызвать специалиста</a></div>
            </div>
              <div id="popup_contact2" class="popup_block">
                
                <form id="form4" action="#" method="post">	 
    <div align="center">
      <table width="700" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td colspan="7" class="item_produkt"><div id="priziv4">
            <div align="center"><strong>Запишитесь на бесплатную консультацию!</strong> 
              <div id="priziv3">Наш специалист подъедет к Вам 
                <br />
                и на месте составит детальную схему отопления,<br />учитывая особенности Вашего дома. </div> 
              </div>
            </div>        </td>
          </tr>
        <tr>
          <td height="10" colspan="7"></td>
          </tr>
        <tr>
          <td width="30" align="right" class="item_produkt"></td>
            <td width="200" align="right" class="item_produkt"><div align="center">
              
              <em>Ваше имя:	</em><br />
              <input type="text" class="thin" name="name2"  size="30" />
              </div></td>
            <td width="30" class="item_produkt">&nbsp;</td>
            <td width="200" class="item_produkt"><div align="center"><em>Ваш телефон:	</em><br />				
              <input type="text" class="thin" name="telefon2" size="30">
              </div></td>
            <td width="30" class="item_produkt"></td>
            <td width="200" rowspan="2" valign="bottom" class="item_produkt"><button type="submit" name="konsult" class="forma_sakasa3">Записаться</button></td>
            <td width="30" rowspan="2" valign="bottom" class="item_produkt">&nbsp;</td>
          </tr>
        <tr>
          <td width="63" height="5" colspan="3" ></td>
            <td height="5" colspan="2" ></td>
          </tr>
        <tr>
          <td height="5" colspan="7"></td>
          </tr>
        <tr>
          <td height="1" colspan="7"></td>
          </tr>
      </table>
    </div>
  </form>
  
  </div>
  
                </div>
              <div align="center">
                <script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//Когда вы нажимаете на ссылку с классом poplight и HREF начинается с a # 
	$('a.poplight2[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//Потяните запросов и переменных из URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade в Popup и добавить кнопку закрытия
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//Определить запас на выравнивание по центру (вертикальной + горизонтальной) - мы добавляем 80 до высота / ширина, чтобы разместить для заполнения + ширина границы, определенные в CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//Применить маржи в Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade в фоновом режиме
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//Закрыть всплывающих окон и Fade слой
	$('a.close, #fade').live('click', function() { //При нажатии на близких или исчезают слой ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //исчезать их обоих
		
		return false;
	});
 
	
});
              </script>
              </div></td>
          </tr>
          <tr>
            <td height="13"></td>
          </tr>
        </table></td>
        <td width="24" height="10"></td>
        <td width="254"></td>
        <td width="10"></td>
      </tr>
      <tr>
        <td></td>
        <td height="19"></td>
        <td align="center" valign="middle"><div id="text5">Производственная база:</div></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td height="45"></td>
        <td align="center" valign="top"><div id="text5">г.Первоуральск, ул.Медиков, 15б</div></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td height="27"></td>
        <td align="center" valign="top"><div id="text6">abazasl@mail.ru</div></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td height="28"></td>
        <td valign="top"> <div align="center"><div id="st200"><a href="#?w=470" rel="popup_contact" class="poplight">ЗАДАТЬ ВОПРОС</a></div>
<div id="popup_contact" class="popup_block">


<p align="center" id="text6">Ждём Ваши вопросы!</p><br />

<form id="form2" action="#" method="post">	
		
	
				<p id="text6">
					<label for="name">Ваше имя: </label>
					<input type="text" name="name" id="name" size="30" />
				</p>
				
				<p id="text6">
					<label for="web">Ваш телефон: *</label>
					<input type="text" name="email" id="email" size="30" />
				</p>			
																			
				<p id="text6">
					<label for="message">Ваш вопрос: *</label></p>
					<textarea name="message" id="message" cols="50" rows="5"></textarea>
												
					<br />	<br />	

			<button type="submit" name="kupit" class="forma_sakasa">Отправить вопрос</button>			
  </form>
</div>
		</div>


<script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//Когда вы нажимаете на ссылку с классом poplight и HREF начинается с a # 
	$('a.poplight[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//Потяните запросов и переменных из URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade в Popup и добавить кнопку закрытия
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//Определить запас на выравнивание по центру (вертикальной + горизонтальной) - мы добавляем 80 до высота / ширина, чтобы разместить для заполнения + ширина границы, определенные в CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//Применить маржи в Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade в фоновом режиме
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//Закрыть всплывающих окон и Fade слой
	$('a.close, #fade').live('click', function() { //При нажатии на близких или исчезают слой ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //исчезать их обоих
		
		return false;
	});
 
	
});
</script>	</td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td height="10"></td>
        <td></td>
        <td></td>
      </tr>
    </table></td>
    </tr>
  <tr>
    <td align="center" valign="top"  bgcolor="FBFDF2"><table width="990" height="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" valign="top">
		
		<br />
		
		<table width="530" height="100" border="0" cellpadding="25" cellspacing="0" id="priziv_u">
		    <tr>
		      <td height="100" valign="top" background="images/motiv3.png">
                <div align="center"><strong id="ekonom">Сэкономьте от 20 000 до 50 000 рублей!                </strong></div>
                <div id="probel"></div>
                <div align="center">До конца ноября 2016 года закажите<br />отопительную систему и получите в подарок<br />проект отопления, канализации и водоснабжения!                </div></td>
		      </tr>
		    </table>
		
		<a name="d6x6m"></a><br />
          <br /><div id="price"> <div align="center">Отопление для Вашего дома "под ключ".</div>
            </div><br /><br /><table width="966" height="117" border="0" cellpadding="0"  id="priziv_u6">
		    <tr>
		      <td width="156" valign="middle" background="images/motiv6.png"><div id="st600">
              <div align="center"><a href="#?w=700" rel="popup_contact_1p" class="poplight_1p"><strong>Бесплатная</strong><br />
                консультация<br />на месте<br />
<div align="right" id="priziv_pod">подробнее</div></a></div>
            </div>
              <div id="popup_contact_1p" class="popup_block">
                
                <form id="form4" action="#" method="post">	 
    <div align="center">
      <table width="700" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td colspan="7" class="item_produkt"><div id="priziv4">
            <div align="center"><strong>Запишитесь на бесплатную консультацию!</strong> 
              <div id="priziv3">Наш специалист подъедет к Вам 
                <br />
                и на месте составит детальную схему отопления,<br />учитывая особенности Вашего дома. </div> 
              </div>
            </div>        </td>
          </tr>
        <tr>
          <td height="10" colspan="7"></td>
          </tr>
        <tr>
          <td width="30" align="right" class="item_produkt"></td>
            <td width="200" align="right" class="item_produkt"><div align="center">
              
              <em>Ваше имя:	</em><br />
              <input type="text" class="thin" name="name2"  size="30" />
              </div></td>
            <td width="30" class="item_produkt">&nbsp;</td>
            <td width="200" class="item_produkt"><div align="center"><em>Ваш телефон:	</em><br />				
              <input type="text" class="thin" name="telefon2" size="30">
              </div></td>
            <td width="30" class="item_produkt"></td>
            <td width="200" rowspan="2" valign="bottom" class="item_produkt"><button type="submit" name="konsult" class="forma_sakasa3">Записаться</button></td>
            <td width="30" rowspan="2" valign="bottom" class="item_produkt">&nbsp;</td>
          </tr>
        <tr>
          <td width="63" height="5" colspan="3" ></td>
            <td height="5" colspan="2" ></td>
          </tr>
        <tr>
          <td height="5" colspan="7"></td>
          </tr>
        <tr>
          <td height="1" colspan="7"></td>
          </tr>
      </table>
    </div>
  </form>
  
  </div>
  
                </div>
              <div align="center">
                <script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//Когда вы нажимаете на ссылку с классом poplight и HREF начинается с a # 
	$('a.poplight_1p[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//Потяните запросов и переменных из URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade в Popup и добавить кнопку закрытия
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//Определить запас на выравнивание по центру (вертикальной + горизонтальной) - мы добавляем 80 до высота / ширина, чтобы разместить для заполнения + ширина границы, определенные в CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//Применить маржи в Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade в фоновом режиме
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//Закрыть всплывающих окон и Fade слой
	$('a.close, #fade').live('click', function() { //При нажатии на близких или исчезают слой ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //исчезать их обоих
		
		return false;
	});
 
	
});
              </script>
              </div></td>
		      <td width="3" valign="middle"></td>
		      <td width="156" valign="top" background="images/motiv6_n_o.png"><div align="center" id="pr2_no">Монтаж<br /> 
		        отопления<br />
		        <strong>за 1 день</strong></div></td>
		      <td width="3" valign="top"></td>
		      <td width="156" valign="middle" background="images/motiv6.png"><div id="st600">
              <div align="center"><a href="#?w=600" rel="popup_contact_3p" class="poplight_3p"><strong>12 лет опыта</strong><br />
<span id="priziv_u3"><strong>проектирования</strong></span><br />
и монтажа<br />
<div align="right" id="priziv_pod2">подробнее</div></a></div>
            </div>
              <div id="popup_contact_3p" class="popup_block">
                
                 
    <div align="center">
      <table width="600" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td colspan="7" class="item_produkt"><div id="priziv4">
           
              <div id="priziv33">Наша компания более 12-ти лет работает с отопительными системами.<br /> <br />Мы специализируемся на проектировании, монтаже и запуске отопительных систем в  частных домах, коттеджах, садовых домиках, а также детских садах и больницах. 
              <br /> <br />Берём на обслуживание действующие системы отопления.<br /> <br />Проводим восcтановительные работы в ситуациях, когда котёл остановился и замёрз.
               </div>
              
            </div>        </td>
          </tr>
       
       
      
      </table>
    </div>
 
  
  </div>
  
               
              <div align="center">
                <script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//Когда вы нажимаете на ссылку с классом poplight и HREF начинается с a # 
	$('a.poplight_3p[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//Потяните запросов и переменных из URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade в Popup и добавить кнопку закрытия
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//Определить запас на выравнивание по центру (вертикальной + горизонтальной) - мы добавляем 80 до высота / ширина, чтобы разместить для заполнения + ширина границы, определенные в CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//Применить маржи в Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade в фоновом режиме
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//Закрыть всплывающих окон и Fade слой
	$('a.close, #fade').live('click', function() { //При нажатии на близких или исчезают слой ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //исчезать их обоих
		
		return false;
	});
 
	
});
              </script>
              </div></td>
		      <td width="3" valign="top"></td>
		      <td width="156" valign="middle" background="images/motiv6.png"><div id="st600">
              <div align="center"><a href="#?w=600" rel="popup_contact_4p" class="poplight_4p"><strong>Экономия</strong><br /> 
топлива<br /> 
до 50%<br />
<div align="right" id="priziv_pod">подробнее</div>
</a></div>
            </div>
              <div id="popup_contact_4p" class="popup_block">
                
               
    <div align="center">
      <table width="600" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td class="item_produkt"><div id="priziv4">
           
              <div id="priziv33">Спроектированная нашими специалистами отопительная система и профессиональный монтаж при эксплуатации даст Вам экономию для любого вида топлива до 50%.  <br /> <br />
              <br /> <br />
               </div>
              
            </div>        </td>
          </tr>
       
       
      
      </table>
    </div>
 
  
  </div>
  
                <div align="center">
                <script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//Когда вы нажимаете на ссылку с классом poplight и HREF начинается с a # 
	$('a.poplight_4p[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//Потяните запросов и переменных из URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade в Popup и добавить кнопку закрытия
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//Определить запас на выравнивание по центру (вертикальной + горизонтальной) - мы добавляем 80 до высота / ширина, чтобы разместить для заполнения + ширина границы, определенные в CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//Применить маржи в Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade в фоновом режиме
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//Закрыть всплывающих окон и Fade слой
	$('a.close, #fade').live('click', function() { //При нажатии на близких или исчезают слой ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //исчезать их обоих
		
		return false;
	});
 
	
});
              </script>
              </div></td>
		      <td width="3" valign="top"></td>
		      <td width="156" valign="middle" background="images/motiv6.png"><div id="st600">
              <div align="center"><a href="#?w=600" rel="popup_contact_5p" class="poplight_5p"><strong>Оптовые</strong><br /> 
цены на<br />
 оборудование<br />
<div align="right" id="priziv_pod">подробнее</div></a></div>
            </div>
              <div id="popup_contact_5p" class="popup_block">
                
                 
    <div align="center">
      <table width="600" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td class="item_produkt"><div id="priziv4">
           
              <div id="priziv33">Благодаря объёмам наших работ, мы закупаем отопительное оборудование и материалы у оптовых поставщиков.<br /> <br />Поэтому мы можем предложить Вам оптовые цены на оборудование и материалы, что сэкономит Ваше время на поиск приемлемых цен и Ваши деньги.
              
               </div>
              
            </div>        </td>
          </tr>
       
       
      
      </table>
    </div>
 
  
  </div>
  
                </div>
              <div align="center">
                <script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//Когда вы нажимаете на ссылку с классом poplight и HREF начинается с a # 
	$('a.poplight_5p[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//Потяните запросов и переменных из URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade в Popup и добавить кнопку закрытия
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//Определить запас на выравнивание по центру (вертикальной + горизонтальной) - мы добавляем 80 до высота / ширина, чтобы разместить для заполнения + ширина границы, определенные в CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//Применить маржи в Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade в фоновом режиме
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//Закрыть всплывающих окон и Fade слой
	$('a.close, #fade').live('click', function() { //При нажатии на близких или исчезают слой ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //исчезать их обоих
		
		return false;
	});
 
	
});
              </script>
              </div></td>
		      <td width="3" valign="top"></td>
		      <td width="156" valign="middle" background="images/motiv6.png"><div id="st600">
              <div align="center"><a href="#?w=600" rel="popup_contact_6p" class="poplight_6p"><strong>1 год</strong><br /> 
гарантийного<br />
обслуживания<br />
<div align="right" id="priziv_pod">подробнее</div></a></div>
            </div>
              <div id="popup_contact_6p" class="popup_block">
                
              
    <div align="center">
      <table width="600" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td class="item_produkt"><div id="priziv4">
           
              <div id="priziv33">На всё смонтированное нами оборудование и используемые материалы мы  даём Вам годовую гарантию.<br /> <br />Затем мы можем предложить Вам сервисное обслуживание Вашей отопительной системы.
              
               </div>
              
            </div>        </td>
          </tr>
       
       
      
      </table>
    </div>
 
  
  </div>
  
                </div>
              <div align="center">
                <script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//Когда вы нажимаете на ссылку с классом poplight и HREF начинается с a # 
	$('a.poplight_6p[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//Потяните запросов и переменных из URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade в Popup и добавить кнопку закрытия
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//Определить запас на выравнивание по центру (вертикальной + горизонтальной) - мы добавляем 80 до высота / ширина, чтобы разместить для заполнения + ширина границы, определенные в CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//Применить маржи в Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade в фоновом режиме
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//Закрыть всплывающих окон и Fade слой
	$('a.close, #fade').live('click', function() { //При нажатии на близких или исчезают слой ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //исчезать их обоих
		
		return false;
	});
 
	
});
              </script>
              </div></td>
		    </tr>
		    
		    </table>
            
            <br />
            <br /><br />
          
          <div id="srub"> <div align="left">Для дома размером <strong>6 на 6 </strong> метров<br />
            ( электрокотёл ) :</div>
            </div>
		  <table width="900" height="10" border="0" cellpadding="0" id="tab_ban">
		    <tr>
		      <td height="100" colspan="4" valign="top"><div id="content_a"><a rel="example_group" href="images/img/max/66_1_nokm.png" title="[2] - электрокотёл, [3] - циркуляционный насос, [4] - алюминевые радиаторы, [5] - подающая труба отопления, [6] - обратная труба отопления"><img src="images/img/min/66_1_nokm_min.png" width="400"/></a></div>
		      <br /><br /></td>
              <td width="50" rowspan="5"></td>
              <td rowspan="5" valign="top"><strong id="ban">Стоимость всей отопительной системы<br />с учётом доставки и монтажа "под ключ":</strong><br /><strong id="srub2">45 т.р.</strong><br />
                <br />
                   <div id="ban2">Элементы отопительной системы:</div>
                  
                  <table width="330" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                       <td width="30" height="25" align="left" valign="middle"><img src="images/krug2.png" width="24" height="20" /></td>
                       <td width="128" align="left" valign="middle"><strong>Электрокотёл:</strong></td>
                       <td width="120" align="left" valign="middle"><div id="st500">
   <a href="#?w=470" rel="popup_contact_evpn" class="poplight_evpn">ЭВПМ 6 кВт</a>.
    </div>
    <div id="popup_contact_evpn" class="popup_block">
               
    <div align="center">
      <table width="470" border="0" cellpadding="0" cellspacing="5" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td  class="item_produkt">
            <div align="center" id="ban2"><strong>Электрокотёл ЭВПМ-6</strong>  </div><br /> 
             Номинальная мощность: <strong>6 кВт.</strong> <br />
			 Напряжение питания (однофазное): <strong>220В.</strong> <br />
			 Температура воды на выходе: <strong>35-85 С.</strong><br />
			 Площадь отапливаемых помещений<br />при температуре 25 С : <strong>44 кв.м.</strong> <br />
			 Площадь отапливаемых помещений<br />при температуре 20 С : <strong>60 кв.м.</strong> <br />
			 Производитель: <strong>Россия.</strong> <br /><br />
			 <em>Примечание:</em>
			 <div id="probel"></div>
			 <img src="images/kv.png" width="22" height="14" /> Всё используемое нами отопительное оборудование на практике показало свою надёжность и долговечность при эксплуатации в условиях уральского климата.<div id="probel"></div><img src="images/kv.png" width="22" height="14" /> По Вашему желанию мы можем смонтировать отопительную систему из оборудования <br />выбранного Вами. </td>
            </tr>  
      </table>
    </div>
  </div>
  
                </div>
                <div align="center">
                <script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//Когда вы нажимаете на ссылку с классом poplight и HREF начинается с a # 
	$('a.poplight_evpn[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//Потяните запросов и переменных из URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade в Popup и добавить кнопку закрытия
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//Определить запас на выравнивание по центру (вертикальной + горизонтальной) - мы добавляем 80 до высота / ширина, чтобы разместить для заполнения + ширина границы, определенные в CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//Применить маржи в Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade в фоновом режиме
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//Закрыть всплывающих окон и Fade слой
	$('a.close, #fade').live('click', function() { //При нажатии на близких или исчезают слой ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //исчезать их обоих
		
		return false;
	});
 
	
});
              </script>
              </div> </td>
                       <td align="left" valign="bottom"> <div align="center"><div id="st200_k"><a href="#?w=650" rel="popup_contact_dr_k1" class="poplight_dr_k1">Другой котёл</a></div>
<div id="popup_contact_dr_k1" class="popup_block">


<p align="center" id="text67">Укажите название котла, который Вы бы хотели использовать<br />и мы в течение дня сообщим по телефону или вышлем Вам на почту стоимость отопления "под ключ" с нужным Вам котлом:</p><br />

<form id="f6x6e" action="index.php?lot=6x6e" method="post">	
		
	
				<p id="text6" align="left">
					<label for="name">Название нужного Вам котла: </label>
					<input type="text" name="name" id="name" size="23" />
				</p>
				
				<p id="text6" align="left">
					<label for="web">Ваш телефон или e-mail: </label>
					<input type="text" name="email" id="email" size="30" />
				</p>			
																			
			
												
					<br />	<br />	

			<button type="submit" name="kotel" class="forma_sakasa">Узнать стоимость</button>			
  </form>
</div>
		</div>


<script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//Когда вы нажимаете на ссылку с классом poplight и HREF начинается с a # 
	$('a.poplight_dr_k1[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//Потяните запросов и переменных из URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade в Popup и добавить кнопку закрытия
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//Определить запас на выравнивание по центру (вертикальной + горизонтальной) - мы добавляем 80 до высота / ширина, чтобы разместить для заполнения + ширина границы, определенные в CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//Применить маржи в Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade в фоновом режиме
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//Закрыть всплывающих окон и Fade слой
	$('a.close, #fade').live('click', function() { //При нажатии на близких или исчезают слой ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //исчезать их обоих
		
		return false;
	});
 
	
});
</script>	</td>
                     </tr>
                   </table>
			<img src="images/krug3.png" width="24" height="20" /> <strong>Циркуляционый насос.</strong> <br />	   
  <img src="images/krug4.png" width="24" height="20" /> <strong>Алюминевые радиаторы.</strong> <br />
  <img src="images/krug5.png" width="24" height="20" /> <strong>Подающая труба отопления:</strong> ПП (полипропилен), d 32мм, армированная стекловолокном.
  <br />
  <img src="images/krug6.png" width="24" height="20" /> <strong>Обратная труба отопления:</strong>  ПП (полипропилен), d 32мм, армированная стекловолокном.
  <br />
  <img src="images/kran2.jpg" width="14" height="20" /> <strong>Шаровые краны.</strong> <br /><br />
  <em></em></td>
            </tr>
		    <tr>
		      <td height="3" colspan="4"></td>
		      </tr>
		    <tr valign="top">
		      <td width="100"><div align="left"><div id="content_a"><a rel="example_group" href="images/img/max/nasos_m.jpg" title="Электрокотёл"><img src="images/img/min/nasos_min.jpg" width="90" height="70" /></a></div></div></td>
              <td width="100">&nbsp;</td>
              <td width="100">&nbsp;</td>
              <td width="100" height="70">&nbsp;</td>
		    </tr>
		    <tr>
		      <td height="3"></td>
		      <td></td>
		      <td colspan="2"></td>
		    </tr>
		    <tr valign="top">
		      <td colspan="4" id="tab_ban2"><div id="liniy_div2"></div><em>Расположение элементов отопительной системы определяется на месте, в зависимости от особенностей Вашего дома.</em><div align="left"><div id="liniy_div"></div></div></td>
		      </tr>
		    </table>
		  <br /><br />
		  <div id="srub"> <div align="left">Для дома размером <strong>6 на 6 </strong> метров <br />
		  ( твёрдотопливный котёл ) :</div>
            </div>
		  <table width="900" height="10" border="0" cellpadding="0" id="tab_ban">
		    <tr>
		      <td height="100" colspan="4" valign="top"><div id="content_a"><a rel="example_group" href="images/img/max/66_1_nokm_m.png" title="[1] - твёрдотопливный котёл, [2] - электрокотёл, [3] - циркуляционный насос, [4] - алюминевые радиаторы, [5] - подающая труба отопления, [6] - обратная труба отопления"><img src="images/img/min/66_1_nom_min.png" width="400"/></a></div>
		      <br /><br /></td>
              <td width="50" rowspan="5"></td>
              <td rowspan="5" valign="top"><strong id="ban">Стоимость всей отопительной системы<br />с учётом доставки и монтажа "под ключ":</strong><br /><strong id="srub2">75 т.р.</strong><br />
                <br />
                   <div id="ban2">Элементы отопительной системы:</div>
                 <table width="430" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                       <td width="30" height="25" align="left" valign="middle"><img src="images/krug1.png" width="24" height="20" /></td>
                       <td width="218" align="left" valign="middle"><strong>Твёрдотопливный котёл:</strong></td>
                       <td align="left" valign="middle"><div id="st500">
   <a href="#?w=470" rel="popup_contact_karakan8" class="poplight_karakan8">Каракан 8 кВт</a>.
    </div>
    <div id="popup_contact_karakan8" class="popup_block">
               
    <div align="center">
      <table width="470" border="0" cellpadding="0" cellspacing="5" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td  class="item_produkt">
            <div align="center" id="ban2"><strong>Твёрдотопливный котёл Каракан 8</strong>  </div><br /> 
             Номинальная мощность: <strong>8 кВт.</strong> <br />
			 Отапливаемая площадь: <strong>до 80 кв.м.</strong> <br />
			 КПД: <strong>75%</strong> <br />
			 Температура воды на выходе: <strong>95 С.</strong><br />			
			 Присоединяемый дымоход: <strong>d 100…120 мм</strong> <br />
			 	Рабочее давление: <strong>1 атм.</strong> <br />
			 Оъем водяного контура: <strong>32 л.</strong> <br />		  
			Производитель: 
			 <strong>Россия.</strong><br /><br />
			  <em>Примечание:</em>
			 <div id="probel"></div>
			 <img src="images/kv.png" width="22" height="14" /> Всё используемое нами отопительное оборудование на практике показало свою надёжность и долговечность при эксплуатации в условиях уральского климата.<div id="probel"></div><img src="images/kv.png" width="22" height="14" /> По Вашему желанию мы можем смонтировать отопительную систему из оборудования <br />выбранного Вами.			 </td>
            </tr>  
      </table>
    </div>
  </div>
  
                </div>
                <div align="center">
                <script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//Когда вы нажимаете на ссылку с классом poplight и HREF начинается с a # 
	$('a.poplight_karakan8[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//Потяните запросов и переменных из URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade в Popup и добавить кнопку закрытия
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//Определить запас на выравнивание по центру (вертикальной + горизонтальной) - мы добавляем 80 до высота / ширина, чтобы разместить для заполнения + ширина границы, определенные в CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//Применить маржи в Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade в фоновом режиме
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//Закрыть всплывающих окон и Fade слой
	$('a.close, #fade').live('click', function() { //При нажатии на близких или исчезают слой ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //исчезать их обоих
		
		return false;
	});
 
	
});
              </script>
              </div> </td>
                       <td align="left" valign="bottom"><div align="center"><div id="st200_k"><a href="#?w=650" rel="popup_contact_dr_k2" class="poplight_dr_k2">Другой котёл</a></div>
<div id="popup_contact_dr_k2" class="popup_block">


<p align="center" id="text67">Укажите название котла, который Вы бы хотели использовать<br />и мы в течение дня сообщим по телефону или вышлем Вам на почту стоимость отопления "под ключ" с нужным Вам котлом:</p><br />

<form id="f6x6" action="index.php?lot=6x6" method="post">	
		
	
				<p id="text6" align="left">
					<label for="name">Название нужного Вам котла: </label>
					<input type="text" name="name" id="name" size="23" />
				</p>
				
				<p id="text6" align="left">
					<label for="web">Ваш телефон или e-mail: </label>
					<input type="text" name="email" id="email" size="30" />
				</p>			
																			
			
												
					<br />	<br />	

			<button type="submit" name="kotel" class="forma_sakasa">Узнать стоимость</button>			
  </form>
</div>
		</div>


<script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//Когда вы нажимаете на ссылку с классом poplight и HREF начинается с a # 
	$('a.poplight_dr_k2[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//Потяните запросов и переменных из URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade в Popup и добавить кнопку закрытия
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//Определить запас на выравнивание по центру (вертикальной + горизонтальной) - мы добавляем 80 до высота / ширина, чтобы разместить для заполнения + ширина границы, определенные в CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//Применить маржи в Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade в фоновом режиме
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//Закрыть всплывающих окон и Fade слой
	$('a.close, #fade').live('click', function() { //При нажатии на близких или исчезают слой ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //исчезать их обоих
		
		return false;
	});
 
	
});
</script></td>
                     </tr>
                   </table>
                   <table width="400" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                       <td width="30" height="25" align="left" valign="top"><img src="images/krug2.png" width="24" height="20" /></td>
                       <td width="230" align="left" valign="bottom"><strong>Электрокотёл </strong>(резервный)<strong>:</strong></td>
                       <td align="left" valign="bottom"><div id="st500">
   <a href="#?w=470" rel="popup_contact_evpn" class="poplight_evpn">ЭВПМ 6 кВт</a>.
    </div>
    <div id="popup_contact_evpn" class="popup_block">
               
    <div align="center">
      <table width="470" border="0" cellpadding="0" cellspacing="5" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td  class="item_produkt">
            <div align="center" id="ban2"><strong>Электрокотёл ЭВПМ-6</strong>  </div><br /> 
             Номинальная мощность: <strong>6 кВт.</strong> <br />
			 Напряжение питания (однофазное): <strong>220В.</strong> <br />
			 Температура воды на выходе: <strong>35-85 С.</strong><br />
			 Площадь отапливаемых помещений<br />при температуре 25 С : <strong>44 кв.м.</strong> <br />
			 Площадь отапливаемых помещений<br />при температуре 20 С : <strong>60 кв.м.</strong> <br />
			 Производитель: <strong>Россия.</strong> <br /><br />
			 <em>Примечание:</em>
			 <div id="probel"></div>
			 <img src="images/kv.png" width="22" height="14" /> Всё используемое нами отопительное оборудование на практике показало свою надёжность и долговечность при эксплуатации в условиях уральского климата.<div id="probel"></div><img src="images/kv.png" width="22" height="14" /> По Вашему желанию мы можем смонтировать отопительную систему из оборудования <br />выбранного Вами. </td>
            </tr>  
          
      </table>
    </div>
 
  
  </div>
  
                </div>
                <div align="center">
                <script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//Когда вы нажимаете на ссылку с классом poplight и HREF начинается с a # 
	$('a.poplight_evpn[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//Потяните запросов и переменных из URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade в Popup и добавить кнопку закрытия
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//Определить запас на выравнивание по центру (вертикальной + горизонтальной) - мы добавляем 80 до высота / ширина, чтобы разместить для заполнения + ширина границы, определенные в CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//Применить маржи в Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade в фоновом режиме
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//Закрыть всплывающих окон и Fade слой
	$('a.close, #fade').live('click', function() { //При нажатии на близких или исчезают слой ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //исчезать их обоих
		
		return false;
	});
 
	
});
              </script>
              </div> </td>
                     </tr>
                   </table>
			<img src="images/krug3.png" width="24" height="20" /> <strong>Циркуляционый насос.</strong> <br />	   
  <img src="images/krug4.png" width="24" height="20" /> <strong>Алюминевые радиаторы.</strong> <br />
  <img src="images/krug5.png" width="24" height="20" /> <strong>Подающая труба отопления:</strong> ПП (полипропилен), d 32мм, армированная стекловолокном.
  <br />
  <img src="images/krug6.png" width="24" height="20" /> <strong>Обратная труба отопления:</strong>  ПП (полипропилен), d 32мм, армированная стекловолокном.
  <br />
  <img src="images/kran2.jpg" width="14" height="20" /> <strong>Шаровые краны</strong><br /><br />
  <em></em> </td>
            </tr>
		    <tr>
		      <td height="3" colspan="4"></td>
		      </tr>
		    <tr valign="top">
		      <td width="100"><div align="center"><div id="content_a"><a rel="example_group" href="images/img/max/k_1.jpg" title="Твёрдотопливный котёл, электрокотёл."><img src="images/img/min/k_1.jpg" width="90" height="70" /></a></div></div></td>
		      <td width="100"><div align="right"><div id="content_a"><a rel="example_group" href="images/img/max/k_2.jpg" title="Твёрдотопливный котёл, электрокотёл."><img src="images/img/min/k_2.jpg" width="90" height="70" /></a></div></div></td>
		      <td width="100"><div align="left"><div id="content_a"><a rel="example_group" href="images/img/max/k_4.jpg" title="Твёрдотопливный котёл."><img src="images/img/min/k_4.jpg" width="90" height="70" /></a></div></div></td>
		      <td width="100" height="70">&nbsp;</td>
		    </tr>
		    <tr>
		      <td height="3"></td>
		      <td></td>
		      <td colspan="2"></td>
		    </tr>
		    <tr valign="top">
		     <td colspan="4" id="tab_ban2"><div id="liniy_div2"></div><em>Расположение элементов отопительной системы определяется на месте, в зависимости от особенностей Вашего дома.</em><div align="left"><div id="liniy_div"></div></div></td>
		      </tr>
		    </table>
		  <br /> <br />
		  <div id="srub"> <div align="left">Для дома размером <strong>6 на 6 </strong> метров с мансардой<br />
		    ( твёрдотопливный котёл ) :</div>
            </div>
		  <table width="900" height="10" border="0" cellpadding="0" id="tab_ban">
		    <tr>
		      <td height="100" colspan="4" valign="top"><div id="content_a"><a rel="example_group" href="images/img/max/66_1_m.png" title="[1] - твёрдотопливный котёл, [2] - электрокотёл, [3] - циркуляционный насос, [4] - алюминевые радиаторы, [5] - подающая труба отопления, [6] - обратная труба отопления"><img src="images/img/min/66_1_min.png" width="400"/></a></div>
		      <br /><br /></td>
              <td width="50" rowspan="5"></td>
              <td rowspan="5" valign="top"><strong id="ban">Стоимость всей отопительной системы<br />с учётом доставки и монтажа "под ключ":</strong><br />
              <strong id="srub2">90 т.р.</strong><br />
                <br />
                   <div id="ban2">Элементы отопительной системы:</div>
                  <table width="430" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                       <td width="30" height="25" align="left" valign="middle"><img src="images/krug1.png" width="24" height="20" /></td>
                       <td width="218" align="left" valign="middle"><strong>Твёрдотопливный котёл:</strong></td>
                       <td align="left" valign="middle"><div id="st500">
   <a href="#?w=470" rel="popup_contact_karakan10" class="poplight_karakan10">Каракан 10 кВт</a>.
    </div>
    <div id="popup_contact_karakan10" class="popup_block">
               
    <div align="center">
      <table width="470" border="0" cellpadding="0" cellspacing="5" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td  class="item_produkt">
            <div align="center" id="ban2"><strong>Твёрдотопливный котёл Каракан 10</strong>  </div><br /> 
             Номинальная мощность: <strong>10 кВт.</strong> <br />
			 Отапливаемая площадь: <strong>до 100 кв.м.</strong> <br />
			 КПД: <strong>75%</strong> <br />
			 Температура воды на выходе: <strong>95 С.</strong><br />
			 	Рабочее давление: <strong>1 атм.</strong> <br />
			 Оъем водяного контура: <strong>47 л.</strong> <br />
			 	Присоединяемый дымоход: <strong>d 150 мм.</strong> <br />	 
					 Производитель: 
			 <strong>Россия.</strong> <br /><br />
			  <em>Примечание:</em>
			 <div id="probel"></div>
			 <img src="images/kv.png" width="22" height="14" /> Всё используемое нами отопительное оборудование на практике показало свою надёжность и долговечность при эксплуатации в условиях уральского климата.<div id="probel"></div><img src="images/kv.png" width="22" height="14" /> По Вашему желанию мы можем смонтировать отопительную систему из оборудования <br />выбранного Вами.			 </td>
            </tr>  
      </table>
    </div>
  </div>
  
                </div>
                <div align="center">
                <script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//Когда вы нажимаете на ссылку с классом poplight и HREF начинается с a # 
	$('a.poplight_karakan10[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//Потяните запросов и переменных из URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade в Popup и добавить кнопку закрытия
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//Определить запас на выравнивание по центру (вертикальной + горизонтальной) - мы добавляем 80 до высота / ширина, чтобы разместить для заполнения + ширина границы, определенные в CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//Применить маржи в Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade в фоновом режиме
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//Закрыть всплывающих окон и Fade слой
	$('a.close, #fade').live('click', function() { //При нажатии на близких или исчезают слой ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //исчезать их обоих
		
		return false;
	});
 
	
});
              </script>
              </div> </td>
                       <td align="left" valign="bottom"><div align="center"><div id="st200_k"><a href="#?w=650" rel="popup_contact_dr_k3" class="poplight_dr_k3">Другой котёл</a></div>
<div id="popup_contact_dr_k3" class="popup_block">


<p align="center" id="text67">Укажите название котла, который Вы бы хотели использовать<br />и мы в течение дня сообщим по телефону или вышлем Вам на почту стоимость отопления "под ключ" с нужным Вам котлом:</p><br />

<form id="f6x6m" action="index.php?lot=6x6m" method="post">	
		
	
				<p id="text6" align="left">
					<label for="name">Название нужного Вам котла: </label>
					<input type="text" name="name" id="name" size="23" />
				</p>
				
				<p id="text6" align="left">
					<label for="web">Ваш телефон или e-mail: </label>
					<input type="text" name="email" id="email" size="30" />
				</p>			
																			
			
												
					<br />	<br />	

			<button type="submit" name="kotel" class="forma_sakasa">Узнать стоимость</button>			
  </form>
</div>
		</div>


<script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//Когда вы нажимаете на ссылку с классом poplight и HREF начинается с a # 
	$('a.poplight_dr_k3[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//Потяните запросов и переменных из URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade в Popup и добавить кнопку закрытия
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//Определить запас на выравнивание по центру (вертикальной + горизонтальной) - мы добавляем 80 до высота / ширина, чтобы разместить для заполнения + ширина границы, определенные в CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//Применить маржи в Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade в фоновом режиме
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//Закрыть всплывающих окон и Fade слой
	$('a.close, #fade').live('click', function() { //При нажатии на близких или исчезают слой ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //исчезать их обоих
		
		return false;
	});
 
	
});
</script></td>
                     </tr>
                   </table>
                 <table width="400" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                       <td width="30" height="25" align="left" valign="top"><img src="images/krug2.png" width="24" height="20" /></td>
                       <td width="230" align="left" valign="bottom"><strong>Электрокотёл </strong>(резервный)<strong>:</strong></td>
                       <td align="left" valign="bottom"><div id="st500">
   <a href="#?w=470" rel="popup_contact_evpn" class="poplight_evpn">ЭВПМ 6 кВт</a>.
    </div>
    <div id="popup_contact_evpn" class="popup_block">
               
    <div align="center">
      <table width="470" border="0" cellpadding="0" cellspacing="5" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td  class="item_produkt">
            <div align="center" id="ban2"><strong>Электрокотёл ЭВПМ-6</strong>  </div><br /> 
             Номинальная мощность: <strong>6 кВт.</strong> <br />
			 Напряжение питания (однофазное): <strong>220В.</strong> <br />
			 Температура воды на выходе: <strong>35-85 С.</strong><br />
			 Площадь отапливаемых помещений<br />при температуре 25 С : <strong>44 кв.м.</strong> <br />
			 Площадь отапливаемых помещений<br />при температуре 20 С : <strong>60 кв.м.</strong> <br />
			 Производитель: <strong>Россия.</strong> <br /><br />
			 <em>Примечание:</em>
			 <div id="probel"></div>
			 <img src="images/kv.png" width="22" height="14" /> Всё используемое нами отопительное оборудование на практике показало свою надёжность и долговечность при эксплуатации в условиях уральского климата.<div id="probel"></div><img src="images/kv.png" width="22" height="14" /> По Вашему желанию мы можем смонтировать отопительную систему из оборудования <br />выбранного Вами. </td>
            </tr>  
          
      </table>
    </div>
 
  
  </div>
  
                </div>
                <div align="center">
                <script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//Когда вы нажимаете на ссылку с классом poplight и HREF начинается с a # 
	$('a.poplight_evpn[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//Потяните запросов и переменных из URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade в Popup и добавить кнопку закрытия
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//Определить запас на выравнивание по центру (вертикальной + горизонтальной) - мы добавляем 80 до высота / ширина, чтобы разместить для заполнения + ширина границы, определенные в CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//Применить маржи в Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade в фоновом режиме
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//Закрыть всплывающих окон и Fade слой
	$('a.close, #fade').live('click', function() { //При нажатии на близких или исчезают слой ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //исчезать их обоих
		
		return false;
	});
 
	
});
              </script>
              </div> </td>
                     </tr>
                   </table>
			<img src="images/krug3.png" width="24" height="20" /> <strong>Циркуляционый насос.</strong><br />	   
  <img src="images/krug4.png" width="24" height="20" /> <strong>Алюминевые радиаторы.</strong> <br />
  <img src="images/krug5.png" width="24" height="20" /> <strong>Подающая труба отопления:</strong> ПП (полипропилен), d 32мм, армированная стекловолокном.
  <br />
  <img src="images/krug6.png" width="24" height="20" /> <strong>Обратная труба отопления:</strong>  ПП (полипропилен), d 32мм, армированная стекловолокном.
  <br />
  <img src="images/krug7.png" width="24" height="20" /> <strong>Подъём турбы отопления мансардного этажа от котла:</strong> ПП (полипропилен), d 32мм, армированная стекловолокном. <br />
  <img src="images/krug8.png" width="24" height="20" /> <strong>Опуск трубы отопления мансардного этажа к котлу:</strong> ПП (полипропилен), d 32мм, армированная стекловолокном. <br />
  <img src="images/kran2.jpg" width="14" height="20" /> <strong>Шаровые краны</strong> <br /><br /><div id="liniy_div3"></div>
  Всё используемое нами отопительное оборудование на практике показало свою надёжность и долговечность при эксплуатации в условиях уральского климата.<br />По Вашему желанию мы можем смонтировать отопительную систему из оборудования <br />выбранного Вами. </td>
            </tr>
		    <tr>
		      <td height="3" colspan="4"></td>
		      </tr>
		    <tr valign="top">
		      <td width="100"><div align="left"><div id="content_a"><a rel="example_group" href="images/img/max/66_m_m.png" title="[4] - алюминевые радиаторы,  [7] - подъём турбы отопления, [8] - опуск трубы отопления"><img src="images/img/min/66_m_min.png" width="90" height="70" /></a></div></div></td>
              <td width="100"><div align="center"><div id="content_a"><a rel="example_group" href="images/img/max/k_1.jpg" title="Твёрдотопливный котёл, электрокотёл."><img src="images/img/min/k_1.jpg" width="90" height="70" /></a></div></div></td>
              <td width="100"><div align="right"><div id="content_a"><a rel="example_group" href="images/img/max/k_2.jpg" title="Твёрдотопливный котёл, электрокотёл."><img src="images/img/min/k_2.jpg" width="90" height="70" /></a></div></div></td>
              <td width="100" height="70"><div align="left"><div id="content_a"><a rel="example_group" href="images/img/max/k_4.jpg" title="Твёрдотопливный котёл."><img src="images/img/min/k_4.jpg" width="90" height="70" /></a></div></div></td>
		    </tr>
		    <tr>
		      <td height="3"></td>
		      <td></td>
		      <td colspan="2"></td>
		    </tr>
		    <tr valign="top">
		      <td colspan="4" id="tab_ban2"><div id="liniy_div2"></div><em>Расположение элементов отопительной системы определяется на месте, в зависимости от особенностей Вашего дома.</em><div align="left"><div id="liniy_div"></div></div></td>
		      </tr>
		    </table>
		  <br /><br /><br /><div id="st400">
              <div align="center"><a href="#?w=700" rel="popup_contact2" class="poplight2">Схема отопления для Вашего дома</a></div>
            </div>
              <div id="popup_contact2" class="popup_block">
                
                <form id="form4" action="#" method="post">	 
    <div align="center">
      <table width="700" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td colspan="7" class="item_produkt"><div id="priziv4">
            <div align="center"><strong>Запишитесь на бесплатную консультацию!</strong> 
              <div id="priziv3">Наш специалист подъедет к Вам 
                <br />
                и на месте составит детальную схему отопления<br />  для
                Вашего дома. </div> 
              </div>
            </div>        </td>
          </tr>
        <tr>
          <td height="10" colspan="7"></td>
          </tr>
        <tr>
          <td width="30" align="right" class="item_produkt"></td>
            <td width="200" align="right" class="item_produkt"><div align="center">
              
              <em>Ваше имя:	</em><br />
              <input type="text" class="thin" name="name2"  size="30" />
              </div></td>
            <td width="30" class="item_produkt">&nbsp;</td>
            <td width="200" class="item_produkt"><div align="center"><em>Ваш телефон:	</em><br />				
              <input type="text" class="thin" name="telefon2" size="30">
              </div></td>
            <td width="30" class="item_produkt"></td>
            <td width="200" rowspan="2" valign="bottom" class="item_produkt"><button type="submit" name="konsult" class="forma_sakasa3">Записаться</button></td>
            <td width="30" rowspan="2" valign="bottom" class="item_produkt">&nbsp;</td>
          </tr>
        <tr>
          <td width="63" height="5" colspan="3" ></td>
            <td height="5" colspan="2" ></td>
          </tr>
        <tr>
          <td height="5" colspan="7"></td>
          </tr>
        <tr>
          <td height="1" colspan="7"></td>
          </tr>
      </table>
    </div>
  </form>
  
  </div>
  
                </div>
              <div align="center">
                <script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//Когда вы нажимаете на ссылку с классом poplight и HREF начинается с a # 
	$('a.poplight2[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//Потяните запросов и переменных из URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade в Popup и добавить кнопку закрытия
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//Определить запас на выравнивание по центру (вертикальной + горизонтальной) - мы добавляем 80 до высота / ширина, чтобы разместить для заполнения + ширина границы, определенные в CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//Применить маржи в Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade в фоновом режиме
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//Закрыть всплывающих окон и Fade слой
	$('a.close, #fade').live('click', function() { //При нажатии на близких или исчезают слой ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //исчезать их обоих
		
		return false;
	});
 
	
});
              </script>
              </div><a name="d6x8m"></a><br /><br /><br /><br /><br /><br />
		    <div id="srub"> <div align="left">Для дома размером <strong>6 на 8 </strong> метров<br />( электрокотёл ) :</div>
            </div>
		  <table width="900" height="10" border="0" cellpadding="0" id="tab_ban">
		    <tr>
		      <td height="100" colspan="4" valign="top"><div id="content_a"><a rel="example_group" href="images/img/max/68_1_nokm_max.png" title="[2] - электрокотёл, [3] - циркуляционный насос, [4] - алюминевые радиаторы, [5] - подающая труба отопления, [6] - обратная труба отопления"><img src="images/img/min/68_1_nokm_min.png" width="400"/></a></div>
		      <br /><br /></td>
              <td width="50" rowspan="5"></td>
              <td rowspan="5" valign="top"><strong id="ban">Стоимость всей отопительной системы<br />с учётом доставки и монтажа "под ключ":</strong><br />
              <strong id="srub2">60 т.р.</strong><br />
                <br />
                   <div id="ban2">Элементы отопительной системы:</div>
                  
                 <table width="330" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                       <td width="30" height="25" align="left" valign="middle"><img src="images/krug2.png" width="24" height="20" /></td>
                       <td width="128" align="left" valign="middle"><strong>Электрокотёл:</strong></td>
                       <td width="120" align="left" valign="middle"><div id="st500">
   <a href="#?w=470" rel="popup_contact_evpn" class="poplight_evpn">ЭВПМ 6 кВт</a>.
    </div>
    <div id="popup_contact_evpn" class="popup_block">
               
    <div align="center">
      <table width="470" border="0" cellpadding="0" cellspacing="5" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td  class="item_produkt">
            <div align="center" id="ban2"><strong>Электрокотёл ЭВПМ-6</strong>  </div><br /> 
             Номинальная мощность: <strong>6 кВт.</strong> <br />
			 Напряжение питания (однофазное): <strong>220В.</strong> <br />
			 Температура воды на выходе: <strong>35-85 С.</strong><br />
			 Площадь отапливаемых помещений<br />при температуре 25 С : <strong>44 кв.м.</strong> <br />
			 Площадь отапливаемых помещений<br />при температуре 20 С : <strong>60 кв.м.</strong> <br />
			 Производитель: <strong>Россия.</strong> <br /><br />
			 <em>Примечание:</em>
			 <div id="probel"></div>
			 <img src="images/kv.png" width="22" height="14" /> Всё используемое нами отопительное оборудование на практике показало свою надёжность и долговечность при эксплуатации в условиях уральского климата.<div id="probel"></div><img src="images/kv.png" width="22" height="14" /> По Вашему желанию мы можем смонтировать отопительную систему из оборудования <br />выбранного Вами. </td>
            </tr>  
      </table>
    </div>
  </div>
  
                </div>
                <div align="center">
                <script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//Когда вы нажимаете на ссылку с классом poplight и HREF начинается с a # 
	$('a.poplight_evpn[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//Потяните запросов и переменных из URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade в Popup и добавить кнопку закрытия
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//Определить запас на выравнивание по центру (вертикальной + горизонтальной) - мы добавляем 80 до высота / ширина, чтобы разместить для заполнения + ширина границы, определенные в CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//Применить маржи в Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade в фоновом режиме
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//Закрыть всплывающих окон и Fade слой
	$('a.close, #fade').live('click', function() { //При нажатии на близких или исчезают слой ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //исчезать их обоих
		
		return false;
	});
 
	
});
              </script>
              </div> </td>
                       <td align="left" valign="bottom"> <div align="center"><div id="st200_k"><a href="#?w=650" rel="popup_contact_dr_k4" class="poplight_dr_k4">Другой котёл</a></div>
<div id="popup_contact_dr_k4" class="popup_block">


<p align="center" id="text67">Укажите название котла, который Вы бы хотели использовать<br />и мы в течение дня сообщим по телефону или вышлем Вам на почту стоимость отопления "под ключ" с нужным Вам котлом:</p><br />

<form id="f6x8e" action="index.php?lot=6x8e" method="post">	
		
	
				<p id="text6" align="left">
					<label for="name">Название нужного Вам котла: </label>
					<input type="text" name="name" id="name" size="23" />
				</p>
				
				<p id="text6" align="left">
					<label for="web">Ваш телефон или e-mail: </label>
					<input type="text" name="email" id="email" size="30" />
				</p>			
																			
			
												
					<br />	<br />	

			<button type="submit" name="kotel" class="forma_sakasa">Узнать стоимость</button>			
  </form>
</div>
		</div>


<script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//Когда вы нажимаете на ссылку с классом poplight и HREF начинается с a # 
	$('a.poplight_dr_k4[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//Потяните запросов и переменных из URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade в Popup и добавить кнопку закрытия
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//Определить запас на выравнивание по центру (вертикальной + горизонтальной) - мы добавляем 80 до высота / ширина, чтобы разместить для заполнения + ширина границы, определенные в CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//Применить маржи в Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade в фоновом режиме
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//Закрыть всплывающих окон и Fade слой
	$('a.close, #fade').live('click', function() { //При нажатии на близких или исчезают слой ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //исчезать их обоих
		
		return false;
	});
 
	
});
</script>	</td>
                     </tr>
                   </table>
			<img src="images/krug3.png" width="24" height="20" /> <strong>Циркуляционый насос.</strong> <br />	   
  <img src="images/krug4.png" width="24" height="20" /> <strong>Алюминевые радиаторы.</strong> <br />
  <img src="images/krug5.png" width="24" height="20" /> <strong>Подающая труба отопления:</strong> ПП (полипропилен), d 32мм, армированная стекловолокном.
  <br />
  <img src="images/krug6.png" width="24" height="20" /> <strong>Обратная труба отопления:</strong>  ПП (полипропилен), d 32мм, армированная стекловолокном.
  <br />
  <img src="images/kran2.jpg" width="14" height="20" /> <strong>Шаровые краны.</strong><br /><br />
  <em></em>  </td>
            </tr>
		    <tr>
		      <td height="3" colspan="4"></td>
		      </tr>
		    <tr valign="top">
		      <td width="100"><div align="left"><div id="content_a"><a rel="example_group" href="images/img/max/nasos_m.jpg" title="Электрокотёл"><img src="images/img/min/nasos_min.jpg" width="90" height="70" /></a></div></div></td>
              <td width="100">&nbsp;</td>
              <td width="100">&nbsp;</td>
              <td width="100" height="70">&nbsp;</td>
		    </tr>
		    <tr>
		      <td height="3"></td>
		      <td></td>
		      <td colspan="2"></td>
		    </tr>
		    <tr valign="top">
		      <td colspan="4" id="tab_ban2"><div id="liniy_div2"></div><em>Расположение элементов отопительной системы определяется на месте, в зависимости от особенностей Вашего дома.</em><div align="left"><div id="liniy_div"></div></div></td>
		      </tr>
		    </table>
		<br /><br />
		
		  <div id="srub"> <div align="left">Для дома размером <strong>6 на 8 </strong> метров <br />
		       ( твёрдотопливный котёл ) :</div>
            </div>
		  <table width="900" height="10" border="0" cellpadding="0" id="tab_ban">
		    <tr>
		      <td height="100" colspan="4" valign="top"><div id="content_a"><a rel="example_group" href="images/img/max/68_1_nom_max.png" title="[1] - твёрдотопливный котёл, [2] - электрокотёл, [3] - циркуляционный насос, [4] - алюминевые радиаторы, [5] - подающая труба отопления, [6] - обратная труба отопления"><img src="images/img/min/68_1_nom_min.png" width="400"/></a></div>
		      <br /><br /></td>
              <td width="50" rowspan="5"></td>
              <td rowspan="5" valign="top"><strong id="ban">Стоимость всей отопительной системы<br />с учётом доставки и монтажа "под ключ":</strong><br />
              <strong id="srub2">100 т.р.</strong><br />
                <br />
                   <div id="ban2">Элементы отопительной системы:</div>
                 <table width="430" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                       <td width="30" height="25" align="left" valign="middle"><img src="images/krug1.png" width="24" height="20" /></td>
                       <td width="218" align="left" valign="middle"><strong>Твёрдотопливный котёл:</strong></td>
                       <td align="left" valign="middle"><div id="st500">
   <a href="#?w=470" rel="popup_contact_karakan8" class="poplight_karakan8">Каракан 8 кВт</a>.
    </div>
    <div id="popup_contact_karakan8" class="popup_block">
               
    <div align="center">
      <table width="470" border="0" cellpadding="0" cellspacing="5" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td  class="item_produkt">
            <div align="center" id="ban2"><strong>Твёрдотопливный котёл Каракан 8</strong>  </div><br /> 
             Номинальная мощность: <strong>8 кВт.</strong> <br />
			 Отапливаемая площадь: <strong>до 80 кв.м.</strong> <br />
			 КПД: <strong>75%</strong> <br />
			 Температура воды на выходе: <strong>95 С.</strong><br />			
			 Присоединяемый дымоход: <strong>d 100…120 мм</strong> <br />
			 	Рабочее давление: <strong>1 атм.</strong> <br />
			 Оъем водяного контура: <strong>32 л.</strong> <br />		  
			Производитель: 
			 <strong>Россия.</strong><br /><br />
			  <em>Примечание:</em>
			 <div id="probel"></div>
			 <img src="images/kv.png" width="22" height="14" /> Всё используемое нами отопительное оборудование на практике показало свою надёжность и долговечность при эксплуатации в условиях уральского климата.<div id="probel"></div><img src="images/kv.png" width="22" height="14" /> По Вашему желанию мы можем смонтировать отопительную систему из оборудования <br />выбранного Вами.			 </td>
            </tr>  
      </table>
    </div>
  </div>
  
                </div>
                <div align="center">
                <script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//Когда вы нажимаете на ссылку с классом poplight и HREF начинается с a # 
	$('a.poplight_karakan8[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//Потяните запросов и переменных из URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade в Popup и добавить кнопку закрытия
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//Определить запас на выравнивание по центру (вертикальной + горизонтальной) - мы добавляем 80 до высота / ширина, чтобы разместить для заполнения + ширина границы, определенные в CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//Применить маржи в Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade в фоновом режиме
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//Закрыть всплывающих окон и Fade слой
	$('a.close, #fade').live('click', function() { //При нажатии на близких или исчезают слой ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //исчезать их обоих
		
		return false;
	});
 
	
});
              </script>
              </div> </td>
                       <td align="left" valign="bottom"><div align="center"><div id="st200_k"><a href="#?w=650" rel="popup_contact_dr_k5" class="poplight_dr_k5">Другой котёл</a></div>
<div id="popup_contact_dr_k5" class="popup_block">


<p align="center" id="text67">Укажите название котла, который Вы бы хотели использовать<br />и мы в течение дня сообщим по телефону или вышлем Вам на почту стоимость отопления "под ключ" с нужным Вам котлом:</p><br />

<form id="f6x8" action="index.php?lot=6x8" method="post">	
		
	
				<p id="text6" align="left">
					<label for="name">Название нужного Вам котла: </label>
					<input type="text" name="name" id="name" size="23" />
				</p>
				
				<p id="text6" align="left">
					<label for="web">Ваш телефон или e-mail: </label>
					<input type="text" name="email" id="email" size="30" />
				</p>			
																			
			
												
					<br />	<br />	

			<button type="submit" name="kotel" class="forma_sakasa">Узнать стоимость</button>			
  </form>
</div>
		</div>


<script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//Когда вы нажимаете на ссылку с классом poplight и HREF начинается с a # 
	$('a.poplight_dr_k5[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//Потяните запросов и переменных из URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade в Popup и добавить кнопку закрытия
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//Определить запас на выравнивание по центру (вертикальной + горизонтальной) - мы добавляем 80 до высота / ширина, чтобы разместить для заполнения + ширина границы, определенные в CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//Применить маржи в Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade в фоновом режиме
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//Закрыть всплывающих окон и Fade слой
	$('a.close, #fade').live('click', function() { //При нажатии на близких или исчезают слой ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //исчезать их обоих
		
		return false;
	});
 
	
});
</script></td>
                     </tr>
                   </table>
                  <table width="400" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                       <td width="30" height="25" align="left" valign="top"><img src="images/krug2.png" width="24" height="20" /></td>
                       <td width="230" align="left" valign="bottom"><strong>Электрокотёл </strong>(резервный)<strong>:</strong></td>
                       <td align="left" valign="bottom"><div id="st500">
   <a href="#?w=470" rel="popup_contact_evpn" class="poplight_evpn">ЭВПМ 6 кВт</a>.
    </div>
    <div id="popup_contact_evpn" class="popup_block">
               
    <div align="center">
      <table width="470" border="0" cellpadding="0" cellspacing="5" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td  class="item_produkt">
            <div align="center" id="ban2"><strong>Электрокотёл ЭВПМ-6</strong>  </div><br /> 
             Номинальная мощность: <strong>6 кВт.</strong> <br />
			 Напряжение питания (однофазное): <strong>220В.</strong> <br />
			 Температура воды на выходе: <strong>35-85 С.</strong><br />
			 Площадь отапливаемых помещений<br />при температуре 25 С : <strong>44 кв.м.</strong> <br />
			 Площадь отапливаемых помещений<br />при температуре 20 С : <strong>60 кв.м.</strong> <br />
			 Производитель: <strong>Россия.</strong><br /><br />
			 <em>Примечание:</em>
			 <div id="probel"></div>
			 <img src="images/kv.png" width="22" height="14" /> Всё используемое нами отопительное оборудование на практике показало свою надёжность и долговечность при эксплуатации в условиях уральского климата.<div id="probel"></div><img src="images/kv.png" width="22" height="14" /> По Вашему желанию мы можем смонтировать отопительную систему из оборудования <br />выбранного Вами. </td>
            </tr>  
          
      </table>
    </div>
 
  
  </div>
  
                </div>
                <div align="center">
                <script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//Когда вы нажимаете на ссылку с классом poplight и HREF начинается с a # 
	$('a.poplight_evpn[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//Потяните запросов и переменных из URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade в Popup и добавить кнопку закрытия
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//Определить запас на выравнивание по центру (вертикальной + горизонтальной) - мы добавляем 80 до высота / ширина, чтобы разместить для заполнения + ширина границы, определенные в CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//Применить маржи в Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade в фоновом режиме
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//Закрыть всплывающих окон и Fade слой
	$('a.close, #fade').live('click', function() { //При нажатии на близких или исчезают слой ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //исчезать их обоих
		
		return false;
	});
 
	
});
              </script>
              </div> </td>
                     </tr>
                   </table>
			<img src="images/krug3.png" width="24" height="20" /> <strong>Циркуляционый насос.</strong> <br />	   
  <img src="images/krug4.png" width="24" height="20" /> <strong>Алюминевые радиаторы.</strong> <br />
  <img src="images/krug5.png" width="24" height="20" /> <strong>Подающая труба отопления:</strong> ПП (полипропилен), d 32мм, армированная стекловолокном.
  <br />
  <img src="images/krug6.png" width="24" height="20" /> <strong>Обратная труба отопления:</strong>  ПП (полипропилен), d 32мм, армированная стекловолокном.
  <br />
  <img src="images/kran2.jpg" width="14" height="20" /> <strong>Шаровые краны</strong> <br /><br />
  <em></em> </td>
            </tr>
		    <tr>
		      <td height="3" colspan="4"></td>
		      </tr>
		    <tr valign="top">
		      <td width="100"><div align="center"><div id="content_a"><a rel="example_group" href="images/img/max/k_1.jpg" title="Твёрдотопливный котёл, электрокотёл."><img src="images/img/min/k_1.jpg" width="90" height="70" /></a></div></div></td>
		      <td width="100"><div align="right"><div id="content_a"><a rel="example_group" href="images/img/max/k_2.jpg" title="Твёрдотопливный котёл, электрокотёл."><img src="images/img/min/k_2.jpg" width="90" height="70" /></a></div></div></td>
		      <td width="100"><div align="left"><div id="content_a"><a rel="example_group" href="images/img/max/k_4.jpg" title="Твёрдотопливный котёл."><img src="images/img/min/k_4.jpg" width="90" height="70" /></a></div></div></td>
		      <td width="100" height="70">&nbsp;</td>
		    </tr>
		    <tr>
		      <td height="3"></td>
		      <td></td>
		      <td colspan="2"></td>
		    </tr>
		    <tr valign="top">
		      <td colspan="4" id="tab_ban2"><div id="liniy_div2"></div><em>Расположение элементов отопительной системы определяется на месте, в зависимости от особенностей Вашего дома.</em><div align="left"><div id="liniy_div"></div></div></td>
		      </tr>
		    </table>
		  <br /><br />
		  <div id="srub"> <div align="left">Для дома размером <strong>6 на 8 </strong> метров с мансардой<br />
		     ( твёрдотопливный котёл ) :</div>
            </div>
		  <table width="900" height="10" border="0" cellpadding="0" id="tab_ban">
		    <tr>
		      <td height="100" colspan="4" valign="top"><div id="content_a"><a rel="example_group" href="images/img/max/68_1_max.png" title="[1] - твёрдотопливный котёл, [2] - электрокотёл, [3] - циркуляционный насос, [4] - алюминевые радиаторы, [5] - подающая труба отопления, [6] - обратная труба отопления"><img src="images/img/min/68_1_min.png" width="400"/></a></div>
		      <br /><br /></td>
              <td width="50" rowspan="5"></td>
              <td rowspan="5" valign="top"><strong id="ban">Стоимость всей отопительной системы<br />с учётом доставки и монтажа "под ключ":</strong><br />
              <strong id="srub2">119 т.р.</strong><br />
                <br />
                   <div id="ban2">Элементы отопительной системы:</div>
                  <table width="430" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                       <td width="30" height="25" align="left" valign="middle"><img src="images/krug1.png" width="24" height="20" /></td>
                       <td width="218" align="left" valign="middle"><strong>Твёрдотопливный котёл:</strong></td>
                       <td align="left" valign="middle"><div id="st500">
   <a href="#?w=470" rel="popup_contact_karakan12" class="poplight_karakan12">Каракан 12 кВт</a>.
    </div>
    <div id="popup_contact_karakan12" class="popup_block">
               
    <div align="center">
      <table width="470" border="0" cellpadding="0" cellspacing="5" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td  class="item_produkt">
            <div align="center" id="ban2"><strong>Твёрдотопливный котёл Каракан 12</strong>  </div><br /> 
             Номинальная мощность: <strong>12 кВт.</strong> <br />
			 Отапливаемая площадь: <strong>до 120 кв.м.</strong> <br />
			 КПД: <strong>75% \ 82%</strong> <br />
			 Температура воды на выходе: <strong>95 С.</strong><br />			 
			  Присоединяемый дымоход: <strong>d 150 мм.</strong> <br />
			 Рабочее давление: <strong>1 атм.</strong> <br />
			 Оъем водяного контура: <strong>47 л.</strong> <br />
			
			 
					 Производитель: 
			 <strong>Россия.</strong><br /><br />
			 <em>Примечание:</em>
			 <div id="probel"></div>
			 <img src="images/kv.png" width="22" height="14" /> Всё используемое нами отопительное оборудование на практике показало свою надёжность и долговечность при эксплуатации в условиях уральского климата.<div id="probel"></div><img src="images/kv.png" width="22" height="14" /> По Вашему желанию мы можем смонтировать отопительную систему из оборудования <br />выбранного Вами.			 </td>
            </tr>  
      </table>
    </div>
  </div>
  
                </div>
                <div align="center">
                <script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//Когда вы нажимаете на ссылку с классом poplight и HREF начинается с a # 
	$('a.poplight_karakan12[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//Потяните запросов и переменных из URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade в Popup и добавить кнопку закрытия
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//Определить запас на выравнивание по центру (вертикальной + горизонтальной) - мы добавляем 80 до высота / ширина, чтобы разместить для заполнения + ширина границы, определенные в CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//Применить маржи в Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade в фоновом режиме
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//Закрыть всплывающих окон и Fade слой
	$('a.close, #fade').live('click', function() { //При нажатии на близких или исчезают слой ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //исчезать их обоих
		
		return false;
	});
 
	
});
              </script>
              </div> </td>
                       <td align="left" valign="bottom"><div align="center"><div id="st200_k"><a href="#?w=650" rel="popup_contact_dr_k6" class="poplight_dr_k6">Другой котёл</a></div>
<div id="popup_contact_dr_k6" class="popup_block">


<p align="center" id="text67">Укажите название котла, который Вы бы хотели использовать<br />и мы в течение дня сообщим по телефону или вышлем Вам на почту стоимость отопления "под ключ" с нужным Вам котлом:</p><br />

<form id="f6x8m" action="index.php?lot=6x8m" method="post">	
		
	
				<p id="text6" align="left">
					<label for="name">Название нужного Вам котла: </label>
					<input type="text" name="name" id="name" size="23" />
				</p>
				
				<p id="text6" align="left">
					<label for="web">Ваш телефон или e-mail: </label>
					<input type="text" name="email" id="email" size="30" />
				</p>			
																			
			
												
					<br />	<br />	

			<button type="submit" name="kotel" class="forma_sakasa">Узнать стоимость</button>			
  </form>
</div>
		</div>


<script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//Когда вы нажимаете на ссылку с классом poplight и HREF начинается с a # 
	$('a.poplight_dr_k6[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//Потяните запросов и переменных из URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade в Popup и добавить кнопку закрытия
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//Определить запас на выравнивание по центру (вертикальной + горизонтальной) - мы добавляем 80 до высота / ширина, чтобы разместить для заполнения + ширина границы, определенные в CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//Применить маржи в Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade в фоновом режиме
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//Закрыть всплывающих окон и Fade слой
	$('a.close, #fade').live('click', function() { //При нажатии на близких или исчезают слой ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //исчезать их обоих
		
		return false;
	});
 
	
});
</script></td>
                     </tr>
                   </table>
                  <table width="400" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                       <td width="30" height="25" align="left" valign="top"><img src="images/krug2.png" width="24" height="20" /></td>
                       <td width="230" align="left" valign="bottom"><strong>Электрокотёл: </strong>(резервный)</td>
                       <td align="left" valign="bottom"><div id="st500">
   <a href="#?w=470" rel="popup_contact_evpn" class="poplight_evpn">ЭВПМ 6 кВт</a>.
    </div>
    <div id="popup_contact_evpn" class="popup_block">
               
    <div align="center">
      <table width="470" border="0" cellpadding="0" cellspacing="5" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td  class="item_produkt">
            <div align="center" id="ban2"><strong>Электрокотёл ЭВПМ-6</strong>  </div><br /> 
             Номинальная мощность: <strong>6 кВт.</strong> <br />
			 Напряжение питания (однофазное): <strong>220В.</strong> <br />
			 Температура воды на выходе: <strong>35-85 С.</strong><br />
			 Площадь отапливаемых помещений<br />при температуре 25 С : <strong>44 кв.м.</strong> <br />
			 Площадь отапливаемых помещений<br />при температуре 20 С : <strong>60 кв.м.</strong> <br />
			 Производитель: <strong>Россия.</strong> <br /><br />
			 <em>Примечание:</em>
			 <div id="probel"></div>
			 <img src="images/kv.png" width="22" height="14" /> Всё используемое нами отопительное оборудование на практике показало свою надёжность и долговечность при эксплуатации в условиях уральского климата.<div id="probel"></div><img src="images/kv.png" width="22" height="14" /> По Вашему желанию мы можем смонтировать отопительную систему из оборудования <br />выбранного Вами.  </td>
            </tr>  
          
      </table>
    </div>
 
  
  </div>
  
                </div>
                <div align="center">
                <script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//Когда вы нажимаете на ссылку с классом poplight и HREF начинается с a # 
	$('a.poplight_evpn[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//Потяните запросов и переменных из URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade в Popup и добавить кнопку закрытия
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//Определить запас на выравнивание по центру (вертикальной + горизонтальной) - мы добавляем 80 до высота / ширина, чтобы разместить для заполнения + ширина границы, определенные в CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//Применить маржи в Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade в фоновом режиме
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//Закрыть всплывающих окон и Fade слой
	$('a.close, #fade').live('click', function() { //При нажатии на близких или исчезают слой ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //исчезать их обоих
		
		return false;
	});
 
	
});
              </script>
              </div> </td>
                     </tr>
                   </table>
			<img src="images/krug3.png" width="24" height="20" /> <strong>Циркуляционый насос.</strong><br />	   
  <img src="images/krug4.png" width="24" height="20" /> <strong>Алюминевые радиаторы.</strong> <br />
  <img src="images/krug5.png" width="24" height="20" /> <strong>Подающая труба отопления:</strong> ПП (полипропилен), d 32мм, армированная стекловолокном.
  <br />
  <img src="images/krug6.png" width="24" height="20" /> <strong>Обратная труба отопления:</strong>  ПП (полипропилен), d 32мм, армированная стекловолокном.
  <br />
  <img src="images/krug7.png" width="24" height="20" /> <strong>Подъём турбы отопления мансардного этажа от котла:</strong> ПП (полипропилен), d 32мм, армированная стекловолокном. <br />
  <img src="images/krug8.png" width="24" height="20" /> <strong>Опуск трубы отопления мансардного этажа к котлу:</strong> ПП (полипропилен), d 32мм, армированная стекловолокном. <br />
  <img src="images/kran2.jpg" width="14" height="20" /> <strong>Шаровые краны</strong><br /><br /><div id="liniy_div3"></div>
  Всё используемое нами отопительное оборудование на практике показало свою надёжность и долговечность при эксплуатации в условиях уральского климата.<br />
  По Вашему желанию мы можем смонтировать отопительную систему из оборудования<br /> выбранного Вами.</td>
            </tr>
		    <tr>
		      <td height="3" colspan="4"></td>
		      </tr>
		    <tr valign="top">
		      <td width="100"><div align="left"><div id="content_a"><a rel="example_group" href="images/img/max/68_m_max.png" title="[4] - алюминевые радиаторы,  [7] - подъём турбы отопления, [8] - опуск трубы отопления"><img src="images/img/min/68_m_min.png" width="90" height="70" /></a></div></div></td>
              <td width="100"><div align="center"><div id="content_a"><a rel="example_group" href="images/img/max/k_1.jpg" title="Твёрдотопливный котёл, электрокотёл."><img src="images/img/min/k_1.jpg" width="90" height="70" /></a></div></div></td>
              <td width="100"><div align="right"><div id="content_a"><a rel="example_group" href="images/img/max/k_2.jpg" title="Твёрдотопливный котёл, электрокотёл."><img src="images/img/min/k_2.jpg" width="90" height="70" /></a></div></div></td>
              <td width="100" height="70"><div align="left"><div id="content_a"><a rel="example_group" href="images/img/max/k_4.jpg" title="Твёрдотопливный котёл."><img src="images/img/min/k_4.jpg" width="90" height="70" /></a></div></div></td>
		    </tr>
		    <tr>
		      <td height="3"></td>
		      <td></td>
		      <td colspan="2"></td>
		    </tr>
		    <tr valign="top">
		      <td colspan="4" id="tab_ban2"><div id="liniy_div2"></div><em>Расположение элементов отопительной системы определяется на месте, в зависимости от особенностей Вашего дома.</em><div align="left"><div id="liniy_div"></div></div></td>
		      </tr>
		    </table>
		 
		  <br />
		  <br /><br />
			<div id="st400">
              <div align="center"><a href="#?w=700" rel="popup_contact2" class="poplight2">Схема отопления для Вашего дома</a></div>
            </div>
              <div id="popup_contact2" class="popup_block">
                
                <form id="form4" action="#" method="post">	 
    <div align="center">
      <table width="700" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td colspan="7" class="item_produkt"><div id="priziv4">
            <div align="center"><strong>Запишитесь на бесплатную консультацию!</strong> 
              <div id="priziv3">Наш специалист подъедет к Вам 
                <br />
                и на месте составит детальную схему отопления<br />  для
                Вашего дома. </div> 
              </div>
            </div>        </td>
          </tr>
        <tr>
          <td height="10" colspan="7"></td>
          </tr>
        <tr>
          <td width="30" align="right" class="item_produkt"></td>
            <td width="200" align="right" class="item_produkt"><div align="center">
              
              <em>Ваше имя:	</em><br />
              <input type="text" class="thin" name="name2"  size="30" />
              </div></td>
            <td width="30" class="item_produkt">&nbsp;</td>
            <td width="200" class="item_produkt"><div align="center"><em>Ваш телефон:	</em><br />				
              <input type="text" class="thin" name="telefon2" size="30">
              </div></td>
            <td width="30" class="item_produkt"></td>
            <td width="200" rowspan="2" valign="bottom" class="item_produkt"><button type="submit" name="konsult" class="forma_sakasa3">Записаться</button></td>
            <td width="30" rowspan="2" valign="bottom" class="item_produkt">&nbsp;</td>
          </tr>
        <tr>
          <td width="63" height="5" colspan="3" ></td>
            <td height="5" colspan="2" ></td>
          </tr>
        <tr>
          <td height="5" colspan="7"></td>
          </tr>
        <tr>
          <td height="1" colspan="7"></td>
          </tr>
      </table>
    </div>
  </form>
  
  </div>
  
                </div>
              <div align="center">
                <script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//Когда вы нажимаете на ссылку с классом poplight и HREF начинается с a # 
	$('a.poplight2[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//Потяните запросов и переменных из URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade в Popup и добавить кнопку закрытия
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//Определить запас на выравнивание по центру (вертикальной + горизонтальной) - мы добавляем 80 до высота / ширина, чтобы разместить для заполнения + ширина границы, определенные в CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//Применить маржи в Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade в фоновом режиме
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//Закрыть всплывающих окон и Fade слой
	$('a.close, #fade').live('click', function() { //При нажатии на близких или исчезают слой ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //исчезать их обоих
		
		return false;
	});
 
	
});
              </script>
              </div>
		 <br />
		 <br /><br />
		 <br />
		 <br />
			<br /><table width="9" border="0" cellpadding="0" id="tab_ban">
		  <tr>
		    <td width="5"></td>
              </tr>
		  </table>
		 
          <div id="priziv"><strong>Ждём Ваши вопросы!</strong>  <br />
            
            8 961 777 49 07<br />8 961 773 57 93<br />
  <strong>(работаем без выходных с 9-00 до 21-00)</strong> </div>
		    <br /><br />	<br />	</td>
          </tr>
    </table></td>
  </tr>
  
  <tr>
    <td height="40" background="images/nis.jpg" bgcolor="#BCE154"><table width="990" height="70" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="1" colspan="3" bgcolor="#BCE154"></td>
        </tr>
      <tr>
        <td width="600" height="10"><br /><div align="left" id="niz_levo">ТЕПЛО В ДОМЕ</div></td>
        <td width="340" rowspan="3" valign="bottom">
          </div></td>
        <td width="20" rowspan="3"></td>
      </tr>
      <tr>
        <td height="10"><div align="left" id="niz_levo">Производственная база: г. Первоуральск, ул. Медиков, 15б</div></td>
        </tr>
      <tr>
        <td height="10"><div align="left" id="niz_levo">тел: 8-961-777-49-07 <br />e-mail: abazasl@mail.ru <br />web: www.teplo-v-dome.z66.ru</div><br /></td>
        </tr>
      <tr>
        <td height="5"></td>
        <td width="500" colspan="2"></td>
      </tr>
    </table></td>
  </tr>
</table>
</center>


<script type="text/javascript" src="//consultsystems.ru/script/33826/" async charset="utf-8"></script>


<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter40276839 = new Ya.Metrika({
                    id:40276839,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/40276839" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>

<?php
if(isset($_POST['name'])) {  $name=$_POST['name'];  }
if(isset($_POST['email'])) {  $email=$_POST['email'];  }
if(isset($_POST['message'])) {  $message=$_POST['message'];  }
if(isset($_POST['name2'])) {  $name2=$_POST['name2'];  }
if(isset($_POST['telefon2'])) {  $telefon2=$_POST['telefon2'];  }

if(isset($_POST['kupit'])) {
$nl = "<br/>";
                                           $to  = "<abazasl@mail.ru>, <testkub@mail.ru>";
$theme = "ВОПРОС С САЙТА ТЕПЛО В ДОМЕ";
$ip = $_SERVER['REMOTE_ADDR'];
$ip_addr = "ip: ".$ip;
$date = "Дата: ".date("d.m.Y");
$time = "Время: ".date("H:i");
$text = '<html><body>'.$ip_addr.$nl.$date.$nl.$time.$nl.$otlogit.$nl.$name.$nl.$telefon.$nl.$email.$nl.$message.'</body></html>';
$from ="Content-type: text/html; charset=windows-1251\r\n";
	

mail($to, $theme, $text, $from);

echo "<script>alert('Спасибо за вопрос! Наши менеджеры незамедлительно ответят Вам.')</script>";
}


if(isset($_POST['konsult'])) {
$nl = "<br/>";
                                           $to  = "<abazasl@mail.ru>, <testkub@mail.ru>";
$theme = "ЗАЯВКА НА КОНСУЛЬТАЦИЮ с сайта Тепло в Доме";
$ip = $_SERVER['REMOTE_ADDR'];
$ip_addr = "ip: ".$ip;
$date = "Дата: ".date("d.m.Y");
$time = "Время: ".date("H:i");
$text = '<html><body>'.$ip_addr.$nl.$date.$nl.$time.$nl.$name2.$nl.$telefon2.'</body></html>';
$from ="Content-type: text/html; charset=windows-1251\r\n";
	

mail($to, $theme, $text, $from);

echo "<script>alert('Спасибо за заявку! Наш специалист свяжется с Вами и согласует дату и время встречи.')</script>";
}

if(isset($_POST['kotel'])) {
$nl = "<br/>";
if(isset($_GET['lot'])) {  $lot=$_GET['lot'];  }
                                           $to  = "<testkub@mail.ru>";
$theme = "ТЕПЛО В ДОМЕ ДРУГОЙ КОТЁЛ";
$ip = $_SERVER['REMOTE_ADDR'];
$ip_addr = "ip: ".$ip;
$date = "Дата: ".date("d.m.Y");
$time = "Время: ".date("H:i");
$text = '<html><body>'.$ip_addr.$nl.$date.$nl.$time.$nl.$otlogit.$nl.$lot.$nl.$name.$nl.$telefon.$nl.$email.$nl.$message.'</body></html>';
$from ="Content-type: text/html; charset=windows-1251\r\n";
	

mail($to, $theme, $text, $from);

echo "<script>alert('Спасибо за запрос! Наш специалист в течение дня сообщит Вам стоимость отполения с учётом выбранного Вами котла.')</script>";
}

?>