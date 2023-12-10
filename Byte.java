
import java.util.Map;
import java.util.Scanner;



public class Byte {
    public static void main(String[] args) {

        int n,num,resto,x=0,cont=0;
        double y=0,deci,somma=0;

        Scanner write = new Scanner(System.in);
        System.out.println("inserisci un byte ");

        n = write.nextInt();

        num=n;

        do{
            resto=n%10;
            n=n/10;
            cont=cont+n;


            if (resto!=1 && resto!=0){

                System.out.println("il numero inserito non è un Byte perchè sono stati inseriti numeri diversi da 1 e 0");

                break;}


            x=x+1;



        }while(n>0);

        if(x!=8){

            System.out.println("il numero inserito non è un Byte perchè la lunghezza è sbagliata");

        }

        else {
            System.out.println("il numero inserito è un Byte");
            do{
                resto=num%10;
                num=num/10;


                deci = resto * Math.pow(2, y);

                somma = somma+deci;


                y=y+1;
            }while(num>0);

            System.out.println("il numero in decimale è "+somma);


        }



    }
}
