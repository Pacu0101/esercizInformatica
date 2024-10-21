

import mensola.Libro;
import frontScreen.FrontEnd;


import static utility.Tools.*;


import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.util.Scanner;


public class Main {
    public static void main(String[] args) {
        Scanner tastiera = new Scanner(System.in);
        final int MAXLIBRI = 2;
        Libro[] mensola = new Libro[MAXLIBRI];
        String[] opzioni = {"Menu", "1-Inserimento", "2-Visualizza", "3-Ricerca", "4-Modifica Data", "5-Rimozione", "6-Ricerca2", "7-Exit"};
        boolean exit = true;
        do {
            switch (Menu(opzioni, tastiera)) {
                case 1 -> {
                    for (int i = 0; i < MAXLIBRI; i++) {
                        System.out.println("Inserisci i dettagli del libro #" + (i + 1) + ":");
                        mensola[i] = FrontEnd.LeggiLibro(tastiera);
                    }
                }
                case 2 -> {
                    System.out.println("Libri inseriti nella mensola");
                    visualizza(mensola);
                }


                case 3 -> {
                    System.out.println("Inserisci l'autore da trovare");
                    String autore = tastiera.nextLine();
                    System.out.println("Inserisci il titolo del libro da trovare");
                    String titolo = tastiera.nextLine();


                    String trovato = search(MAXLIBRI, mensola, autore, titolo);
                    System.out.println(trovato);
                }


                case 4 -> {
                    System.out.println("Inserisci l'autore da mdoficare");
                    String autore = tastiera.nextLine();
                    System.out.println("Inserisci il titolo del libro da modificare");
                    String titolo = tastiera.nextLine();


                    modifica(tastiera, MAXLIBRI, mensola, autore, titolo);


                }


                case 5 -> {
                    System.out.println("Inserisci l'autore da mdoficare");
                    String autore = tastiera.nextLine();
                    System.out.println("Inserisci il titolo del libro da modificare");
                    String titolo = tastiera.nextLine();


                    mensola = remove(MAXLIBRI, mensola, autore, titolo);
                }


                case 6 -> {
                    System.out.println("Inserisci il titolo del libro da trovare");
                    String titolo = tastiera.nextLine();


                    int trovato = findAll(MAXLIBRI, mensola, titolo);
                    if (trovato != -1) {
                        System.out.println("Libri trovati:");

                        System.out.println(mensola[trovato].FormattaDati());

                    } else {
                        System.out.println("Libro non trovato");
                    }
                }


                case 7 -> {
                    System.out.println("Fine");
                    exit = false;
                }
            }
        } while (exit);
    }


    public static void visualizza(Libro[] mensola) {
        for (int i = 0; i < mensola.length; i++) {
            Libro libro = mensola[i];
            System.out.println(libro.FormattaDati());
        }
    }


    public static String search(int MAXLIBRI, Libro[] mensola, String autore, String titolo) {
        int cont = 0;
        for (int i = 0; i < MAXLIBRI; i++) {
            Libro libro = mensola[i];
            if (autore.equals(mensola[i].autore) && titolo.equals(mensola[i].titolo)) {
                System.out.println(libro.FormattaDati());
                cont++;
            }
        }
        if (cont == 0) {
            return "libro non trovato";
        } else {
            return "libro trovato";
        }


    }


    public static void modifica(Scanner sc, int MAXLIBRI, Libro[] mensola, String autore, String titolo) {


        System.out.println("Inserisci la data di pubblicazione in formato gg-MM-aaaa:");
        for (int i = 0; i < MAXLIBRI; i++) {
            if (autore.equals(mensola[i].autore) && titolo.equals(mensola[i].titolo)) {
                mensola[i].dataDiPubblicazione = LocalDate.parse(sc.nextLine(), DateTimeFormatter.ofPattern("dd-MM-yyyy"));
            }
        }


    }


    public static Libro[] remove(int MAXLIBRI, Libro[] mensola, String autore, String titolo) {
        int count = 0;


        for (int i = 0; i < MAXLIBRI; i++) {
            if (!autore.equals(mensola[i].autore) && !titolo.equals(mensola[i].titolo)) {
                count++;
            }


        }


        if (count == MAXLIBRI) {
            System.out.println("Nessun libro trovato per autore e titolo specificati.");
            return mensola;
        }


        Libro[] mensola2 = new Libro[count];
        int count2 = 0;
        Libro temp = new Libro();
        for (int i = 0; i < MAXLIBRI; i++) {
            if (!autore.equals(mensola[i].autore) && !titolo.equals(mensola[i].titolo)) {
                mensola2[count2] = mensola[i];


            }


        }


        return mensola2;
    }


    public static int findAll(int MAXLIBRI, Libro[] mensola, String titolo) {
        int cont = 0;
        for (int i = 0; i < MAXLIBRI; i++) {
            if (titolo.equals(mensola[i].titolo)) {
                return i;
            }



        }

        return -1;
    }


}

