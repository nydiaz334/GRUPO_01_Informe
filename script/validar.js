// Validacion
function activar(){
    var opcion = document.getElementById('selector').value;
    var lado1 = document.getElementById('lado_1');
    var lado2 = document.getElementById('lado_2');
    var lado3 = document.getElementById('lado_3');
    switch(opcion){
        case 'cuadrado':
            lado1.value = 0;
            lado2.value = '';
            lado3.value = '';
            lado1.disabled = false;
            lado2.disabled = true;
            lado3.disabled = true;
            break;
        case 'rectangulo':
            lado1.value = 0;
            lado2.value = 0;
            lado3.value = '';
            lado1.disabled = false;
            lado2.disabled = false;
            lado3.disabled = true;
            break;
        case 'triangulo':
            lado1.value = 0;
            lado2.value = 0;
            lado3.value = 0;
            lado1.disabled = false;
            lado2.disabled = false;
            lado3.disabled = false;
            break;
        default:
            window.alert('No escogio una figura');
            break;
    }
}