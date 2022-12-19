import javax.swing.JOptionPane;
public class fact{
public static void main(String[]args){
    int x,y,xval,resultat;
    x=Integer.parseInt(args[0]);
    if (0 > x) {
        xval=JOptionPane.showInputDialog(null,"donner x");
        x=Integer.parseInt(xval);}
    resultat=1;
    for (y=1;y<=x;y++) {
        resultat=resultat*y;
    }
    JOptionPane.showMessageDialog(null,resultat);
    System.exit(0);}
}