# *Exercicio 004* 
### Laço de Repetição

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