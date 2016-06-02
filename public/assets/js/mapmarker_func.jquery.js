		//set up markers
		var myMarkers = {"markers": [
				{"latitude": "25.763191", "longitude":"-80.290655", "icon": "/assets/img/map-marker-128.png"}
			]
		};

		//set up map options
		$("#map").mapmarker({
			zoom	: 13,
			center	: '5818 SW 8th Street Miami, FL 33144',
			markers	: myMarkers
		});

		//set up map options
		$("#map-side-contact").mapmarker({
			zoom	: 15,
			center	: '5818 SW 8th Street Miami, FL 33144',
			markers	: myMarkers
		});

		$('.dropdown').on('shown.bs.dropdown', function () {
			//console.log('works');
		  	//set up map options
			$("#map-bubble").mapmarker({
				zoom	: 15,
				center	: '5818 SW 8th Street Miami, FL 33144',
				markers	: myMarkers
			});
		})

