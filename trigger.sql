DELIMITER //
CREATE TRIGGER `TRG_ajustaVagas_AI` AFTER INSERT ON `turmas_alunos`
FOR EACH ROW
BEGIN
      CALL ajustaVagas_AI(NEW.turma_id);
END //
DELIMITER ;

DELIMITER //
CREATE TRIGGER `TRG_ajustaVagas_AD` AFTER DELETE ON `turmas_alunos`
FOR EACH ROW
BEGIN
      CALL ajustaVagas_AD(OLD.turma_id);
END //
DELIMITER ;
  
  
      