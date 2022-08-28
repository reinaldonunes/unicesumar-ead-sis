#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

#define LIMIT 200 //máximo de cadastros

//registro
struct Projeto{
	int codigo, ano, status;
	char titulo[50], descricao[150], gerente[50], cliente[100];
};

struct Projeto projeto[LIMIT];

int cont = 0;

//MENU PRINCIPAL
void menuPrincipal(){
	int optionMenu;
	
	do{
		system("cls");
		printf("=== GESTÃO INTELIGENTE DE PROJETOS ===");
		printf("\n\nO que deseja fazer?");
		printf("\n[1] - Novo Projeto");
		printf("\n[2] - Imprimir Projeto");
		printf("\n[0] - Sair");
		
		printf("\nSua escolha >> ");
		scanf("%d", &optionMenu);
		
		switch(optionMenu){
			case 1:
				cadastrarProjeto();
				break;
			case 2:
				imprimirProjeto();
				break;
			case 0:
				printf("\nEncerrando programa...\n");
				system("Pause");
				break;
			default:
				printf("\nOpção inválida.\n\n");
				system("Pause");
		}
	}while(optionMenu != 0);
}


//CADASTRAR PROJETO
void cadastrarProjeto(){
	system("cls");
	
	char resposta = 'S';

	while(resposta == 'S' && cont < LIMIT){
		system("cls");		
		
		//printf("CONTADOR %d e LIMITE %d", cont,LIMIT); //LINHA TIRA-TEIMA
		
		printf("=== CADASTRAR NOVO PROJETO ===\n");
		
		printf("\nCódigo do projeto: %d", cont+1);
		projeto[cont].codigo = cont+1;
		
		printf("\nNome do projeto: ");
		fflush(stdin);
		gets(projeto[cont].titulo);
		//scanf("%s", projeto[cont].titulo);
		
		printf("\nDescrição do Projeto: ");
		fflush(stdin);
		gets(projeto[cont].descricao);
		//scanf("%s", projeto[cont].descricao);
		
		printf("\nGerente do projeto: ");
		fflush(stdin);
		gets(projeto[cont].gerente);
		//scanf("%s", projeto[cont].gerente);
	
		printf("\nCliente do projeto: ");
		fflush(stdin);
		gets(projeto[cont].cliente);
		//scanf("%s", projeto[cont].cliente);
			
		printf("\nAno do Projeto: ");
		scanf("%d", &projeto[cont].ano);
		
		printf("\nStatus  [1] - A Fazer    [2] - Fazendo     [3] - Concluído\n");	
		scanf("%d", &projeto[cont].status);

		printf("\n *** Projeto cadastrado com sucesso! ***\n");
		
		cont++;
		
		if(cont < LIMIT){
			printf("\n\n Cadastrar novo Projeto? [S] Sim [N] Não: ");
			fflush(stdin);
			scanf("%c", &resposta);
		}else{
			system("cls");
			printf("\n\n Limite de cadastros atingidos.\n\n");
			resposta = 'N';
			system("Pause");
		}
	}
}


// LISTAR PROJETOS
void imprimirProjeto(){
	system("cls");
	printf("=== IMPRESSÃO DE PROJETOS ===\n\n");
	
	int optionPrint;
	
	printf("Como deseja imprimir o projeto?\n");
	printf("[1] - Todos os projetos\n");
	printf("[2] - Status A Fazer\n");
	printf("[3] - Status Fazendo\n");
	printf("[4] - Status Concluído\n");
	printf("[5] - Por ano\n");
	
	printf("\nSua escolha >> ");
	scanf("%d", &optionPrint);
	
	switch(optionPrint){
		case 1:
			todosProjetos();
			break;
		case 2:
			buscarStatus(1);
			break;
		case 3:
			buscarStatus(2);
			break;
		case 4:
			buscarStatus(3);
			break;
		case 5:
			buscarAno();
			break;
		default:
			printf("\nComando inválido!\n");
			system("Pause");
			break;
	}
}


