package com.example01.id;
import java.util.*;
// hak boongan
class Inisial {
    private List<String> nama;
    private List<Integer> ip;
    
    void setNama(List<String> nama){
        this.nama = nama;
    }
    
    List<String> getNama(){
        return nama;
    }
    
    void setIp(List<Integer> ip){
        this.ip = ip;
    }
    
    List<Integer> getIp(){
        return ip;
        
    }
}

class Login {
    String username;
    int password;
    
    Login(String username,int password){
        this.username = username;
        this.password = password;
    }
    public void Disk(){
        System.out.println("Masukkan username : "+this.username);
        System.out.println("Masukkan password : "+this.password);
    }
}

class User extends Login {
    
    int addres = 9492959;
    
    User(String username,int password){
        super(username,password);
    }
    
    void inAddres(){
        super.Disk();
        System.out.println("addres scurity 2 : "+addres);
    }
}

public class Main {
    
    public static void main(String[] args) {
        
        
        Inisial obj = new Inisial();
        List<String> target = new ArrayList<>();
        target.add("Johan");
        target.add("fauzi");
        target.add("luis");
        target.add("ishan");
        
        obj.setNama(target);
        System.out.println("target   : "+obj.getNama());
        
        List<Integer> targetIp = new ArrayList<>();
        targetIp.add(4925527);
        targetIp.add(5249772);
        targetIp.add(1529690);
        targetIp.add(5150018);
        
        obj.setIp(targetIp);
        System.out.println("Target Ip : "+obj.getIp());
        
        target.set(0,"eddy");
        targetIp.set(0,3148481);
        
        List<String> new_target = obj.getNama();
        System.out.println("Target di prebarui    : "+new_target);
        List<Integer> new_targetIp = obj.getIp();
        System.out.println("Target Ip di perbarui : "+new_targetIp);
        
        Login obj2 = new Login("Eddy",82891);
        obj2.Disk();
        User obj3 = new User("fauzi",9642);
        obj3.inAddres();
    }
    
}
