package com.source;

// kelas dan object
class Pegawai{
    String nama;
    int usia;
    double gaji;

    void GajiHarian(double harian){
        if(gaji < harian){
            harian += 20.5 *20.0;
            gaji += 34.5 + (20.1 * 12.5) / 2.5;
            harian = harian + gaji;
            System.out.println("Gaji tambahan : "+harian);
            for(int i = 0; i<gaji+harian; i++){
                if(i <= gaji){
                    System.out.println("Gaji ++ tiap harinya");
                }else if (i <= -gaji+-10.5) {
                    System.out.println("Gaji di turunkan");
                } else {
                    System.out.println("Null semoga bsa lebih baik");
                }
            }
        } else {
            System.out.println("Gaji tetap");
        }
    }
    void Display(){
        System.out.println("Nama : "+nama);
        System.out.println("Usia : "+usia);
        System.out.println("gaji : "+gaji);
    }
    double getSalary(double a,double harian){
        return a + a + gaji + harian * (10.25 / 2.5);
    }
    void Totalan(double passGaji){
        System.out.println(gaji + this.getSalary(20.4,50.5));
        if(passGaji < this.gaji+this.getSalary(20.4, 50.5)){
            double as = 20.5 + gaji;
            System.out.println(as + gaji + this.getSalary(20.4, 50.5));
        } else {
            System.out.println("Null");
        }
    }
}

public class Main{
    public static void main(String[] args) {
        
        

    }
}
