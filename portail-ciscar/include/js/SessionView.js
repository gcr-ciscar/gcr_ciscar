$(document).ready(function(){

	$("#Connexion").click(function(){
		$("#formErr").html("<img src=\"include/images/ciscar/loading.gif\" /> V�rification...");
		$("#username").attr("disabled","true");
		$("#password").attr("disabled","true");
		
		$.ajax({
			   type: "POST",
			   url: "modules/Securite/ValidationFormAJAX.php",
			   data: "u="+$("#username").val()+"&p="+$("#password").val(),
			   success: function(msg){
					switch(msg)
					{
						case '0':
							document.location.href="?";
							break;
						case '1':
							$("#formErr").html("<font color=\"red\">Saisie Incorrecte</font>");
							$("#username").removeAttr("disabled");
							$("#password").removeAttr("disabled");
							break;
						case '2':
							$("#formErr").html("<font color=\"red\">Compte d�sactiv�</font>");
							$("#username").removeAttr("disabled");
							$("#password").removeAttr("disabled");
							break;
					}
			   }
		});
		return false;
	});
});