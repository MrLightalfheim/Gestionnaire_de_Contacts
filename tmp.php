<?php
$("form").oon("submit", function() {
	var formdata = (window.Formdata)?new Formdata($(this)):null;
	var data = (formdata!=null):$(this).serialyze();
	$ajax ({
		url:$(this).attr("action");
		type:$(this).attr("method");
		datatype:"json";
		data:data;
		success:function(response) { traitement de la réponse }
	})
})
?>