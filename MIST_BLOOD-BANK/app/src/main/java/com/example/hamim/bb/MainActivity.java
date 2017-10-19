package com.example.hamim.bb;

import android.os.Bundle;
import android.app.Activity;
import android.content.Intent;
import android.view.Menu;
import android.view.View;
import android.view.View.OnClickListener;
import android.view.Window;
import android.view.WindowManager;
import android.widget.Button;


public class MainActivity extends Activity  {


    Button b1, b2, b3,b4;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        requestWindowFeature(Window.FEATURE_NO_TITLE);

        this.getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN,
                WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.activity_main);


        b1 = (Button) findViewById(R.id.d);
        b1.setOnClickListener(new OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent i = new Intent(getApplicationContext(), Donor.class);
                startActivity(i);


            }
        });

        b2 = (Button) findViewById(R.id.c);
        b2.setOnClickListener(new OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent j = new Intent(getApplicationContext(), coninfo.class);
                startActivity(j);


            }
        });


        b3 = (Button) findViewById(R.id.b);
        b3.setOnClickListener(new OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent k = new Intent(getApplicationContext(), aboutus.class);
                startActivity(k);


            }
        });
        b4 = (Button) findViewById(R.id.ho);
        b4.setOnClickListener(new OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent l = new Intent(getApplicationContext(), hospital.class);
                startActivity(l);


            }
        });




    }
}



       /* @Override



       public void onClick (View v)
        {



            switch (v.getId())
            {

                case R.id.d: {
                    Intent i = new Intent(getApplicationContext(), Donor.class);
                    startActivity(i);
                    setContentView(R.layout.donor);

                    break;

                }
                case R.id.c: {
                    Intent j = new Intent(getApplicationContext(), coininfo.class);
                    startActivity(j);
                    setContentView(R.layout.coininfo);
                    break;
                }
                case R.id.b: {
                    Intent k = new Intent(getApplicationContext(), aboutus.class);
                    startActivity(k);
                    setContentView(R.layout.aboutus);
                    break;
                }
                default:
                    break;
            }

            setContentView(R.layout.activity_main);
        }



}




   /* @Override
    public void onClick(View v)
    {

        Intent i = new Intent(getApplicationContext(),Donor.class);
        startActivity(i);
        setContentView(R.layout.donor);
        Intent j = new Intent(getApplicationContext(),coininfo.class);
        startActivity(j);
        setContentView(R.layout.coininfo);
        Intent k = new Intent(getApplicationContext(),aboutus.class);
        startActivity(k);
        setContentView(R.layout.aboutus);
    }



*/
