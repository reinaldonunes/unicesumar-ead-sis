#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main(){
	//declaração do idioma
	setlocale(LC_ALL, "Portuguese");
	
	// declaração das variáveis
	float salario, reajuste, abono, novoSalario;
		
	// definido valores fixos
	reajuste = 0.075;
	abono = 150.00;
	
	// HEADER 
	printf("**************************************** \n");
	printf("** EMPRESA: CLEARNING SCHOOL **\n");
	printf("** FUNCIONÁRIO: Adriano Barreto **\n");
	printf("** RA: 54511145-5 **\n");
	printf("**************************************** \n \n");
	
	// INPUT
	printf("Digite o seu salário líquido: \n");
	scanf("%f", &salario);
	
	// PROCESSING
	novoSalario = salario + (salario * reajuste);
	
	// CONDITIONAL
	if(novoSalario <= 1750){
		novoSalario = novoSalario + abono;
	}
	
	// OUTPUT
	printf("\n**************************************** \n");
	printf("** SALÁRIO LÍQUIDO INFORMADO: R$ %f", salario);
	printf("\n** SALÁRIO REAJUSTADO: R$ %f", novoSalario);
	
	return (0);
}
