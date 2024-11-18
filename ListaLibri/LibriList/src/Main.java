import mensola.Genere;
import mensola.Libro;
import Screen.FrontScreen;

import java.util.ArrayList;

import static utility.Tools.*;

import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner tastiera = new Scanner(System.in);
        ArrayList<Libro> mensola = new ArrayList<>();
        final int MaxLibri = 3;

        String[] opzioni = {"Menu", "1-Inserimento", "2-Visualizza", "3-Remove","4-Scorrimento", "5-Exit"};
        boolean exit = true;
        do {
            switch (Menu(opzioni, tastiera)) {
                case 1 -> {
                    try {
                        if (mensola.size() < MaxLibri) {
                            System.out.println("Inserisci i dettagli dei libri");
                            FrontScreen.LeggiLibro(mensola, tastiera);
                        } else {
                            throw new Exception("Hai già inserito il numero massimo di libri.");
                        }

                    } catch (Exception e) {
                        System.out.println(e.getMessage());
                    }
                }
                case 2 -> {
                    System.out.println("Libri inseriti nella mensola");
                    FrontScreen.visualizza(mensola);
                }

                case 3 -> {
                    System.out.println("Inserisci l'autore del libro da rimuovere:");
                    String autore = tastiera.nextLine();
                    System.out.println("Inserisci il titolo del libro da rimuovere:");
                    String titolo = tastiera.nextLine();

                    boolean removed = FrontScreen.remove(mensola, autore, titolo);

                    if (removed) {
                        System.out.println("Libro rimosso correttamente.");
                    } else {
                        System.out.println("Nessun libro trovato con autore e titolo specificati.");
                    }
                }

                case 4 ->{
                    int n;

                        System.out.println("Inserisci la posizione iniziale");
                        n = Integer.parseInt(tastiera.nextLine());

                        FrontScreen.Scorrimemto(mensola,n,tastiera);
                }

                case 5 -> {
                    System.out.println("Fine");
                    exit = false;
                }
            }
        } while (exit);
    }


}
