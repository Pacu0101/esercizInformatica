import java.util.Scanner;

class Calcolatrice {
    public static void main(String[] args) {
        Scanner write = new Scanner(System.in);
        int a;
        int b;
        int scelta;
        boolean uscita=false;


            System.out.println("Inserisci il primo numero");
            a = write.nextInt();
            System.out.println("Inserisci il secondo numero");
            b = write.nextInt();

        do {

            Menu();

            System.out.println("scegli che operazione fare");
            scelta = write.nextInt();

            switch(scelta){

                case 1:
                    System.out.println("[1] Somma");
                    int sum = Somma(a,b);
                    System.out.println("La somma e "+sum);
                    break;

                case 2:
                    System.out.println("[2] Differenza");
                    int dif = Differenza(a,b);
                    System.out.println("La differenza e "+dif);
                    break;

                case 3:
                    System.out.println("[3] Moltiplicazione");
                    int mol = Moltiplicazione(a,b);
                    System.out.println("il prodotto e "+mol);
                    break;

                case 4:
                    System.out.println("[4] divisione");
                    if(b!=0){
                        double div = Divisione(a,b);
                        System.out.println( " La divisione e "+div);
                    }
                    break;

                case 5:
                    System.out.println("[5] potenza");
                    int power = Potenza(a,b);

                    System.out.println("La potenza è "+power);

                    break;

                case 6:
                    System.out.println("[6] exit");
                    uscita=true;
                    break;

            }

        }while(uscita==false);



    }

    private static void Menu(){

        System.out.println("[1] opzione sommare");
        System.out.println("[2] opzione dividere");
        System.out.println("[3] opzione moltiplicare");
        System.out.println("[4] opzione dividere");
        System.out.println("[5] opzione potenza");
        System.out.println("[6] opzione uscita");

    }


    private static int Somma(int x, int y ){
        int somma;
        somma=x+y;

        return somma;
    }

    private static int Differenza(int x, int y ){
        int diff;
        diff=x-y;

        return diff;
    }

    private static int Moltiplicazione(int x, int y ){
        int molt;
        molt=x*y;

        return molt;
    }

    private static double Divisione(int x, int y ){
        double div=0;

        div=x/y;

        return div;
    }

    private static int Potenza(int x, int y){
        int pot=1;

        for(int i=0; i<y; i++){
            pot=pot*x;
        }
        return pot;
    }
}


