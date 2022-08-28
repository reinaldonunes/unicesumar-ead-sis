#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main(){
	//declara��o do idioma
	setlocale(LC_ALL, "Portuguese");
	
	// declara��o das vari�veis
	float salario, reajuste, abono, novoSalario;
		
	// definido valores fixos
	reajuste = 0.075;
	abono = 150.00;
	
	// HEADER 
	printf("**************************************** \n");
	printf("** EMPRESA: CLEARNING SCHOOL **\n");
	printf("** FUNCION�RIO: Adriano Barreto **\n");
	printf("** RA: 54511145-5 **\n");
	printf("**************************************** \n \n");
	
	// INPUT
	printf("Digite o seu sal�rio l�quido: \n");
	scanf("%f", &salario);
	
	// PROCESSING
	novoSalario = salario + (salario * reajuste);
	
	// CONDITIONAL
	if(novoSalario <= 1750){
		novoSalario = novoSalario + abono;
	}
	
	// OUTPUT
	printf("\n**************************************** \n");
	printf("** SAL�RIO L�QUIDO INFORMADO: R$ %f", salario);
	printf("\n** SAL�RIO REAJUSTADO: R$ %f", novoSalario);
	
	return (0);
}
