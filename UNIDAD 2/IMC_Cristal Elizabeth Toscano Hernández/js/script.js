function calcular(){
    let peso = document.getElementById('peso').value;
    let estatura = document.getElementById('estatura').value;

    if(estatura < 1 || peso < 1){
        document.getElementById('resultado').innerHTML = 'Ingrese datos validos para el calculo adecuado';
    }else{
        let imc = peso/(estatura * estatura);
        document.getElementById('resultado').innerHTML = 'El indice de masa corporal es de: '+ imc.toFixed(2);
        img(imc);
    }

    console.log(imc);
}
function img (imc){
    var imagen = document.getElementById('foto');
    if(imc < 18.5){
        imagen.src = "img/1.jpg"
    }else if(imc > 18.5 && imc < 24.9){
        imagen.src = "img/2.jpg"
    }else if(imc > 25 && imc < 29.9){
        imagen.src = "img/3.jpg"
    }else if(imc > 30 && imc < 34.9){
        imagen.src = "img/4.jpg"
    }else if(imc > 35){
        imagen.src = "img/5.jpg"
    }
}