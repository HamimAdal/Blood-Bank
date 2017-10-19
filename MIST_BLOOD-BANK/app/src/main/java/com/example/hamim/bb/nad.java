package com.example.hamim.bb;



import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.app.Activity;
import android.widget.TextView;

public class nad extends Activity {

    private TextView textView;
    Button b4,b5,b6,b7;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.reg1);

        textView = (TextView) findViewById(R.id.textViewUserName);

        Intent intent = getIntent();

        String username = intent.getStringExtra(sign.USER_NAME);

        textView.setText("Welcome  "+username+"!!!");

        b4 = (Button) findViewById(R.id.better);
        b4.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent i = new Intent(getApplicationContext(), sba.class);
                startActivity(i);

            }
        });

        b5 = (Button) findViewById(R.id.better1);
        b5.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent i = new Intent(getApplicationContext(),sbr.class);
                startActivity(i);

            }
        });

        b6 = (Button) findViewById(R.id.sbb);
        b6.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent i = new Intent(getApplicationContext(), sbbg.class);
                startActivity(i);

            }
        });
        b7 = (Button) findViewById(R.id.sbb1);
        b7.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View v) {

                Intent i = new Intent(getApplicationContext(), sign.class);
                startActivity(i);

            }
        });

    }

}