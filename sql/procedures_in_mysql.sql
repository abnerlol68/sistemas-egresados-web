CREATE PROCEDURE insert_graduate(
    IN ip_g VARCHAR(16)
) BEGIN
    INSERT INTO graduates (ip) VALUES (ip_g);
END;
-- CALL insert_graduate("192.168.0.24");

CREATE PROCEDURE check_graduates(
    IN ip_to_check VARCHAR(16)
)
BEGIN
    SELECT * FROM graduates WHERE ip = ip_to_check;
END;
-- CALL check_graduates("192.168.0.24")

CREATE PROCEDURE get_id_graduate(
    IN ip_g VARCHAR(16)
) BEGIN
    SELECT id FROM graduates WHERE ip = ip_g;
END;
-- CALL get_id_graduate("127.0.0.1");

CREATE PROCEDURE get_id_implemented_question(
    IN id_form INT,
    IN descip VARCHAR(255)
) BEGIN
    SELECT implemented_questions.id AS "implemented_questions.id" FROM implemented_questions
        INNER JOIN questions
    WHERE implemented_questions.fk_form = id_form
        AND questions.description_q = descip
        AND implemented_questions.fk_question = questions.id;
END;
-- CALL get_id_implemented_question(1, "Nombre Completo");

CREATE PROCEDURE insert_answer(
    IN id_graduate INT,
    IN id_implemented_questions INT,
    IN descrip VARCHAR(255)
) BEGIN
    INSERT INTO answers (fk_graduate, fk_implemented_questions, description_a)
    VALUES (id_graduate, id_implemented_questions, descrip);
END;
-- CALL insert_answer(:id_graudate, :id_implemented_question, :answer);
