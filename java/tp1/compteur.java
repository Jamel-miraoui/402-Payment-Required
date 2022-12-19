
public class compteur {

    int val=0;

    int click()
        {
          return  val=val+1;}
    int raz()
        {
            return val=0;}
    int valeur()
        {return val;}

    public static void main(String args[]) {
        compteur c1;
        c1 = new compteur();
        c1.click();
        c1.click();
        System.out.println(c1.valeur());
        c1.raz();
        System.out.println(c1.valeur());
    }
}