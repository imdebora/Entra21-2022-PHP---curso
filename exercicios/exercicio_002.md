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