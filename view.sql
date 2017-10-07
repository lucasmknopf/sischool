DELIMITER //
create function getTurmaId(descri VARCHAR(20)) returns INT DETERMINISTIC
BEGIN
DECLARE idTurma INT;

SELECT t.id INTO idTurma FROM turmas t WHERE t.descricao = descri;

RETURN idTurma;
END
// DELIMITER ;

-- select getTurmaId('Violão - 01/2017')
		
CREATE VIEW viewLimiteFaltas AS
SELECT
a.nome AS aluno, t.descricao AS turma,
COUNT(fc.presenca) AS quant_faltas
FROM frequencia_conteudos fc INNER JOIN alunos a
ON FC.aluno_id = a.id INNER JOIN turmas t on fc.turma_id = t.id 
WHERE fc.presenca = 'A' and t.id = getTurmaId()
GROUP BY a.nome
HAVING COUNT(a.nome) >= 3
ORDER BY t.descricao;

-- select lf.* from (select getTurmaId='Violão - 01/2017' f) s, viewLimiteFaltas lf;


-- aluno					turma					quant_faltas
-- Pedro Borges			teatro - 01/2017		2
-- Jean Luiz Windsu		teatro - 01/2017		1
-- Camile Pedrozo			Violão - 01/2017		2
-- Robson dias				Violão - 01/2017		2


CREATE VIEW viewHorarioAlunos AS
SELECT
a.nome AS Aluno, h.horarios AS Horario, d.dia_semana AS Dia, t.descricao AS Turma
FROM alunos a INNER JOIN turmas_alunos ta on ta.aluno_id = a.id 
INNER JOIN turmas t on ta.turma_id = t.id
INNER JOIN horarios h ON t.horario_id = h.id
INNER JOIN dias d ON t.dia_id = d.id
ORDER BY t.descricao, a.nome;

-- select * from viewHorarioAlunos;

-- select * from viewHorarioAlunos where aluno like '%Dominic%'

