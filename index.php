



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>


<meta http-equiv="���-����������" content="text/html; charset=windows-1251">
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


<title>����� � ����</title>
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
              <div align="center">�������!</div>
            </div></td>
          </tr>
          <tr>
            <td height="40"><div id="text3">
              <div align="center">8-961-777-49-07</div>
            </div></td>
          </tr>
          <tr>
            <td height="30" valign="top"><div id="text2">
              <div align="center">(�������� ��� ��������)</div>
            </div></td>
          </tr>
          <tr>
            <td height="30" valign="bottom"><div id="st300">
              <div align="center"><a href="#?w=700" rel="popup_contact2" class="poplight2">������� �����������</a></div>
            </div>
              <div id="popup_contact2" class="popup_block">
                
                <form id="form4" action="#" method="post">	 
    <div align="center">
      <table width="700" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td colspan="7" class="item_produkt"><div id="priziv4">
            <div align="center"><strong>���������� �� ���������� ������������!</strong> 
              <div id="priziv3">��� ���������� �������� � ��� 
                <br />
                � �� ����� �������� ��������� ����� ���������,<br />�������� ����������� ������ ����. </div> 
              </div>
            </div>        </td>
          </tr>
        <tr>
          <td height="10" colspan="7"></td>
          </tr>
        <tr>
          <td width="30" align="right" class="item_produkt"></td>
            <td width="200" align="right" class="item_produkt"><div align="center">
              
              <em>���� ���:	</em><br />
              <input type="text" class="thin" name="name2"  size="30" />
              </div></td>
            <td width="30" class="item_produkt">&nbsp;</td>
            <td width="200" class="item_produkt"><div align="center"><em>��� �������:	</em><br />				
              <input type="text" class="thin" name="telefon2" size="30">
              </div></td>
            <td width="30" class="item_produkt"></td>
            <td width="200" rowspan="2" valign="bottom" class="item_produkt"><button type="submit" name="konsult" class="forma_sakasa3">����������</button></td>
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
						   		   
	//����� �� ��������� �� ������ � ������� poplight � HREF ���������� � a # 
	$('a.poplight2[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//�������� �������� � ���������� �� URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade � Popup � �������� ������ ��������
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//���������� ����� �� ������������ �� ������ (������������ + ��������������) - �� ��������� 80 �� ������ / ������, ����� ���������� ��� ���������� + ������ �������, ������������ � CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//��������� ����� � Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade � ������� ������
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//������� ����������� ���� � Fade ����
	$('a.close, #fade').live('click', function() { //��� ������� �� ������� ��� �������� ���� ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //�������� �� �����
		
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
        <td align="center" valign="middle"><div id="text5">���������������� ����:</div></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td height="45"></td>
        <td align="center" valign="top"><div id="text5">�.������������, ��.�������, 15�</div></td>
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
        <td valign="top"> <div align="center"><div id="st200"><a href="#?w=470" rel="popup_contact" class="poplight">������ ������</a></div>
<div id="popup_contact" class="popup_block">


<p align="center" id="text6">��� ���� �������!</p><br />

<form id="form2" action="#" method="post">	
		
	
				<p id="text6">
					<label for="name">���� ���: </label>
					<input type="text" name="name" id="name" size="30" />
				</p>
				
				<p id="text6">
					<label for="web">��� �������: *</label>
					<input type="text" name="email" id="email" size="30" />
				</p>			
																			
				<p id="text6">
					<label for="message">��� ������: *</label></p>
					<textarea name="message" id="message" cols="50" rows="5"></textarea>
												
					<br />	<br />	

			<button type="submit" name="kupit" class="forma_sakasa">��������� ������</button>			
  </form>
</div>
		</div>


<script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//����� �� ��������� �� ������ � ������� poplight � HREF ���������� � a # 
	$('a.poplight[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//�������� �������� � ���������� �� URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade � Popup � �������� ������ ��������
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//���������� ����� �� ������������ �� ������ (������������ + ��������������) - �� ��������� 80 �� ������ / ������, ����� ���������� ��� ���������� + ������ �������, ������������ � CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//��������� ����� � Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade � ������� ������
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//������� ����������� ���� � Fade ����
	$('a.close, #fade').live('click', function() { //��� ������� �� ������� ��� �������� ���� ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //�������� �� �����
		
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
                <div align="center"><strong id="ekonom">���������� �� 20 000 �� 50 000 ������!                </strong></div>
                <div id="probel"></div>
                <div align="center">�� ����� ������ 2016 ���� ��������<br />������������ ������� � �������� � �������<br />������ ���������, ����������� � �������������!                </div></td>
		      </tr>
		    </table>
		
		<a name="d6x6m"></a><br />
          <br /><div id="price"> <div align="center">��������� ��� ������ ���� "��� ����".</div>
            </div><br /><br /><table width="966" height="117" border="0" cellpadding="0"  id="priziv_u6">
		    <tr>
		      <td width="156" valign="middle" background="images/motiv6.png"><div id="st600">
              <div align="center"><a href="#?w=700" rel="popup_contact_1p" class="poplight_1p"><strong>����������</strong><br />
                ������������<br />�� �����<br />
<div align="right" id="priziv_pod">���������</div></a></div>
            </div>
              <div id="popup_contact_1p" class="popup_block">
                
                <form id="form4" action="#" method="post">	 
    <div align="center">
      <table width="700" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td colspan="7" class="item_produkt"><div id="priziv4">
            <div align="center"><strong>���������� �� ���������� ������������!</strong> 
              <div id="priziv3">��� ���������� �������� � ��� 
                <br />
                � �� ����� �������� ��������� ����� ���������,<br />�������� ����������� ������ ����. </div> 
              </div>
            </div>        </td>
          </tr>
        <tr>
          <td height="10" colspan="7"></td>
          </tr>
        <tr>
          <td width="30" align="right" class="item_produkt"></td>
            <td width="200" align="right" class="item_produkt"><div align="center">
              
              <em>���� ���:	</em><br />
              <input type="text" class="thin" name="name2"  size="30" />
              </div></td>
            <td width="30" class="item_produkt">&nbsp;</td>
            <td width="200" class="item_produkt"><div align="center"><em>��� �������:	</em><br />				
              <input type="text" class="thin" name="telefon2" size="30">
              </div></td>
            <td width="30" class="item_produkt"></td>
            <td width="200" rowspan="2" valign="bottom" class="item_produkt"><button type="submit" name="konsult" class="forma_sakasa3">����������</button></td>
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
						   		   
	//����� �� ��������� �� ������ � ������� poplight � HREF ���������� � a # 
	$('a.poplight_1p[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//�������� �������� � ���������� �� URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade � Popup � �������� ������ ��������
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//���������� ����� �� ������������ �� ������ (������������ + ��������������) - �� ��������� 80 �� ������ / ������, ����� ���������� ��� ���������� + ������ �������, ������������ � CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//��������� ����� � Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade � ������� ������
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//������� ����������� ���� � Fade ����
	$('a.close, #fade').live('click', function() { //��� ������� �� ������� ��� �������� ���� ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //�������� �� �����
		
		return false;
	});
 
	
});
              </script>
              </div></td>
		      <td width="3" valign="middle"></td>
		      <td width="156" valign="top" background="images/motiv6_n_o.png"><div align="center" id="pr2_no">������<br /> 
		        ���������<br />
		        <strong>�� 1 ����</strong></div></td>
		      <td width="3" valign="top"></td>
		      <td width="156" valign="middle" background="images/motiv6.png"><div id="st600">
              <div align="center"><a href="#?w=600" rel="popup_contact_3p" class="poplight_3p"><strong>12 ��� �����</strong><br />
<span id="priziv_u3"><strong>��������������</strong></span><br />
� �������<br />
<div align="right" id="priziv_pod2">���������</div></a></div>
            </div>
              <div id="popup_contact_3p" class="popup_block">
                
                 
    <div align="center">
      <table width="600" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td colspan="7" class="item_produkt"><div id="priziv4">
           
              <div id="priziv33">���� �������� ����� 12-�� ��� �������� � ������������� ���������.<br /> <br />�� ���������������� �� ��������������, ������� � ������� ������������ ������ �  ������� �����, ���������, ������� �������, � ����� ������� ����� � ���������. 
              <br /> <br />���� �� ������������ ����������� ������� ���������.<br /> <br />�������� ���c������������� ������ � ���������, ����� ���� ����������� � �����.
               </div>
              
            </div>        </td>
          </tr>
       
       
      
      </table>
    </div>
 
  
  </div>
  
               
              <div align="center">
                <script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//����� �� ��������� �� ������ � ������� poplight � HREF ���������� � a # 
	$('a.poplight_3p[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//�������� �������� � ���������� �� URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade � Popup � �������� ������ ��������
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//���������� ����� �� ������������ �� ������ (������������ + ��������������) - �� ��������� 80 �� ������ / ������, ����� ���������� ��� ���������� + ������ �������, ������������ � CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//��������� ����� � Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade � ������� ������
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//������� ����������� ���� � Fade ����
	$('a.close, #fade').live('click', function() { //��� ������� �� ������� ��� �������� ���� ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //�������� �� �����
		
		return false;
	});
 
	
});
              </script>
              </div></td>
		      <td width="3" valign="top"></td>
		      <td width="156" valign="middle" background="images/motiv6.png"><div id="st600">
              <div align="center"><a href="#?w=600" rel="popup_contact_4p" class="poplight_4p"><strong>��������</strong><br /> 
�������<br /> 
�� 50%<br />
<div align="right" id="priziv_pod">���������</div>
</a></div>
            </div>
              <div id="popup_contact_4p" class="popup_block">
                
               
    <div align="center">
      <table width="600" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td class="item_produkt"><div id="priziv4">
           
              <div id="priziv33">���������������� ������ ������������� ������������ ������� � ���������������� ������ ��� ������������ ���� ��� �������� ��� ������ ���� ������� �� 50%.  <br /> <br />
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
						   		   
	//����� �� ��������� �� ������ � ������� poplight � HREF ���������� � a # 
	$('a.poplight_4p[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//�������� �������� � ���������� �� URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade � Popup � �������� ������ ��������
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//���������� ����� �� ������������ �� ������ (������������ + ��������������) - �� ��������� 80 �� ������ / ������, ����� ���������� ��� ���������� + ������ �������, ������������ � CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//��������� ����� � Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade � ������� ������
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//������� ����������� ���� � Fade ����
	$('a.close, #fade').live('click', function() { //��� ������� �� ������� ��� �������� ���� ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //�������� �� �����
		
		return false;
	});
 
	
});
              </script>
              </div></td>
		      <td width="3" valign="top"></td>
		      <td width="156" valign="middle" background="images/motiv6.png"><div id="st600">
              <div align="center"><a href="#?w=600" rel="popup_contact_5p" class="poplight_5p"><strong>�������</strong><br /> 
���� ��<br />
 ������������<br />
<div align="right" id="priziv_pod">���������</div></a></div>
            </div>
              <div id="popup_contact_5p" class="popup_block">
                
                 
    <div align="center">
      <table width="600" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td class="item_produkt"><div id="priziv4">
           
              <div id="priziv33">��������� ������� ����� �����, �� �������� ������������ ������������ � ��������� � ������� �����������.<br /> <br />������� �� ����� ���������� ��� ������� ���� �� ������������ � ���������, ��� ��������� ���� ����� �� ����� ���������� ��� � ���� ������.
              
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
						   		   
	//����� �� ��������� �� ������ � ������� poplight � HREF ���������� � a # 
	$('a.poplight_5p[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//�������� �������� � ���������� �� URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade � Popup � �������� ������ ��������
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//���������� ����� �� ������������ �� ������ (������������ + ��������������) - �� ��������� 80 �� ������ / ������, ����� ���������� ��� ���������� + ������ �������, ������������ � CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//��������� ����� � Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade � ������� ������
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//������� ����������� ���� � Fade ����
	$('a.close, #fade').live('click', function() { //��� ������� �� ������� ��� �������� ���� ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //�������� �� �����
		
		return false;
	});
 
	
});
              </script>
              </div></td>
		      <td width="3" valign="top"></td>
		      <td width="156" valign="middle" background="images/motiv6.png"><div id="st600">
              <div align="center"><a href="#?w=600" rel="popup_contact_6p" class="poplight_6p"><strong>1 ���</strong><br /> 
������������<br />
������������<br />
<div align="right" id="priziv_pod">���������</div></a></div>
            </div>
              <div id="popup_contact_6p" class="popup_block">
                
              
    <div align="center">
      <table width="600" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td class="item_produkt"><div id="priziv4">
           
              <div id="priziv33">�� �� �������������� ���� ������������ � ������������ ��������� ��  ��� ��� ������� ��������.<br /> <br />����� �� ����� ���������� ��� ��������� ������������ ����� ������������ �������.
              
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
						   		   
	//����� �� ��������� �� ������ � ������� poplight � HREF ���������� � a # 
	$('a.poplight_6p[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//�������� �������� � ���������� �� URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade � Popup � �������� ������ ��������
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//���������� ����� �� ������������ �� ������ (������������ + ��������������) - �� ��������� 80 �� ������ / ������, ����� ���������� ��� ���������� + ������ �������, ������������ � CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//��������� ����� � Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade � ������� ������
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//������� ����������� ���� � Fade ����
	$('a.close, #fade').live('click', function() { //��� ������� �� ������� ��� �������� ���� ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //�������� �� �����
		
		return false;
	});
 
	
});
              </script>
              </div></td>
		    </tr>
		    
		    </table>
            
            <br />
            <br /><br />
          
          <div id="srub"> <div align="left">��� ���� �������� <strong>6 �� 6 </strong> ������<br />
            ( ����������� ) :</div>
            </div>
		  <table width="900" height="10" border="0" cellpadding="0" id="tab_ban">
		    <tr>
		      <td height="100" colspan="4" valign="top"><div id="content_a"><a rel="example_group" href="images/img/max/66_1_nokm.png" title="[2] - �����������, [3] - �������������� �����, [4] - ���������� ���������, [5] - �������� ����� ���������, [6] - �������� ����� ���������"><img src="images/img/min/66_1_nokm_min.png" width="400"/></a></div>
		      <br /><br /></td>
              <td width="50" rowspan="5"></td>
              <td rowspan="5" valign="top"><strong id="ban">��������� ���� ������������ �������<br />� ������ �������� � ������� "��� ����":</strong><br /><strong id="srub2">45 �.�.</strong><br />
                <br />
                   <div id="ban2">�������� ������������ �������:</div>
                  
                  <table width="330" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                       <td width="30" height="25" align="left" valign="middle"><img src="images/krug2.png" width="24" height="20" /></td>
                       <td width="128" align="left" valign="middle"><strong>�����������:</strong></td>
                       <td width="120" align="left" valign="middle"><div id="st500">
   <a href="#?w=470" rel="popup_contact_evpn" class="poplight_evpn">���� 6 ���</a>.
    </div>
    <div id="popup_contact_evpn" class="popup_block">
               
    <div align="center">
      <table width="470" border="0" cellpadding="0" cellspacing="5" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td  class="item_produkt">
            <div align="center" id="ban2"><strong>����������� ����-6</strong>  </div><br /> 
             ����������� ��������: <strong>6 ���.</strong> <br />
			 ���������� ������� (����������): <strong>220�.</strong> <br />
			 ����������� ���� �� ������: <strong>35-85 �.</strong><br />
			 ������� ������������ ���������<br />��� ����������� 25 � : <strong>44 ��.�.</strong> <br />
			 ������� ������������ ���������<br />��� ����������� 20 � : <strong>60 ��.�.</strong> <br />
			 �������������: <strong>������.</strong> <br /><br />
			 <em>����������:</em>
			 <div id="probel"></div>
			 <img src="images/kv.png" width="22" height="14" /> �� ������������ ���� ������������ ������������ �� �������� �������� ���� ��������� � ������������� ��� ������������ � �������� ���������� �������.<div id="probel"></div><img src="images/kv.png" width="22" height="14" /> �� ������ ������� �� ����� ������������ ������������ ������� �� ������������ <br />���������� ����. </td>
            </tr>  
      </table>
    </div>
  </div>
  
                </div>
                <div align="center">
                <script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//����� �� ��������� �� ������ � ������� poplight � HREF ���������� � a # 
	$('a.poplight_evpn[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//�������� �������� � ���������� �� URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade � Popup � �������� ������ ��������
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//���������� ����� �� ������������ �� ������ (������������ + ��������������) - �� ��������� 80 �� ������ / ������, ����� ���������� ��� ���������� + ������ �������, ������������ � CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//��������� ����� � Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade � ������� ������
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//������� ����������� ���� � Fade ����
	$('a.close, #fade').live('click', function() { //��� ������� �� ������� ��� �������� ���� ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //�������� �� �����
		
		return false;
	});
 
	
});
              </script>
              </div> </td>
                       <td align="left" valign="bottom"> <div align="center"><div id="st200_k"><a href="#?w=650" rel="popup_contact_dr_k1" class="poplight_dr_k1">������ ����</a></div>
