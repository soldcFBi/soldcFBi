import java.util.*;
import java.io.*;

class Account {
	private String name,password;
	private int addres;
	
	Account(String name,String password,int addres){
		this.name = name;
		this.password = password;
		this.addres = addres;
	}
	void setName(String name){
		this.name = name;
	}
	String getName(){
		return name;
	}
	void setPassword(String password){
		this.password = password;
	}
	String getPassword(){
		return password;
	}
	void setAddres(int addres){
		this.addres = addres;
	}
	int getAddres(){
		return addres;
	}
	void Danied(){
		System.out.println("login successful");
	}
}

class Server {
	HashMap<Integer,String> server = new HashMap<>();
	
	void setServer(HashMap<Integer,String> server){
		this.server = server;
	}
	Map getServer(){
		return this.server;
	}
	void T (){
		System.out.println("server succesfull");
	}
}

class Register {
	
	void Ss(String nm,String pw,int noTelp){
		System.out.println("Nama \t\t: "+nm);
		System.out.println("Passwornd \t: "+pw);
		System.out.println("No telpon \t: "+noTelp);
	}
}

public class Main {
	public static void main(String[] args) {
		
		Account obj = new Account("Zidan@gmail.com","82A931",8080);
		System.out.println("Username \t: "+obj.getName());
		System.out.println("Password\t:"+obj.getPassword());
		System.out.println("Addres \t\t:"+obj.getAddres());
		obj.Danied();
		
		System.out.println("RIGESTER");
		Server obj1 = new Server();
		HashMap<Integer,String> reg = new HashMap<>();
		reg.put(294928,"thailand");
		reg.put(324852,"indonesian");
		reg.put(924284,"philipin");
		obj1.setServer(reg);
		System.out.println("Region server : "+obj1.getServer());
		obj1.T();
		
		Register obj2 = new Register();
		try {
			BufferedReader input = new BufferedReader(new InputStreamReader(System.in));
			String nama,password;
			int noTelpon;
			System.out.println("Masukkan nama : "); nama = input.readLine();
			System.out.println("Masukkan password : "); password = input.readLine();
			System.out.println("No telefon : "); noTelpon = input.read();
			obj2.Ss(nama,password,noTelpon);
		}catch (IOException ex){
			System.out.println("error");
		}
		System.out.println("Login succesfull");
	}
}
