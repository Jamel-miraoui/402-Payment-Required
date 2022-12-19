import javax.swing.JOptionPane;
public class calcul 
{
    public static void main(String[]arges){
        int x,y,z,resultat;
        String xVal,yVal,zVal;
        xVal=JOptionPane.showInputDialog(null,"donner x");
        x=Integer.parseInt(xVal);
        yVal=JOptionPane.showInputDialog(null,"donner y");
        y=Integer.parseInt(yVal);
        zVal=JOptionPane.showInputDialog(null,"donner z");
        z=Integer.parseInt(zVal);
        resultat=x*y*z;
        JOptionPane.showMessageDialog(null,resultat);
        System.exit(0);
    }
}