$(
	function () 
	{
		//alert("Hola mundo desde un DOM completamente cargado.");
		$("#a-asincrono").on("click",  function () {
			$(".container:nth-child(2)").load("contenido.txt");
		});
	}
);