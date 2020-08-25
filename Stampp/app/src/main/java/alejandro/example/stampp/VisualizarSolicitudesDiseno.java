package alejandro.example.stampp;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;
import androidx.appcompat.widget.Toolbar;

import android.app.DownloadManager;
import android.content.Intent;
import android.os.Bundle;
import android.text.Editable;
import android.text.TextWatcher;
import android.util.Log;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ListView;
import android.widget.Toast;

import com.android.volley.AuthFailureError;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.JsonArrayRequest;
import com.android.volley.toolbox.JsonObjectRequest;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.lang.reflect.Array;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.LinkedList;
import java.util.List;
import java.util.Map;

public class VisualizarSolicitudesDiseno extends AppCompatActivity {
    Toolbar toolbar;
    ListView listaSolicitudes;
    Adaptador adaptador;
    String  urls = "";
    final LinkedList <String> salida = new LinkedList<>();
    RequestQueue requestQueue;
    ArrayList<Solicitud> datos = new ArrayList<Solicitud>();
    ArrayList<String> datosUrl = new ArrayList<String>();// acá almaceno las url de las imagenes.


    int[] datosImg={R.drawable.pokemon,R.drawable.dragonball,R.drawable.pokemon};
    Button Actualizar ;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        jsonParse( "http://192.168.1.50/code/?c=VisualizarSolicitudesDisenoControladora&m=EnviarMovil");
        setContentView(R.layout.activity_visualizar_solicitudes_diseno);
        listaSolicitudes = (ListView) findViewById(R.id.listaSolicitudes);
        toolbar=findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);

        listaSolicitudes.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> adapterView, View view, int i, long l) {
                Intent detallesSolicitud = new Intent(view.getContext(), detallesSolicitud.class);
                detallesSolicitud.putExtra("TIT",datos.get(i).getPrenda());
                detallesSolicitud.putExtra("DET",datos.get(i).getDescripcion());
                startActivity(detallesSolicitud);
            }
        });
        //System.out.println("ya comprobe hijodeputa");
       // traer("http://192.168.0.10/webservices/TraerImagen.php");

       //System.out.println("las urls son "+urls);
       /* actualizar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
               ,ListaDeRutasImagenes);
            }
        }); */
    }

 //:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
 private void jsonParse(String url2){
     JsonArrayRequest jsonArrayRequest1 = new JsonArrayRequest(Request.Method.POST, url2, null,
             new Response.Listener<JSONArray>() {
                 @Override
                 public void onResponse(JSONArray response) {
                     if(response.length()>=0){

                         JSONObject jsonObject = null;
                         for (int i = 0; i < response.length(); i++) {
                             try {
                                 jsonObject = response.getJSONObject(i);
                                 Solicitud solicitud= new Solicitud(jsonObject.getString("prenda"),jsonObject.getString("talla"),
                                         jsonObject.getString("tela"),jsonObject.getString("color"),jsonObject.getString("descripcion"));
                                 datos.add(solicitud);
                                 datosUrl.add(jsonObject.getString("urlImagen"));
                                 adaptador=new Adaptador(getApplicationContext(), datos, datosImg);
                                 listaSolicitudes.setAdapter(adaptador);

                             } catch (JSONException e) {
                                 Toast.makeText(getApplicationContext(), e.getMessage(), Toast.LENGTH_SHORT);
                             }
                         }
                     }else{
                         Toast.makeText(VisualizarSolicitudesDiseno.this, "Datos invalidos2!!", Toast.LENGTH_SHORT).show();
                     }

                 }
             }, new Response.ErrorListener() {
         @Override
         public void onErrorResponse(VolleyError error) {
             error.printStackTrace();
         }} );

     RequestQueue requestQueue = Volley.newRequestQueue(this);
     requestQueue.add(jsonArrayRequest1);

 }

//------------------------------------------------------------------------------------------------------------------------
  /* private void probarItemSanty(String RutaWS){
       traer(RutaWS);
    }


    private void traer(String infoImagen){
        JsonArrayRequest jsonArrayRequest = new JsonArrayRequest(infoImagen, new Response.Listener<JSONArray>() {
            @Override
            public void onResponse(JSONArray response) {
                JSONObject jsonObject = null;
                for (int i = 0; i < response.length(); i++) {
                    try {
                        jsonObject = response.getJSONObject(i);
                        salida.add( jsonObject.getString("url"));

                        Log.i("traer", "acabo de añadir a la lista que retornare "+salida.get(i) );
                        urls = urls+salida.get(i);
                    } catch (JSONException e) {
                        Toast.makeText(getApplicationContext(), e.getMessage(), Toast.LENGTH_SHORT).show();
                    }
                    System.out.println("el tamaño ahora es "+salida.size());
                    System.out.println("urls es: "+urls);
                }
            }
        }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {
                Toast.makeText(getApplicationContext(),  "error de conexion",Toast.LENGTH_SHORT).show();
            }
        }
        );

        requestQueue= Volley.newRequestQueue( this);
        requestQueue.add(jsonArrayRequest);

    }*/

    @Override
    public boolean onCreateOptionsMenu(Menu menu){
        getMenuInflater().inflate(R.menu.menu,menu);
        return true;
    }
    public boolean onOptionsItemSelected(@NonNull MenuItem item){
        int id=item.getItemId();

        if(id==R.id.opcion1){


            Toast.makeText(this,"OPCION 1",Toast.LENGTH_SHORT).show();
        } else if (id==R.id.opcion2){
            Toast.makeText(this,"OPCION 2",Toast.LENGTH_SHORT).show();
        } else if (id==R.id.opcion3){
            Toast.makeText(this,"OPCION 3",Toast.LENGTH_SHORT).show();
        } else if (id==R.id.opcion4){
            Toast.makeText(this,"OPCION 4",Toast.LENGTH_SHORT).show();
        } else if (id==R.id.opcion5){
            Toast.makeText(this,"OPCION 5",Toast.LENGTH_SHORT).show();
        }
        return true;

    }
}