package com.example.hamim.bb;

import android.support.v4.app.FragmentActivity;
import android.os.Bundle;

import com.google.android.gms.maps.GoogleMap;
import com.google.android.gms.maps.SupportMapFragment;
import com.google.android.gms.maps.model.LatLng;
import com.google.android.gms.maps.model.MarkerOptions;

public class MapsActivitylocation extends FragmentActivity {

    private GoogleMap mMap; // Might be null if Google Play services APK is not available.

    @Override
    protected void onCreate(Bundle savedInstanceState)
    {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_maps_activitylocation);
        setUpMapIfNeeded();
    }

    @Override
    protected void onResume()
    {
        super.onResume();
        setUpMapIfNeeded();
    }


    private void setUpMapIfNeeded()
    {
        // Do a null check to confirm that we have not already instantiated the map.
        if (mMap == null) {
            // Try to obtain the map from the SupportMapFragment.
            mMap = ((SupportMapFragment) getSupportFragmentManager().findFragmentById(R.id.map))
                    .getMap();
            // Check if we were successful in obtaining the map.
            if (mMap != null) {
                setUpMap();
            }
        }
    }


    private void setUpMap() {
        mMap.addMarker(new MarkerOptions().position(new LatLng(23.7939927, 90.4042719)).title("Marker"));
        mMap.addMarker(new MarkerOptions().position(new LatLng(23.7924961, 90.4078058)).title("Marker"));
        mMap.addMarker(new MarkerOptions().position(new LatLng(23.7400881, 90.4120138)).title("Marker"));
        mMap.addMarker(new MarkerOptions().position(new LatLng(23.7619353, 90.433141)).title("Marker"));
        mMap.addMarker(new MarkerOptions().position(new LatLng(23.7458709, 90.394705)).title("Marker"));
        mMap.addMarker(new MarkerOptions().position(new LatLng(23.7998984, 90.420766)).title("Marker"));
        mMap.addMarker(new MarkerOptions().position(new LatLng(23.7464653, 90.3760125)).title("Marker"));
        mMap.addMarker(new MarkerOptions().position(new LatLng(23.7470583, 90.3986516)).title("Marker"));
        mMap.addMarker(new MarkerOptions().position(new LatLng(23.7457863, 90.3851759)).title("Marker"));
        mMap.addMarker(new MarkerOptions().position(new LatLng(23.7494231, 90.3830754)).title("Marker"));
        mMap.addMarker(new MarkerOptions().position(new LatLng(23.7554073, 90.3689508)).title("Marker"));
        mMap.addMarker(new MarkerOptions().position(new LatLng(23.7509405, 90.4140968)).title("Marker"));
        mMap.addMarker(new MarkerOptions().position(new LatLng(23.7493571, 90.4089838)).title("Marker"));
        mMap.addMarker(new MarkerOptions().position(new LatLng(23.7776282, 90.4054498)).title("Marker"));
        mMap.addMarker(new MarkerOptions().position(new LatLng(23.7658444, 90.3583606)).title("Marker"));
        mMap.addMarker(new MarkerOptions().position(new LatLng(23.7776282, 90.4054498)).title("Marker"));
        mMap.addMarker(new MarkerOptions().position(new LatLng(23.7401451, 90.4120026)).title("Marker"));
        mMap.addMarker(new MarkerOptions().position(new LatLng(23.8758547, 90.3795438)).title("Marker"));
        mMap.setMyLocationEnabled(true);
    }
}
