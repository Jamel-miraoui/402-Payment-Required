import java.util.Scanner;
public class compte {
	private double numero;
    private double solde;
    
    public void depot(double valeur){
        if (valeur>0)
        solde=solde+valeur;}

    public void retrait(double valeur){
        if(valeur>0)
        solde=solde-valeur;}

    public double getsolde() 
    {return(solde);}

    public void affichesolde() {
        System.out.println("le solde du compte est egale a :"+solde+"dt");}

    public void viver(double valeur,compte cpt){
        if(valeur>0){
           cpt.depot(valeur);
           this.retrait(valeur);} }
    
    public class testcompte {
        public static void
    }
    
}