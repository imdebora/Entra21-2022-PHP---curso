# *Exercicio 003B*

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
            escreva("NUMERO NEGATIVO \n")
        }
        senao se(n1 >= 0 e n1< 10){
            escreva("ZERO a NOVE")
        }
        senao se(n1 > 9 e n1< 20){
            escreva("DEZ a DEZENOVE")
        }
        senao se(n1 > 19 e n1< 30){
            escreva("VINTE A VINTE E NOVE")
        }
        senao se(n1 > 29 e n1< 40){
            escreva("TRINTA A TRINTA E NOVE")
        }
        senao{
            escreva(" QUARENTA OU MAIOR")
        }

        escreva("50 por cento do valor informado é: ", porcentagem,)

    }
}