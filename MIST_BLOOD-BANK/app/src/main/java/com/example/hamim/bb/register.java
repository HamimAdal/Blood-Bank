package com.example.hamim.bb;

import android.app.Activity;
import android.app.ProgressDialog;
import android.os.AsyncTask;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Spinner;
import android.widget.Toast;

import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;

public class register extends Activity implements View.OnClickListener{

    private EditText editTextName;
    private EditText editTextUsername;
    private EditText editTextPassword;
    //private EditText editTextBloodgroup;
    private EditText editTextcontact;
   // private EditText editTextArea;
    Spinner editTextArea;
    Spinner editTextBloodgroup;
    private EditText editTextAddress;
    private EditText editTextNationalidnumber;

    private Button buttonRegister;

    private static final String REGISTER_URL = "http://mistcse.eu.pn/register.php";


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.register);



        editTextName = (EditText) findViewById(R.id.editTextName);
        editTextUsername = (EditText) findViewById(R.id.editTextUserName);
        editTextPassword = (EditText) findViewById(R.id.editTextPassword);
        editTextBloodgroup = (Spinner) findViewById((R.id.editTextBloodgroup));
        editTextcontact = (EditText) findViewById(R.id.editContact);
        editTextArea = (Spinner) findViewById((R.id.editArea));

        //editTextArea = (EditText) findViewById(R.id.editArea);
        editTextAddress = (EditText) findViewById(R.id.editAddress);
        editTextNationalidnumber = (EditText) findViewById(R.id.editNationalidnumber);

        buttonRegister = (Button) findViewById(R.id.buttonRegister);

        buttonRegister.setOnClickListener(this);
    }

    @Override
    public void onClick(View v) {
        if(v == buttonRegister){
            registerUser();
        }
    }

    private void registerUser() {
        String name = editTextName.getText().toString();
        String username = editTextUsername.getText().toString();
        String password = editTextPassword.getText().toString();

      //  String bloodgroup = editTextBloodgroup.getText().toString();
        String contact = editTextcontact.getText().toString();
       // String area = editTextArea.getText().toString().trim();
        String bloodgroup = String.valueOf( editTextBloodgroup.getSelectedItem());

         String area = String.valueOf(editTextArea.getSelectedItem().toString());
        String address = editTextAddress.getText().toString();
        String nationalidnumber = editTextNationalidnumber.getText().toString();
        register(name, username, password, bloodgroup, contact, area, address,  nationalidnumber);
    }

    private void register(String name, String username, String password, String bloodgroup, String contact, String area, String address, String nationalidnumber) {
        String urlSuffix = "?name=" +name+ "&username=" +username+ "&password=" +password+ "&bloodgroup=" + bloodgroup
                + "&contact="+contact+"&area="+area+"&address="+address+"&nationalidnumber="+nationalidnumber;
        class RegisterUser extends AsyncTask<String, Void, String>{

            ProgressDialog loading;


            @Override
            protected void onPreExecute() {
                super.onPreExecute();
                loading = ProgressDialog.show(register.this, "Please Wait",null, true, true);
            }

            @Override
            protected void onPostExecute(String s) {
                super.onPostExecute(s);
                loading.dismiss();
                Toast.makeText(getApplicationContext(),s,Toast.LENGTH_LONG).show();
            }

            @Override
            protected String doInBackground(String... params) {
                String s = params[0];
                BufferedReader bufferedReader = null;
                try {
                    URL url = new URL(REGISTER_URL+s);
                    HttpURLConnection con = (HttpURLConnection) url.openConnection();
                    bufferedReader = new BufferedReader(new InputStreamReader(con.getInputStream()));

                    String result;

                    result = bufferedReader.readLine();

                    return result;
                }catch(Exception e){
                    return null;
                }
            }
        }

        RegisterUser ru = new RegisterUser();
        ru.execute(urlSuffix);
    }
}
