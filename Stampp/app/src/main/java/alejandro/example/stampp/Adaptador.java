package alejandro.example.stampp;

import android.content.Context;
import android.content.Intent;
import android.media.Image;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.ImageView;
import android.widget.TextView;

public class Adaptador extends BaseAdapter {
    private static LayoutInflater inflater= null;
    Context contexto;
    String[][] datos;
    int[] datosImg;

    public Adaptador(Context contexto, String[][] datos, int[] imagenes){
     this.contexto=contexto;
     this.datos=datos;
     this.datosImg=imagenes;
     inflater=(LayoutInflater)contexto.getSystemService(contexto.LAYOUT_INFLATER_SERVICE);

    }
    @Override
    public View getView(int i, View view, ViewGroup viewGroup) {
        final View vista=inflater.inflate(R.layout.elemento_lista,null);
        TextView nombre=(TextView) vista.findViewById(R.id.tv_nombre);
        TextView tipo=(TextView) vista.findViewById(R.id.tv_tipo);
        TextView talla=(TextView) vista.findViewById(R.id.tv_talla);
        TextView color=(TextView) vista.findViewById(R.id.tv_color);
        TextView material=(TextView) vista.findViewById(R.id.tv_material);
        ImageView imagen=(ImageView) vista.findViewById(R.id.iv_imagen);
        nombre.setText(datos[i][0]);
        tipo.setText("Tipo: "+datos[i][1]);
        talla.setText("Talla: "+datos[i][2]);
        color.setText("Color: " +datos[i][3]);
        material.setText("Material: " +datos[i][4]);
        imagen.setImageResource(datosImg[i]);

        imagen.setTag(i);
        imagen.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v) {
                Intent visorImagen = new Intent(contexto, VisorImagen.class);
                visorImagen.putExtra("IMG", datosImg[(Integer) v.getTag()]);
                contexto.startActivity(visorImagen);
            }
            });
        return vista;
        }




    @Override
    public int getCount() {
        return datosImg.length;
    }

    @Override
    public Object getItem(int i) {
        return null;
    }

    @Override
    public long getItemId(int i) {
        return 0;
    }


}
