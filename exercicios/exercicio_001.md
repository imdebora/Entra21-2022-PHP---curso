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
        senao se (sal < 2000)
        {   
            des = sal * 0.07
            escreva("O desconto do INSS é de 7%, num total de R$ ", des, "\n")
                vr = sal - des
                escreva("O salário com reajuste fica num total de R$ ", vr,)
        }
        senao se (sal < 4000)
        {   
            des = sal * 0.09
            escreva("O desconto do INSS é de 9%, num total de R$ ", des, "\n")
                vr = sal - des
                escreva("O salário com reajuste fica num total de R$ ", vr,)
        }
        senao se (sal > 4000 ou < 10000)
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
        escreva("Digite o primeiro número: ")
        leia(n1)
        escreva("Digite o segundo número: ")
        leia(n2)

        resultado = n1 * n2
        escreva(resultado, "\n")
    }
    escreva("============================= ")
     escreva(" O seu número é igual a 1000! ")
     escreva(" =============================")
  
}


programa
{
    funcao inicio()
    {
        real ladoA, ladoB, resultado

        ladoA = 60
        ladoB = 80

        resultado = ladoA * ladoB

        escreva("Resultado: ",resultado, "\n")
    }
}
