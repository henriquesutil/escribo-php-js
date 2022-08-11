function validaInteiros(){
	var valorDigitado = document.getElementById('numero').value;
	var soma = 0;
	for (var i = 1; i < valorDigitado; i++) {
		if (i % 3 == 0 || i % 3 == 3 || i % 5 == 0 || i % 5 == 5) {
			soma = soma + i;
		}
	}
	alert("Resultado do somatório de todos os valores inteiros divisíveis por 3 ou 5 que sejam inferiores ao número passado: "+soma);
}