# *Exercicio 001: Versão 001.*

    Elbore um algoritmo que calcule a área de um retangulo qualquer, 
    recebendo, para isso o valor da base e da altura em centimetros.
    Imprima o tamanho em centimetros. 
    fazer commit.

programa
{
	funcao inicio()
	{
		real a, b, area

		escreva("Digite o valor da base em centimentros: ")
		leia(a)

		escreva("Digite o valor da altura em centimentros: ")
		leia(b)

		area = a * b

        limpa()

		escreva("A área é igual à: ", area, "cm2" "\n")
	}
}

# *Exercicio 002: Versão 002.*

    Adicionar condicional composta.
    Adicione o seguinte teste em eu algoritmo: 
    - Modifique a unidade para Metros.
    - O Retangulo agora representará uma area de terra.
    - Calcule a medida de frente e lateral da área e informe o usuario se a área 
       informada se trata de:
        - um Terreno até 1000m2, 
        - Um sítio, até 5000m2
        - Em Hectare de terra até 10000m2
        - Uma fazenda acima de 10000m2

programa
{   
	funcao inicio()
	{
		real a, b, area, converter_metros

		escreva("Digite o valor da base em centimentros: ")
		leia(a)

		escreva("Digite o valor da altura em centimentros: ")
		leia(b)

		area = a * b

        limpa()

		escreva("A área é igual à: ", area, "cm2\n")

       converter_metros = (area / 10000)

        escreva("\nConvertendo a área é igual à: ", converter_metros, "m2\n")

        {
        se(converter_metros >= 0 e converter_metros <= 1000)
        escreva("A área é um Terreno")
        }
        {
        se(converter_metros >= 1000 e converter_metros <= 5000)
        escreva("A área é um Sítio")
        }
        {
        se(converter_metros >= 5000 e converter_metros <=10000)
        escreva("A área é um Hectare")
        }
        {
        se(converter_metro >10000)
        escreva("A área é uma Fazenda")
	}

}

# *Exercicio 002:*

Elabore um algoritmo que receba dois numeros pelo teclado e compare se os numeros são:
- iguais
- A < B 
- B < A 
E informe o usuário.

programa
{   
    funcao inicio()
    {
        real a, b 

        escreva("Digite o número A: ")
        leia(a)

        escreva("Digite o número B: ")
        leia(b)

        se(a = b)
        {   
            escreva("Os números digitados são iguais")
        }

        se(b = a)
        {   
            escreva("Os números digitados são iguais")
        }
    
        se(a < b)
        {
            escreva("O número A é maior que o B")
        }

        se(b < a)
        {
            escreva("O número B é maior que o A")
    }
}

# *Exercício 003*

Elabore um algoritmo que receba o salario bruto de um funcionario e 
calcule o desconto de INSS de acordo com a sua faixa salarial:

< 1000 5% desconto
< 2000 7% desconto 
< 4000 9% desconto
> 10000 10% desconto.

programa
{   
    funcao inicio()
    {
        real sal, des, vr

        escreva("Digite o salário bruto do funcionário: ")
        leia(sal)

        se (sal < 1000)
        {   
            des = sal * 0.05
            escreva("O desconto do INSS é de 5%, num total de R$ ", des, "\n")
                vr = sal - des
                escreva("O salário com reajuste fica num total de R$ ", vr,)
        }
        senao se se (sal < 2000)
        {   
            des = sal * 0.07
            escreva("O desconto do INSS é de 7%, num total de R$ ", des, "\n")
                vr = sal - des
                escreva("O salário com reajuste fica num total de R$ ", vr,)
        }
        senao se se (sal < 4000)
        {   
            des = sal * 0.09
            escreva("O desconto do INSS é de 9%, num total de R$ ", des, "\n")
                vr = sal - des
                escreva("O salário com reajuste fica num total de R$ ", vr,)
        }
        senao se se (sal > 4000 ou < 10000)
        {   
            des = sal * 0.095
            escreva("O desconto do INSS é de 9,5%, num total de R$ ", des, "\n")
                vr = sal - des
                escreva("O salário com reajuste fica num total de R$ ", vr,)
        }
        se (sal > 10000)
        {   
            des = sal * 0.10
            escreva("O desconto do INSS é de 10%, num total de R$ ", des, "\n")
                vr = sal - des
                escreva("O salário com reajuste fica num total de R$ ", vr,)
        }
    }
}

# *Exercicio: Laço de Repetição*

## **Versão 001:**

- Crie um algoritmo que receba 2 numeros, 
- multiplique o resultados de AxB.
- Imprima o resultado na tela 

programa
{
    funcao inicio()
    {   
        real a, b, mult

        escreva("Digite o primeiro número: ")
        leia(a)
        escreva("\nAgora digite o segundo número: ")
        leia(b)

        mult = a * b

        limpa()
        escreva("A mulltiplicação desses dois números é igual: ", mult, "\n")
    }
}

## **Versão 002:**

- adicione um laço de repetição para todo o algoritmo que seja executado 
até que a multiplicação resulte em 1000
- ao sair informe o usuario que o resultado é igual a 1000 e aborte o laço. 
- utilize o recurso de funcões() para este Exercicio

programa
{
    funcao inicio()
    inteiro n1, n2, resultado, = 0

    enquanto(resultado != 1000){
        escreva("\nDigite o primeiro número: ")
        leia(n1)
        escreva("Digite o segundo número: ")
        leia(n2)
    
        resultado = n1 * n2
        escreva(resultado, "\n")

        se (resultado < 1000)
        {
            opcao()
        }
        se (resultado >= 1000)

    }
    {   
        funcao final
        escreva("================================================")
        escreva(" O resultado da sua multiplicação chegou a 1000! ")
        escreva("================================================\n") 
        
        opcao2()
    }
    {   
        funcao opcao()
        
        escreva("==========================================\n")
        escreva("O resultado ainda não alcançou o esperado!\n")
        escreva("==========================================\n")
    }
    {   
        funcao opcao2()
        cadeia resp
        escreva("\nDeseja repetir o processo? s/n: ")
        leia(resp)
        se(resp=="s")
        {
            inicio()
        }
        senao se se(resp=="n")
        {
            escreva("Muito obrigado por utilizar o programa!")
        }
        senao se
        {
            escreva("Digite apenas sim ou não!")
            opcao2()
        }

    }
}

# Exercicio 002b: versão1

    Receba os dados de duas variaveis. 
    Imprimir o resultado da multiplicação das duas variaveis. 
    Calcule a raiz quadrada do resultado e imprima. 

programa
{
    funcao inicio(){   
        inclua biblioteca Matematica --> mat
        real va, vb, mult, raiz

        escreva("Digite o primeiro número: \n")
        leia(va)
        escreva("Digite o segundo número: \n")
        leia(vb)

        mult = va * vb
        escreva("O resultado da multiplicação desses dois números é: ", mult, "\n")
        
        raiz = mat.raiz(mult, 2)
        escreva("A raiz quadrada desse resultado é: ",raiz, "\n")
    }
}

# Exercicio 003

    Solicite um valor do usuario (inteiro)

    Verifique se o valor está entre

    <0 = imprimir: NUMERO NEGATIVO
    0 e 9 = imprimir a palavra:ZERO a NOVE
    10 e 19 = imprimir a palavra:DEZ a DEZENOVE
    20 e 29 = imprimir a palavra:VINTE A VINTE E NOVE
    30 e 39 = imprimir a palavra:TRINTA A TRINTA E NOVE
    =>40 = imprimir: QUARENTA OU MAIOR

    NO final calcule 50% do valor digitado e imprima:
        50 por cento do valor informado é: [RESULTADO]

programa{
    funcao inicio(){
        inteiro n1, porcentagem

        escreva("Digite um número: ")
        leia(n1)

        porcentagem = n1 * 0.50

        se(n1 < 0){
        escreva("NUMERO NEGATIVO")
        escreva("\n50 por cento do valor informado é: ", porcentagem,)
        }
        senao se(n1 >= 0 e <= 9){
        escreva("ZERO a NOVE")
        escreva("\n50 por cento do valor informado é: ", porcentagem)
        }
        senao se(n1 >= 10 e <= 19){
        escreva("DEZ a DEZENOVE")
        escreva("\n50 por cento do valor informado é: ", porcentagem,)
        }
        senao se(n1 >= 20 e =< 29){
        escreva("VINTE A VINTE E NOVE")
        escreva("\n50 por cento do valor informado é: ", porcentagem,)
        }
        senao se(n1 >= 30 e =< 39){
        escreva("TRINTA A TRINTA E NOVE")
        escreva("\n50 por cento do valor informado é: ", porcentagem,)
        }
        senao(n1 => 40){
        escreva(" QUARENTA OU MAIOR")
        escreva("\n50 por cento do valor informado é: ", porcentagem,)
    }
}

# Exercicio: 001b: Versão 001.

    Calcule a area de um retangulo.
    Sem solicitar dados ao usuário.
    Para isto defina as variáveis: ladoA, LadoB, resultado. 
    Imprima o resultado.

programa
{
    funcao inicio()
    {
        real ladoA, ladoB, resultado

        ladoA = 10
        ladoB = 19

        resultado = ladoA * ladoB

        escreva("Resultado: ",resultado, "\n")
    }
}

# Exercico 004 - versão 001.


    Crie uma funcao que imprima uma mensagem ao ser chamada.

programa
{
    funcao inicio(){
         teste()
    }
    funcao teste(){
        escreva("Olá mundo!")
    }
}