package com.example.hamim.bb;

import android.os.Bundle;
import android.app.Activity;
import android.content.Intent;

import android.view.View;
import android.view.View.OnClickListener;
import android.view.Window;
import android.view.WindowManager;
import android.widget.Button;


public class sba extends Activity
{

    Button b4,b5,b6,b7,b8,b9,b10,b11,b12,b13,b14,b15,b16,b17,b18,b19,b20,map,test;

    @Override
    protected void onCreate(Bundle savedInstanceState)
    {
        super.onCreate(savedInstanceState);
        requestWindowFeature(Window.FEATURE_NO_TITLE);

        this.getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN,
                WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.sba);
        b4 = (Button) findViewById(R.id.a2);
        b4.setOnClickListener(new OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent i = new Intent(getApplicationContext(), banani.class);
                startActivity(i);

            }
        });
        b5 = (Button) findViewById(R.id.a1);
        b5.setOnClickListener(new OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent i = new Intent(getApplicationContext(), baileyroad.class);
                startActivity(i);

            }
        });
        b6 = (Button) findViewById(R.id.a3);
        b6.setOnClickListener(new OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent i = new Intent(getApplicationContext(), banasree.class);
                startActivity(i);

            }
        });
        b7 = (Button) findViewById(R.id.a4);
        b7.setOnClickListener(new OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent i = new Intent(getApplicationContext(), banglamotor.class);
                startActivity(i);

            }
        });
        b8 = (Button) findViewById(R.id.a5);
        b8.setOnClickListener(new OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent i = new Intent(getApplicationContext(), baridhara.class);
                startActivity(i);

            }
        });
        b9 = (Button) findViewById(R.id.a6);
        b9.setOnClickListener(new OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent i = new Intent(getApplicationContext(), dhanmondi.class);
                startActivity(i);

            }
        });
        b10 = (Button) findViewById(R.id.a7);
        b10.setOnClickListener(new OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent i = new Intent(getApplicationContext(), eskatonroad.class);
                startActivity(i);

            }
        });
        b11 = (Button) findViewById(R.id.a8);
        b11.setOnClickListener(new OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent i = new Intent(getApplicationContext(), greenroad.class);
                startActivity(i);

            }
        });
        b12 = (Button) findViewById(R.id.a9);
        b12.setOnClickListener(new OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent i = new Intent(getApplicationContext(), gulshan.class);
                startActivity(i);

            }
        });
        b13 = (Button) findViewById(R.id.a10);
        b13.setOnClickListener(new OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent i = new Intent(getApplicationContext(), kalabagan.class);
                startActivity(i);

            }
        });
        b14 = (Button) findViewById(R.id.a11);
        b14.setOnClickListener(new OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent i = new Intent(getApplicationContext(), lalmatia.class);
                startActivity(i);

            }
        });
        b15 = (Button) findViewById(R.id.a12);
        b15.setOnClickListener(new OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent i = new Intent(getApplicationContext(), malibagh.class);
                startActivity(i);

            }
        });
        b16 = (Button) findViewById(R.id.a13);
        b16.setOnClickListener(new OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent i = new Intent(getApplicationContext(), moghbazar.class);
                startActivity(i);

            }
        });
        b17 = (Button) findViewById(R.id.a14);
        b17.setOnClickListener(new OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent i = new Intent(getApplicationContext(), mohakhali.class);
                startActivity(i);

            }
        });
        b18 = (Button) findViewById(R.id.a15);
        b18.setOnClickListener(new OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent i = new Intent(getApplicationContext(), mohammadpur.class);
                startActivity(i);

            }
        });
        b19 = (Button) findViewById(R.id.a16);
        b19.setOnClickListener(new OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent i = new Intent(getApplicationContext(), shantinagar.class);
                startActivity(i);

            }
        });
        b20 = (Button) findViewById(R.id.a17);
        b20.setOnClickListener(new OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent i = new Intent(getApplicationContext(), uttara.class);
                startActivity(i);

            }
        });


        map = (Button) findViewById(R.id.map);
        map.setOnClickListener(new OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent i = new Intent(getApplicationContext(), MapsActivitylocation.class);
                startActivity(i);

            }
        });






    }





}
