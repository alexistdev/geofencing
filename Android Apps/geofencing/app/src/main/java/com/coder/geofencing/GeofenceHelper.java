package com.coder.geofencing;

import android.app.PendingIntent;
import android.content.Context;
import android.content.ContextWrapper;

import com.google.android.gms.location.Geofence;
import com.google.android.gms.location.GeofencingRequest;
import com.google.android.gms.maps.model.LatLng;

public class GeofenceHelper extends ContextWrapper {

   private static final String TAG = "GeofenceHelper";
   PendingIntent pendingIntent;

   public GeofenceHelper(Context base) {
      super(base);
   }

   public GeofencingRequest geofencingRequest(Geofence geofence){

      return null;
   }

   public Geofence getGeofence(String ID, LatLng latLng, float radius, int transitionTrypes){

      return null;
   }

   public PendingIntent getPendingIntent(){

      return pendingIntent;
   }

}
