
import java.util.Scanner;

public class Uovo {

    public static void main(String[] args) {

        String s="";
        Scanner write = new Scanner(System.in);

        do {

            System.out.println("Inserici una lettera che sia s o S per cucinare.");
            s = write.nextLine();
            attesa(2);
        }while(!(s.equals("s")||s.equals("S")));// !() significa diverso
        UovoIntero();
        Cucinando();
        UovoFinito();







    }
    public static void attesa(int x) {
        try {
            Thread.sleep(1000*x);
        } catch (InterruptedException var1) {
            var1.printStackTrace();
        }

    }
    private static void UovoIntero(){

        System.out.println("                   ████                              \n" +
                "                            ██░░░░██                            \n" +
                "                          ██░░░░░░░░██                          \n" +
                "                          ██░░░░░░░░██                          \n" +
                "                        ██░░░░░░░░░░░░██                        \n" +
                "                        ██░░░░░░░░░░░░██                        \n" +
                "                        ██░░░░░░░░░░░░██                        \n" +
                "                          ██░░░░░░░░██                          \n" +
                "                            ████████                            \n" +
                "                                       ");


        attesa(2);

    }
    private static void Cucinando(){

        System.out.println("          ▒▒                                                                                  \n" +
                "      ▓▓██░░▒▒▓▓▓▓░░░░██                                                                      \n" +
                "      ▓▓                ██                                                                    \n" +
                "    ▓▓░░▓▓██              ▓▓██                                                                \n" +
                "    ██░░░░██                  ████                                                            \n" +
                "  ▓▓░░░░▓▓░░                  ░░██                                                            \n" +
                "  ██░░░░░░██░░                    ▓▓██                                                        \n" +
                "  ██░░░░░░░░██░░░░                    ██████████                                              \n" +
                "██░░░░░░▒▒██░░░░░░░░░░░░                        ██                                            \n" +
                "██░░░░▒▒░░░░██░░░░░░░░░░░░░░░░  ░░░░        ░░░░██                                            \n" +
                "██░░░░░░░░░░░░▓▓░░░░░░░░░░░░░░░░░░░░  ░░░░░░░░▓▓██                                            \n" +
                "██░░░░░░░░░░░░██████████░░░░░░░░░░░░░░░░░░░░██░░██                                            \n" +
                "██░░░░░░░░░░░░░░▒▒░░░░░░██░░░░▓▓████░░░░░░██░░██                ████████████                  \n" +
                "██░░░░░░░░░░░░░░▒▒░░░░░░░░██▓▓░░░░░░████░░██░░██            ████            ████              \n" +
                "  ██░░░░░░░░░░▒▒▒▒░░░░░░░░░░░░▒▒░░░░░░░░██░░██        ██████                    ████          \n" +
                "  ██░░░░░░░░▒▒░░░░▒▒░░░░░░░░░░░░▒▒░░░░░░░░██      ████                              ██        \n" +
                "    ██░░░░░░▒▒░░░░░░░░░░░░░░░░░░░░░░░░░░██  ██████                                    ██      \n" +
                "    ██░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░██  ██                                          ██      \n" +
                "    ░░▓▓░░░░░░░░░░░░░░░░░░░░░░░░░░░░▓▓██▓▓░░              ██░░░░██████████            ██      \n" +
                "        ████░░░░░░░░░░░░░░░░░░░░████                ██████░░░░░░░░░░░░░░░░████        ██      \n" +
                "            ██▓▓██░░░░░░░░██████                ████░░░░░░░░░░░░░░░░░░░░░░░░░░██        ██    \n" +
                "                  ████████                  ████░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░██░░    ██    \n" +
                "                  ░░░░██                  ██▒▒▒▒░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░██░░    ░░██  \n" +
                "                    ██                  ░░██░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░▒▒██░░        ██\n" +
                "                    ██                  ░░░░▓▓░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░▒▒▒▒██░░      ░░██\n" +
                "                  ██                      ░░██░░░░░░░░░░░░░░░░░░░░░░░░░░▒▒▒▒▒▒▒▒██        ░░██\n" +
                "                  ██                          ██▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒██        ░░██\n" +
                "                  ██                            ████▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒████          ░░██\n" +
                "                  ██                                ██████████▒▒▒▒▒▒████████░░          ░░░░██\n" +
                "                  ██                                  ░░░░░░  ██████░░░░░░░░░░        ░░░░░░██\n" +
                "                  ██                                          ░░░░                    ░░░░░░██\n" +
                "                  ██                                                              ░░░░░░░░░░██\n" +
                "                  ██░░                      ░░░░░░░░░░                ░░░░░░░░░░░░░░░░░░░░░░██\n" +
                "                    ▓▓░░  ░░    ░░░░░░░░░░  ░░░░░░░░    ░░      ░░░░░░░░░░░░░░░░░░░░░░░░░░██  \n" +
                "                      ████░░░░░░░░░░░░░░░░██████████▓▓██▓▓████████░░░░░░░░░░░░░░░░░░██████    \n" +
                "                          ▓▓▓▓▓▓▓▓▓▓██▓▓██░░                      ██████▓▓▒▒▓▓▓▓▒▒▓▓    ░░    \n" +
                "                                                                                              \n" +
                "                                                                                              \n" +
                "                                                                                              \n" +
                "                                                                                              \n" +
                "                                                                                              \n" +
                "  ░░░░                                                        ░░░░  ░░                        \n" +
                "  ░░░░  ░░░░  ░░  ░░                                                       ");

        attesa(2);
    }
    private static void UovoFinito(){
        System.out.println(" ████████████████        \n" +
                "          ██                ██      \n" +
                "      ████    ░░░░░░░░        ██    \n" +
                "    ██      ░░      ░░░░        ██  \n" +
                "  ██      ░░          ░░░░        ██\n" +
                "  ██      ░░          ░░░░        ██\n" +
                "██        ░░▒▒░░  ░░░░░░░░        ██\n" +
                "██░░        ░░░░░░░░░░░░        ░░██\n" +
                "  ██░░        ░░░░░░░░        ░░██  \n" +
                "  ██░░░░                    ░░██    \n" +
                "    ████░░░░            ░░░░██      \n" +
                "        ████░░░░░░░░░░░░████        \n" +
                "            ████████████ ");


    }
}

