/**
 * TABLA DEL 5 Y 9 SUMA IMPARES E PARES
 * RACINGER PRADA OLAYA
 * DOMINGO
 */
let matriz5 = [];
let pares5 = [];
let impares5 = [];
let num3 = 1;
let sumasPares5 = 0; 
let sumasImpares5 = 0; 

for (let num1 = 0; num1 < 5; num1++) {
    matriz5[num1] = [];
    for (let num2 = 0; num2 < 5; num2++) {
        matriz5[num1][num2] = num3 * 5;
        num3++;
        if(matriz5[num1][num2] % 2 == 0) {
            pares5.push(matriz5[num1][num2]);
        } else {
            impares5.push(matriz5[num1][num2]);
        }
    }
}


for (let i = 0; i < pares5.length; i++) {
    sumasPares5 += pares5[i];
}


for (let i = 0; i < impares5.length; i++) {
    sumasImpares5 += impares5[i];
}

console.log("Matriz 5:", matriz5);
console.log("Pares de la tabla del 5:", pares5);
console.log("Impares de la tabla del 5:", impares5);
         
let matriz9 = [];
let pares9 = [];
let impares9 = [];
let multiplicador = 1;
let sumasPares9 = 0; 
let sumasImpares9 = 0; 

for (let num1 = 0; num1 < 5; num1++) {
    matriz9[num1] = [];
    for (let num2 = 0; num2 < 5; num2++) {
        matriz9[num1][num2] = multiplicador * 9;
        multiplicador++;
        if(matriz9[num1][num2] % 2 == 0) {
            pares9.push(matriz9[num1][num2]);
        } else {
            impares9.push(matriz9[num1][num2]);
        }
    }
}


for (let i = 0; i < pares9.length; i++) {
    sumasPares9 += pares9[i];
}


for (let i = 0; i < impares9.length; i++) {
    sumasImpares9 += impares9[i];
}

console.log("Matriz 9:", matriz9);
console.log("Pares de la tabla del 9:", pares9);
console.log("Impares de la tabla del 9:", impares9);
