CREATE PROCEDURE insert_graduate(
    IN email_g VARCHAR(64)
) BEGIN
    INSERT INTO graduates (email) VALUES (email_g);
END;
-- CALL insert_graduate("192.168.0.24");

CREATE PROCEDURE check_graduate(
    IN email_to_check VARCHAR(64)
)
BEGIN
    SELECT * FROM graduates WHERE email = email_to_check;
END;
-- CALL check_graduate("192.168.0.24")

CREATE PROCEDURE get_id_graduate(
    IN email_g VARCHAR(64)
) BEGIN
    SELECT id FROM graduates WHERE email = email_g;
END;
-- CALL get_id_graduate("127.0.0.1");

CREATE PROCEDURE get_id_implemented_question(
    IN id_form INT,
    IN descript VARCHAR(255)
) BEGIN
    SELECT implemented_questions.id AS "implemented_questions.id" FROM implemented_questions
        INNER JOIN questions
    WHERE implemented_questions.fk_form = id_form
        AND questions.description_q = descript
        AND implemented_questions.fk_question = questions.id;
END;
-- CALL get_id_implemented_question(1, "Nombre Completo");

CREATE PROCEDURE insert_answer(
    IN id_graduate INT,
    IN id_implemented_questions INT,
    IN descript VARCHAR(255)
) BEGIN
    INSERT INTO answers (fk_graduate, fk_implemented_questions, description_a)
    VALUES (id_graduate, id_implemented_questions, descript);
END;
-- CALL insert_answer(:id_graudate, :id_implemented_question, :answer);
