
import java.util.Scanner;

public class Giorni {
    public Giorni() {
    }

    public static void main(String[] args) {

        Scanner write = new Scanner(System.in);
        int day;

        System.out.println("Inserisci il giorno della settimana in numeri");
        day = write.nextInt();



            switch (day) {
                case 1:System.out.println("Lunedi"); break;
                case 2:System.out.println("Martedì"); break;
                case 3:System.out.println("Mercoledì"); break;
                case 4:System.out.println("Giovedì"); break;
                case 5:System.out.println("Venerdì"); break;
                case 6:System.out.println("Sabato"); break;
                case 7:System.out.println("Domenica"); break;
                default:System.out.println("numero sbagliato");

            }


    }


}

