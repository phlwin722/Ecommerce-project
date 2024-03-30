package com.example.finalsactivity;

import androidx.appcompat.app.AlertDialog;
import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

public class MainActivity2 extends AppCompatActivity {

    TextView tryy;
    Button central, muzon, sanjose, dulong, bb, bsuu, starmall , binay , plus, minus , print;
    EditText Quan;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main2);

        central = (Button) findViewById(R.id.central);
        muzon = (Button) findViewById(R.id.muzon);
        sanjose = (Button) findViewById(R.id.sanjose);
        dulong = (Button) findViewById(R.id.dulong);
        binay = (Button) findViewById(R.id.binay);
        bb = (Button) findViewById(R.id.bb);
        bsuu = (Button) findViewById(R.id.bsuu);
        starmall = (Button) findViewById(R.id.starmall);



        Intent i = getIntent();
        String destinii = i.getStringExtra("destini");
        String quantit = i.getStringExtra("quantit");
        String iii = i.getStringExtra("num");
        int co = Integer.parseInt(iii);
        if (quantit != null){
            Quan.setText(quantit  );
        }

        //((TextView)findViewById(R.id.titi)).setText(destination);*/

        central.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String central = "Central Terminal";

                   if (co == 1){
                        Toast.makeText(MainActivity2.this,"Same route are not allowed",Toast.LENGTH_LONG).show();
                   }else {
                   Intent y = new Intent(MainActivity2.this, MainActivity4.class);
                   y.putExtra("destini",destinii);
                   y.putExtra("arriv",central);
                   startActivity(y);
               }
            }
        });


        muzon.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String muzon = "Muzon";
              if(co == 2){

                  Toast.makeText(MainActivity2.this,"Same route are not allowed",Toast.LENGTH_LONG).show();

              }else {
                  Intent y = new Intent(MainActivity2.this, MainActivity4.class);
                  y.putExtra("destini",destinii);
                  y.putExtra("arriv",muzon);
                  startActivity(y);
                     }
            }
        });

        sanjose.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String sanjose = "San jose";
               if (co == 3){

               }else {
                   Intent y = new Intent(MainActivity2.this, MainActivity4.class);
                   y.putExtra("destini",destinii);
                   y.putExtra("arriv",sanjose);
                  startActivity(y);
               }
            }
        });

        dulong.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String dulong ="Dulong Bayan";
                if (co == 4){

                }else {
                    Intent y = new Intent(MainActivity2.this, MainActivity4.class);
                    y.putExtra("destini",destinii);
                    y.putExtra("arriv",dulong);
                    startActivity(y);
                }
            }
        });
        binay.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String binay = "Binay";
                if (co == 5) {

                }else {
                    Intent y = new Intent(MainActivity2.this, MainActivity4.class);
                    y.putExtra("destini",destinii);
                    y.putExtra("arriv",binay);
                    startActivity(y);
                }

            }
        });

        bb.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String bb = "4B";
               if (co == 6){

               }else {
                   Intent y = new Intent (MainActivity2.this, MainActivity4.class);
                   y.putExtra("destini",destinii);
                   y.putExtra("arriv",bb);
                  startActivity(y);
               }
            }
        });

        bsuu.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String bsu = "Bulacan State University";
               if (co == 7){

               }else {
                   Intent y = new Intent(MainActivity2.this, MainActivity4.class);
                   y.putExtra("destini",destinii);
                   y.putExtra("arriv",bsu);
                  startActivity(y);
               }
            }
        });

        starmall.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String starmall ="Starmall";
                if (co == 8){

                }else {
                    Intent y = new Intent(MainActivity2.this, MainActivity4.class);
                    y.putExtra("destini",destinii);
                    y.putExtra("arriv",starmall);
                     startActivity(y);
                }
            }
        });


    }
}