package Screen;

import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.util.ArrayList;
import java.util.Scanner;

import mensola.Libro;
import mensola.Genere;


import static utility.Tools.*;

public class FrontScreen {

    //La classe FrontScreen serve per mettere i metodi che verrano utilizzati nel metodo in modo tale da avere meno robe nel metodo
    public static void LeggiLibro(ArrayList<Libro> mensola, Scanner tastiera) {

        Libro l = new Libro();
        System.out.println("Inserisci autore:");
        l.autore = tastiera.nextLine();
        System.out.println("Inserisci titolo:");
        l.titolo = tastiera.nextLine();
        System.out.println("Inserisci il tipo:");

        String[] opzioni = {"Tipo libro", "1 Romanzo", "2 Manuale", "3 Thriller"};

        switch (Menu(opzioni, tastiera)) {

            case 1 -> l.tipologia = Genere.Romanzo;
            case 2 -> l.tipologia = Genere.Manuale;
            case 3 -> l.tipologia = Genere.Thriller;
        }

        System.out.println("Inserisci il numero di pagine:");
        l.pagine = Integer.parseInt(tastiera.nextLine()); // legge il numero di pagine
        System.out.println("Inserisci la data di pubblicazione in formato gg-MM-aaaa:");
        l.dataPubblicazione = LocalDate.parse(tastiera.nextLine(), DateTimeFormatter.ofPattern("dd-MM-yyyy"));


        mensola.add(l);
    }

    public static void visualizza(ArrayList<Libro> mensola) {
        for (Libro libro : mensola)
            System.out.println(libro.FormattaDati());
    }

    public static Boolean remove(ArrayList<Libro> mensola, String autore, String titolo) {

        boolean removed = mensola.removeIf(libro -> autore.equals(libro.autore) && titolo.equals(libro.titolo));

        return removed;
    }
}