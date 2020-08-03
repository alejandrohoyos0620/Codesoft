package alejandro.example.stampp;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.annotation.RequiresApi;
import androidx.appcompat.app.AlertDialog;
import androidx.appcompat.app.AppCompatActivity;
import androidx.constraintlayout.widget.ConstraintLayout;
import androidx.core.content.ContextCompat;
import androidx.core.content.FileProvider;

import android.app.ProgressDialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.content.IntentSender;
import android.content.pm.PackageManager;
import android.graphics.Bitmap;
import android.graphics.BitmapFactory;
import android.graphics.Matrix;
import android.media.MediaScannerConnection;
import android.net.Uri;
import android.os.Build;
import android.os.Bundle;
import android.os.Environment;
import android.provider.MediaStore;
import android.provider.Settings;
import android.util.Base64;
import android.util.Log;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.EditText;
import android.widget.ImageView;
import android.widget.Spinner;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

import com.android.volley.AuthFailureError;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;

import org.w3c.dom.Text;

import java.io.ByteArrayOutputStream;
import java.io.File;
import java.io.IOException;
import java.net.URL;
import java.util.HashMap;
import java.util.Map;

import yuku.ambilwarna.AmbilWarnaDialog;

import static android.Manifest.permission.CAMERA;
import static android.Manifest.permission.WRITE_EXTERNAL_STORAGE;

public class MainActivity extends AppCompatActivity {

    private static final int COD_SELECCIONA = 10;
    private static final int COD_FOTO = 20;

    private final String CARPETA_RAIZ="misImagenerStampp/";
    private final String CARPETA_IMAGEN="imagenes";
    private final String RUTA_IMAGEN=CARPETA_RAIZ+CARPETA_IMAGEN;

    private Spinner spinnerTipo;
    private Spinner spinnerTalla;
    private Spinner spinnerTela;
    private EditText edtNombreImagen;
    private EditText edtDescripcion;
    private Button btnEnviar;
    ConstraintLayout mLayout;
    private String idTalla;
    int mDefaultColor;
    Button mButton;
    Button btnFoto;
    TextView txtColor;
    ImageView imgFoto;
    private String path;
    File fileImagen;
    Bitmap bitmap;



    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        spinnerTipo =(Spinner)findViewById(R.id.sprinTipo);
        spinnerTalla =(Spinner)findViewById(R.id.sprinTalla);
        spinnerTela =(Spinner)findViewById(R.id.sprinTela);
        txtColor = (TextView)findViewById(R.id.txtPaletaColor);
        String [] opcionTipo = {"Seleccionar","Camisa","Buso","Pañoleta","Tapabocas","Gorra"};
        String [] opcionTalla = {"Seleccionar","XS","S","M","L","XL"};
        String [] opcionTela = {"Seleccionar","Loneta","Microfibra","Strech","Seda"};




