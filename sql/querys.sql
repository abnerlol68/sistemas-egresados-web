SELECT forms.title, questions.description_q, answers.description_a FROM forms
    INNER JOIN questions
    INNER JOIN implemented_questions
    INNER JOIN answers
WHERE forms.id = implemented_questions.fk_form
    AND questions.id = implemented_questions.fk_question
    AND implemented_questions.id = answers.fk_implemented_question
    AND forms.id = 1;

-- source ~/Documents/Cuarto-Semestre/sistemas-egresados-web/sql/querys.sql
