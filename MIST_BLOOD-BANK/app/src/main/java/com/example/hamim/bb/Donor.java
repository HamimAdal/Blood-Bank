package com.example.hamim.bb;

import android.os.Bundle;
import android.app.Activity;
import android.content.Intent;

import android.view.View;
import android.view.View.OnClickListener;
import android.view.Window;
import android.view.WindowManager;
import android.widget.Button;


public class Donor extends Activity
{

    Button b4,b5;

    @Override
    protected void onCreate(Bundle savedInstanceState)
    {
        super.onCreate(savedInstanceState);
        requestWindowFeature(Window.FEATURE_NO_TITLE);

        this.getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN,
                WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.donor);
        b4 = (Button) findViewById(R.id.bad);
        b4.setOnClickListener(new OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent i = new Intent(getApplicationContext(),register.class);
                startActivity(i);

            }
        });
        b5 = (Button) findViewById(R.id.nad);
        b5.setOnClickListener(new OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent j = new Intent(getApplicationContext(), sign.class);
                startActivity(j);

            }
        });


    }





}