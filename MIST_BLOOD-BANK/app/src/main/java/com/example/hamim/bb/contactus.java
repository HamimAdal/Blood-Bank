package com.example.hamim.bb;

import android.os.Bundle;
import android.app.Activity;
import android.content.Intent;
import android.view.View;
import android.view.View.OnClickListener;
import android.view.Window;
import android.view.WindowManager;
import android.widget.Button;


public class contactus extends Activity  {


    Button b10;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        requestWindowFeature(Window.FEATURE_NO_TITLE);

        this.getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN,
                WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.contactus);


        b10 = (Button) findViewById(R.id.bc);
        b10.setOnClickListener(new OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent z = new Intent(getApplicationContext(), coninfo.class);
                startActivity(z);


            }
        });





    }
}



