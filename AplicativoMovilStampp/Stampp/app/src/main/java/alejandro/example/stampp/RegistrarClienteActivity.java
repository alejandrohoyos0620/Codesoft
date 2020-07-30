package alejandro.example.stampp;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;

public class RegistrarClienteActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_registrar_cliente);
    }
    //Método botón enviar
    public void Enviar(View view ){
        Intent siguiente = new Intent(this, MainActivity.class);
        startActivity(siguiente);
    }
}