<div id="popup_contact_dr_k1" class="popup_block">


<p align="center" id="text67">������� �������� �����, ������� �� �� ������ ������������<br />� �� � ������� ��� ������� �� �������� ��� ������ ��� �� ����� ��������� ��������� "��� ����" � ������ ��� ������:</p><br />

<form id="f6x6e" action="index.php?lot=6x6e" method="post">	
		
	
				<p id="text6" align="left">
					<label for="name">�������� ������� ��� �����: </label>
					<input type="text" name="name" id="name" size="23" />
				</p>
				
				<p id="text6" align="left">
					<label for="web">��� ������� ��� e-mail: </label>
					<input type="text" name="email" id="email" size="30" />
				</p>			
																			
			
												
					<br />	<br />	

			<button type="submit" name="kotel" class="forma_sakasa">������ ���������</button>			
  </form>
</div>
		</div>


<script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//����� �� ��������� �� ������ � ������� poplight � HREF ���������� � a # 
	$('a.poplight_dr_k1[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//�������� �������� � ���������� �� URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade � Popup � �������� ������ ��������
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//���������� ����� �� ������������ �� ������ (������������ + ��������������) - �� ��������� 80 �� ������ / ������, ����� ���������� ��� ���������� + ������ �������, ������������ � CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//��������� ����� � Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade � ������� ������
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//������� ����������� ���� � Fade ����
	$('a.close, #fade').live('click', function() { //��� ������� �� ������� ��� �������� ���� ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //�������� �� �����
		
		return false;
	});
 
	
});
</script>	</td>
                     </tr>
                   </table>
			<img src="images/krug3.png" width="24" height="20" /> <strong>������������� �����.</strong> <br />	   
  <img src="images/krug4.png" width="24" height="20" /> <strong>���������� ���������.</strong> <br />
  <img src="images/krug5.png" width="24" height="20" /> <strong>�������� ����� ���������:</strong> �� (������������), d 32��, ������������ ��������������.
  <br />
  <img src="images/krug6.png" width="24" height="20" /> <strong>�������� ����� ���������:</strong>  �� (������������), d 32��, ������������ ��������������.
  <br />
  <img src="images/kran2.jpg" width="14" height="20" /> <strong>������� �����.</strong> <br /><br />
  <em></em></td>
            </tr>
		    <tr>
		      <td height="3" colspan="4"></td>
		      </tr>
		    <tr valign="top">
		      <td width="100"><div align="left"><div id="content_a"><a rel="example_group" href="images/img/max/nasos_m.jpg" title="�����������"><img src="images/img/min/nasos_min.jpg" width="90" height="70" /></a></div></div></td>
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
		      <td colspan="4" id="tab_ban2"><div id="liniy_div2"></div><em>������������ ��������� ������������ ������� ������������ �� �����, � ����������� �� ������������ ������ ����.</em><div align="left"><div id="liniy_div"></div></div></td>
		      </tr>
		    </table>
		  <br /><br />
		  <div id="srub"> <div align="left">��� ���� �������� <strong>6 �� 6 </strong> ������ <br />
		  ( �������������� ���� ) :</div>
            </div>
		  <table width="900" height="10" border="0" cellpadding="0" id="tab_ban">
		    <tr>
		      <td height="100" colspan="4" valign="top"><div id="content_a"><a rel="example_group" href="images/img/max/66_1_nokm_m.png" title="[1] - �������������� ����, [2] - �����������, [3] - �������������� �����, [4] - ���������� ���������, [5] - �������� ����� ���������, [6] - �������� ����� ���������"><img src="images/img/min/66_1_nom_min.png" width="400"/></a></div>
		      <br /><br /></td>
              <td width="50" rowspan="5"></td>
              <td rowspan="5" valign="top"><strong id="ban">��������� ���� ������������ �������<br />� ������ �������� � ������� "��� ����":</strong><br /><strong id="srub2">75 �.�.</strong><br />
                <br />
                   <div id="ban2">�������� ������������ �������:</div>
                 <table width="430" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                       <td width="30" height="25" align="left" valign="middle"><img src="images/krug1.png" width="24" height="20" /></td>
                       <td width="218" align="left" valign="middle"><strong>�������������� ����:</strong></td>
                       <td align="left" valign="middle"><div id="st500">
   <a href="#?w=470" rel="popup_contact_karakan8" class="poplight_karakan8">������� 8 ���</a>.
    </div>
    <div id="popup_contact_karakan8" class="popup_block">
               
    <div align="center">
      <table width="470" border="0" cellpadding="0" cellspacing="5" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td  class="item_produkt">
            <div align="center" id="ban2"><strong>�������������� ���� ������� 8</strong>  </div><br /> 
             ����������� ��������: <strong>8 ���.</strong> <br />
			 ������������ �������: <strong>�� 80 ��.�.</strong> <br />
			 ���: <strong>75%</strong> <br />
			 ����������� ���� �� ������: <strong>95 �.</strong><br />			
			 �������������� �������: <strong>d 100�120 ��</strong> <br />
			 	������� ��������: <strong>1 ���.</strong> <br />
			 ���� �������� �������: <strong>32 �.</strong> <br />		  
			�������������: 
			 <strong>������.</strong><br /><br />
			  <em>����������:</em>
			 <div id="probel"></div>
			 <img src="images/kv.png" width="22" height="14" /> �� ������������ ���� ������������ ������������ �� �������� �������� ���� ��������� � ������������� ��� ������������ � �������� ���������� �������.<div id="probel"></div><img src="images/kv.png" width="22" height="14" /> �� ������ ������� �� ����� ������������ ������������ ������� �� ������������ <br />���������� ����.			 </td>
            </tr>  
      </table>
    </div>
  </div>
  
                </div>
                <div align="center">
                <script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//����� �� ��������� �� ������ � ������� poplight � HREF ���������� � a # 
	$('a.poplight_karakan8[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//�������� �������� � ���������� �� URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade � Popup � �������� ������ ��������
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//���������� ����� �� ������������ �� ������ (������������ + ��������������) - �� ��������� 80 �� ������ / ������, ����� ���������� ��� ���������� + ������ �������, ������������ � CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//��������� ����� � Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade � ������� ������
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//������� ����������� ���� � Fade ����
	$('a.close, #fade').live('click', function() { //��� ������� �� ������� ��� �������� ���� ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //�������� �� �����
		
		return false;
	});
 
	
});
              </script>
              </div> </td>
                       <td align="left" valign="bottom"><div align="center"><div id="st200_k"><a href="#?w=650" rel="popup_contact_dr_k2" class="poplight_dr_k2">������ ����</a></div>
