package com.coder.geofencing;

import android.content.BroadcastReceiver;
import android.content.Context;
import android.content.Intent;
import android.widget.Toast;

public class GeofenceBroadcastReceiver extends BroadcastReceiver {

    @Override
    public void onReceive(Context context, Intent intent) {
        // TODO: This method is called when the BroadcastReceiver is receiving
        // an Intent broadcast.
        Toast.makeText(context,"ANDA MEMASUKI KAWASAN RAWAN KECELAKAAN LALU LINTAS !!!",Toast.LENGTH_SHORT).show();
    }
}