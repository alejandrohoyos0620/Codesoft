package alejandro.example.stampp;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.android.volley.AuthFailureError;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;

import java.util.HashMap;
import java.util.Map;

public class RegistrarClienteActivity extends AppCompatActivity {
    EditText edNombreUsuario,edNombre,edApellido, edFechaNacimiento,edCorreo,edPassword,edVPassword;
    Button btnRegistro;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_registrar_cliente);
        edNombreUsuario= findViewById(R.id.edtNombreUsuario);
        edNombre=findViewById(R.id.edtNombre);
        edApellido= findViewById(R.id.edtApellidos);
        edFechaNacimiento=findViewById(R.id.edtFechaNacimiento);
        edCorreo=findViewById(R.id.edtCorreoElectronico);
        edPassword=findViewById(R.id.edtContrasena);
        edVPassword=findViewById(R.id.edtVerifContrasena);
        btnRegistro=findViewById(R.id.btnRegistrar);
        btnRegistro.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                ValidarUsuario( "http://192.168.1.64/code/?c=RegistroCompradorEstampadosControladora&m=Registrar");
            }
        });

    }

    private void  ValidarUsuario(String url1){

        StringRequest stringRequest= new StringRequest(Request.Method.POST, url1, new Response.Listener<String>() {
            @Override
            public void onResponse(String response) {

                if (!response.isEmpty()){

                    Log.d("OnResponse", response);
                    Intent intent = new Intent(getApplicationContext(), MainActivity.class);
                    startActivity(intent);


                }else{
                    Toast.makeText(RegistrarClienteActivity.this, "Datos invalidos!!", Toast.LENGTH_SHORT).show();
                }
            }
        }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {
                Log.d("Error", error.toString());
                Toast.makeText(RegistrarClienteActivity.this, error.toString(), Toast.LENGTH_SHORT).show();


            }
        }){
            @Override
            protected Map<String, String> getParams() throws AuthFailureError {
                Map<String,String> parametros = new HashMap<String,String>();
                parametros.put("nombreUsuario",edNombreUsuario.getText().toString());
                parametros.put("nombre",edNombre.getText().toString());
                parametros.put("apellidos",edApellido.getText().toString());
                parametros.put("fechaNacimiento",edFechaNacimiento.getText().toString());
                parametros.put("email",edCorreo.getText().toString());
                parametros.put("contrasena",edPassword.getText().toString());
                parametros.put("verificarContrasena",edVPassword.getText().toString());
                parametros.put("submit","submit");
                return parametros;
            }
        };
        RequestQueue requestQueue= Volley.newRequestQueue(this);
        Log.d("cosa", stringRequest.toString());
        requestQueue.add(stringRequest);
    }




}