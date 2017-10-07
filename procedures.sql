DELIMITER //
  CREATE OR UPDATE PROCEDURE `ajustaVagas_AI`( `turma_id` int)
BEGIN
	Declare contador int(11);
    SELECT count(*) into contador FROM turmas WHERE id = turma_id;

    IF contador > 0 THEN
        UPDATE turmas SET vagas= vagas - 1
        WHERE id = turma_id;
    END IF;
END //
DELIMITER ;

DELIMITER //
  CREATE OR UPDATE PROCEDURE `ajustaVagas_AD`( `turma_id` int)
BEGIN
	Declare contador int(11);
    SELECT count(*) into contador FROM turmas WHERE id = turma_id;

    IF contador > 0 THEN
        UPDATE turmas SET vagas= vagas + 1
        WHERE id = turma_id;
		    END IF;
END //
DELIMITER ;
