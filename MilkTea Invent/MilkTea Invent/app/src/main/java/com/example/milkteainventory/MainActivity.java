package com.example.milkteainventory;

import androidx.appcompat.app.AlertDialog;
import androidx.appcompat.app.AppCompatActivity;

import android.content.DialogInterface;
import android.os.Bundle;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ListView;
import android.widget.Spinner;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {
    Spinner listitem;
    EditText price, quantity;

    Button process, cancel;
    ListView list;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        price = (EditText) findViewById(R.id.price);
        process = (Button) findViewById(R.id.process);
        quantity = (EditText) findViewById(R.id.quantity);
        cancel = (Button)  findViewById(R.id.cancel);
        listitem = (Spinner) findViewById(R.id.listitem);
        list = (ListView )  findViewById(R.id.list);

        // this code is how to create Spinner
        String milk [] =
                {"Classic", "Winder Melon",
                        "Chocolate","Cookies and Cream"};
        ArrayAdapter<String> adapter = new ArrayAdapter<String>(MainActivity.this, android.R.layout.simple_dropdown_item_1line,milk);
        adapter.setDropDownViewResource(android.R.layout.simple_dropdown_item_1line);
        listitem.setAdapter(adapter);

        // list adapter
        String nameofproduct[]
                = { "Sugar", "Creamer",
                "Tea", "Winter Melon",
                "Chocolate", "Cookies & Cream" };
        int grams [] = {1000,1000,1000,1000,1000,1000};
        // Create a new array to store the concatenated strings
        String[] productWithGrams = new String[nameofproduct.length];
        for (int i = 0; i < nameofproduct.length; i++) {
            productWithGrams[i] = nameofproduct[i] + " - " + grams[i] + "g";
        }

        // Create and set ArrayAdapter
        ArrayAdapter<String> arr = new ArrayAdapter<>(this, android.R.layout.simple_list_item_1, productWithGrams);
        list.setAdapter(arr);
        // is to get selected spinner
        String lists = listitem.getSelectedItem().toString();
        price.setEnabled(false);

        if (listitem.isHovered()){
            if (lists.equals("Classic")){
                price.setText("40");
            }else if (lists.equals("Winter Melon")){
                price.setText("45");
            }else if (lists.equals("Chocolate")){
                price.setText("50");
            }else if (list.equals("Cookies and Cream")){
                price.setText("55");
            }

        }
        process.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                // this code is to get selected item in spinner

                int total = Integer.parseInt(price.getText().toString()) * Integer.parseInt(quantity.getText().toString());
                AlertDialog.Builder builder = new AlertDialog.Builder(MainActivity.this);
                builder.setCancelable(false);
                builder.setTitle("Confirmation");
                builder.setMessage("MilkTea: \t"+lists+"\nPrice:\t"+price.getText().toString()+"\nQuantity:\t"+quantity.getText().toString()+"\nTotal: "+total);
                builder.setPositiveButton("OK", new DialogInterface.OnClickListener() {
                    @Override
                    public void onClick(DialogInterface dialogInterface, int i) {

                        if (lists.equals("Classic")){
                            int sugar = 16;
                            int creamer = 12;
                            int tea =  80;

                            for(int o = 0; o < 1; o++){
                                grams[0] = grams[0] - sugar;
                                grams[1] = grams[1] - creamer;
                                grams[2] = grams[2] - tea;
                            }

                            price.setText("0");
                        }else if (lists.equals("Winter Melon")){
                            int sugar = 14;
                            int creamer = 15;
                            int tea =  90;
                            int wintermelon = 80;

                            for (int o = 0; o < 1; o++){
                                grams[0] = grams[0] - sugar;
                                grams[1] = grams[1] - creamer;
                                grams[2] = grams[2] - tea;
                                grams[3] = grams[3] - wintermelon;
                            }
                        }else if (lists.equals("Chocolate")){
                            int sugar = 14;
                            int creamer = 15;
                            int tea =  90;
                            int chocolate = 80;

                            for (int o = 0; o < 1; o++){
                                grams[0] = grams[0] - sugar;
                                grams[1] = grams[1] - creamer;
                                grams[2] = grams[2] - tea;
                                grams[4] = grams[4] - chocolate;
                            }

                        }else if (list.equals("Cookies and Cream")){
                            int sugar = 14;
                            int creamer = 15;
                            int tea =  90;
                            int chocolate = 80;
                            for (int o = 0; o < 1; o++){
                                grams[0] = grams[0] - sugar;
                                grams[1] = grams[1] - creamer;
                                grams[2] = grams[2] - tea;
                                grams[5] = grams[5] - chocolate;
                            }
                        }
                    }
                });
                builder.setNegativeButton("NO", new DialogInterface.OnClickListener() {
                    @Override
                    public void onClick(DialogInterface dialogInterface, int i) {

                    }
                });
                builder.show();
            }
        });


    }
}