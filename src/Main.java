//Differenza codice verifica:
//Nella verifica non viene detto l'uso delle classi come Persona è Uti1lity
/*Nella verifica viene detto che ci sono soltaanto 4 case
    invece nel codice ce ne sono 5 perchè è stato aggiunto un case per visuallizare i contatti privati
 */
import java.util.Scanner;

import static Tools.Utility.*;

public class Main {
    public static void main(String[] args) {
        final int nContatti = 3;
        final int nContattiPriv  = 3;
        String password;

        Scanner tastiera = new Scanner(System.in);
        Persona[] gestore = new Persona[nContatti];
        Persona[] gestorePriv = new Persona[nContattiPriv];
        String[] opzioni = {"Gestore Telefonico", "1 - Inserimento", "2 - Visualizza", "3 - Inserimento contatti privati", "4 - Visualizza contatti privati", "5 - fine"};

        boolean fine = false;

        int contaContatti = 0;
        int contaContattiPriv=0;
        System.out.println("inserire la password per i contatti privati");
        password = tastiera.nextLine();

        do {
            switch (menu(opzioni, tastiera)) {
                case 1 -> {
                    if (nContatti > contaContatti) {
                        boolean presente = false;
                        Persona dettagli = LeggiContatto(tastiera);
                        for (int i = 0; i < contaContatti; i++) {
                            if (dettagli.nome.equals(gestore[i].nome) && dettagli.cognome.equals(gestore[i].cognome)) {
                                System.out.println("La persona con questo nome e cognome è già presente!");
                                presente = true;
                                break;
                            }
                        }
                        if (!presente) {
                            gestore[contaContatti] = dettagli;
                            contaContatti++;
                        }
                    } else {
                        System.out.println("Finiti contatti");
                    }
                }
                case 2 -> {
                    if (contaContatti > 0) {
                        Visualizza(gestore, contaContatti);
                    } else {
                        System.out.println("Non ci sono contatti da visualizzare");
                    }
                }
                case 3 -> {
                    if (nContattiPriv > contaContattiPriv) {
                        boolean presente = false;
                        Persona dettagli = ContattiPrivati(tastiera);
                        for (int i = 0; i < contaContatti; i++) {
                            if (dettagli.nomePriv.equals(gestorePriv[i].nomePriv) && dettagli.cognomePriv.equals(gestorePriv[i].cognomePriv)) {
                                System.out.println("La persona con questo nome e cognome è già presente!");
                                presente = true;
                                break;
                            }
                        }
                        if (!presente) {
                            gestorePriv[ contaContattiPriv] = dettagli;
                            contaContattiPriv++;
                        }
                    } else {
                        System.out.println("Finiti contatti");
                    }


                }
                case 4 ->{
                    String a;
                    System.out.println("Inserisci la password per visualizzare i contatti");
                    a = tastiera.nextLine();
                    if(a.equals(password)){
                        if (contaContattiPriv > 0) {
                            VisualizzaPrivato(gestorePriv, contaContattiPriv);
                        } else {
                            System.out.println("Non ci sono contatti da visualizzare");
                        }
                    }
                    else {
                        System.out.println("hai sbagliato password");
                    }
                }
                case 5 -> {
                    fine = true;
                }

            }
        } while (!fine);
        System.out.println("Fine programma");
    }


    public static Persona LeggiContatto(Scanner sc) {
        Persona contatto = new Persona();

        System.out.println("Inserisci il nome");
        contatto.nome = sc.nextLine();
        System.out.println("Inserisci il cognome");
        contatto.cognome = sc.nextLine();
        System.out.println("Inserisci il numero di telefono");
        contatto.numDiTelefono = sc.nextLine();

        return contatto;
    }

    public static void Visualizza(Persona[] gestore, int contaContatti) {
        for (int i = 0; i < contaContatti; i++) {
            System.out.println(gestore[i].anagrafica());
        }
    }

    public static Persona ContattiPrivati(Scanner sc) {
        Persona contatto = new Persona();

        System.out.println("Inserisci il nome");
        contatto.nomePriv = sc.nextLine();
        System.out.println("Inserisci il cognome");
        contatto.cognomePriv = sc.nextLine();
        System.out.println("Inserisci il numero di telefono");
        contatto.numDiTelefonoPriv = sc.nextLine();

        return contatto;
    }

    public static void VisualizzaPrivato(Persona[] gestore, int contaContatti) {
        for (int i = 0; i < contaContatti; i++) {
            System.out.println(gestore[i].anagraficaPriv());
        }

    }

}