<div id="popup_contact_dr_k2" class="popup_block">


<p align="center" id="text67">������� �������� �����, ������� �� �� ������ ������������<br />� �� � ������� ��� ������� �� �������� ��� ������ ��� �� ����� ��������� ��������� "��� ����" � ������ ��� ������:</p><br />

<form id="f6x6" action="index.php?lot=6x6" method="post">	
		
	
				<p id="text6" align="left">
					<label for="name">�������� ������� ��� �����: </label>
					<input type="text" name="name" id="name" size="23" />
				</p>
				
				<p id="text6" align="left">
					<label for="web">��� ������� ��� e-mail: </label>
					<input type="text" name="email" id="email" size="30" />
				</p>			
																			
			
												
					<br />	<br />	

			<button type="submit" name="kotel" class="forma_sakasa">������ ���������</button>			
  </form>
</div>
		</div>


<script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//����� �� ��������� �� ������ � ������� poplight � HREF ���������� � a # 
	$('a.poplight_dr_k2[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//�������� �������� � ���������� �� URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade � Popup � �������� ������ ��������
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//���������� ����� �� ������������ �� ������ (������������ + ��������������) - �� ��������� 80 �� ������ / ������, ����� ���������� ��� ���������� + ������ �������, ������������ � CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//��������� ����� � Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade � ������� ������
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//������� ����������� ���� � Fade ����
	$('a.close, #fade').live('click', function() { //��� ������� �� ������� ��� �������� ���� ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //�������� �� �����
		
		return false;
	});
 
	
});
</script></td>
                     </tr>
                   </table>
                   <table width="400" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                       <td width="30" height="25" align="left" valign="top"><img src="images/krug2.png" width="24" height="20" /></td>
                       <td width="230" align="left" valign="bottom"><strong>����������� </strong>(���������)<strong>:</strong></td>
                       <td align="left" valign="bottom"><div id="st500">
   <a href="#?w=470" rel="popup_contact_evpn" class="poplight_evpn">���� 6 ���</a>.
    </div>
    <div id="popup_contact_evpn" class="popup_block">
               
    <div align="center">
      <table width="470" border="0" cellpadding="0" cellspacing="5" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td  class="item_produkt">
            <div align="center" id="ban2"><strong>����������� ����-6</strong>  </div><br /> 
             ����������� ��������: <strong>6 ���.</strong> <br />
			 ���������� ������� (����������): <strong>220�.</strong> <br />
			 ����������� ���� �� ������: <strong>35-85 �.</strong><br />
			 ������� ������������ ���������<br />��� ����������� 25 � : <strong>44 ��.�.</strong> <br />
			 ������� ������������ ���������<br />��� ����������� 20 � : <strong>60 ��.�.</strong> <br />
			 �������������: <strong>������.</strong> <br /><br />
			 <em>����������:</em>
			 <div id="probel"></div>
			 <img src="images/kv.png" width="22" height="14" /> �� ������������ ���� ������������ ������������ �� �������� �������� ���� ��������� � ������������� ��� ������������ � �������� ���������� �������.<div id="probel"></div><img src="images/kv.png" width="22" height="14" /> �� ������ ������� �� ����� ������������ ������������ ������� �� ������������ <br />���������� ����. </td>
            </tr>  
          
      </table>
    </div>
 
  
  </div>
  
                </div>
                <div align="center">
                <script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//����� �� ��������� �� ������ � ������� poplight � HREF ���������� � a # 
	$('a.poplight_evpn[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//�������� �������� � ���������� �� URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade � Popup � �������� ������ ��������
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//���������� ����� �� ������������ �� ������ (������������ + ��������������) - �� ��������� 80 �� ������ / ������, ����� ���������� ��� ���������� + ������ �������, ������������ � CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//��������� ����� � Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade � ������� ������
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//������� ����������� ���� � Fade ����
	$('a.close, #fade').live('click', function() { //��� ������� �� ������� ��� �������� ���� ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //�������� �� �����
		
		return false;
	});
 
	
});
              </script>
              </div> </td>
                     </tr>
                   </table>
			<img src="images/krug3.png" width="24" height="20" /> <strong>������������� �����.</strong> <br />	   
  <img src="images/krug4.png" width="24" height="20" /> <strong>���������� ���������.</strong> <br />
  <img src="images/krug5.png" width="24" height="20" /> <strong>�������� ����� ���������:</strong> �� (������������), d 32��, ������������ ��������������.
  <br />
  <img src="images/krug6.png" width="24" height="20" /> <strong>�������� ����� ���������:</strong>  �� (������������), d 32��, ������������ ��������������.
  <br />
  <img src="images/kran2.jpg" width="14" height="20" /> <strong>������� �����</strong><br /><br />
  <em></em> </td>
            </tr>
		    <tr>
		      <td height="3" colspan="4"></td>
		      </tr>
		    <tr valign="top">
		      <td width="100"><div align="center"><div id="content_a"><a rel="example_group" href="images/img/max/k_1.jpg" title="�������������� ����, �����������."><img src="images/img/min/k_1.jpg" width="90" height="70" /></a></div></div></td>
		      <td width="100"><div align="right"><div id="content_a"><a rel="example_group" href="images/img/max/k_2.jpg" title="�������������� ����, �����������."><img src="images/img/min/k_2.jpg" width="90" height="70" /></a></div></div></td>
		      <td width="100"><div align="left"><div id="content_a"><a rel="example_group" href="images/img/max/k_4.jpg" title="�������������� ����."><img src="images/img/min/k_4.jpg" width="90" height="70" /></a></div></div></td>
		      <td width="100" height="70">&nbsp;</td>
		    </tr>
		    <tr>
		      <td height="3"></td>
		      <td></td>
		      <td colspan="2"></td>
		    </tr>
		    <tr valign="top">
		     <td colspan="4" id="tab_ban2"><div id="liniy_div2"></div><em>������������ ��������� ������������ ������� ������������ �� �����, � ����������� �� ������������ ������ ����.</em><div align="left"><div id="liniy_div"></div></div></td>
		      </tr>
		    </table>
		  <br /> <br />
		  <div id="srub"> <div align="left">��� ���� �������� <strong>6 �� 6 </strong> ������ � ���������<br />
		    ( �������������� ���� ) :</div>
            </div>
		  <table width="900" height="10" border="0" cellpadding="0" id="tab_ban">
		    <tr>
		      <td height="100" colspan="4" valign="top"><div id="content_a"><a rel="example_group" href="images/img/max/66_1_m.png" title="[1] - �������������� ����, [2] - �����������, [3] - �������������� �����, [4] - ���������� ���������, [5] - �������� ����� ���������, [6] - �������� ����� ���������"><img src="images/img/min/66_1_min.png" width="400"/></a></div>
		      <br /><br /></td>
              <td width="50" rowspan="5"></td>
              <td rowspan="5" valign="top"><strong id="ban">��������� ���� ������������ �������<br />� ������ �������� � ������� "��� ����":</strong><br />
              <strong id="srub2">90 �.�.</strong><br />
                <br />
                   <div id="ban2">�������� ������������ �������:</div>
                  <table width="430" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                       <td width="30" height="25" align="left" valign="middle"><img src="images/krug1.png" width="24" height="20" /></td>
                       <td width="218" align="left" valign="middle"><strong>�������������� ����:</strong></td>
                       <td align="left" valign="middle"><div id="st500">
   <a href="#?w=470" rel="popup_contact_karakan10" class="poplight_karakan10">������� 10 ���</a>.
    </div>
    <div id="popup_contact_karakan10" class="popup_block">
               
    <div align="center">
      <table width="470" border="0" cellpadding="0" cellspacing="5" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td  class="item_produkt">
            <div align="center" id="ban2"><strong>�������������� ���� ������� 10</strong>  </div><br /> 
             ����������� ��������: <strong>10 ���.</strong> <br />
			 ������������ �������: <strong>�� 100 ��.�.</strong> <br />
			 ���: <strong>75%</strong> <br />
			 ����������� ���� �� ������: <strong>95 �.</strong><br />
			 	������� ��������: <strong>1 ���.</strong> <br />
			 ���� �������� �������: <strong>47 �.</strong> <br />
			 	�������������� �������: <strong>d 150 ��.</strong> <br />	 
					 �������������: 
			 <strong>������.</strong> <br /><br />
			  <em>����������:</em>
			 <div id="probel"></div>
			 <img src="images/kv.png" width="22" height="14" /> �� ������������ ���� ������������ ������������ �� �������� �������� ���� ��������� � ������������� ��� ������������ � �������� ���������� �������.<div id="probel"></div><img src="images/kv.png" width="22" height="14" /> �� ������ ������� �� ����� ������������ ������������ ������� �� ������������ <br />���������� ����.			 </td>
            </tr>  
      </table>
    </div>
  </div>
  
                </div>
                <div align="center">
                <script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//����� �� ��������� �� ������ � ������� poplight � HREF ���������� � a # 
	$('a.poplight_karakan10[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//�������� �������� � ���������� �� URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade � Popup � �������� ������ ��������
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//���������� ����� �� ������������ �� ������ (������������ + ��������������) - �� ��������� 80 �� ������ / ������, ����� ���������� ��� ���������� + ������ �������, ������������ � CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//��������� ����� � Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade � ������� ������
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//������� ����������� ���� � Fade ����
	$('a.close, #fade').live('click', function() { //��� ������� �� ������� ��� �������� ���� ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //�������� �� �����
		
		return false;
	});
 
	
});
              </script>
              </div> </td>
                       <td align="left" valign="bottom"><div align="center"><div id="st200_k"><a href="#?w=650" rel="popup_contact_dr_k3" class="poplight_dr_k3">������ ����</a></div>
