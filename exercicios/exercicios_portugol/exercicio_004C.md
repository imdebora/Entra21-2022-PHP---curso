# *Exercico 004C*

programa()
{
    echo "passou aqui 001"    
    primeira_funcao()
    {
        echo "passou aqui 002"                
    }
    funcao_inicio()
    {
        echo "passou aqui 003"
        primeira_funcao  
    }
    echo "passou aqui 004"
    funcao_inicio
}
echo "passou aqui 005"
programa
echo "Fim"