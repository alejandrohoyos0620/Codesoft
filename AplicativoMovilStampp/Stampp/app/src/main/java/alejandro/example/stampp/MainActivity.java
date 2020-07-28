package alejandro.example.stampp;

import androidx.appcompat.app.AppCompatActivity;
import androidx.constraintlayout.widget.ConstraintLayout;
import androidx.core.content.ContextCompat;

import android.os.Bundle;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.Spinner;
import android.widget.Button;
import android.widget.TextView;

import org.w3c.dom.Text;

import yuku.ambilwarna.AmbilWarnaDialog;

public class MainActivity extends AppCompatActivity {

    private Spinner spinnerTipo;
    private Spinner spinnerTalla;
    private Spinner spinnerTela;
    ConstraintLayout mLayout;
    int mDefaultColor;
    Button mButton;
    TextView txtColor;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        spinnerTipo =(Spinner)findViewById(R.id.sprinTipo);
        spinnerTalla =(Spinner)findViewById(R.id.sprinTalla);
        spinnerTela =(Spinner)findViewById(R.id.sprinTela);
        txtColor = (TextView)findViewById(R.id.txtPaletaColor);
        String [] opcionTipo = {"Seleccionar","Camisa","Pantalón"};
        String [] opcionTalla = {"Seleccionar","XL","XXL"};
        String [] opcionTela = {"Seleccionar","Crepé","Satén"};

        mLayout = (ConstraintLayout) findViewById(R.id.layout);
        mDefaultColor = ContextCompat.getColor(MainActivity.this, R.color.colorPrimary);
        mButton = (Button) findViewById(R.id.button);
        mButton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                openColorPicker();
            }
        });

        ArrayAdapter<String> adapterTipo = new ArrayAdapter<String>(this, android.R.layout.simple_spinner_item, opcionTipo);
        spinnerTipo.setAdapter(adapterTipo);
        ArrayAdapter<String> adapterTalla = new ArrayAdapter<String>(this, android.R.layout.simple_spinner_item, opcionTalla);
        spinnerTalla.setAdapter(adapterTalla);
        ArrayAdapter<String> adapterTela = new ArrayAdapter<String>(this, android.R.layout.simple_spinner_item, opcionTela);
        spinnerTela.setAdapter(adapterTela);
    }
    public void openColorPicker(){
        AmbilWarnaDialog colorPiker = new AmbilWarnaDialog(this, mDefaultColor, new AmbilWarnaDialog.OnAmbilWarnaListener() {
            @Override
            public void onCancel(AmbilWarnaDialog dialog) {

            }

            @Override
            public void onOk(AmbilWarnaDialog dialog, int color) {
                mDefaultColor = color;
                String cadena = String.valueOf(color);
                txtColor.setText(cadena);
            }
        });
        colorPiker.show();
    }
}