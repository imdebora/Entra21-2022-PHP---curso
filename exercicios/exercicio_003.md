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