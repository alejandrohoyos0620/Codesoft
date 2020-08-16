package alejandro.example.stampp;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;
import androidx.appcompat.widget.Toolbar;

import android.content.Intent;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ListView;
import android.widget.Toast;

public class VisualizarSolicitudesDiseno extends AppCompatActivity {
    Toolbar toolbar;
    ListView listaSolicitudes;
    String[][] datos={
            {"Estampado Pokemon", "Camisa", "L", "Verde", "Algodon","Lo quiero en las mangas, tambien en la espalda y en la parte del frente en el pectoral" },
            {"Estampado Dragon Ball Z", "Pantalon","S","Naranja","Lino","Quiero que el estampado ocupe todo el pantalon, que sea un pantalon sin rotos"},
            {"Estampado logo Batman","Gorra","M","Negro","Seda","Quiero el logo de batman centrado ocupando todo el frente de la gorra"},
            {"Estamapdo camisa Spider Man","Camisa","XL","Rojo","Seda","Quiero que el estamapdo ocupe la totalidad tanto de frente como la espalda de la camisa"}
    };
    int[] datosImg={R.drawable.pokemon,R.drawable.dragonball,R.drawable.batman,R.drawable.spiderman};
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_visualizar_solicitudes_diseno);

        listaSolicitudes = (ListView) findViewById(R.id.listaSolicitudes);
        listaSolicitudes.setAdapter(new Adaptador(this,datos,datosImg));

        listaSolicitudes.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> adapterView, View view, int i, long l) {
                Intent detallesSolicitud = new Intent(view.getContext(), detallesSolicitud.class);
                detallesSolicitud.putExtra("TIT",datos[i][0]);
                detallesSolicitud.putExtra("DET",datos[i][5]);
                startActivity(detallesSolicitud);
            }
        });
        toolbar=findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);
    }
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