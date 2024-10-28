package mensola;

import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.util.ArrayList;

public class Libro {

    public String autore;
    public String titolo;
    final double PrezzoPerPagine = 0.05;
    public int pagine;
    public Genere tipologia;
    public LocalDate dataPubblicazione;
    final private DateTimeFormatter dataFormat = DateTimeFormatter.ofPattern("dd-MM-yyyy");

    public static boolean Equals(Libro libro, ArrayList<Libro> mensola, int contatore) {
        if (contatore != 0) {
            for (int i = 0; i < contatore; i++) {
                Libro libroEsistente = mensola.get(i);
                if (libroEsistente.autore.equals(libro.autore) && libroEsistente.titolo.equals(libro.titolo)) {
                    return true;
                }
            }
        }
        return false;
    }
    public static boolean DataAccettabile(LocalDate dataInserita)
    {
        LocalDate dataOggi = LocalDate.now();
        if (dataInserita.getYear() > dataOggi.getYear()) {
            return false;
        }
        return true;
    }
    public String FormattaDati()
    {
        return String.format("autore: %s , titolo: %s , Prezzo: %.2f, Pagine: %d, Tipologia: %s, Data: %s", autore, titolo, PrezzoPerPagine * pagine, pagine, tipologia, dataPubblicazione.format(dataFormat));
    }
}