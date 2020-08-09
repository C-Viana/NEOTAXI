
$(document).ready( function() {
	
	
	
	$("#pass-confirm").change( function(){
		
		var pass1 = $("#pass").val();
		var pass2 = $("#pass-confirm").val();
		
		if(pass1 != pass2){
			$("#pass-confirm").css("border-color", "red");
			$("#notice").css("display","block");
		}
		else {
			$("#pass-confirm").css("border-color", "#ced4da");
			$("#notice").css("display","none");
		}
		
	});
	
	
	
});


function checkClientDataForm(){
	
		$("#nome").focusout( function(){
			if(!$("#nome").val()){
				$("#nome_span").css("display", "block");
				$("#nome_span").html("<p style='color: red;'>Nome é um campo obrigatório!</p>");
				$("#nome").css("border-color", "red");
			}
			else{
				$("#nome_span").css("display", "none");
				$("#nome").css("border-color", "#ced4da");
			}
			
		});
		
		$("#nascimento").focusout( function(){
			if(!$("#nascimento").val()){
				$("#nasc_span").css("display", "block");
				$("#nasc_span").html("<p style='color: red;'>Data de nascimento é um campo obrigatório!</p>");
				$("#nascimento").css("border-color", "red");
			}
			else{
				$("#nasc_span").css("display", "none");
				$("#nascimento").css("border-color", "#ced4da");
			}
			
		});
		
		$("#cpf").focusout( function(){
			if(!$("#cpf").val()){
				$("#cpf_span").css("display", "block");
				$("#cpf_span").html("<p style='color: red;'>CPF é um campo obrigatório!</p>");
				$("#cpf").css("border-color", "red");
			}
			else{
				$("#cpf_span").css("display", "none");
				$("#cpf").css("border-color", "#ced4da");
			}
			
		});
		
		$("#email").focusout( function(){
			if(!$("#email").val()){
				$("#email_span").css("display", "block");
				$("#email_span").html("<p style='color: red;'>E-mail é um campo obrigatório!</p>");
				$("#email").css("border-color", "red");
			}
			else{
				$("#email_span").css("display", "none");
				$("#email").css("border-color", "#ced4da");
			}
			
		});
		
		$("#pass").focusout( function(){
			if(!$("#pass").val()){
				$("#pass_span").css("display", "block");
				$("#pass_span").html("<p style='color: red;'>Senha é um campo obrigatório!</p>");
				$("#pass").css("border-color", "red");
			}
			else{
				$("#pass_span").css("display", "none");
				$("#pass").css("border-color", "#ced4da");
			}
			
		});
		
}

function checkDriverDataForm(){
	
		$("#nome").focusout( function(){
			if(!$("#nome").val()){
				$("#nome_span").css("display", "block");
				$("#nome_span").html("<p style='color: red;'>Nome é um campo obrigatório!</p>");
				$("#nome").css("border-color", "red");
			}
			else{
				$("#nome_span").css("display", "none");
				$("#nome").css("border-color", "#ced4da");
			}
			
		});
		
		$("#nascimento").focusout( function(){
			if(!$("#nascimento").val()){
				$("#nasc_span").css("display", "block");
				$("#nasc_span").html("<p style='color: red;'>Data de nascimento é um campo obrigatório!</p>");
				$("#nascimento").css("border-color", "red");
			}
			else{
				$("#nasc_span").css("display", "none");
				$("#nascimento").css("border-color", "#ced4da");
			}
			
		});
		
		$("#cpf").focusout( function(){
			if(!$("#cpf").val()){
				$("#cpf_span").css("display", "block");
				$("#cpf_span").html("<p style='color: red;'>CPF é um campo obrigatório!</p>");
				$("#cpf").css("border-color", "red");
			}
			else{
				$("#cpf_span").css("display", "none");
				$("#cpf").css("border-color", "#ced4da");
			}
			
		});
		
		$("#carro").focusout( function(){
			if(!$("#carro").val()){
				$("#car_span").css("display", "block");
				$("#car_span").html("<p style='color: red;'>Modelo do carro é um campo obrigatório!</p>");
				$("#carro").css("border-color", "red");
			}
			else{
				$("#car_span").css("display", "none");
				$("#carro").css("border-color", "#ced4da");
			}
			
		});
		
		$("#placa").focusout( function(){
			if(!$("#placa").val()){
				$("#plate_span").css("display", "block");
				$("#plate_span").html("<p style='color: red;'>Placa do carro é um campo obrigatório!</p>");
				$("#placa").css("border-color", "red");
			}
			else{
				$("#plate_span").css("display", "none");
				$("#placa").css("border-color", "#ced4da");
			}
			
		});
		
}
