ALTER TABLE autori 
CHANGE cf codice_fiscale char(16),
ADD indirizzo varchar(40),
ADD cap char(5),
MODIFY nome varchar(40) NOT NULL,
MODIFY cognome varchar(40) NOT NULL;
