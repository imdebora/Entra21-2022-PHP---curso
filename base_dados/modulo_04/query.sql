-- SELECT * FROM PESSOAS;

-- SELECT * FROM CIDADES;

-- SELECT PESSOA_NOME,PESSOA_IDADE 
-- FROM PESSOAS;

SELECT DISTINCT(PESSOA_NOME)
FROM PESSOAS

-- SELECT * FROM PESSOAS WHERE PESSOA_IDADE IN (22,19);

-- SELECT * FROM PESSOAS WHERE PESSOA_NOME LIKE '%Cristi%';

-- SELECT * FROM PESSOAS WHERE PESSOA_NOME LIKE '%Cristi%' AND PESSOA_IDADE = 28;

-- SELECT * FROM PESSOAS WHERE PESSOA_NOME LIKE '%Cristi%' OR PESSOA_IDADE = 22;

-- SELECT * FROM PESSOAS WHERE PESSOA_IDADE BETWEEN 19 AND 28; 

-- SELECT PESSOA_IDADE,PESSOA_NOME FROM PESSOAS ORDER BY PESSOA_IDADE;

-- SELECT PESSOA_IDADE,PESSOA_NOME FROM PESSOAS ORDER BY PESSOA_IDADE DESC;

-- SELECT PESSOA_IDADE,PESSOA_NOME FROM PESSOAS ORDER BY PESSOA_IDADE,PESSOA_NOME;

-- SELECT AVG(PESSOA_IDADE) FROM PESSOAS;

-- SELECT MIN(PESSOA_IDADE) FROM PESSOAS;

-- SELECT MAX(PESSOA_IDADE) FROM PESSOAS;

-- SELECT COUNT(*) FROM PESSOAS;

-- SELECT PESSOA_IDADE, COUNT(PESSOA_NOME) FROM PESSOAS GROUP BY PESSOA_IDADE;

-- SELECT 
--     CIDADES.CIDADE_NOME,
--     PESSOAS.PESSOA_NOME,
--     PESSOAS.PESSOA_IDADE
-- FROM    
--     PESSOAS,CIDADES
-- WHERE PESSOAS.PESSOA_CIDADES_ID = CIDADES.CIDADE_ID;