<div id="popup_contact_dr_k3" class="popup_block">


<p align="center" id="text67">������� �������� �����, ������� �� �� ������ ������������<br />� �� � ������� ��� ������� �� �������� ��� ������ ��� �� ����� ��������� ��������� "��� ����" � ������ ��� ������:</p><br />

<form id="f6x6m" action="index.php?lot=6x6m" method="post">	
		
	
				<p id="text6" align="left">
					<label for="name">�������� ������� ��� �����: </label>
					<input type="text" name="name" id="name" size="23" />
				</p>
				
				<p id="text6" align="left">
					<label for="web">��� ������� ��� e-mail: </label>
					<input type="text" name="email" id="email" size="30" />
				</p>			
																			
			
												
					<br />	<br />	

			<button type="submit" name="kotel" class="forma_sakasa">������ ���������</button>			
  </form>
</div>
		</div>


<script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//����� �� ��������� �� ������ � ������� poplight � HREF ���������� � a # 
	$('a.poplight_dr_k3[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//�������� �������� � ���������� �� URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade � Popup � �������� ������ ��������
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//���������� ����� �� ������������ �� ������ (������������ + ��������������) - �� ��������� 80 �� ������ / ������, ����� ���������� ��� ���������� + ������ �������, ������������ � CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//��������� ����� � Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade � ������� ������
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//������� ����������� ���� � Fade ����
	$('a.close, #fade').live('click', function() { //��� ������� �� ������� ��� �������� ���� ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //�������� �� �����
		
		return false;
	});
 
	
});
</script></td>
                     </tr>
                   </table>
                 <table width="400" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                       <td width="30" height="25" align="left" valign="top"><img src="images/krug2.png" width="24" height="20" /></td>
                       <td width="230" align="left" valign="bottom"><strong>����������� </strong>(���������)<strong>:</strong></td>
                       <td align="left" valign="bottom"><div id="st500">
   <a href="#?w=470" rel="popup_contact_evpn" class="poplight_evpn">���� 6 ���</a>.
    </div>
    <div id="popup_contact_evpn" class="popup_block">
               
    <div align="center">
      <table width="470" border="0" cellpadding="0" cellspacing="5" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td  class="item_produkt">
            <div align="center" id="ban2"><strong>����������� ����-6</strong>  </div><br /> 
             ����������� ��������: <strong>6 ���.</strong> <br />
			 ���������� ������� (����������): <strong>220�.</strong> <br />
			 ����������� ���� �� ������: <strong>35-85 �.</strong><br />
			 ������� ������������ ���������<br />��� ����������� 25 � : <strong>44 ��.�.</strong> <br />
			 ������� ������������ ���������<br />��� ����������� 20 � : <strong>60 ��.�.</strong> <br />
			 �������������: <strong>������.</strong> <br /><br />
			 <em>����������:</em>
			 <div id="probel"></div>
			 <img src="images/kv.png" width="22" height="14" /> �� ������������ ���� ������������ ������������ �� �������� �������� ���� ��������� � ������������� ��� ������������ � �������� ���������� �������.<div id="probel"></div><img src="images/kv.png" width="22" height="14" /> �� ������ ������� �� ����� ������������ ������������ ������� �� ������������ <br />���������� ����. </td>
            </tr>  
          
      </table>
    </div>
 
  
  </div>
  
                </div>
                <div align="center">
                <script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//����� �� ��������� �� ������ � ������� poplight � HREF ���������� � a # 
	$('a.poplight_evpn[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//�������� �������� � ���������� �� URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade � Popup � �������� ������ ��������
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//���������� ����� �� ������������ �� ������ (������������ + ��������������) - �� ��������� 80 �� ������ / ������, ����� ���������� ��� ���������� + ������ �������, ������������ � CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//��������� ����� � Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade � ������� ������
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//������� ����������� ���� � Fade ����
	$('a.close, #fade').live('click', function() { //��� ������� �� ������� ��� �������� ���� ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //�������� �� �����
		
		return false;
	});
 
	
});
              </script>
              </div> </td>
                     </tr>
                   </table>
			<img src="images/krug3.png" width="24" height="20" /> <strong>������������� �����.</strong><br />	   
  <img src="images/krug4.png" width="24" height="20" /> <strong>���������� ���������.</strong> <br />
  <img src="images/krug5.png" width="24" height="20" /> <strong>�������� ����� ���������:</strong> �� (������������), d 32��, ������������ ��������������.
  <br />
  <img src="images/krug6.png" width="24" height="20" /> <strong>�������� ����� ���������:</strong>  �� (������������), d 32��, ������������ ��������������.
  <br />
  <img src="images/krug7.png" width="24" height="20" /> <strong>������ ����� ��������� ����������� ����� �� �����:</strong> �� (������������), d 32��, ������������ ��������������. <br />
  <img src="images/krug8.png" width="24" height="20" /> <strong>����� ����� ��������� ����������� ����� � �����:</strong> �� (������������), d 32��, ������������ ��������������. <br />
  <img src="images/kran2.jpg" width="14" height="20" /> <strong>������� �����</strong> <br /><br /><div id="liniy_div3"></div>
  �� ������������ ���� ������������ ������������ �� �������� �������� ���� ��������� � ������������� ��� ������������ � �������� ���������� �������.<br />�� ������ ������� �� ����� ������������ ������������ ������� �� ������������ <br />���������� ����. </td>
            </tr>
		    <tr>
		      <td height="3" colspan="4"></td>
		      </tr>
		    <tr valign="top">
		      <td width="100"><div align="left"><div id="content_a"><a rel="example_group" href="images/img/max/66_m_m.png" title="[4] - ���������� ���������,  [7] - ������ ����� ���������, [8] - ����� ����� ���������"><img src="images/img/min/66_m_min.png" width="90" height="70" /></a></div></div></td>
              <td width="100"><div align="center"><div id="content_a"><a rel="example_group" href="images/img/max/k_1.jpg" title="�������������� ����, �����������."><img src="images/img/min/k_1.jpg" width="90" height="70" /></a></div></div></td>
              <td width="100"><div align="right"><div id="content_a"><a rel="example_group" href="images/img/max/k_2.jpg" title="�������������� ����, �����������."><img src="images/img/min/k_2.jpg" width="90" height="70" /></a></div></div></td>
              <td width="100" height="70"><div align="left"><div id="content_a"><a rel="example_group" href="images/img/max/k_4.jpg" title="�������������� ����."><img src="images/img/min/k_4.jpg" width="90" height="70" /></a></div></div></td>
		    </tr>
		    <tr>
		      <td height="3"></td>
		      <td></td>
		      <td colspan="2"></td>
		    </tr>
		    <tr valign="top">
		      <td colspan="4" id="tab_ban2"><div id="liniy_div2"></div><em>������������ ��������� ������������ ������� ������������ �� �����, � ����������� �� ������������ ������ ����.</em><div align="left"><div id="liniy_div"></div></div></td>
		      </tr>
		    </table>
		  <br /><br /><br /><div id="st400">
              <div align="center"><a href="#?w=700" rel="popup_contact2" class="poplight2">����� ��������� ��� ������ ����</a></div>
            </div>
              <div id="popup_contact2" class="popup_block">
                
                <form id="form4" action="#" method="post">	 
    <div align="center">
      <table width="700" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td colspan="7" class="item_produkt"><div id="priziv4">
            <div align="center"><strong>���������� �� ���������� ������������!</strong> 
              <div id="priziv3">��� ���������� �������� � ��� 
                <br />
                � �� ����� �������� ��������� ����� ���������<br />  ���
                ������ ����. </div> 
              </div>
            </div>        </td>
          </tr>
        <tr>
          <td height="10" colspan="7"></td>
          </tr>
        <tr>
          <td width="30" align="right" class="item_produkt"></td>
            <td width="200" align="right" class="item_produkt"><div align="center">
              
              <em>���� ���:	</em><br />
              <input type="text" class="thin" name="name2"  size="30" />
              </div></td>
            <td width="30" class="item_produkt">&nbsp;</td>
            <td width="200" class="item_produkt"><div align="center"><em>��� �������:	</em><br />				
              <input type="text" class="thin" name="telefon2" size="30">
              </div></td>
            <td width="30" class="item_produkt"></td>
            <td width="200" rowspan="2" valign="bottom" class="item_produkt"><button type="submit" name="konsult" class="forma_sakasa3">����������</button></td>
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
						   		   
	//����� �� ��������� �� ������ � ������� poplight � HREF ���������� � a # 
	$('a.poplight2[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//�������� �������� � ���������� �� URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade � Popup � �������� ������ ��������
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//���������� ����� �� ������������ �� ������ (������������ + ��������������) - �� ��������� 80 �� ������ / ������, ����� ���������� ��� ���������� + ������ �������, ������������ � CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//��������� ����� � Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade � ������� ������
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//������� ����������� ���� � Fade ����
	$('a.close, #fade').live('click', function() { //��� ������� �� ������� ��� �������� ���� ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //�������� �� �����
		
		return false;
	});
 
	
});
              </script>
              </div><a name="d6x8m"></a><br /><br /><br /><br /><br /><br />
		    <div id="srub"> <div align="left">��� ���� �������� <strong>6 �� 8 </strong> ������<br />( ����������� ) :</div>
            </div>
		  <table width="900" height="10" border="0" cellpadding="0" id="tab_ban">
		    <tr>
		      <td height="100" colspan="4" valign="top"><div id="content_a"><a rel="example_group" href="images/img/max/68_1_nokm_max.png" title="[2] - �����������, [3] - �������������� �����, [4] - ���������� ���������, [5] - �������� ����� ���������, [6] - �������� ����� ���������"><img src="images/img/min/68_1_nokm_min.png" width="400"/></a></div>
		      <br /><br /></td>
              <td width="50" rowspan="5"></td>
              <td rowspan="5" valign="top"><strong id="ban">��������� ���� ������������ �������<br />� ������ �������� � ������� "��� ����":</strong><br />
              <strong id="srub2">60 �.�.</strong><br />
                <br />
                   <div id="ban2">�������� ������������ �������:</div>
                  
                 <table width="330" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                       <td width="30" height="25" align="left" valign="middle"><img src="images/krug2.png" width="24" height="20" /></td>
                       <td width="128" align="left" valign="middle"><strong>�����������:</strong></td>
                       <td width="120" align="left" valign="middle"><div id="st500">
   <a href="#?w=470" rel="popup_contact_evpn" class="poplight_evpn">���� 6 ���</a>.
    </div>
    <div id="popup_contact_evpn" class="popup_block">
               
    <div align="center">
      <table width="470" border="0" cellpadding="0" cellspacing="5" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td  class="item_produkt">
            <div align="center" id="ban2"><strong>����������� ����-6</strong>  </div><br /> 
             ����������� ��������: <strong>6 ���.</strong> <br />
			 ���������� ������� (����������): <strong>220�.</strong> <br />
			 ����������� ���� �� ������: <strong>35-85 �.</strong><br />
			 ������� ������������ ���������<br />��� ����������� 25 � : <strong>44 ��.�.</strong> <br />
			 ������� ������������ ���������<br />��� ����������� 20 � : <strong>60 ��.�.</strong> <br />
			 �������������: <strong>������.</strong> <br /><br />
			 <em>����������:</em>
			 <div id="probel"></div>
			 <img src="images/kv.png" width="22" height="14" /> �� ������������ ���� ������������ ������������ �� �������� �������� ���� ��������� � ������������� ��� ������������ � �������� ���������� �������.<div id="probel"></div><img src="images/kv.png" width="22" height="14" /> �� ������ ������� �� ����� ������������ ������������ ������� �� ������������ <br />���������� ����. </td>
            </tr>  
      </table>
    </div>
  </div>
  
                </div>
                <div align="center">
                <script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//����� �� ��������� �� ������ � ������� poplight � HREF ���������� � a # 
	$('a.poplight_evpn[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//�������� �������� � ���������� �� URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade � Popup � �������� ������ ��������
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//���������� ����� �� ������������ �� ������ (������������ + ��������������) - �� ��������� 80 �� ������ / ������, ����� ���������� ��� ���������� + ������ �������, ������������ � CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//��������� ����� � Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade � ������� ������
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//������� ����������� ���� � Fade ����
	$('a.close, #fade').live('click', function() { //��� ������� �� ������� ��� �������� ���� ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //�������� �� �����
		
		return false;
	});
 
	
});
              </script>
              </div> </td>
                       <td align="left" valign="bottom"> <div align="center"><div id="st200_k"><a href="#?w=650" rel="popup_contact_dr_k4" class="poplight_dr_k4">������ ����</a></div>
