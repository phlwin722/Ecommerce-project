package com.example.myapplication;

import android.content.ContentValues;
import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;

import androidx.annotation.Nullable;

public class Databasehelper extends SQLiteOpenHelper
{
    public static final String db_name="sample_db";
    public static  final String tbl_name="sample_tbl";

    public Databasehelper(Context context) {
        super(context,db_name,null,1);
    }

    @Override
    public void onCreate(SQLiteDatabase sqLiteDatabase) {
        sqLiteDatabase.execSQL("CREATE TABLE "+ tbl_name + "(id Integer Primary Key AutoIncrement," +
                "Fname text, Lname text, Mname text)");
    }

    @Override
    public void onUpgrade(SQLiteDatabase sqLiteDatabase, int i, int i1) {
        // updating input the database
        sqLiteDatabase.execSQL("Drop table if exist " + tbl_name);
        onCreate(sqLiteDatabase);
    }
    public Cursor getData(String query, String id){
        SQLiteDatabase sqLiteDatabase = this.getWritableDatabase();
        Cursor res;

        if (id == "0"){
            // if equal 0 the data will retrive
            res=sqLiteDatabase.rawQuery(query + tbl_name, null) ;
        }
        else{
            res = sqLiteDatabase.rawQuery(query+tbl_name+"WHERE id ='"+id+"'",null);
        }
        return res;
    }
    // insert data
    public boolean insertData(String FN, String LN, String MN){
        SQLiteDatabase  sqLiteDatabase = this.getWritableDatabase();
        ContentValues cv =  new ContentValues();
        cv.put("FName",FN);
        cv.put("Lname",LN);
        cv.put("Mname",MN);

        long insert = sqLiteDatabase.insert (tbl_name,null,cv);
        if (insert == -1){
            return false;
        }
        else{
            return true;
        }
    }
    // update date
    public boolean updateData(String id,String FN, String LN, String MN){
        SQLiteDatabase sqLiteDatabase = this.getWritableDatabase();
        ContentValues cv = new ContentValues();
        cv.put("FName",FN);
        cv.put("Lname",LN);
        cv.put("Mname",MN);

        long update = sqLiteDatabase.update(tbl_name,cv,"id=?", new String [] {id});
        if (update == -1){
            return false;
        }else{
            return true;
        }

    }
    public boolean deleteData(String id){
        SQLiteDatabase sqLiteDatabase = this.getWritableDatabase();
        long delete = sqLiteDatabase.delete (tbl_name,"id", new String[] {id});
        if (delete == -1){
            return false;
        }else{
            return true;
        }
    }
}
