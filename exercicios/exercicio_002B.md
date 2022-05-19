# *Exercicio 002B:*

## **Versão 001**

    Receba os dados de duas variaveis. 
    Imprimir o resultado da multiplicação das duas variaveis. 
    Calcule a raiz quadrada do resultado e imprima. 

programa{
    inclua biblioteca Matematica --> mat
    funcao inicio(){
        inteiro a, b, mult, raiz

        escreva("Escolha um número: ")
        leia(a)
        escreva("Escolha outro número: ")
        leia(b)

        limpa()
        
        mult = a * b 
        escreva("A multiplicação desses dois números é: ",mult, "\n")

        raiz = mat.raiz(mult, 2)
        escreva("A raiz quadrada desse resultado é: ",raiz)
    }
}