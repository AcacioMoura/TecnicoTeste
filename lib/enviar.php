<?php
   
    if ($_POST['submit']) {
    if ($name != '' && $email != '') {
        if ($human == '4') {				 
            if (mail ($to, $subject, $body, $from)) { 
	        echo "<script> alert('Mensagem enviada com sucesso!'); </script>";
	    } else { 
	        echo "<script alert('Falha ao enviar a mensagem.'); </script>"; 
	    } 
	} else if ($_POST['submit'] && $human != '4') {
	    echo '<p>Voc&ecirc; respondeu ao anti-spam incorretamente!</p>';
	}
    } else {
        echo '<p>Voc&ecirc; precisa responder todas as quest&otilde;es!!</p>';
	}
  
    }
	echo "<script> window.location.href = 'file:///C:/Users/Acacio/Desktop/Angular/youtube-master/AngularJS_2_Usando_Diretivas_Parte_1/index.html'; </script>";
?>

