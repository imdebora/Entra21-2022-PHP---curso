SELECT PRATELEIRA_NOME,PRATELEIRA_LOCALIZACAO 
FROM PRATELEIRAS;

SELECT PRATELEIRA_ID, PRODUTO_CODIGO,PRODUTO_NOME,PRODUTO_VALOR 
FROM PRODUTOS ORDER BY PRATELEIRA_ID;

-- SELECT NOTA_ID, NOTA_DATA_DE_EMISSÃO FROM NOTAS WHERE NOTA_ID = 1000;

SELECT NOTA_DATA_DE_EMISSAO, ITEN_CUPOM_FISCAL_PRODUTO, ITEN_CUPOM_FISCAL_VALOR_UN, ITEN_CUPOM_FISCAL_VALOR_TOT 
FROM ITENS_CUPOM_FISCAL, NOTAS
WHERE ITEN_CUPOM_FISCAL_NUMERO = 1000 AND NOTA_ID = 1000;

SELECT CLIENTE_NOME FROM CLIENTES;

SELECT ATENDENTE_NOME FROM ATENDENTES;

