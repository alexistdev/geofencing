package com.coder.geofencing.fragment;

import android.content.Intent;
import android.os.Bundle;

import androidx.cardview.widget.CardView;
import androidx.fragment.app.Fragment;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

import com.coder.geofencing.MapsActivity;
import com.coder.geofencing.R;

public class Home extends Fragment {

    private CardView mBtnMap;

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
    }

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {

        View mview = inflater.inflate(R.layout.fragment_home, container, false);
        mBtnMap = mview.findViewById(R.id.cd_map);
        mBtnMap.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(getActivity(), MapsActivity.class);
                startActivity(intent);
            }
        });
        return mview;
    }
}