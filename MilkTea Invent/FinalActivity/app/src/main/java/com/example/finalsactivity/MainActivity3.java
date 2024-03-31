package com.example.finalsactivity;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

public class MainActivity3 extends AppCompatActivity {
    TextView destination, arrival, quantity, price;
    Button neww ,backk;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main3);

        destination = (TextView) findViewById(R.id.destination);
        arrival = (TextView)  findViewById(R.id.arrival);
        quantity = (TextView) findViewById(R.id.quantity);
        backk = (Button) findViewById(R.id.back);
        neww = (Button) findViewById(R.id.neww);
        price = (TextView) findViewById(R.id.price);

        Intent y = getIntent();
        String destinationn = y.getStringExtra("destini");
        String arrivall = y.getStringExtra("arriv");
        String quant = y.getStringExtra("quantity");

        String [] array={"Central Terminal","Muzon","San jose","Dulong Bayan","Binay","4B","Bulacan State University","Starmall"};
        // Search for the target string in the array
        int arrivalll = -1;
        int destiniii = -1;

        // this is to count of length of array
        for (int i = 0; i < array.length; i++){
            // this check if the equal or not
            if (array[i].equals(destinationn)){
                destiniii = i;
                break;
            }
        }

        // this is to count of length of array
        for (int i = 0; i < array.length; i++){
            // this check if the equal or not
            if (array[i].equals(arrivall)){
                arrivalll = i ;
                break;
            }
        }
                // math.abs is remove of negative number
        int p = Math.abs(destiniii - arrivalll);

        if (p <= 3 ) {
            int total = 15 * Integer.parseInt (quant);
            price.setText(String.valueOf(total));
            destination.setText(destinationn);
            arrival.setText(arrivall);
            quantity.setText(quant);
        }else{
            int total = (p - 3) * 3 +15;
            int totall = total * Integer.parseInt (quant);
            price.setText(String.valueOf(totall));
            destination.setText(destinationn);
            arrival.setText(arrivall);
            quantity.setText(quant);
        }

        backk.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent y = new Intent(MainActivity3.this, MainActivity4.class);
                y.putExtra("destini",destinationn);
                y.putExtra("arriv",arrivall);
                y.putExtra("quantit",quant);
                startActivity(y);

            }
        });

        neww.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i = new Intent(MainActivity3.this, MainActivity.class);
                startActivity(i);
            }
        });

    }
}