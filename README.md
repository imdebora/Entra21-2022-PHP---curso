<div align="center">

# Entra21-2022-PHP---curso
</div>

<div align="center">

### *Repositório para sincronização de todos os testes, arquivos e documentos do meu treinamento no entra21 2022*</div>

MENU:

 * [Sobre](#sobre)
 * [Objetivo](#objetivo)
 * [Status](#status)
 * [Autora](#autora)
 * [Canais Oficiais de comunicação audiovisual](#canais-oficiais-de-comunicação-audiovisual)
 * [Canais de comunicação off-line](#canais-de-comunicação-off-line)
 * [Ferramentas e aplicativos aprendidos até o momento:](#ferramentas-e-aplicativos-aprendidos-até-o-momento)
 * [Sprint 01 – Ambientação e Metodologias Ágeis](#sprint-01--ambientação-e-metodologias-ágeis)
    1. [Objetivo](#objetivo-recepcionar-os-alunos-e-introduzir-conceitos-de-metodologias-ágeis)
    2. [Princípios](#princípios)
    3. [Simplicidade](#simplicidade)
    4. [Ciclo](#ciclo)
    5. [Valores do Scrum](#valores-do-scrum)
    6. [Eventos](#eventos)
    7. [Artefatos](#artefatos)
    8. [Comandos GIT](#comandos-git)
    9. [Criar um repositório novo a partir do computador local](#criar-um-repositorio-novo-a-partir-do-computador-local)
    10. [Fluxo continuo de atualizações do seu repositório](#fluxo-continuo-de-atualizações-do-seu-repositorio)
    11. [O que fazer em caso de conflito no momento de GIT PUSH](#o-que-fazer-em-caso-de-conflito-no-momento-de-git-push)
 * [Sprint 02 – Lógica de Programação](#sprint-02--lógica-de-programação)
    1. [Objetivo](#objetivo-lógica-de-programação-e-conceitos-base-da-linguagem-php)
    2. [O que são algoritmos](#o-que-são-algoritmos)
    3. [Linguagens de programação utilizadas no passado](#linguagens-de-progamação-utilizadas-no-passado)
    4. [Conceito de um algoritmo](#conceito-de-um-algoritmo)
    5. [Fases de um algoritmo](#fases-de-um-algoritmo)
    6. [Operações aritiméticas](#operações-aritiméticas)
    7. [Portugol](#portugol)
  
### **Sobre**

 Notas sobre o [curso de PHP](https://www.entra21.com.br/)

### **Objetivo**: 
 Repositorio arquivos exemplo utilizados em aula. 
 
### **Status:**
- Em desenvolvimento durante todo o periodo do curso. 
- Será mantido após o termino do curso. 

### **Autora**

### Débora de Brito de Lima

### **Canais Oficiais de comunicação audiovisual**

- [Telegram](https://t.me/+gzczSHIGEpcxYmEx)
- [Meet (somente aulas técnicas)](https://meet.google.com/nbc-gvnp-pfh)

### **Canais de comunicação off-line**

*Esporádico*
- [Dados do Aluno](https://forms.gle/wiwPSuNHCkjwL4cE8)
- [Banco de Ideias](https://forms.gle/P8J5DdAEqb32x6yFA)
  
*Frequente*
- [Perguntas ao professor](https://forms.gle/4yKmTp7LqrgP2VvV6)
  
**Diario Obrigatório:**
- [Resumo da Aula](https://forms.gle/DE1Bi4hBxJEnSd188)
- [Avaliação da Aula Junto a Proway](https://externo.proway.com.br) Entrar em Central do aluno com usuario: **seu endereço de email** e senha: **ddmmaaa do seu nascimento** somente números.
  
**Arquivo Historico Completo:**
- [Playlist do Youtube](https://youtube.com/playlist?list=PL2WEynOui8TQxNqHE7IXrlirkVM7SDp9w)

### **Ferramentas e aplicativos aprendidos até o momento:**

* VSCODE
* Git e Github
* Trello
* Markdown
* Portugol

## Sprint 01 – Ambientação e Metodologias Ágeis

#### Objetivo: Recepcionar os alunos e introduzir conceitos de metodologias ágeis.

**<div align="center">
CONTEÚDO ABORDADO:</div>**

* Frameworks Agéis:
   1. Scrum
   2. Kanban
* Git e Github

### Princípios:

- Satisfazer cliente
- Mudanças ➡️ aceitar
- Motivação

### Simplicidade:
A arte de maximizar a quantidade de trabalho que não precisa ser feito.

#### *Colaboração com o cliente mais que negociação de contratos.*

<div align="center">

### Ciclo:

PLANEJAR ➡️ DESENVOLVER ➡️ ENTRAR️ ➡️ O MUNICAR</div>

# *Scrum:*
* 1. Transparência
* 2. Inspeção
* 3. Adpatção

### Valores do Scrum:
- Coragem
- Foco
- Compromentimento 
- Respeito
- Abertura

### Eventos:

- Sprint
- Sprint Planning
- Daily Scrum
- Sprint review
- Sprint

### Artefatos:

- BackLog Produto
- BackLog Sprint
- Incremento

<div align="center">
<img src="https://user-images.githubusercontent.com/104090687/165965473-da78f433-c2e6-485d-8b28-1929ca28835a.jpg" width="400px"/>
</div>

<div align="center">

### Comandos git
</div>

* Edita arquivos no vscode (code)
* Insere a alteração no repositório local : --> git add .
* Fecha a inserção com a descrição da alteração: --> git commit -m "bla bla" 
* Envia do repositorio local para a nuvem (github.com) --> git push 
* Outros usuários conectados ao mesmo repositório fizeram alterações neste meio tempo
* Baixar as alterações (ou verificar se foram alterados) --> git pull
* Pwd - mostra em qual local diretório/pasta você está
* Ls - mostra o que tem na pasta(listar)
* Cd - muda de pasta que está (change directory)
  1. Tem que dizer pra onde vai
  2. Se estiver no windows cdm o dir faz a mesma coisa
* mkdir – Cria uma nova pasta no diretório corrente:
* cp – Copia arquivos e diretórios:
* mv – Move arquivos e diretórios. 
  1. Também é usado para renomear arquivos.  Seu uso é semelhante ao comando de cópia (‘cp’).
* rm –r Remove arquivos e diretórios
* clear – Limpa todo o conteúdo 

### **Criar um repositorio novo a partir do computador local:**

```
#Criar um diretorio no computador
mkdir MEUREPOSITORIO 
cd MEUREPOSITORIO

- git init .
- git add <novos arquivos> ou . (para todos os 
arquivos)
- git add README.md (exemplo:)
- git add .gitignore 
- git add . 
- git commit -m "Meu Primeiro GIT Start"
```

```
- Configurar um novo repositório no GITHUB.COM. 
- No prompt de comando, VAMOS ENVIAR seu novo projeto LOCAL para o REPOSITORIO CRIADO NA NUVAM digite os seguintes comandos para realizar esse processo:

```
 git remote add origin https://github.com/[USERNAME]/[repositorio].git
  git pull origin main 
  git push -u origin main

  echo "# e2122-teste-total" >> README.md
  git init
  git add README.md
  git commit -m "first commit"
  git branch -M main

  git remote add origin git@github.com:[USERNAME]/[respositorio].git
  ... ou ...
  git remote add origin https://github.com:[USERNAME]/[respositorio].git

  git push -u origin main


### **Fluxo Continuo de atualizações do seu repositorio:**

```
- git pull (download das ultimas atualizações suas ou de colegas)
- vscode (editar seus programas/codigos/documentos) + (CTRL+S)
- git add . 
- git commit -m "breve descrição das alterações"
- git push (upload)
```

### **O que fazer em caso de conflito no momento de GIT PUSH:**

``` 
# Siga o fluxo, pule o passo git push e siga para git pull
# Neste momento o vscode apresentará os codigos que talvez estejam em conflito com o seu, se houver. então:
- git add .
- git commit -m "descrição da resolução de conflitos"
- git push (upload)
- git pull (download novamente: só pra verificar se tudo está ok)
```

## Sprint 02 – Lógica de Programação

#### Objetivo: Lógica de programação e conceitos base da linguagem PHP.

**<div align="center">
CONTEÚDO ABORDADO:</div>**

* Introdução à lógica
   1. O que são algoritmos
   2. Sequência lógica
   3. Representação de um algoritmo (Descritivo, Fluxograma e Pseudocódigo)
   4. Fases de um algoritmo
* Introdução ao ambiente de desenvolvimento
* Comentários
* Operadores aritméticos
* Variáveis e constantes
* Operadores
   1. Aritméticos
   2. Lógicos
   3. Atribuição
* Tipos de dados
   1. Int
   2. Float
   3. String
   4. Bool
* Estruturas de seleção
* Estruturas de repetição
* Manipulação de vetores
* Manipulação de matrizes

## O que são algoritmos?

## *Exercicio:*

* Escolha uma das opções abaixo e descreva de forma lógica em 10 passos:
   1. Sacar dinheiro 💸
   2. Tomar banho 🚿
   3. Comer pizza 🍕

**<div align="center">
🍕 COMER PIZZA 🍕</div>**

1. Pegar telefone
2. Abrir aplicativo ifood
3. Escolher uma pizza
4. Escolher os sabores
5. Escolher forma de pagamento
6. Finalizar pedido
7. Esperar o entregador
8. Receber o pedido
9. Fazer o pagamento
10. Comer a pizza

### **Linguagens de progamação utilizadas no passado:**

* Assembly
* Fortran
* Pascal
* Clipper
* Cobol
* C
* Visual c
* Delphi
* Visual basic
* Java
* Asp
* Dataflex
* Bash

**Respostas do Daily Scrum:**

- Ontem atualizei meu README com anotações da aula.
- Hoje irei atualizar o meu README com as informações dadas na aula de hoje e atualizar meu Kanbam no Trello.
- Não encontrei dificuldades em realizar as atividades pedidas pelo professor.

**29/04/2022**

Estudamos sequência lógica, representação de um algoritmo (descritivo, fluxograma e pseudocódigo) e fases de um algoritmo.

## **Conceito de um algoritmo:**

Inicio 

- Dados ➡️ Database
- Processamento ➡️ Backend
- Impressão ➡️ Frontend

Fim

### **FASES DE UM ALGORITMO**

- Problema
- Análise do problema
- Solicitar em forma de algoritmo
- Testar
- Codificação

**02/05/2022**

Proxima aula trazer pensamento pronto de uma aplicação desejada

Exemplos de IDE:

- Vscode
- Php storm
- Eclipse
- Netbeans
- Intelij
- Sublime text
- CodeSandbox
- Xampp

Arqivo txt/.php

Interpretada

* Php 
* Python 
* Perl   

Compilados

* .C

## *Portugol*

Disponivel no site:   https://portugol-webstudio.cubos.io/ide  <versão antiga>
                      https://dgadelha.github.io/tcc-webstudio/ <versão nova>

** Entradas e Saidas: **
- Olá Mundo
- Numero Digitado
- Seu Nome

programa 
{ 
	funcao inicio () 
	{ 
		inteiro numero 
		
		escreva("Digite um número inteiro: ")
		leia(numero)
		
		escreva("O número digitado foi: ", numero, "\n")
	} 
}

programa
{
	funcao inicio ()
	{
		cadeia nome

		escreva("Digite seu nome: ")
		leia(nome)
        escreva("Voce digitou:", nome, "\n")
	}
}

### **Operações Aritiméticas:**
- Operações Simples
- Prioridades em operações
- Divisões Inteiras
- Potenciação e Raiz

programa
{
	funcao inicio()
	{
		real a, b, soma, sub, mult, div, somageral
		
		escreva("Digite o primeiro número: ")
		leia(a)

		escreva("Digite o segundo número: ")
		leia(b)

		soma = a + b // Soma os dois valores
		sub  = a - b // Subtrai os dois valores
		mult = a * b // Multiplica os dois valores
		div  = a / b // Divide os dois valores
        somageral = soma + sub + mult + div

		escreva("\nA soma dos números é igual a: ", soma) 		// Exibe o resultado da soma
		escreva("\nA subtração dos números é igual a: ", sub) 		// Exibe o resultado da subtração
		escreva("\nA multiplicação dos números é igual a: ", mult) 	// Exibe o resultado da multiplicação
		escreva("\nA divisão dos números é igual a: ", div, "\n") 	// Exibe o resultado da divisão
        escreva("\nA soma geral de todos os resultados acima é igual a: ", somageral, "\n") //Besteira minha 


	}
}

programa
{
	funcao inicio()
	{
		real resultado

		// Neste exemplo, a operação de multiplicação (*) será executada primeiro
		resultado = 5.0 + 4.0 * 2.0
		escreva("Operação: 5 + 4 * 2 = ", resultado) 


		// Neste exemplo, a operação de soma (+) será executada primeiro
		resultado = (5.0 + 4.0) * 2.0
		escreva("\nOperação: (5 + 4) * 2 = ", resultado)		

		/*
		 * Neste exemplo, a operação de divisão (/) será executada primeiro, 
		 * seguida pela operação de multiplicação (*). Por último, será 
		 * executada a operação de soma (+)
		 */
		resultado = 1.0 + 2.0 / 3.0 * 4.0 
		escreva("\nOperação: 1 + 2 / 3 * 4 = ", resultado)

		/*
		 * Neste exemplo, a operação de soma (+) será executada primeiro, 
		 * seguida pela operação de multiplicação (*). Por último, será 
		 * executada a operação de divisão (/).
		 */
		resultado = (1.0 + 2.0) / (3.0 * 4.0)
		escreva("\nOperação: (1 + 2) / (3 * 4) = ", resultado, "\n")
	}
}

programa
{
	inclua biblioteca Matematica --> mat  // Inclui a biblioteca Matemática
	
	funcao inicio() 
	{
		real valor, potencia, raiz_quadrada
		
		escreva("Digite um valor: ") 
		leia(valor)

		potencia = mat.potencia(valor, 2.0)  	// Calcula o valor elevado ao QUADRADO
		raiz_quadrada = mat.raiz (valor, 2.0) 	// Calcula a raiz quadrada do valor

		// Exibe os resultados
		
		escreva("\nO número ao QUADRADO é: ", potencia, "\n")
		escreva("A raiz quadrada do número é: ", raiz_quadrada, "\n")
	}
}

### **Loja de Maquiagem**

programa
{   
    funcao inicio ()
    {
        const real PRECO_BASE = 25,99
        const real PRECO_CORRETIVO = 12,35
        const real PRECO_BATOM = 9,99

        cadeia nome
        inteiro quantidade_bases, quantidade_corretivos, quantidade_batons
        real total_bases, total_corretivos, total_batons, total_pagar

        escreva("Digite seu nome: ")
        leia(nome)

        escreva("\nDigite a quantidade de bases que você deseja comprar: ")
        leia(quantidade_bases)

        escreva("\nDigite a quantidade de corretivos você deseja comprar: ")
        leia(quantidade_corretivos)

        escreva("\nDigite a quantidade de batons você deseja comprar: ")
        leia(quantidade_batons)

        total_bases = PRECO_BASE * quantidade_bases
        total_corretivos = PRECO_CORRETIVO * quantidade_corretivos
        total_batons = PRECO_BATOM * quantidade_batons

        total_pagar = total_bases + total_corretivos + total_batons

        limpa()

        escreva("Olá, espero que tenho sido(a) bem atendido(a) em nossa loja!\n")
        
        escreva("Cliente: ", nome, "\n")
        escreva("===============================================================\n")
        escreva("Bases: ", quantidade_bases, "\n")
        escreva("Corretivos: ", quantidade_corretivos, "\n")
        escreva("Batons: ", quantidade_batons, "\n")
        escreva("===============================================================\n")
        escreva("Total a pagar:  R$ ", total_pagar, "\n")
    }
}

### **IF/ ELSE/ SE/ SENAO SE/ SENAO**

## ▶️[Exercicios](exercicios/exercicio_001.md)

