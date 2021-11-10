let x = prompt("Introduce los kWh consumidos:"); 
let x_value = parseFloat(x);
let tarifa1 = 0,tarifa2 = 0,tarifa3 = 0;

if (x_value > 600){
    tarifa1 = (x_value-600)*5;
    x_value = 600;
}
if (x_value > 300){
    tarifa2 = (x_value-300)*3;
    x_value = 300;
}
tarifa3 = x_value;
let total = tarifa1 + tarifa2 + tarifa3;
console.log(total);
alert(`La tarifa de consumo es:\nT1     = $${tarifa3}\nT2     = $${tarifa2}\nT3     = $${tarifa1}\nTotal = $${total}`);