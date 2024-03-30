package com.example.myapplication;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.TextView;

import androidx.annotation.NonNull;

public class CustomAdapter extends ArrayAdapter<String> {
    Context c;
    String[] fn;
    String[] ln;
    String[] mn, id;

    LayoutInflater inflater;

    public CustomAdapter( Context context, String[] fn, String[] ln, String[] mn, String[] id) {
        super(context, R.layout.row,id);
        this.c = context;
        this.id = id;
        this.fn = fn;
        this.ln = ln;
        this.mn =mn;

    }
    public  class viewHolder {
        TextView tvfn, tvln, tvmn;
    }
    @Override
    public View getView (int position, View convertView, ViewGroup parent){
        if (convertView == null){
            inflater = (LayoutInflater) c.getSystemService(Context.LAYOUT_INFLATER_SERVICE);
            convertView = inflater.inflate(R.layout.row,null);
        }
        viewHolder vh = new viewHolder();;
        vh.tvfn = (TextView) convertView.findViewById(R.id.tvRowfn);
        vh.tvln = (TextView) convertView.findViewById(R.id.tvRowln);
        vh.tvmn = (TextView) convertView.findViewById(R.id.tvRowmn);

        vh.tvfn.setText(fn[position]);
        vh.tvln.setText(ln[position]);
        vh.tvmn.setText(mn[position]);

        return convertView;
    }
}