<div id="popup_contact_dr_k4" class="popup_block">


<p align="center" id="text67">������� �������� �����, ������� �� �� ������ ������������<br />� �� � ������� ��� ������� �� �������� ��� ������ ��� �� ����� ��������� ��������� "��� ����" � ������ ��� ������:</p><br />

<form id="f6x8e" action="index.php?lot=6x8e" method="post">	
		
	
				<p id="text6" align="left">
					<label for="name">�������� ������� ��� �����: </label>
					<input type="text" name="name" id="name" size="23" />
				</p>
				
				<p id="text6" align="left">
					<label for="web">��� ������� ��� e-mail: </label>
					<input type="text" name="email" id="email" size="30" />
				</p>			
																			
			
												
					<br />	<br />	

			<button type="submit" name="kotel" class="forma_sakasa">������ ���������</button>			
  </form>
</div>
		</div>


<script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//����� �� ��������� �� ������ � ������� poplight � HREF ���������� � a # 
	$('a.poplight_dr_k4[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//�������� �������� � ���������� �� URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade � Popup � �������� ������ ��������
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//���������� ����� �� ������������ �� ������ (������������ + ��������������) - �� ��������� 80 �� ������ / ������, ����� ���������� ��� ���������� + ������ �������, ������������ � CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//��������� ����� � Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade � ������� ������
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//������� ����������� ���� � Fade ����
	$('a.close, #fade').live('click', function() { //��� ������� �� ������� ��� �������� ���� ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //�������� �� �����
		
		return false;
	});
 
	
});
</script>	</td>
                     </tr>
                   </table>
			<img src="images/krug3.png" width="24" height="20" /> <strong>������������� �����.</strong> <br />	   
  <img src="images/krug4.png" width="24" height="20" /> <strong>���������� ���������.</strong> <br />
  <img src="images/krug5.png" width="24" height="20" /> <strong>�������� ����� ���������:</strong> �� (������������), d 32��, ������������ ��������������.
  <br />
  <img src="images/krug6.png" width="24" height="20" /> <strong>�������� ����� ���������:</strong>  �� (������������), d 32��, ������������ ��������������.
  <br />
  <img src="images/kran2.jpg" width="14" height="20" /> <strong>������� �����.</strong><br /><br />
  <em></em>  </td>
            </tr>
		    <tr>
		      <td height="3" colspan="4"></td>
		      </tr>
		    <tr valign="top">
		      <td width="100"><div align="left"><div id="content_a"><a rel="example_group" href="images/img/max/nasos_m.jpg" title="�����������"><img src="images/img/min/nasos_min.jpg" width="90" height="70" /></a></div></div></td>
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
		      <td colspan="4" id="tab_ban2"><div id="liniy_div2"></div><em>������������ ��������� ������������ ������� ������������ �� �����, � ����������� �� ������������ ������ ����.</em><div align="left"><div id="liniy_div"></div></div></td>
		      </tr>
		    </table>
		<br /><br />
		
		  <div id="srub"> <div align="left">��� ���� �������� <strong>6 �� 8 </strong> ������ <br />
		       ( �������������� ���� ) :</div>
            </div>
		  <table width="900" height="10" border="0" cellpadding="0" id="tab_ban">
		    <tr>
		      <td height="100" colspan="4" valign="top"><div id="content_a"><a rel="example_group" href="images/img/max/68_1_nom_max.png" title="[1] - �������������� ����, [2] - �����������, [3] - �������������� �����, [4] - ���������� ���������, [5] - �������� ����� ���������, [6] - �������� ����� ���������"><img src="images/img/min/68_1_nom_min.png" width="400"/></a></div>
		      <br /><br /></td>
              <td width="50" rowspan="5"></td>
              <td rowspan="5" valign="top"><strong id="ban">��������� ���� ������������ �������<br />� ������ �������� � ������� "��� ����":</strong><br />
              <strong id="srub2">100 �.�.</strong><br />
                <br />
                   <div id="ban2">�������� ������������ �������:</div>
                 <table width="430" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                       <td width="30" height="25" align="left" valign="middle"><img src="images/krug1.png" width="24" height="20" /></td>
                       <td width="218" align="left" valign="middle"><strong>�������������� ����:</strong></td>
                       <td align="left" valign="middle"><div id="st500">
   <a href="#?w=470" rel="popup_contact_karakan8" class="poplight_karakan8">������� 8 ���</a>.
    </div>
    <div id="popup_contact_karakan8" class="popup_block">
               
    <div align="center">
      <table width="470" border="0" cellpadding="0" cellspacing="5" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td  class="item_produkt">
            <div align="center" id="ban2"><strong>�������������� ���� ������� 8</strong>  </div><br /> 
             ����������� ��������: <strong>8 ���.</strong> <br />
			 ������������ �������: <strong>�� 80 ��.�.</strong> <br />
			 ���: <strong>75%</strong> <br />
			 ����������� ���� �� ������: <strong>95 �.</strong><br />			
			 �������������� �������: <strong>d 100�120 ��</strong> <br />
			 	������� ��������: <strong>1 ���.</strong> <br />
			 ���� �������� �������: <strong>32 �.</strong> <br />		  
			�������������: 
			 <strong>������.</strong><br /><br />
			  <em>����������:</em>
			 <div id="probel"></div>
			 <img src="images/kv.png" width="22" height="14" /> �� ������������ ���� ������������ ������������ �� �������� �������� ���� ��������� � ������������� ��� ������������ � �������� ���������� �������.<div id="probel"></div><img src="images/kv.png" width="22" height="14" /> �� ������ ������� �� ����� ������������ ������������ ������� �� ������������ <br />���������� ����.			 </td>
            </tr>  
      </table>
    </div>
  </div>
  
                </div>
                <div align="center">
                <script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//����� �� ��������� �� ������ � ������� poplight � HREF ���������� � a # 
	$('a.poplight_karakan8[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//�������� �������� � ���������� �� URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade � Popup � �������� ������ ��������
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//���������� ����� �� ������������ �� ������ (������������ + ��������������) - �� ��������� 80 �� ������ / ������, ����� ���������� ��� ���������� + ������ �������, ������������ � CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//��������� ����� � Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade � ������� ������
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//������� ����������� ���� � Fade ����
	$('a.close, #fade').live('click', function() { //��� ������� �� ������� ��� �������� ���� ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //�������� �� �����
		
		return false;
	});
 
	
});
              </script>
              </div> </td>
                       <td align="left" valign="bottom"><div align="center"><div id="st200_k"><a href="#?w=650" rel="popup_contact_dr_k5" class="poplight_dr_k5">������ ����</a></div>
