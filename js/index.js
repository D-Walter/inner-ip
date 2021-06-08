$(() => {
	$.ajax({
		type: "GET",
		url: "curip.json",
		dataType: "json",
		success: function (response) {
			$("#ip-address").text(response["cip"]);
			$("#update-date").text(response["udt"]);
		},
	});
});
