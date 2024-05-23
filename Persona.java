public class Persona {
    public String nome;
    public String cognome;
    public String numDiTelefono;
    public String nomePriv;
    public String cognomePriv;
    public String numDiTelefonoPriv;

    public String anagrafica() {
        return String.format("Nome: %s Cognome: %s Telefono: %s", nome, cognome, numDiTelefono);
    }

    public String anagraficaPriv() {
        return String.format("Nome: %s Cognome: %s Telefono: %s", nomePriv, cognomePriv, numDiTelefonoPriv);
    }
}