package alejandro.example.stampp;

import android.content.Context;
import android.content.Intent;
import android.media.Image;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.BaseAdapter;
import android.widget.Filter;
import android.widget.Filterable;
import android.widget.ImageView;
import android.widget.TextView;

import com.squareup.picasso.Picasso;

import java.util.ArrayList;
import java.util.List;

public class Adaptador extends BaseAdapter implements Filterable {
    private static LayoutInflater inflater = null;
    Context contexto;
    ArrayList<Solicitud> datos;
    int[] datosImg;
    ArrayList<String> arregloRutas = new ArrayList<String>();


    public Adaptador(Context contexto, ArrayList<Solicitud>  datos, int[] imagenes, ArrayList<String> arregloRutas) {
        this.contexto = contexto;
        this.datos = datos;
        this.datosImg = imagenes;
        this.arregloRutas = arregloRutas;
        inflater = (LayoutInflater) contexto.getSystemService(contexto.LAYOUT_INFLATER_SERVICE);

    }

    @Override
    public View getView(int i, View view, ViewGroup viewGroup) {
        LayoutInflater  inflater= (LayoutInflater) contexto.getSystemService(Context.LAYOUT_INFLATER_SERVICE);
        if(view== null){
            view=inflater.inflate(R.layout.elemento_lista,null);
        }
        //final View vista = inflater.inflate(R.layout.elemento_lista, null);
        TextView nombre = (TextView) view.findViewById(R.id.tv_nombre);
        TextView tipo = (TextView) view.findViewById(R.id.tv_tipo);
        TextView talla = (TextView) view.findViewById(R.id.tv_talla);
        TextView color = (TextView) view.findViewById(R.id.tv_color);
        TextView material = (TextView) view.findViewById(R.id.tv_material);
        ImageView imagen = (ImageView) view.findViewById(R.id.iv_imagen);
        nombre.setText(datos.get(i).getPrenda());
        tipo.setText("Tipo: " + datos.get(i).getPrenda());
        talla.setText("Talla: " + datos.get(i).getTalla());
        color.setText("Color: " + datos.get(i).getColor());
        material.setText("Material: " + datos.get(i).getTela());
        //imagen.setImageResource(datosImg[i]);
        Log.i("imagenes", "Picasso va a pintar: +"+arregloRutas.get(i));
        Log.i("imagenes", "El iterador es:  +"+i);
        Picasso.get().load(arregloRutas.get(i)).into(imagen);
        imagen.setTag(i);
       /* imagen.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent visorImagen = new Intent(contexto, VisorImagen.class);
                visorImagen.putExtra("IMG", arregloRutas);
                contexto.startActivity(visorImagen);
            }
        }); */
        return view;
    }


    @Override
    public int getCount() {
        return arregloRutas.size();
    }

    @Override
    public Object getItem(int i) {
        return datos.get(i);
    }

    @Override
    public long getItemId(int i) {
        return datos.indexOf(getItem(i));
    }


    @Override
    public Filter getFilter() {

        return  null;
    }

    /*class CustomFilter extends Filter {

        @Override
        protected FilterResults performFiltering(CharSequence charSequence) {
            FilterResults results = new FilterResults();
            if (charSequence != null && charSequence.length() > 0) {
                charSequence = charSequence.toString().toUpperCase();
                ArrayList<Solicitud> filtro = new ArrayList<Solicitud>();
             for(int i = 0 ; i< filtroSol.size() ; i++){
                  if ( filtroSol.get(i).getPrenda().toUpperCase().contains(charSequence) || filtroSol.get(i).getTalla().toUpperCase().contains(charSequence)){
                       Solicitud s= new Solicitud(filtroSol.get(i).getPrenda(),filtroSol.get(i).getTalla(),filtroSol.get(i).getTela(),filtroSol.get(i).getColor(),filtroSol.get(i).getDescripcion());
                       filtro.add(s);
                  }
                }
             results.count= filtro.size();
             results.values= filtro;

            }else
            {

                results.count= filtroSol.size();
                results.values= filtroSol;

            }
            return results;
        }

        @Override
        protected void publishResults(CharSequence charSequence, FilterResults filterResults) {
            datos= (ArrayList<Solicitud>) filterResults.values;
            notifyDataSetChanged();

        }
    }*/
}


