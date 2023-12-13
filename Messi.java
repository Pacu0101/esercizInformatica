
import java.util.Scanner;

public class Messi {
    public Messi() {
    }

    public static void main(String[] args) {

        Scanner write = new Scanner(System.in);

        int month;

        System.out.println("Inserisci il numero di un mese");
        month = write.nextInt();



        switch (month) {
            case 1:System.out.println("Gennaio"); break;
            case 2:System.out.println("Febbraio"); break;
            case 3:System.out.println("Marzo"); break;
            case 4:System.out.println("Aprile"); break;
            case 5:System.out.println("Maggio"); break;
            case 6:System.out.println("Giugnio"); break;
            case 7:System.out.println("Luglio"); break;
            case 8:System.out.println("Agosto"); break;
            case 9:System.out.println("Settembre"); break;
            case 10:System.out.println("Ottobre"); break;
            case 11:System.out.println("Novembre"); break;
            case 12:System.out.println("Dicembre"); break;
            default:System.out.println("numero sbagliato");

        }


    }


}
