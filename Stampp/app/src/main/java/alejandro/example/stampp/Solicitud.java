package alejandro.example.stampp;

public class Solicitud {
    private  String prenda;
    private  String talla;
    private  String tela;
    private  String color;
    private  String descripcion;
    public  Solicitud( String prenda, String talla, String tela, String color,String descripcion){
        this.prenda= prenda;
        this.talla=talla;
        this.tela= tela;
        this.color= color;
        this.descripcion= descripcion;
    }

    public String getPrenda() {
        return prenda;
    }
    public String getTalla() {
        return talla;
    }
    public String getTela() {
        return tela;
    }
    public  String getDescripcion(){ return descripcion;}
    public String getColor() {
        return color;
    }


}