<div id="popup_contact_dr_k5" class="popup_block">


<p align="center" id="text67">������� �������� �����, ������� �� �� ������ ������������<br />� �� � ������� ��� ������� �� �������� ��� ������ ��� �� ����� ��������� ��������� "��� ����" � ������ ��� ������:</p><br />

<form id="f6x8" action="index.php?lot=6x8" method="post">	
		
	
				<p id="text6" align="left">
					<label for="name">�������� ������� ��� �����: </label>
					<input type="text" name="name" id="name" size="23" />
				</p>
				
				<p id="text6" align="left">
					<label for="web">��� ������� ��� e-mail: </label>
					<input type="text" name="email" id="email" size="30" />
				</p>			
																			
			
												
					<br />	<br />	

			<button type="submit" name="kotel" class="forma_sakasa">������ ���������</button>			
  </form>
</div>
		</div>


<script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//����� �� ��������� �� ������ � ������� poplight � HREF ���������� � a # 
	$('a.poplight_dr_k5[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//�������� �������� � ���������� �� URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade � Popup � �������� ������ ��������
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//���������� ����� �� ������������ �� ������ (������������ + ��������������) - �� ��������� 80 �� ������ / ������, ����� ���������� ��� ���������� + ������ �������, ������������ � CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//��������� ����� � Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade � ������� ������
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//������� ����������� ���� � Fade ����
	$('a.close, #fade').live('click', function() { //��� ������� �� ������� ��� �������� ���� ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //�������� �� �����
		
		return false;
	});
 
	
});
</script></td>
                     </tr>
                   </table>
                  <table width="400" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                       <td width="30" height="25" align="left" valign="top"><img src="images/krug2.png" width="24" height="20" /></td>
                       <td width="230" align="left" valign="bottom"><strong>����������� </strong>(���������)<strong>:</strong></td>
                       <td align="left" valign="bottom"><div id="st500">
   <a href="#?w=470" rel="popup_contact_evpn" class="poplight_evpn">���� 6 ���</a>.
    </div>
    <div id="popup_contact_evpn" class="popup_block">
               
    <div align="center">
      <table width="470" border="0" cellpadding="0" cellspacing="5" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td  class="item_produkt">
            <div align="center" id="ban2"><strong>����������� ����-6</strong>  </div><br /> 
             ����������� ��������: <strong>6 ���.</strong> <br />
			 ���������� ������� (����������): <strong>220�.</strong> <br />
			 ����������� ���� �� ������: <strong>35-85 �.</strong><br />
			 ������� ������������ ���������<br />��� ����������� 25 � : <strong>44 ��.�.</strong> <br />
			 ������� ������������ ���������<br />��� ����������� 20 � : <strong>60 ��.�.</strong> <br />
			 �������������: <strong>������.</strong><br /><br />
			 <em>����������:</em>
			 <div id="probel"></div>
			 <img src="images/kv.png" width="22" height="14" /> �� ������������ ���� ������������ ������������ �� �������� �������� ���� ��������� � ������������� ��� ������������ � �������� ���������� �������.<div id="probel"></div><img src="images/kv.png" width="22" height="14" /> �� ������ ������� �� ����� ������������ ������������ ������� �� ������������ <br />���������� ����. </td>
            </tr>  
          
      </table>
    </div>
 
  
  </div>
  
                </div>
                <div align="center">
                <script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//����� �� ��������� �� ������ � ������� poplight � HREF ���������� � a # 
	$('a.poplight_evpn[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//�������� �������� � ���������� �� URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade � Popup � �������� ������ ��������
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//���������� ����� �� ������������ �� ������ (������������ + ��������������) - �� ��������� 80 �� ������ / ������, ����� ���������� ��� ���������� + ������ �������, ������������ � CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//��������� ����� � Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade � ������� ������
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//������� ����������� ���� � Fade ����
	$('a.close, #fade').live('click', function() { //��� ������� �� ������� ��� �������� ���� ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //�������� �� �����
		
		return false;
	});
 
	
});
              </script>
              </div> </td>
                     </tr>
                   </table>
			<img src="images/krug3.png" width="24" height="20" /> <strong>������������� �����.</strong> <br />	   
  <img src="images/krug4.png" width="24" height="20" /> <strong>���������� ���������.</strong> <br />
  <img src="images/krug5.png" width="24" height="20" /> <strong>�������� ����� ���������:</strong> �� (������������), d 32��, ������������ ��������������.
  <br />
  <img src="images/krug6.png" width="24" height="20" /> <strong>�������� ����� ���������:</strong>  �� (������������), d 32��, ������������ ��������������.
  <br />
  <img src="images/kran2.jpg" width="14" height="20" /> <strong>������� �����</strong> <br /><br />
  <em></em> </td>
            </tr>
		    <tr>
		      <td height="3" colspan="4"></td>
		      </tr>
		    <tr valign="top">
		      <td width="100"><div align="center"><div id="content_a"><a rel="example_group" href="images/img/max/k_1.jpg" title="�������������� ����, �����������."><img src="images/img/min/k_1.jpg" width="90" height="70" /></a></div></div></td>
		      <td width="100"><div align="right"><div id="content_a"><a rel="example_group" href="images/img/max/k_2.jpg" title="�������������� ����, �����������."><img src="images/img/min/k_2.jpg" width="90" height="70" /></a></div></div></td>
		      <td width="100"><div align="left"><div id="content_a"><a rel="example_group" href="images/img/max/k_4.jpg" title="�������������� ����."><img src="images/img/min/k_4.jpg" width="90" height="70" /></a></div></div></td>
		      <td width="100" height="70">&nbsp;</td>
		    </tr>
		    <tr>
		      <td height="3"></td>
		      <td></td>
		      <td colspan="2"></td>
		    </tr>
		    <tr valign="top">
		      <td colspan="4" id="tab_ban2"><div id="liniy_div2"></div><em>������������ ��������� ������������ ������� ������������ �� �����, � ����������� �� ������������ ������ ����.</em><div align="left"><div id="liniy_div"></div></div></td>
		      </tr>
		    </table>
		  <br /><br />
		  <div id="srub"> <div align="left">��� ���� �������� <strong>6 �� 8 </strong> ������ � ���������<br />
		     ( �������������� ���� ) :</div>
            </div>
		  <table width="900" height="10" border="0" cellpadding="0" id="tab_ban">
		    <tr>
		      <td height="100" colspan="4" valign="top"><div id="content_a"><a rel="example_group" href="images/img/max/68_1_max.png" title="[1] - �������������� ����, [2] - �����������, [3] - �������������� �����, [4] - ���������� ���������, [5] - �������� ����� ���������, [6] - �������� ����� ���������"><img src="images/img/min/68_1_min.png" width="400"/></a></div>
		      <br /><br /></td>
              <td width="50" rowspan="5"></td>
              <td rowspan="5" valign="top"><strong id="ban">��������� ���� ������������ �������<br />� ������ �������� � ������� "��� ����":</strong><br />
              <strong id="srub2">119 �.�.</strong><br />
                <br />
                   <div id="ban2">�������� ������������ �������:</div>
                  <table width="430" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                       <td width="30" height="25" align="left" valign="middle"><img src="images/krug1.png" width="24" height="20" /></td>
                       <td width="218" align="left" valign="middle"><strong>�������������� ����:</strong></td>
                       <td align="left" valign="middle"><div id="st500">
   <a href="#?w=470" rel="popup_contact_karakan12" class="poplight_karakan12">������� 12 ���</a>.
    </div>
    <div id="popup_contact_karakan12" class="popup_block">
               
    <div align="center">
      <table width="470" border="0" cellpadding="0" cellspacing="5" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td  class="item_produkt">
            <div align="center" id="ban2"><strong>�������������� ���� ������� 12</strong>  </div><br /> 
             ����������� ��������: <strong>12 ���.</strong> <br />
			 ������������ �������: <strong>�� 120 ��.�.</strong> <br />
			 ���: <strong>75% \ 82%</strong> <br />
			 ����������� ���� �� ������: <strong>95 �.</strong><br />			 
			  �������������� �������: <strong>d 150 ��.</strong> <br />
			 ������� ��������: <strong>1 ���.</strong> <br />
			 ���� �������� �������: <strong>47 �.</strong> <br />
			
			 
					 �������������: 
			 <strong>������.</strong><br /><br />
			 <em>����������:</em>
			 <div id="probel"></div>
			 <img src="images/kv.png" width="22" height="14" /> �� ������������ ���� ������������ ������������ �� �������� �������� ���� ��������� � ������������� ��� ������������ � �������� ���������� �������.<div id="probel"></div><img src="images/kv.png" width="22" height="14" /> �� ������ ������� �� ����� ������������ ������������ ������� �� ������������ <br />���������� ����.			 </td>
            </tr>  
      </table>
    </div>
  </div>
  
                </div>
                <div align="center">
                <script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//����� �� ��������� �� ������ � ������� poplight � HREF ���������� � a # 
	$('a.poplight_karakan12[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//�������� �������� � ���������� �� URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade � Popup � �������� ������ ��������
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//���������� ����� �� ������������ �� ������ (������������ + ��������������) - �� ��������� 80 �� ������ / ������, ����� ���������� ��� ���������� + ������ �������, ������������ � CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//��������� ����� � Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade � ������� ������
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//������� ����������� ���� � Fade ����
	$('a.close, #fade').live('click', function() { //��� ������� �� ������� ��� �������� ���� ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //�������� �� �����
		
		return false;
	});
 
	
});
              </script>
              </div> </td>
                       <td align="left" valign="bottom"><div align="center"><div id="st200_k"><a href="#?w=650" rel="popup_contact_dr_k6" class="poplight_dr_k6">������ ����</a></div>