//LISTAR TODOS OS PROJETOS
void todosProjetos(){
	system("cls");
	printf("=== LISTANDO TODOS OS PROJETOS ===\n\n");
	
	int i, result;
	
	result = 0;

	for(i = 0;i < cont; i++){
		printf("\nCódigo: %d", projeto[i].codigo);
		printf("\nNome projeto: %s", projeto[i].titulo);
		printf("\nDescrição projeto: %s", projeto[i].descricao);
		printf("\nGerente do projeto: %s", projeto[i].gerente);
		printf("\nCliente do projeto: %s", projeto[i].cliente);
		printf("\nAno do projeto: %d", projeto[i].ano);
		switch(projeto[i].status){
			case 1: 
				printf("\nStatus do projeto: A Fazer \n\n");		
				break;
			case 2: 
				printf("\nStatus do projeto: Fazendo \n\n");		
				break;
			case 3: 
				printf("\nStatus do projeto: Concluído \n\n");		
				break;
			default:
				break;
		}
		printf("\n=========================");
		printf("\n\n");
		
		result = 1;
	}
	
	if(result == 0){
		printf("A pesquisa por TODOS OS PROJETOS não obteve resultados.\n\n");
	}
	system("Pause");
}


// LISTAR PROJETO POR STATUS
int buscarStatus(int IdStatus){
	system("cls");
	
	int l, result;
	
	switch(IdStatus){
		case 1:
			printf("=== LISTANDO PROJETOS POR STATUS A FAZER ===\n\n");
			break;
		case 2:
			printf("=== LISTANDO PROJETOS POR STATUS FAZENDO ===\n\n");
			break;
		case 3:
			printf("=== LISTANDO PROJETOS POR STATUS CONCLUÍDO ===\n\n");
			break;
		default:
			break;
	}
	
	result = 0;
	for(l = 0;l < cont; l++){
		if(projeto[l].status == IdStatus){
			printf("\nCódigo: %d", projeto[l].codigo);
			printf("\nNome projeto: %s", projeto[l].titulo);
			printf("\nDescrição projeto: %s", projeto[l].descricao);
			printf("\nGerente do projeto: %s", projeto[l].gerente);
			printf("\nCliente do projeto: %s", projeto[l].cliente);
			printf("\nAno do projeto: %d", projeto[l].ano);
			
			printf("\n\n\n=========================");
			printf("\n\n");
			
			result = 1;
		}	
	}
	if(result == 0){
		printf("A Pesquisa por STATUS não obteve resultados.\n\n");
	}
	system("Pause");
	return(0);
}


//PESQUISAR POR ANO
void buscarAno(){
	system("cls");
	printf("=== LISTANDO PROJETOS POR ANO ===\n\n");
	
	int ano,result,r;
	printf("Qual ano deseja buscar? ");
	scanf("%d", &ano);
	
	result = 0;
	for(r = 0;r < cont; r++){
		if(projeto[r].ano == ano){
			printf("\nCódigo: %d", projeto[r].codigo);
			printf("\nNome projeto: %s", projeto[r].titulo);
			printf("\nDescrição projeto: %s", projeto[r].descricao);
			printf("\nGerente do projeto: %s", projeto[r].gerente);
			printf("\nCliente do projeto: %s", projeto[r].cliente);
			switch(projeto[r].status){
				case 1: 
					printf("\nStatus do projeto: A Fazer \n\n");		
					break;
				case 2: 
					printf("\nStatus do projeto: Fazendo \n\n");		
					break;
				case 3: 
					printf("\nStatus do projeto: Concluído \n\n");		
					break;
				default:
					break;
			}
			printf("\n=========================");
			printf("\n\n");
			
			result = 1;
		}
	}
	
	if(result == 0){
		printf("\nA pesquisa por ANO não obteve resultados.\n\n");
	}
	system("Pause");
}


// INICIA O PROGRAMA
int main(){
	setlocale(LC_ALL, "Portuguese");
	
	menuPrincipal();
	
	return(0);
}