        mLayout = (ConstraintLayout) findViewById(R.id.layout);
        mDefaultColor = ContextCompat.getColor(MainActivity.this, R.color.colorPrimary);
        mButton = (Button) findViewById(R.id.button);
        btnFoto =(Button) findViewById(R.id.btnExaminar);
        imgFoto = (ImageView) findViewById(R.id.imageView);
        mButton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                openColorPicker();
            }
        });

        ArrayAdapter<String> adapterTipo = new ArrayAdapter<String>(this, android.R.layout.simple_spinner_item,opcionTipo);
        spinnerTipo.setAdapter(adapterTipo);
        ArrayAdapter<String> adapterTalla = new ArrayAdapter<String>(this, android.R.layout.simple_spinner_item, opcionTalla);
        spinnerTalla.setAdapter(adapterTalla);
        ArrayAdapter<String> adapterTela = new ArrayAdapter<String>(this, android.R.layout.simple_spinner_item, opcionTela);
        spinnerTela.setAdapter(adapterTela);



        btnEnviar= findViewById(R.id.btnEnviar);
        edtNombreImagen=findViewById(R.id.edtNombreImagen);
        edtDescripcion=findViewById(R.id.edtDescripcion);
        btnEnviar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                ValidarUsuario( "http://192.168.1.64/code/?c=SolicitudDisenoControladora&m=Solicitar");
            }
        });
        btnFoto.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                cargarImagen();
            }
        });
        if(validarPermisos())
        {
            btnFoto.setEnabled(true);
        }
        else{
            btnFoto.setEnabled(false);
        }

    }

    private boolean validarPermisos() {
        if(Build.VERSION.SDK_INT<Build.VERSION_CODES.M)
        {
            return true;
        }
        if((checkSelfPermission(CAMERA)== PackageManager.PERMISSION_GRANTED)&&
        (checkSelfPermission(WRITE_EXTERNAL_STORAGE)== PackageManager.PERMISSION_GRANTED))
        {
            return true;
        }
        if((shouldShowRequestPermissionRationale(CAMERA))||
                (shouldShowRequestPermissionRationale(WRITE_EXTERNAL_STORAGE))){
            cargarDialogoRecomencacion();
        }
        else{
            requestPermissions(new String[]{WRITE_EXTERNAL_STORAGE,CAMERA},100);
        }
        return false;
    }

    @Override
    public void onRequestPermissionsResult(int requestCode, @NonNull String[] permissions, @NonNull int[] grantResults) {
        super.onRequestPermissionsResult(requestCode, permissions, grantResults);

        if(requestCode==100){
            if(grantResults.length==2 && grantResults[0]==PackageManager.PERMISSION_GRANTED
            && grantResults[1]==PackageManager.PERMISSION_GRANTED)
            {
                btnFoto.setEnabled(true);
            }
            else{
                solicitarPermisosManual();
            }
        }
    }

    private void solicitarPermisosManual() {
        final CharSequence[] opciones ={"si","no"};
        final AlertDialog.Builder alertOpciones = new AlertDialog.Builder(MainActivity.this);
        alertOpciones.setTitle("¿Desea configurar los permisos de forma manual?");
        alertOpciones.setItems(opciones, new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialogInterface, int i) {
                if(opciones[i].equals("si")){
                    Intent intent = new Intent();
                    intent.setAction(Settings.ACTION_APPLICATION_DETAILS_SETTINGS);
                    Uri uri = Uri.fromParts("package", getPackageName(),null);
                    intent.setData(uri);
                    startActivity(intent);
                }else{
                    Toast.makeText(getApplicationContext(), "Los permisos no fueron aceptados", Toast.LENGTH_SHORT);
                    dialogInterface.dismiss();
                }
            }
        });
        alertOpciones.show();
    }

    private void cargarDialogoRecomencacion() {
        AlertDialog.Builder dialogo = new AlertDialog.Builder(MainActivity.this);
        dialogo.setTitle("Permisos Desactivados");
        dialogo.setMessage("Debe aceptar los permisos para el correcto funcionamiento de la App");

        dialogo.setPositiveButton("Aceptar", new DialogInterface.OnClickListener() {

            @RequiresApi(api = Build.VERSION_CODES.M)
            @Override
            public void onClick(DialogInterface dialogInterface, int i) {
                requestPermissions(new String[]{WRITE_EXTERNAL_STORAGE,CAMERA},100);
            }
        });
        dialogo.show();

    }

    private void cargarImagen() {
        final CharSequence[] opciones ={"Tomar Foto","Cargar Imagen","Cancelar"};
        final AlertDialog.Builder alertOpciones = new AlertDialog.Builder(MainActivity.this);
        alertOpciones.setTitle("Seleccione una opción");
        alertOpciones.setItems(opciones, new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialogInterface, int i) {
                if(opciones[i].equals("Tomar Foto")){
                    tomarFotografia();
                }else{
                    if(opciones[i].equals("Cargar Imagen")){
                        Intent intent = new Intent(Intent.ACTION_PICK, MediaStore.Images.Media.EXTERNAL_CONTENT_URI);
                        intent.setType("image/");
                        startActivityForResult(intent.createChooser(intent,"Seleccione la aplicación"), COD_SELECCIONA);
                    }
                    else{
                        dialogInterface.dismiss();
                    }
                }
            }
        });
        alertOpciones.show();
    }

    private void tomarFotografia() {
        File fileImagen=new File(Environment.getExternalStorageDirectory(),RUTA_IMAGEN);
        boolean isCreada = fileImagen.exists();
        Log.i("entrada","ruta: "+RUTA_IMAGEN);
        if(isCreada==false)
        {
            isCreada = fileImagen.mkdirs();
        }
        if(isCreada==true)
        {
            Long consecutivo =System.currentTimeMillis()/1000;
            String nombreImagen = consecutivo.toString()+".jpg";

            path=Environment.getExternalStorageDirectory()+
                    File.separator+RUTA_IMAGEN+File.separator+nombreImagen;
            Log.i("entrada","PAT: "+path);
            File imagen = new File(path);
            Intent intent = new Intent(MediaStore.ACTION_IMAGE_CAPTURE);
            if(Build.VERSION.SDK_INT>=Build.VERSION_CODES.N)
            {
                String authorities = getApplicationContext().getPackageName()+".provider";
                Uri imageUri = FileProvider.getUriForFile(this,authorities,imagen);
                intent.putExtra(MediaStore.EXTRA_OUTPUT, imageUri);
            }
            else{
                intent.putExtra(MediaStore.EXTRA_OUTPUT, Uri.fromFile(imagen));
            }
            startActivityForResult(intent,COD_FOTO);

        }
    }

    @Override
    protected void onActivityResult(int requestCode, int resultCode, @Nullable Intent data) {
        super.onActivityResult(requestCode, resultCode, data);
            switch (requestCode){
                case COD_SELECCIONA:
                    Uri miPath = data.getData();
                    imgFoto.setImageURI(miPath);

                    try {
                        bitmap=MediaStore.Images.Media.getBitmap(this.getContentResolver(), miPath);
                        imgFoto.setImageBitmap(bitmap);
                    } catch (IOException e) {
                        e.printStackTrace();
                    }

                    break;
                case COD_FOTO:
                    MediaScannerConnection.scanFile(this, new String[]{path}, null, new MediaScannerConnection.OnScanCompletedListener() {
                        @Override
                        public void onScanCompleted(String s, Uri uri) {
                            Log.i("Ruta de almacenamiento","Path: "+path);
                        }
                    });
                    bitmap = BitmapFactory.decodeFile(path);
                    imgFoto.setImageBitmap(bitmap);
                    break;
            }
            bitmap= redimensionarImagen(bitmap,600,800);

    }

    private Bitmap redimensionarImagen(Bitmap bitmap, float anchoNuevo, float altoNuevo) {
       int ancho = bitmap.getWidth();
       int alto = bitmap.getHeight();
       if(ancho>anchoNuevo || alto > altoNuevo)
       {
           float escalaAncho = anchoNuevo/ancho;
           float escalaAlto = altoNuevo/alto;
           Matrix matriz = new Matrix();
           matriz.postScale(escalaAncho,escalaAlto);
           return Bitmap.createBitmap(bitmap,0,0,ancho,alto,matriz,false);
       }else{
           return bitmap;
       }
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
                int numero = Integer.parseInt(cadena);
                int valor =numero+16777215;
                if(valor<=0)
                {
                    valor= valor*(-1);
                }
                cadena=Integer.toHexString(valor);
                txtColor.setText("#"+cadena);
            }
        });
        colorPiker.show();
    }
    private void  ValidarUsuario(String url1){
        final String seleccionSprinTela = spinnerTela.getSelectedItem().toString();
        final String seleccionSprinTalla = spinnerTalla.getSelectedItem().toString();
        final String seleccionSprinTipo = spinnerTipo.getSelectedItem().toString();
        StringRequest stringRequest= new StringRequest(Request.Method.POST, url1, new Response.Listener<String>() {
            @Override
            public void onResponse(String response) {

                if (!response.isEmpty()){
                    Log.d("OnResponse", response);
                    Toast.makeText(MainActivity.this,"Se ha registrado con exito", Toast.LENGTH_SHORT).show();
                    Intent intent = new Intent(getApplicationContext(), MainActivity.class);
                    startActivity(intent);
                }else{
                    Toast.makeText(MainActivity.this, "Datos invalidos!!", Toast.LENGTH_SHORT).show();
                }
            }
        }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {
                Log.d("Error", error.toString());
                Toast.makeText(MainActivity.this, error.toString(), Toast.LENGTH_SHORT).show();


            }
        }){
            @Override
            protected Map<String, String> getParams() throws AuthFailureError {
                String imagenBitmap = convertirImgString(bitmap);
                Map<String,String> parametros = new HashMap<String,String>();
                parametros.put("prenda",seleccionSprinTipo);
                parametros.put("talla",seleccionSprinTalla);
                parametros.put("color",txtColor.getText().toString());
                parametros.put("tela",seleccionSprinTela);
                parametros.put("descripcion",edtDescripcion.getText().toString());
                parametros.put("imagename",edtNombreImagen.getText().toString());
                parametros.put("imagenMovil",imagenBitmap);
                parametros.put("Movil", "true");
                return parametros;
            }
        };

        RequestQueue requestQueue= Volley.newRequestQueue(this);
        requestQueue.add(stringRequest);
    }
    private String convertirImgString(Bitmap bitmap)
    {
        ByteArrayOutputStream array = new ByteArrayOutputStream();
        bitmap.compress(Bitmap.CompressFormat.JPEG,100,array);
        byte[] imageByte = array.toByteArray();
        String imagenString = Base64.encodeToString(imageByte,Base64.DEFAULT);
        return imagenString;
    }
    /**public void Enviar(View view ){
        Intent siguiente = new Intent(this, RegistrarClienteActivity.class);
        startActivity(siguiente);
    }*/
}