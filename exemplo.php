<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="robots" content="noindex">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar radio buttons com jQuery e CSS</title>

<style type="text/css">
.conteudo {
	width:960px;
	text-align:justify;
	margin:0 auto;
	
}
h1 { text-align:center }

.rodape {
	width:940px;
	margin:0 auto;
	height:30px;
	line-height:30px;
	color:#FFF;
	font-weight:bold;
	background-color:#000;
	padding:0 10px;
}

.jquery-switch-wrapper {
	float:left;	
}

#form {
float:left;
}

.linha {
	float:left;
	width:100%; /* pra deixar 1 opção por linha */
	line-height:30px; /*sempre a mesma altura do 'desmarcado' e 'marcado' */
}

.desmarcado {
    background: url("http://exemplo.quebrandoacabeca.com/editar-radio-button/bg-radio-button.jpg") no-repeat scroll 0 0 rgba(0, 0, 0, 0) !important;
	height:30px;
	width:30px;
	float:left;
}

.marcado {
    background: url("http://exemplo.quebrandoacabeca.com/editar-radio-button/bg-radio-button.jpg") no-repeat scroll 0 -28px rgba(0, 0, 0, 0) !important;
	height:30px;
	width:30px;
	float:left;
}


</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script src="https://raw.githubusercontent.com/Qcabeca/editar-radio-button/master/script.js" type="text/javascript"></script>


<script type="text/javascript">
 var $j = jQuery.noConflict();
// Use jQuery com a variavel $j(...)
$j(document).ready(function(){
$j('#form input[type="radio"]').radiobutton({
    className: 'desmarcado', // classe para item default ou seja desmarcado
    checkedClass: 'marcado', // classe para item checked ou seja marcado

});
});
</script>
</head>

<body>
<h1>Editar radio buttons com jQuery e CSS</h1>
<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss
quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
<h4>Exemplo com radio button padrão padrão</h4>
<div id="padrao">

<input type="radio" value="Opção A" name="opcao-a" id="opcao-a" checked="checked"><span>Opção A</span><br />
<input type="radio" value="Opção B" name="opcao-b" id="opcao-b"><span>Opção B</span><br />
<input type="radio" value="Opção C" name="opcao-c" id="opcao-c"><span>Opção C</span><br />
<input type="radio" value="Opção D" name="opcao-d" id="opcao-d"><span>Opção D</span><br />      
</div> 

<h4>Exemplo com radio button personalizado</h4>
<div id="dropdown">
    
<form name="form" id="form" action="" method="post">
<div class="linha">
<input type="radio" value="Opção A" name="opcao-a" id="opcao-a" checked="checked"><label>Opção A</label>
</div>

<div class="linha">
<input type="radio" value="Opção B" name="opcao-b" id="opcao-b"><label>Opção B</label>
</div>

<div class="linha">
<input type="radio" value="Opção C" name="opcao-c" id="opcao-c"><label>Opção C</label>
</div>

<div class="linha">
<input type="radio" value="Opção D" name="opcao-d" id="opcao-d"><label>Opção D</label>
</div>
</form>       
   
</div> <!-- DropDown -->
</body>
</html>
