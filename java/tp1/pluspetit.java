import java.util.Scanner;
public class pluspetit {

    public static void main(String args[]) {
        Scanner scan = new Scanner(System.in);
        int x,y,z;
        int x = scan.nextInt();
        int y = scan.nextInt();
        int z = scan.nextInt();
        if( x <= y && x <= z)
          System.out.println("Le plus petit nombre est: "+x);
            else if (y <= x && y <= z)
          System.out.println("Le plus petit nombre est: "+y);
                else
          System.out.println("Le plus petit nombre est: "+z);
        }
}