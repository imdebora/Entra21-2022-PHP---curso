# *Exercicio: 001B:*

## **Versão 001.**

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

## **Versão 002.**

    Calculo o perimetro de um retangulo.
    Utilize as mesmas variáveis da versão 001.

programa {
    funcao inicio() {

    real ladoA, ladoB, resultado

    escreva("Vamos calcular o perimetro de retangulo!\n")

    escreva("Digite primeiro o valor da base: ")
    leia(ladoA)
    escreva("Agora digite o valor da altura: ")
    leia(ladoB)

    resultado = 2 * (ladoA + ladoB)

    escreva("\nO resultado é: ", resultado, "\n")
  } 
}

## **Versão 003.**

    Solicite os dados do usuário para calcular os dados do retangulo.
    Utilize as mesmas variaveis. 
    Imprima o resultado da área do retangulo e o perimetro do retangulo.

programa {
    funcao inicio() {

    real ladoA, ladoB, resultado1, resultado2

    escreva("Vamos calcular a área e o perimetro de retangulo!\n")

    escreva("Digite primeiro o valor da base: ")
    leia(ladoA)
    escreva("Agora digite o valor da altura: ")
    leia(ladoB)
    limpa()

    resultado1 = ladoA * ladoB
    resultado2 = 2 * (ladoA + ladoB)

    escreva("====================================")
    escreva("\nO resultado da área é: ", resultado1)
    escreva("\nO resultado do perimetro ", resultado2)
    escreva("\n====================================")
  } 
}

## **Versão 004.**

    Adicione uma condicional simples. 
    Utilize os resultados acima e faça o seguinte teste:
    Informe em uma condicional simples quem é maior, perimetro ou a area. 
    (vamos descondiderar as unidades m2 e mlinear), apenas pensar nas unidades.