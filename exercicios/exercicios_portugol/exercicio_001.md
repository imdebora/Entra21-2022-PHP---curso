# *Exercicio 001:* 

## **Versão 001.**

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

## **Versão 002.**

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