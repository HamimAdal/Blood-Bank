package com.example.hamim.bb;

import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.app.Activity;
import android.view.View;
import android.widget.Button;
import android.widget.Toast;

public class coninfo extends Activity {

    Button e1, e2, e3,b4,c1,c2,c3,c4;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.coininfo);

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

        e1 = (Button) findViewById(R.id.e1);
        e1.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent i = new Intent(getApplicationContext(), email.class);
                startActivity(i);


            }
        });


    }





    private void call1()
    {
        Intent in1=new Intent(Intent.ACTION_CALL, Uri.parse("tel:01681134447"));
        try
        {
            startActivity(in1);
        }

        catch (android.content.ActivityNotFoundException ex){
            Toast.makeText(getApplicationContext(), "yourActivity is not founded", Toast.LENGTH_SHORT).show();
        }
    }
    private void call2() {

        Intent in2=new Intent(Intent.ACTION_CALL, Uri.parse("tel:01622346465"));
        try{
            startActivity(in2);
        }

        catch (android.content.ActivityNotFoundException ex){
            Toast.makeText(getApplicationContext(), "yourActivity is not founded", Toast.LENGTH_SHORT).show();
        }
    }
    private void call3() {
        Intent in3=new Intent(Intent.ACTION_CALL, Uri.parse("tel:01672886448"));
        try{
            startActivity(in3);
        }

        catch (android.content.ActivityNotFoundException ex){
            Toast.makeText(getApplicationContext(), "yourActivity is not founded", Toast.LENGTH_SHORT).show();
        }
    }




}