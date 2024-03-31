package com.example.finalsactivity;

import androidx.appcompat.app.AlertDialog;
import androidx.appcompat.app.AppCompatActivity;

import android.content.DialogInterface;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class MainActivity4 extends AppCompatActivity {

    TextView from, to;
    EditText quan;
    Button con;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main4);

        Intent y = getIntent();
        String destinationn = y.getStringExtra("destini");
        String arrivall = y.getStringExtra("arriv");

        String quantit = y.getStringExtra("quantit");



        quan = (EditText) findViewById(R.id.quant);
        from = (TextView)  findViewById(R.id.from);
        to = (TextView)  findViewById (R.id.to);
        con = (Button)  findViewById(R.id.contin);

        from.setText(destinationn);
        to.setText(arrivall);
        if (quantit != null){
            quan.setText(quantit  );
        }


       con.setOnClickListener(new View.OnClickListener() {
           @Override
           public void onClick(View view) {
               AlertDialog.Builder builer = new AlertDialog.Builder(MainActivity4.this);
               builer.setTitle("Confirmation");
               builer.setCancelable(false);
               builer.setMessage("From: " + destinationn + "\n" + "To: " +arrivall+"\n"+"Quantity: " + quan.getText().toString());
               builer.setPositiveButton("Yes", new DialogInterface.OnClickListener() {
                   @Override
                   public void onClick(DialogInterface dialogInterface, int i) {
                       Intent y = new Intent(MainActivity4.this,MainActivity3.class);
                       y.putExtra("destini",destinationn);
                       y.putExtra("arriv",arrivall);
                       y.putExtra("quantity",quan.getText().toString());
                       startActivity(y);
                   }

               });
               builer.setNegativeButton("No", new DialogInterface.OnClickListener() {
                   @Override
                   public void onClick(DialogInterface dialogInterface, int i) {

                   }
               });
               builer.show();
           }
       });


    }
}