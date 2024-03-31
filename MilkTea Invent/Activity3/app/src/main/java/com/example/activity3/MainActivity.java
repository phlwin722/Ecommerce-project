package com.example.activity3;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.LinearLayout;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {
        //
        @Override
        protected void onCreate(Bundle savedInstanceState) {
            super.onCreate(savedInstanceState);
            setContentView(R.layout.activity_main);

            LinearLayout LL = new LinearLayout(this);
            LL.setOrientation(LinearLayout.VERTICAL);
            LL.setPadding(30,30,30,30);

            LinearLayout first = new LinearLayout(this);
            first.setOrientation(LinearLayout.HORIZONTAL);

          final EditText one = new EditText(this);
            one.setWidth(1200);
            one.setGravity(View.TEXT_ALIGNMENT_GRAVITY);

            TextView tvsign = new TextView(this);
            tvsign.setTextSize(20);
            tvsign.setWidth(50);



        final EditText two = new EditText(this);
            two.setWidth(1200);
            two.setGravity(View.TEXT_ALIGNMENT_GRAVITY);

            LL.addView(first);
            first.addView(one);
            first.addView(tvsign);
            first.addView(two);


            LinearLayout second = new LinearLayout(this);
            second.setGravity(View.TEXT_ALIGNMENT_GRAVITY);

            TextView output = new TextView(this);
            output.setWidth(3000);
            output.setGravity(View.TEXT_ALIGNMENT_GRAVITY);


            LinearLayout third = new LinearLayout(this);
            third.setOrientation(LinearLayout.HORIZONTAL);
            third.setGravity(View.TEXT_ALIGNMENT_GRAVITY);


            Button plus = new Button(this);
            plus.setText("+");
            plus.setTextSize(25);
            plus.setPadding(20,20,20,20);

            Button minus = new Button(this);
            minus.setText("-");
            minus.setTextSize(25);
            minus.setPadding(20,20,20,20);


            Button time = new Button(this);
            time.setText("*");
            time.setTextSize(25);
            time.setPadding(20,20,20,20);

            Button divide = new Button(this);
            divide.setText("/");
            divide.setTextSize(25);
            divide.setPadding(20,20,20,20);

            LL.addView(second);
            second.addView(output);
            LL.addView(third);
            third.addView(plus);
            third.addView(minus);
            third.addView(time);
            third.addView(divide);

            LinearLayout fourth = new LinearLayout(this);
            fourth.setOrientation(LinearLayout.HORIZONTAL);
            fourth.setGravity(View.TEXT_ALIGNMENT_GRAVITY);

            Button zero = new Button(this);
            zero.setText("0");
            zero.setTextSize(25);
            zero.setPadding(20,20,20,20);

            Button modulus = new Button(this);
            modulus.setText("%");
            modulus.setTextSize(25);
            modulus.setPadding(20,20,20,20);

            Button c = new Button(this);
            c.setText("C");
            c.setTextSize(25);
            c.setPadding(20,20,20,20);

            LL.addView(fourth);
            fourth.addView(zero);
            fourth.addView(modulus);
            fourth.addView(c);

            LinearLayout myMainLayout = findViewById(R.id.calculator);
            myMainLayout.addView(LL);


            plus.setOnClickListener(new View.OnClickListener() {
                @Override
                public void onClick(View view) {
                    tvsign.setText("+");

                    double onee = Double.parseDouble(one.getText().toString());
                    double twoo = Double.parseDouble(two.getText().toString());

                    double total = onee + twoo ;
                    output.setText(String.valueOf(total));
                }
            });

            minus.setOnClickListener(new View.OnClickListener() {
                @Override
                public void onClick(View view) {
                    tvsign.setText("=");
                    double onee = Double.parseDouble(one.getText().toString());
                    double twoo = Double.parseDouble(two.getText().toString());

                    double total = onee - twoo ;
                    output.setText(String.valueOf(total));
                }
            });

            time.setOnClickListener(new View.OnClickListener() {
                @Override
                public void onClick(View view) {
                    tvsign.setText("*");
                    double onee = Double.parseDouble(one.getText().toString());
                    double twoo = Double.parseDouble(two.getText().toString());

                    double total = onee * twoo ;
                    output.setText(String.valueOf(total));
                }
            });
            divide.setOnClickListener(new View.OnClickListener() {
                @Override
                public void onClick(View view) {
                    double onee = Double.parseDouble(one.getText().toString());
                    double twoo = Double.parseDouble(two.getText().toString());

                    double total = onee / twoo ;
                    output.setText(String.valueOf(total));
                }
            });
            modulus.setOnClickListener(new View.OnClickListener() {
                @Override
                public void onClick(View view) {
                    tvsign.setText("%");
                    double onee = Double.parseDouble(one.getText().toString());
                    double twoo = Double.parseDouble(two.getText().toString());

                    double total = onee % twoo ;
                    output.setText(String.valueOf(total)); }
            });
            zero.setOnClickListener(new View.OnClickListener() {
                @Override
                public void onClick(View view) {
                    one.setText("0");
                    double onee = Double.parseDouble(one.getText().toString());
                    double twoo = Double.parseDouble(two.getText().toString());
                }
            });
            c.setOnClickListener(new View.OnClickListener() {
                @Override
                public void onClick(View view) {
                    tvsign.setText("");
                    one.setText("");
                    two.setText("");
                    output.setText("");
                }
            });
        }

    }