import 'package:flutter_google_places/flutter_google_places.dart';
import 'package:flutter_polyline_points/flutter_polyline_points.dart';
import 'package:google_maps_flutter/google_maps_flutter.dart';


LatLng izp = LatLng(-3.386943, 29.371636);

  GoogleMap googleMap = GoogleMap(
      initialCameraPosition: CameraPosition(target: izp, zoom: 10.0),
      compassEnabled: true,
      scrollGesturesEnabled: true,
      zoomGesturesEnabled: true,
      onMapCreated: (g) {
        gmc = g;//for mapcontroller if any
      },
      markers: {},
      polylines: {},//initialize the polylines list
    );

dynamic directions = decodedResult["routes"][0]["overview_polyline"]['points'];


PolylinePoints points = new PolylinePoints();

List<PointLatLng> result = points.decodePolyline(directions);


List<LatLng> po = [];
      result.forEach((f) {
        po.add(LatLng(f.latitude, f.longitude));
      });


 Polyline route = new Polyline(
          polylineId: PolylineId("route"),
          geodesic: true,
          points: po,
          width: 20,
          color: Colors.blue);

 setState(() {
 //if you created markers, add them too if you wish
        googleMap.markers.add(marker);
        googleMap.markers.add(marker2);
        googleMap.polylines.add(route);

        /*if you associated a googlemapcontroller, you can do further actions like zooming...*/
      });
      