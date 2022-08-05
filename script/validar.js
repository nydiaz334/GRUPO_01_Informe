
function habilitar(Formulario) {
	var input1 = Formulario.lado_1
	var input2 = Formulario.lado_2
	var input3 = Formulario.lado_3
	var input4 = Formulario.lado_4
	var fig = Formulario.tipo.value; 
	if(fig == "cuadrado"){
		input1.disabled = false;
		input2.disabled = true;
		input3.disabled = true;
		input4.disabled = true;
	}else{
		if(fig == "rectangulo"){
			input1.disabled = false;
			input2.disabled = false;
			input3.disabled = true;
			input4.disabled = true;
		}else{
			if(fig == "triangulo"){
				input1.disabled = false;
				input2.disabled = false;
				input3.disabled = false;
				input4.disabled = true;
			}else{
				if(fig == "sel"){
					input1.disabled = true;
					input2.disabled = true;
					input3.disabled = true;
					input4.disabled = true;}
				}
				
			}
		}
	  }
