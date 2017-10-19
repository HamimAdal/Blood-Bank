package com.example.hamim.bb;

import android.os.Bundle;
import android.app.Activity;
import android.content.Intent;

import android.view.View;
import android.view.View.OnClickListener;
import android.view.Window;
import android.view.WindowManager;
import android.widget.Button;


public class sbbg extends Activity
{

    Button b4,b5,b6,b7,b8,b9;

    @Override
    protected void onCreate(Bundle savedInstanceState)
    {
        super.onCreate(savedInstanceState);
        requestWindowFeature(Window.FEATURE_NO_TITLE);

        this.getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN,
                WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.sbbg);


        b4 = (Button) findViewById(R.id.z1);
        b4.setOnClickListener(new OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent i = new Intent(getApplicationContext(), z1.class);
                startActivity(i);

            }
        });

        b5 = (Button) findViewById(R.id.z2);
        b5.setOnClickListener(new OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent i = new Intent(getApplicationContext(), z2.class);
                startActivity(i);

            }
        });

        b6 = (Button) findViewById(R.id.z3);
        b6.setOnClickListener(new OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent i = new Intent(getApplicationContext(), z3.class);
                startActivity(i);

            }
        });

        b7 = (Button) findViewById(R.id.z4);
        b7.setOnClickListener(new OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent i = new Intent(getApplicationContext(), z4.class);
                startActivity(i);

            }
        });

        b8 = (Button) findViewById(R.id.z5);
        b8.setOnClickListener(new OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent i = new Intent(getApplicationContext(), z5.class);
                startActivity(i);

            }
        });

        b9 = (Button) findViewById(R.id.z6);
        b9.setOnClickListener(new OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent i = new Intent(getApplicationContext(), z6.class);
                startActivity(i);

            }
        });

        b9 = (Button) findViewById(R.id.z7);
        b9.setOnClickListener(new OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent i = new Intent(getApplicationContext(), z7.class);
                startActivity(i);

            }
        });
        b9 = (Button) findViewById(R.id.z8);
        b9.setOnClickListener(new OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent i = new Intent(getApplicationContext(), z8.class);
                startActivity(i);

            }
        });


    }





}

