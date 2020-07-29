import java.awt.List;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;

public class Pruebas_solicitarDiseño {

	public static void main(String[] args) {
			pruebas("2");
		
		}
	
	public static void pruebas(String selector) {
		System.setProperty("webdriver.chrome.driver",
				"C:\\Users\\Santiago Ramirez\\Documents\\UNIVERSIDAD\\Taller de pruebas\\chromedriver.exe");
				//crea el driver con el navegador correspondiente
				WebDriver navegador = new ChromeDriver();
				
				//abrir el navegador en un sitio web dado
				navegador.get("http://localhost/code3/");
				
				// Obtener elementos del navegador
				WebElement CampoTipo = navegador.findElement(By.id("Tiposprenda"));
				WebElement CampoTallas = navegador.findElement(By.id("Tipostallas"));
				WebElement CampoTela = navegador.findElement(By.id("Tipostela"));
				WebElement descripcion = navegador.findElement(By.name("descripcion"));
				WebElement nombreImagen = navegador.findElement(By.name("imagename"));
				WebElement imagen = navegador.findElement(By.xpath("//input[@type='file']"));
				WebElement btnEnviar = navegador.findElement(By.name("submit"));
				
				
				switch (selector) {
				case "1":
					System.out.println("Prueba con todos los campos correctos");
					CampoTipo.sendKeys("Camisa");
					CampoTallas.sendKeys("Xl");
					CampoTela.sendKeys("Tela1");
					imagen.sendKeys("C:\\Users\\Santiago Ramirez\\Documents\\UNIVERSIDAD\\Taller de pruebas\\a.jpeg");
					nombreImagen.sendKeys("imagen de logos");
					descripcion.sendKeys("quiero todas las imagenes en el centro de la Camisa");
					btnEnviar.click();
					System.out.println("se completo la prueba");
					
					break;
				case "2":
					System.out.println("prueba con el campo tipo vacio");
					CampoTallas.sendKeys("Xl");
					CampoTela.sendKeys("Tela1");
					imagen.sendKeys("C:\\\\Users\\\\Santiago Ramirez\\\\Documents\\\\UNIVERSIDAD\\\\Taller de pruebas\\\\a.jpeg");
					nombreImagen.sendKeys("imagen de logos");
					descripcion.sendKeys("quiero todas las imagenes en el centro de la Camisa");
					String salidaTipo = CampoTipo.getAttribute("validationMessage");
					btnEnviar.click();
					if(salidaTipo.equals("Selecciona un elemento de la lista")) {
						System.out.println("la prueba  paso con exito");
					}else {
						System.out.println("la prueba no paso");
					}
					
					
					break;	
				case "3":
					System.out.println("prueba con el campo tallas vacio");
					CampoTipo.sendKeys("Camisa");
					CampoTela.sendKeys("Tela1");
					imagen.sendKeys("C:\\\\Users\\\\Santiago Ramirez\\\\Documents\\\\UNIVERSIDAD\\\\Taller de pruebas\\\\a.jpeg");
					nombreImagen.sendKeys("imagen de logos");
					descripcion.sendKeys("quiero todas las imagenes en el centro de la Camisa");
					String salidaTallas = CampoTallas.getAttribute("validationMessage");
					btnEnviar.click();
					if(salidaTallas.equals("Selecciona un elemento de la lista")) {
						System.out.println("la prueba paso con exito");
					}else {
						System.out.println("No paso la prueba");
					}
					break;
				case "4":
					System.out.println("prueba con el campo telas vacio");
					CampoTipo.sendKeys("Camisa");
					CampoTallas.sendKeys("Xl");
					imagen.sendKeys("C:\\\\Users\\\\Santiago Ramirez\\\\Documents\\\\UNIVERSIDAD\\\\Taller de pruebas\\\\a.jpeg");
					nombreImagen.sendKeys("imagen de logos");
					descripcion.sendKeys("quiero todas las imagenes en el centro de la Camisa");
					String salidaTelas = CampoTallas.getAttribute("validationMessage");
					btnEnviar.click();
					if(salidaTelas.equals("Selecciona un elemento de la lista")) {
						System.out.println("la prueba paso con exito");
					}else {
						System.out.println("No paso la prueba");
					}
					break;
				case "5":
					System.out.println("prueba con el campo URL imagen vacio");
					CampoTipo.sendKeys("Camisa");
					CampoTallas.sendKeys("Xl");
					CampoTela.sendKeys("Tela1");
					nombreImagen.sendKeys("imagen de logos");
					descripcion.sendKeys("quiero todas las imagenes en el centro de la Camisa");
					String salidaURL = imagen.getAttribute("validationMessage");
					System.out.println( salidaURL);
					btnEnviar.click();
					if(salidaURL.equals("Selecciona un archivo")) {
						System.out.println("la prueba paso con exito");
					}else {
						System.out.println("No paso la prueba");
					}
					break;
	
					
				default:
					break;
				}
		
	}

}
