package com.example.finalsactivity;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class MainActivity extends AppCompatActivity {

    Button central, muzon, sanjose, dulongbayan, binay, bb, bsu , starmall;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        central = (Button)findViewById(R.id.central);
        muzon = (Button) findViewById(R.id.muzon);
        sanjose = (Button) findViewById(R.id.sanjose);
        dulongbayan = (Button) findViewById(R.id.dulong);
        binay = (Button) findViewById(R.id.binay);
        bb = (Button) findViewById(R.id.bb);
        bsu = (Button) findViewById(R.id.bsu);
        starmall = (Button) findViewById(R.id.starmall);

        central.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String central = "Central Terminal";
                String ii = "1";
                Intent i = new Intent(MainActivity.this, MainActivity2.class);
                i.putExtra("destini",central);
                i.putExtra("num",ii);
                startActivity(i);
            }
        });

        muzon.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String Muzon = "Muzon";
                String ii = "2";
                Intent i = new Intent(MainActivity.this, MainActivity2.class);
                i.putExtra("destini",Muzon);
                i.putExtra("num",ii);
                startActivity(i);
            }
        });

        sanjose.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String sanjose = "San jose ";
                String ii = "3";
                Intent i = new Intent(MainActivity.this, MainActivity2.class);
                i.putExtra("destini",sanjose);
                i.putExtra("num",ii);
                startActivity(i);
            }
        });

        dulongbayan.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String dulongbayan = "Dulong Bayan";
                String ii = "4";
                Intent i = new Intent(MainActivity.this, MainActivity2.class);
                i.putExtra("destini",dulongbayan);
                i.putExtra("num",ii);
                startActivity(i);
            }
        });

        binay.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String binay = "Binay";
                String ii = "5";
                Intent i = new Intent(MainActivity.this, MainActivity2.class);
                i.putExtra("destini",binay);
                i.putExtra("num",ii);
                startActivity(i);
            }
        });

        bb.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String bb = "4B";
                String ii = "6";
                Intent i = new Intent(MainActivity.this, MainActivity2.class);
                i.putExtra("destini",bb);
                i.putExtra("num",ii);
                startActivity(i);
            }
        });

        bsu.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String bsu = "Bulacan State University";
                String ii = "7";
                Intent i = new Intent(MainActivity.this, MainActivity2.class);
                i.putExtra("destini",bsu);
                i.putExtra("num",ii);
                startActivity(i);
            }
        });

        starmall.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String starmall = "StarMall";
                String ii = "8";
                Intent i = new Intent(MainActivity.this, MainActivity2.class);
                i.putExtra("destini",starmall);
                i.putExtra("num",ii);
                startActivity(i);
            }
        });
    }
}