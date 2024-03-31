package com.example.myapplication;

import androidx.appcompat.app.AlertDialog;
import androidx.appcompat.app.AppCompatActivity;

import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;
import android.widget.LinearLayout;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {
    Databasehelper dh;
    EditText etFName, etLName, etMName;
    SQLiteDatabase sql;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        dh = new Databasehelper(this);
        etFName = (EditText) findViewById(R.id.etaddfn);
        etLName = (EditText) findViewById(R.id.etaddln);
        etMName = (EditText) findViewById(R.id.etaddmn);

    }
    public  void showMessage(String title, String Message){
        AlertDialog.Builder alert = new AlertDialog.Builder(this);
        alert.setCancelable(true);
        alert.setTitle(title);
        alert.setMessage(Message);
        alert.show();
    }
    public void AddRecord (View v){
       boolean r = dh.insertData(etFName.getText().toString(),etLName.getText().toString(),etMName.getText().toString());

       if (r== true){
           Toast.makeText(this, "Add Record",Toast.LENGTH_LONG).show();
       }else {
           Toast.makeText(this, "Error adding record",Toast.LENGTH_LONG).show();

       }
    }
    public void  viewRecord (View v){
        Cursor res = dh.getData("SELECT * FROM ","0");
        if (res.getCount() == 0){
            showMessage("Record","No found");
        }
        StringBuffer buffer = new StringBuffer();
        while (res.moveToNext()){
            buffer.append("ID: " + res.getString(0)+"\n");
            buffer.append("First name: " + res.getString(1)+"\n");
            buffer.append("Last name: " + res.getString(2)+"\n");
             buffer.append("Middle name: " + res.getString(3)+"\n");

        }
        showMessage("Student Record",buffer.toString());
    }
}