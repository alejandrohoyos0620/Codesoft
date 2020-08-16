package alejandro.example.stampp;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.widget.TextView;

public class detallesSolicitud extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_detalles_solicitud);

        TextView titulo = (TextView) findViewById(R.id.tv_nombreDetalles);
        TextView descripcion = (TextView) findViewById(R.id.tv_descripcion);

        Intent intent = getIntent();
        Bundle b = intent.getExtras();

        if (b!=null){
            titulo.setText(b.getString("TIT"));
            descripcion.setText(b.getString("DET"));
        }
    }
}