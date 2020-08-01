import java.awt.List;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.Date;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;
public class RegistrarComprador {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
pruebas("10");
	}
	
	public static void pruebas(String selector) {
		System.setProperty("webdriver.chrome.driver",
				"C:\\Users\\Santiago Ramirez\\Documents\\UNIVERSIDAD\\Taller de pruebas\\chromedriver.exe");
				//crea el driver con el navegador correspondiente
				WebDriver navegador = new ChromeDriver();
				
				//abrir el navegador en un sitio web dado
				navegador.get("http://localhost/code33/");
				
				// Obtener elementos del navegador
				WebElement NombreUsuario = navegador.findElement(By.name("nombreUsuario"));
				WebElement Nombre = navegador.findElement(By.name("nombre"));
				WebElement Apellidos = navegador.findElement(By.name("apellidos"));
				WebElement FechaNacimiento = navegador.findElement(By.name("fechaNacimiento"));
				WebElement correoElectronico = navegador.findElement(By.name("email"));
				WebElement contraseña = navegador.findElement(By.name("contrasena"));
				WebElement Verificarcontraseña = navegador.findElement(By.name("verificarContrasena"));
				WebElement btnRegistro = navegador.findElement(By.name("submit"));
				
				switch (selector) {
				case "1":
					System.out.println("Prueba con todos los campos correctos");
					NombreUsuario.sendKeys("MonesterPaint");
					Nombre.sendKeys("Camilo");
					Apellidos.sendKeys("Ramos");
					FechaNacimiento.sendKeys("20/06/1987");
					correoElectronico.sendKeys("monstpaint@correo.com");
					contraseña.sendKeys("Hola mundo");
					Verificarcontraseña.sendKeys("Hola mundo");
					btnRegistro.click();
					System.out.println("se completo la prueba");
					
					break;
				case "2":
					System.out.println("Prueba con el campo nombreUsuario vacio");
					String salidaNombreUsuario = NombreUsuario.getAttribute("validationMessage");
					Nombre.sendKeys("Camilo");
					Apellidos.sendKeys("Ramos");
					FechaNacimiento.sendKeys("20/06/1987");
					correoElectronico.sendKeys("monstpaint@correo.com");
					contraseña.sendKeys("Hola mundo");
					Verificarcontraseña.sendKeys("Hola mundo");
					btnRegistro.click();
					System.out.println("se completo la prueba");
					if(salidaNombreUsuario.equals("Completa este campo")) {
						System.out.println("la prueba  paso con exito");
					}else {
						System.out.println("la prueba no paso");
					}
					break;	
				case "3":
					System.out.println("Prueba con el campo nombre vacio");
					String salidaNombre = Nombre.getAttribute("validationMessage");
					NombreUsuario.sendKeys("MonesterPaint");
					Apellidos.sendKeys("Ramos");
					FechaNacimiento.sendKeys("20/06/1987");
					correoElectronico.sendKeys("monstpaint@correo.com");
					contraseña.sendKeys("Hola mundo");
					Verificarcontraseña.sendKeys("Hola mundo");
					btnRegistro.click();
					System.out.println("se completo la prueba");
					if(salidaNombre.equals("Completa este campo")) {
						System.out.println("la prueba  paso con exito");
					}else {
						System.out.println("la prueba no paso");
					}
					break;
				case "4":
					System.out.println("Prueba con el campo apellido vacio");
					String salidaApellido = Apellidos.getAttribute("validationMessage");
					NombreUsuario.sendKeys("MonesterPaint");
					Nombre.sendKeys("Camilo");
					FechaNacimiento.sendKeys("20/06/1987");
					correoElectronico.sendKeys("monstpaint@correo.com");
					contraseña.sendKeys("Hola mundo");
					Verificarcontraseña.sendKeys("Hola mundo");
					btnRegistro.click();
					System.out.println("se completo la prueba");
					if(salidaApellido.equals("Completa este campo")) {
						System.out.println("la prueba  paso con exito");
					}else {
						System.out.println("la prueba no paso");
					}
					break;
				case "5":
					System.out.println("Prueba con el campo fecha de nacimiento vacio");
					String salidaFecha = FechaNacimiento.getAttribute("validationMessage");
					NombreUsuario.sendKeys("MonesterPaint");
					Nombre.sendKeys("Camilo");
					Apellidos.sendKeys("Ramos");
					correoElectronico.sendKeys("monstpaint@correo.com");
					contraseña.sendKeys("Hola mundo");
					Verificarcontraseña.sendKeys("Hola mundo");
					btnRegistro.click();
					System.out.println("se completo la prueba");
					if(salidaFecha.equals("Completa este campo")) {
						System.out.println("la prueba  paso con exito");
					}else {
						System.out.println("la prueba no paso");
					}
					break;
				case "6":
					System.out.println("Prueba con el campo email vacio");
					String salidaEmail = correoElectronico.getAttribute("validationMessage");
					NombreUsuario.sendKeys("MonesterPaint");
					Nombre.sendKeys("Camilo");
					Apellidos.sendKeys("Ramos");
					FechaNacimiento.sendKeys("20/06/1987");
					contraseña.sendKeys("Hola mundo");
					Verificarcontraseña.sendKeys("Hola mundo");
					btnRegistro.click();
					System.out.println("se completo la prueba");
					if(salidaEmail.equals("Completa este campo")) {
						System.out.println("la prueba  paso con exito");
					}else {
						System.out.println("la prueba no paso");
					}
					break;
					
				case "7":
					System.out.println("Prueba con el campo contraseña vacio");
					String salidaContraseña = correoElectronico.getAttribute("validationMessage");
					NombreUsuario.sendKeys("MonesterPaint");
					Nombre.sendKeys("Camilo");
					Apellidos.sendKeys("Ramos");
					FechaNacimiento.sendKeys("20/06/1987");
					correoElectronico.sendKeys("monstpaint@correo.com");
					Verificarcontraseña.sendKeys("Hola mundo");
					btnRegistro.click();
					System.out.println("se completo la prueba");
					if(salidaContraseña.equals("Completa este campo")) {
						System.out.println("la prueba  paso con exito");
					}else {
						System.out.println("la prueba no paso");
					}
					break;
				case "8":
					System.out.println("Prueba con el campo verificar contraseña vacio");
					String salidaVContraseña = correoElectronico.getAttribute("validationMessage");
					NombreUsuario.sendKeys("MonesterPaint");
					Nombre.sendKeys("Camilo");
					Apellidos.sendKeys("Ramos");
					FechaNacimiento.sendKeys("20/06/1987");
					contraseña.sendKeys("Hola mundo");
					correoElectronico.sendKeys("monstpaint@correo.com");
					btnRegistro.click();
					System.out.println("se completo la prueba");
					if(salidaVContraseña.equals("Completa este campo")) {
						System.out.println("la prueba  paso con exito");
					}else {
						System.out.println("la prueba no paso");
					}
					break;
				case "9":
					System.out.println("Prueba con todos los campos correctos");
					NombreUsuario.sendKeys("MonesterPaint");
					Nombre.sendKeys("Camilo");
					Apellidos.sendKeys("Ramos");
					FechaNacimiento.sendKeys("20/06/1987");
					correoElectronico.sendKeys("monstpaint@correo.com");
					contraseña.sendKeys("Hola mundo");
					Verificarcontraseña.sendKeys("Hola mundo");
					btnRegistro.click();
					if(contraseña.equals(Verificarcontraseña)) {
						System.out.println("las contraseñas son iguales la pureba pasa con exito");
					}else {
						System.out.println("la prueba no pasa ");
					}
					
					break;
					
				case "10":
					System.out.println("Prueba con todos los campos correctos");
					NombreUsuario.sendKeys("MonesterPaint");
					Nombre.sendKeys("Camilo");
					Apellidos.sendKeys("Ramos");
					FechaNacimiento.sendKeys("20/06/1987");
					String fechaPrueba = "20/06/1987";
					correoElectronico.sendKeys("monstpaint@correo.com");
					contraseña.sendKeys("Hola mundo");
					Verificarcontraseña.sendKeys("Hola mundo");
					btnRegistro.click();
					
					try {
						Date dateBefore = new SimpleDateFormat("dd/MM/yyyy").parse("01/01/2007");
						System.out.println("1");
						Date dateAfter = new SimpleDateFormat("dd/MM/yyyy").parse("01/01/1920");
						System.out.println("2");
						System.out.println(fechaPrueba);
						Date date1=new SimpleDateFormat("dd/MM/yyyy").parse(fechaPrueba);
						System.out.println("3");
						if(date1.before(dateBefore) && date1.after(dateAfter) ) {
							System.out.println("La fecha es adecuada y isa es la mejor");
						} else {
							System.out.println("la prueba no pasa algo raro");
						}
					
					} catch(Exception e) {
						System.out.println("la prueba no pasa entre al primer catch ");
					}
					
					break;
					
				default:
					break;
				}
		

}
}
