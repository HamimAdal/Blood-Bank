package com.example.hamim.bb;

import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.app.Activity;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

public class hospital extends Activity {

    Button b1, b2, b3,b4,c1,c2,c3,c4;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.hospital);
        b1 = (Button) findViewById(R.id.a1);
        b1.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent i = new Intent(getApplicationContext(), MapsActivity1.class);
                startActivity(i);


            }
        });

        b2 = (Button) findViewById(R.id.a2);
        b2.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent j = new Intent(getApplicationContext(), MapsActivity2.class);
                startActivity(j);


            }
        });


        b3 = (Button) findViewById(R.id.a3);
        b3.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent k = new Intent(getApplicationContext(), MapsActivity3.class);
                startActivity(k);


            }
        });
        b4 = (Button) findViewById(R.id.a4);
        b4.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent l = new Intent(getApplicationContext(), MapsActivity5.class);
                startActivity(l);


            }
        });

        c1 = (Button) findViewById(R.id.c1);
        c1.setOnClickListener(new View.OnClickListener()
        {

            @Override
            public void onClick(View v) {

               call1();


            }
        });
        c2 = (Button) findViewById(R.id.c2);
        c2.setOnClickListener(new View.OnClickListener()
        {

            @Override
            public void onClick(View v)
            {

              call2();


            }
        });
        c3 = (Button) findViewById(R.id.c3);
        c3.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View v) {

                call3();


            }
        });
        c4 = (Button) findViewById(R.id.c4);
        c4.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View v) {

                call4();


            }
        });







    }










    private void call1()
    {
        Intent in1=new Intent(Intent.ACTION_CALL, Uri.parse("tel:01729276556"));
        try
        {
            startActivity(in1);
        }

        catch (android.content.ActivityNotFoundException ex){
            Toast.makeText(getApplicationContext(), "yourActivity is not founded", Toast.LENGTH_SHORT).show();
        }
    }
    private void call2() {

        Intent in2=new Intent(Intent.ACTION_CALL, Uri.parse("tel:027319123"));
        try{
            startActivity(in2);
        }

        catch (android.content.ActivityNotFoundException ex){
            Toast.makeText(getApplicationContext(), "yourActivity is not founded", Toast.LENGTH_SHORT).show();
        }
    }
    private void call3() {
        Intent in3=new Intent(Intent.ACTION_CALL, Uri.parse("tel:028836444"));
        try{
            startActivity(in3);
        }

        catch (android.content.ActivityNotFoundException ex){
            Toast.makeText(getApplicationContext(), "yourActivity is not founded", Toast.LENGTH_SHORT).show();
        }
    }
    private void call4() {
        Intent in4=new Intent(Intent.ACTION_CALL, Uri.parse("tel:+94777275294"));
        try{
            startActivity(in4);
        }

        catch (android.content.ActivityNotFoundException ex){
            Toast.makeText(getApplicationContext(), "yourActivity is not founded", Toast.LENGTH_SHORT).show();
        }
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.menu_main, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.

        int id = item.getItemId();

        //noinspection SimplifiableIfStatement
        if (id == R.id.action_settings) {
            return true;
        }
        return super.onOptionsItemSelected(item);
    }




}
