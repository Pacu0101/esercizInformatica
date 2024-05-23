//Differenze di questo programma a quello fatto in verifica:
//Utilizzo dei metodi per rendere il programma più comprensibile
//In verifica non è stato spevificato ma il programma utilizza come tipo di ordinamento quello del sort

import java.util.Scanner;

public class Ordinamento
{
    public static void main(String[] args)
    {
        Scanner sc = new Scanner(System.in);
        int dim;
        int n;
    /*Nella verifica veniva chiesto di creare un array con già la propria dimensione
    invece in questo codice l'utente può inserire una grandezza tra 8 e 10
     */
        do {
            System.out.println("Inserisci la grandezza del vettore: ");
            dim = sc.nextInt();
        } while (dim < 8 || dim > 10);

        int[] a = new int[dim];

        System.out.println("Inserisci numeri:");

        for (int i = 0; i < a.length; i++) {
            boolean trovato = false;
        do{
            do {
                n = sc.nextInt();
                } while (n < 1 || n > 30 || trovato);
                trovato = true;
                for (int j = 0; j < i; j++)
                {
                if (a[j] == n)
                {
                 trovato = false;
                 }
             }
        }while(trovato==false);
         a[i] = n;
        }

        Ordinatore(a);
        Visualizza(a);
    }

    public static void Ordinatore(int[] a) {// l'array "a" fa in poche parole il lavoro dell'array pari specificato in verifica
        int temporaneo;
        int minPosi;

        for (int i = 0; i < a.length; i++)
        {
            minPosi = i;
            if (a[i] % 2 == 0)
        {
            for (int j = i + 1; j < a.length; j++) {

            if (a[j] % 2 == 0)
             {
             if (a[minPosi] > a[j])
               {
                   minPosi = j;
                    }
                }
             }
            }
            temporaneo = a[i];
            a[i] = a[minPosi];
            a[minPosi] = temporaneo;
        }
    }

    public static void Visualizza(int[] a)
    {
        for (int i = 0; i < a.length; i++)
        {
            System.out.println(a[i]);
        }
    }
}