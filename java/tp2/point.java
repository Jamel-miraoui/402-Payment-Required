import java.util.Scanner;
public class point {
	private double x,y;
	double getx()
	{return(x);}
	void setx(double x0)
	{x=x0;}
		double gety()
	{
		return(y);
	}
	void sety(double y0)
	{
		y=y0;
	}
	void affiche()
	{
		system.out.println('p('+x+','+y+')')
	}
	  double translate(double dx,double dy){
		  
			  x=x+dx;
			  y=y+dy;
			  return(x,y);
		  }

    public static void main(String[] args) {

       point p1=new point();
	   p1.affiche();
	   p1.translate(2,3);
	   p1.affiche();
	   }
}