<div id="popup_contact_dr_k6" class="popup_block">


<p align="center" id="text67">������� �������� �����, ������� �� �� ������ ������������<br />� �� � ������� ��� ������� �� �������� ��� ������ ��� �� ����� ��������� ��������� "��� ����" � ������ ��� ������:</p><br />

<form id="f6x8m" action="index.php?lot=6x8m" method="post">	
		
	
				<p id="text6" align="left">
					<label for="name">�������� ������� ��� �����: </label>
					<input type="text" name="name" id="name" size="23" />
				</p>
				
				<p id="text6" align="left">
					<label for="web">��� ������� ��� e-mail: </label>
					<input type="text" name="email" id="email" size="30" />
				</p>			
																			
			
												
					<br />	<br />	

			<button type="submit" name="kotel" class="forma_sakasa">������ ���������</button>			
  </form>
</div>
		</div>


<script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//����� �� ��������� �� ������ � ������� poplight � HREF ���������� � a # 
	$('a.poplight_dr_k6[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//�������� �������� � ���������� �� URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade � Popup � �������� ������ ��������
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//���������� ����� �� ������������ �� ������ (������������ + ��������������) - �� ��������� 80 �� ������ / ������, ����� ���������� ��� ���������� + ������ �������, ������������ � CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//��������� ����� � Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade � ������� ������
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//������� ����������� ���� � Fade ����
	$('a.close, #fade').live('click', function() { //��� ������� �� ������� ��� �������� ���� ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //�������� �� �����
		
		return false;
	});
 
	
});
</script></td>
                     </tr>
                   </table>
                  <table width="400" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                       <td width="30" height="25" align="left" valign="top"><img src="images/krug2.png" width="24" height="20" /></td>
                       <td width="230" align="left" valign="bottom"><strong>�����������: </strong>(���������)</td>
                       <td align="left" valign="bottom"><div id="st500">
   <a href="#?w=470" rel="popup_contact_evpn" class="poplight_evpn">���� 6 ���</a>.
    </div>
    <div id="popup_contact_evpn" class="popup_block">
               
    <div align="center">
      <table width="470" border="0" cellpadding="0" cellspacing="5" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td  class="item_produkt">
            <div align="center" id="ban2"><strong>����������� ����-6</strong>  </div><br /> 
             ����������� ��������: <strong>6 ���.</strong> <br />
			 ���������� ������� (����������): <strong>220�.</strong> <br />
			 ����������� ���� �� ������: <strong>35-85 �.</strong><br />
			 ������� ������������ ���������<br />��� ����������� 25 � : <strong>44 ��.�.</strong> <br />
			 ������� ������������ ���������<br />��� ����������� 20 � : <strong>60 ��.�.</strong> <br />
			 �������������: <strong>������.</strong> <br /><br />
			 <em>����������:</em>
			 <div id="probel"></div>
			 <img src="images/kv.png" width="22" height="14" /> �� ������������ ���� ������������ ������������ �� �������� �������� ���� ��������� � ������������� ��� ������������ � �������� ���������� �������.<div id="probel"></div><img src="images/kv.png" width="22" height="14" /> �� ������ ������� �� ����� ������������ ������������ ������� �� ������������ <br />���������� ����.  </td>
            </tr>  
          
      </table>
    </div>
 
  
  </div>
  
                </div>
                <div align="center">
                <script type="text/javascript"> 
