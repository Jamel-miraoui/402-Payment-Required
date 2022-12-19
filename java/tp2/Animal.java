public class Animal{
    int age;
    int ageMaxi=10;
    boolean vivant;
    void setage(int a0){
        age=a0;
    }
    void viellir(){
        age=age+1;
        if(age>=ageMaxi){
            vivant=false;
        }
    }
    void mourir(){
        if(vivant=false){
            vivant=true;
        }
    }
    void crier(){
        if(vivant=true){
            System.out.println("cui cui");
 
        }
    }
    public static void main(String args[]){
        Animal A1=new Animal();
        A1.setage(0);
        A1.viellir();
        A1.crier();
        A1.viellir();
        A1.crier();
        A1.viellir();
        A1.crier();
        A1.viellir();
        A1.crier();
        A1.viellir();
        A1.crier();
        A1.viellir();
        A1.crier();
        A1.viellir();
        A1.crier();
        A1.viellir();
        A1.crier();
        A1.viellir();
        A1.crier();
 
    }
}