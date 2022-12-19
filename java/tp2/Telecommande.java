import java.util.Scanner;
public class Telecommande{
    boolean Ouvfer;
    int poste,volume;
    void ouvfer(){
        if(Ouvfer=true){
            Ouvfer=false;
        }
        else 
        Ouvfer=true;
    }
    void volumA(){
        while(volume<30){
            volume=volume+1;
        }
    }
    void volumD(){
         while(volume>0){
            volume=volume-1;
        }
    }
    void posteA(){
       while(poste<13){
        poste=poste+1;
       }
    }
    void posteD(){
        while(poste>=1){
            poste=poste-1;
        }
    }
    void Afficher(){
        if(Ouvfer=true){
            System.out.println("La TV est Ouvert");
            System.out.println("Volume="+volume);
            System.out.println("Npostet="+poste);
        }
        else{
            System.out.println("La TV est Ferme");
            System.out.println("Volume="+volume);
            System.out.println("Npostet="+poste);
        }
    }
    public static void main(String args[]){
        Telecommande Sony=new Telecommande();
        Scanner obj = new Scanner(System.in);
        int choix;
        System.out.println("Donner votre choix");
        choix=obj.nextInt();
        switch (choix){
            case 1:
            Sony.Ouvfer();
            break;
            case 2:
            Sony.VolumA();
            break;
            case 3:
            Sony.VolumD();
            break;
            case 4:
            Sony.PosteA();
            break;
            case 5:
            Sony.PosteD();
            break;
        }
    }
 
}