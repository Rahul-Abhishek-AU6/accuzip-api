@extends('layouts.common')


@push('meta')
<title>Direct Mail</title>


@endpush


@push('style')
<style type="text/css">
	#map {

      height: 450px!important;
      width: 81%!important;
      position: relative !important;
      display: block;
      overflow: scroll;
      margin: auto;
  }

    
</style>
@endpush

@section('content')
<div class="bg11" style="background-size:174%">
<div class="container">
	{{-- <ul class="nav-wizard">
		<li class="complete"><a href="javascript:void(0);"><b class="badge badge-step">1</b> Destination</a></li>
		<li class="active"><a href="javascript:void(0);"><b class="badge badge-step">2</b> Mail Options</a></li>
		<li><a href="javascript:void(0);"><b class="badge badge-step">3</b> Client Details</a></li>
		<li><a href="javascript:void(0);"><b class="badge badge-step">4</b> Payment</a></li>
	</ul> --}}
	<div class="row">
		
	</div>
  {!! Form::open(['route'=>'web.direct-mail.process']) !!}
  <div class="p-3 bg-white"  style="max-width:1000px; margin:0 auto 20px">
	<div class="radio{{ $errors->has('map_selection_type') ? ' has-error' : '' }}">
	    <label for="map_selection_type">
	        {!! Form::radio('map_selection_type', 'radius_around',  null, ['id' => 'map_selection_type']) !!} Radius around an address
	    </label>
	    <label for="zip_city" class="mx-3">
	        {!! Form::radio('map_selection_type', 'zip_city',  null, ['id' => 'zip_city']) !!} Zip, City, County or State
	    </label>
	    <label for="whole_usa">
	        {!! Form::radio('map_selection_type', 'whole_usa',  null, ['id' => 'whole_usa']) !!} Whole USA
	    </label>
	    <small class="text-danger">{{ $errors->first('map_selection_type') }}</small>
	</div>
  <div style="max-width:1000px; margin: auto;">
    <div class="row" id="address-form" style="display: none;">
      <div class="col-md-6">
        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}" style="width: 80%;">
            {!! Form::label('address', 'Address') !!}
            {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Search and select an address','id'=>'autocomplete']) !!}
            <small class="text-danger">{{ $errors->first('address') }}</small>
        </div>
      </div>
      <div class="col-md-6">
        <label for="formControlRange" class="d-block">Radius</label>
        <div class="form-group d-flex">
            <input type="range" min="1" max="50" value="1" step="0.1" class="slider w-75" id="myRange">
            <div class="form-group{{ $errors->has('ma_ratio') ? ' has-error' : '' }}">
    	      {!! Form::text('ma_ratio', 1, ['class' => 'form-control  w-25','style'=>'padding:0px;']) !!}
    	    <small class="text-danger">{{ $errors->first('ma_ratio') }}</small>
    	    </div>
        </div>
      </div>
    </div>
    <div class="row" id="zip-city-country" style="display: none;">
      <div class="col-md-6">
        <div class="form-group{{ $errors->has('zip_city') ? ' has-error' : '' }}" style="width: 80%;">
            {!! Form::label('zip_city', 'City, Zip, County, or State Only') !!}
            {!! Form::text('zip_city', null, ['class' => 'form-control', 'placeholder' => 'Search and select an zip_city', 'id'=>'search-by-zip-city']) !!}
            <small class="text-danger">{{ $errors->first('zip_city') }}</small>
        </div>
      </div>
      <div class="col-md-6 row">
        <div class="form-group col-md-9">
          <label>&nbsp;</label>
            {!! Form::select('city_zip', ['city'=>'City','zip'=>'Zip','country'=>'Country','state'=>'State'], null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group col-md-3">
          <label for="inputZip" class="d-block">&nbsp;</label>
          <input type="button" class="form-control btn btn-warning w-50" value="+" style="font-size: 37px; line-height: 0; height: 38px; background-color: green; color: white; border-color: green;">
        </div>
      </div>
      </div>
    </div>
	</div>

	
  <div id="map" ></div>
  
  <div class="p-3 bg-white"  style="max-width:1000px; margin:30px auto 20px">
    <h4>Demography: Single Use</h4>
    <hr>
    
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputCity1">Database Type</label>
        {!! Form::select('data_type', ['business'=>'Business','consumer'=>'Consumer','newmover'=> 'New Mover','newhomeower'=>'New Home Owner','newbusiness'=>'New Business'], 'business', ['class'=>'form-control','id'=>'data_type_for_search']) !!}
        
      </div>
      <div id="search-option-fields" class="col-md-4">
        <div class="form-group">
          <label for="inputState">Search Field</label>
          {!! Form::select('search_field', ['entire_database'=>'Entire Database','company_name'=>'Company Name'], 'entire_database', ['class'=>'form-control']) !!}      
        </div>
      </div>
      
      <div class="form-group col-md-2">
        <label for="inputZip" class="d-block">&nbsp;</label>
        <input type="button" class="form-control btn btn-warning w-50 add-data-datatype" value="+" style="font-size: 37px; line-height: 0; height: 38px; background-color: green; color: white; border-color: green;">
      </div>
  </div>
  <div style="display: none" id="total-count-value">
    <p style="text-align: center; margin-top: 20px;">Total Count: <b></b></p>
  </div>
  <div style="display: flex; justify-content: space-between; margin-top: 20px;">
    <a href="#" class="disabled btn btn-success">Back</a>
    <button class="btn btn-success" type="submit">Next</button>
    {{-- <a href="#" class="btn btn-success">Next</a> --}}
  </div>
  </div>
  {!! Form::close() !!}
  </div>

</div>
</div>
@endsection

@push('script')


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnQf26SWZV8RWOQrkS5iWVFC1-z-1CXg4&libraries=places&callback=initMap" async defer></script>


<script type="text/javascript">
  var mapdata = {};
  $(document).ready(function(){

    $('#data_type_for_search').change(function() {
      var dataVal = $(this).val();
      $.ajax({url: "{{ url('get-search-field-components') }}/"+dataVal, success: function(result){
        $('#search-option-fields').html(result);
      }});
    });
  });
  $('#myRange').change(function() {
    var cirva = $(this).val();

    $('input[name=ma_ratio]').val(cirva);
  })

  $('.add-data-datatype').click(function() {
    var _token = document.querySelector('meta[name="csrf-token"]').content;

    if (mapdata.lat) {
      var datatype = $('#data_type_for_search').val();
      var searchOption = $('#search-option-fields').find('select').val();
      // console.log(datatype)
      // console.log(searchOption)
      // return false;
      $.ajax({
        url: "{{ url('direct-mail-get-count') }}",
        type:'post', 
        data:{_token:_token,lat:mapdata.lat,lng:mapdata.lng,datatype:datatype,searchOption:searchOption},
        beforeSend: function() {
          $('#total-count-value').show();
          $('#total-count-value p b').text('')
        },
        success: function(result){
          $('#total-count-value').show();
          $('#total-count-value p b').text(result.count)
          // console.log(result.count)
      }});
    }
    
  })

</script>

<script>     

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 40.7127753, lng: -74.0059728},
          zoom: 6
        });

        var CircleOptions = {
          strokeColor: '#FF0000',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: '#FF0000',
          fillOpacity: 0.35,
          radius: 1609.34,
          draggable: true,
        };
        var cityCircle = new google.maps.Circle(CircleOptions);

        $('#myRange').change(function() {
          var rad = $(this).val();
          cityCircle.setRadius(parseFloat(rad*1609.34));
        }) 

        var input = document.getElementById('autocomplete');
       

        var autocomplete = new google.maps.places.Autocomplete(input);

        autocomplete.setComponentRestrictions(
            {'country': ['us']});

        // Bind the map's bounds (viewport) property to the autocomplete object,
        // so that the autocomplete requests use the current map bounds for the
        // bounds option in the request.
        autocomplete.bindTo('bounds', map);

        // Set the data fields to return when the user selects a place.
        autocomplete.setFields(
            ['address_components', 'geometry', 'icon', 'name']);

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);
        var marker = new google.maps.Marker({
          map: map,
          anchorPoint: new google.maps.Point(0, -29)
        });

        autocomplete.addListener('place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
          }

          var lat = place.geometry.location.lat(), lng = place.geometry.location.lng();
          // console.log(lat);
          // console.log(lng);
          mapdata = {lat:lat,lng:lng}

          

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          marker.setPosition(place.geometry.location);
          marker.setVisible(true);         

          cityCircle.setMap(map);
          cityCircle.setCenter(place.geometry.location);
          map.fitBounds(cityCircle.getBounds());
          
        });
      }


      function initMapZip() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 40.7127753, lng: -74.0059728},
          zoom: 6
        });

        var input = document.getElementById('search-by-zip-city');
       

        var autocomplete = new google.maps.places.Autocomplete(input);

        autocomplete.setComponentRestrictions(
            {'country': ['us']});

        // Bind the map's bounds (viewport) property to the autocomplete object,
        // so that the autocomplete requests use the current map bounds for the
        // bounds option in the request.
        autocomplete.bindTo('bounds', map);

        // Set the data fields to return when the user selects a place.
        autocomplete.setFields(
            ['address_components', 'geometry', 'icon', 'name']);

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);
        var marker = new google.maps.Marker({
          map: map,
          anchorPoint: new google.maps.Point(0, -29)
        });

        autocomplete.addListener('place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
          }

          var lat = place.geometry.location.lat(), lng = place.geometry.location.lng();
          // console.log(lat);
          // console.log(lng);
          mapdata = {lat:lat,lng:lng}

          

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          marker.setPosition(place.geometry.location);
          marker.setVisible(true);      

        
          
        });
      }

      function wholeUSA() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 39.5255, lng: -101.8655},
          zoom: 6
        }); 

        mapdata = {lat:39.5255,lng:-101.8655}      
      }

      $('input[name=map_selection_type]').click(function() {
        
        var val = $(this).val();
        // alert(val);
        if (val == 'radius_around') {
          initMap();
          $('#address-form').show();
          $('#zip-city-country').hide();
        }
        if (val == 'zip_city') {
          initMapZip();
          $('#address-form').hide();
          $('#zip-city-country').show();
        }   
        if (val == 'whole_usa') {
          wholeUSA();
          $('#address-form').hide();
          $('#zip-city-country').hide();
        } 
      });
  </script>
@endpush