ALTER TABLE alunni 
CHANGE cf codice_fiscale char(16),
CHANGE dataa data_nascita date,
ADD corso varchar(20),
ADD sezione varchar(5);

ALTER TABLE alunni 
CHANGE corso indirizzo varchar(20);
