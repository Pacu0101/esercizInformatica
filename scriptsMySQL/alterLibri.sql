ALTER TABLE libri 
CHANGE anno anno_pubblicazione varchar(50),
ADD cognome varchar(40),
ADD nome varchar(40);
ALTER TABLE libri 
DROP autore,
CHANGE cognome autore_cognome varchar(40) NOT NULL,
CHANGE nome autore_nome varchar(40) NOT NULL;