$(document).ready(function(){
						   		   
	//����� �� ��������� �� ������ � ������� poplight � HREF ���������� � a # 
	$('a.poplight_evpn[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//�������� �������� � ���������� �� URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade � Popup � �������� ������ ��������
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//���������� ����� �� ������������ �� ������ (������������ + ��������������) - �� ��������� 80 �� ������ / ������, ����� ���������� ��� ���������� + ������ �������, ������������ � CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//��������� ����� � Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade � ������� ������
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//������� ����������� ���� � Fade ����
	$('a.close, #fade').live('click', function() { //��� ������� �� ������� ��� �������� ���� ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //�������� �� �����
		
		return false;
	});
 
	
});
              </script>
              </div> </td>
                     </tr>
                   </table>
			<img src="images/krug3.png" width="24" height="20" /> <strong>������������� �����.</strong><br />	   
  <img src="images/krug4.png" width="24" height="20" /> <strong>���������� ���������.</strong> <br />
  <img src="images/krug5.png" width="24" height="20" /> <strong>�������� ����� ���������:</strong> �� (������������), d 32��, ������������ ��������������.
  <br />
  <img src="images/krug6.png" width="24" height="20" /> <strong>�������� ����� ���������:</strong>  �� (������������), d 32��, ������������ ��������������.
  <br />
  <img src="images/krug7.png" width="24" height="20" /> <strong>������ ����� ��������� ����������� ����� �� �����:</strong> �� (������������), d 32��, ������������ ��������������. <br />
  <img src="images/krug8.png" width="24" height="20" /> <strong>����� ����� ��������� ����������� ����� � �����:</strong> �� (������������), d 32��, ������������ ��������������. <br />
  <img src="images/kran2.jpg" width="14" height="20" /> <strong>������� �����</strong><br /><br /><div id="liniy_div3"></div>
  �� ������������ ���� ������������ ������������ �� �������� �������� ���� ��������� � ������������� ��� ������������ � �������� ���������� �������.<br />
  �� ������ ������� �� ����� ������������ ������������ ������� �� ������������<br /> ���������� ����.</td>
            </tr>
		    <tr>
		      <td height="3" colspan="4"></td>
		      </tr>
		    <tr valign="top">
		      <td width="100"><div align="left"><div id="content_a"><a rel="example_group" href="images/img/max/68_m_max.png" title="[4] - ���������� ���������,  [7] - ������ ����� ���������, [8] - ����� ����� ���������"><img src="images/img/min/68_m_min.png" width="90" height="70" /></a></div></div></td>
              <td width="100"><div align="center"><div id="content_a"><a rel="example_group" href="images/img/max/k_1.jpg" title="�������������� ����, �����������."><img src="images/img/min/k_1.jpg" width="90" height="70" /></a></div></div></td>
              <td width="100"><div align="right"><div id="content_a"><a rel="example_group" href="images/img/max/k_2.jpg" title="�������������� ����, �����������."><img src="images/img/min/k_2.jpg" width="90" height="70" /></a></div></div></td>
              <td width="100" height="70"><div align="left"><div id="content_a"><a rel="example_group" href="images/img/max/k_4.jpg" title="�������������� ����."><img src="images/img/min/k_4.jpg" width="90" height="70" /></a></div></div></td>
		    </tr>
		    <tr>
		      <td height="3"></td>
		      <td></td>
		      <td colspan="2"></td>
		    </tr>
		    <tr valign="top">
		      <td colspan="4" id="tab_ban2"><div id="liniy_div2"></div><em>������������ ��������� ������������ ������� ������������ �� �����, � ����������� �� ������������ ������ ����.</em><div align="left"><div id="liniy_div"></div></div></td>
		      </tr>
		    </table>
		 
		  <br />
		  <br /><br />
			<div id="st400">
              <div align="center"><a href="#?w=700" rel="popup_contact2" class="poplight2">����� ��������� ��� ������ ����</a></div>
            </div>
              <div id="popup_contact2" class="popup_block">
                
                <form id="form4" action="#" method="post">	 
    <div align="center">
      <table width="700" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF"  id="tab_ban">
        <tr>
          <td colspan="7" class="item_produkt"><div id="priziv4">
            <div align="center"><strong>���������� �� ���������� ������������!</strong> 
              <div id="priziv3">��� ���������� �������� � ��� 
                <br />
                � �� ����� �������� ��������� ����� ���������<br />  ���
                ������ ����. </div> 
              </div>
            </div>        </td>
          </tr>
        <tr>
          <td height="10" colspan="7"></td>
          </tr>
        <tr>
          <td width="30" align="right" class="item_produkt"></td>
            <td width="200" align="right" class="item_produkt"><div align="center">
              
              <em>���� ���:	</em><br />
              <input type="text" class="thin" name="name2"  size="30" />
              </div></td>
            <td width="30" class="item_produkt">&nbsp;</td>
            <td width="200" class="item_produkt"><div align="center"><em>��� �������:	</em><br />				
              <input type="text" class="thin" name="telefon2" size="30">
              </div></td>
            <td width="30" class="item_produkt"></td>
            <td width="200" rowspan="2" valign="bottom" class="item_produkt"><button type="submit" name="konsult" class="forma_sakasa3">����������</button></td>
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
						   		   
	//����� �� ��������� �� ������ � ������� poplight � HREF ���������� � a # 
	$('a.poplight2[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//�������� �������� � ���������� �� URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
		//Fade � Popup � �������� ������ ��������
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/forma/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		
		//���������� ����� �� ������������ �� ������ (������������ + ��������������) - �� ��������� 80 �� ������ / ������, ����� ���������� ��� ���������� + ������ �������, ������������ � CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//��������� ����� � Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade � ������� ������
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//������� ����������� ���� � Fade ����
	$('a.close, #fade').live('click', function() { //��� ������� �� ������� ��� �������� ���� ...
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); //�������� �� �����
		
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
		 
          <div id="priziv"><strong>��� ���� �������!</strong>  <br />
            
            8 961 777 49 07<br />8 961 773 57 93<br />
  <strong>(�������� ��� �������� � 9-00 �� 21-00)</strong> </div>
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
        <td width="600" height="10"><br /><div align="left" id="niz_levo">����� � ����</div></td>
        <td width="340" rowspan="3" valign="bottom">
          </div></td>
        <td width="20" rowspan="3"></td>
      </tr>
      <tr>
        <td height="10"><div align="left" id="niz_levo">���������������� ����: �. ������������, ��. �������, 15�</div></td>
        </tr>
      <tr>
        <td height="10"><div align="left" id="niz_levo">���: 8-961-777-49-07 <br />e-mail: abazasl@mail.ru <br />web: www.teplo-v-dome.z66.ru</div><br /></td>
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
$theme = "������ � ����� ����� � ����";
$ip = $_SERVER['REMOTE_ADDR'];
$ip_addr = "ip: ".$ip;
$date = "����: ".date("d.m.Y");
$time = "�����: ".date("H:i");
$text = '<html><body>'.$ip_addr.$nl.$date.$nl.$time.$nl.$otlogit.$nl.$name.$nl.$telefon.$nl.$email.$nl.$message.'</body></html>';
$from ="Content-type: text/html; charset=windows-1251\r\n";
	

mail($to, $theme, $text, $from);

echo "<script>alert('������� �� ������! ���� ��������� ��������������� ������� ���.')</script>";
}


if(isset($_POST['konsult'])) {
$nl = "<br/>";
                                           $to  = "<abazasl@mail.ru>, <testkub@mail.ru>";
$theme = "������ �� ������������ � ����� ����� � ����";
$ip = $_SERVER['REMOTE_ADDR'];
$ip_addr = "ip: ".$ip;
$date = "����: ".date("d.m.Y");
$time = "�����: ".date("H:i");
$text = '<html><body>'.$ip_addr.$nl.$date.$nl.$time.$nl.$name2.$nl.$telefon2.'</body></html>';
$from ="Content-type: text/html; charset=windows-1251\r\n";
	

mail($to, $theme, $text, $from);

echo "<script>alert('������� �� ������! ��� ���������� �������� � ���� � ��������� ���� � ����� �������.')</script>";
}

if(isset($_POST['kotel'])) {
$nl = "<br/>";
if(isset($_GET['lot'])) {  $lot=$_GET['lot'];  }
                                           $to  = "<testkub@mail.ru>";
$theme = "����� � ���� ������ ��Ҩ�";
$ip = $_SERVER['REMOTE_ADDR'];
$ip_addr = "ip: ".$ip;
$date = "����: ".date("d.m.Y");
$time = "�����: ".date("H:i");
$text = '<html><body>'.$ip_addr.$nl.$date.$nl.$time.$nl.$otlogit.$nl.$lot.$nl.$name.$nl.$telefon.$nl.$email.$nl.$message.'</body></html>';
$from ="Content-type: text/html; charset=windows-1251\r\n";
	

mail($to, $theme, $text, $from);

echo "<script>alert('������� �� ������! ��� ���������� � ������� ��� ������� ��� ��������� ��������� � ������ ���������� ���� �����.')</script>";
}

?>