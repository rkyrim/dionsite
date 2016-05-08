var useDashboardWidget = {

	init: function () 
	{
		useDashboardWidget.bindUploadAvatarJSFunction();
	},

	bindUploadAvatarJSFunction: function () 
	{
		$('input[type=file]').on('change', function(event){
		    files = event.target.files;

		    event.stopPropagation(); // Stop stuff happening

		    event.preventDefault(); // Totally stop stuff happening

		    $("#avatar-status").text("Loading new avatar...");

		    $("#avatar").css("opacity", "0.4");

		    $("#avatar").css("filter", "alpha(opacity=40);");

		    //Create a formdata object and add the files

		    var data = new FormData();

		    $.each(files, function(key, value) {
		        data.append(key, value);
		    });

		    console.log(files);

		    $.ajax({
		        url: config.profile_url,
		        type: 'POST',
		        data: data,
		        cache: false,
		        dataType: 'json',
		        processData: false, // Don't process the files
		        contentType: false, // Set content type to false as jQuery will tell the server its a query string request
		        success: function (resp) 
		        {	
		        	console.log(resp);
		        },
		        error: function (xhr, ajaxOptions, thrownError)
		        {
		        	console.log('fail', xhr, ajaxOptions, thrownError);
		        }
		    });
		});
	}
}