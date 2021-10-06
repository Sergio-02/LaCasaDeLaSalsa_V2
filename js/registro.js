var formu = document.getElementById('formulario');

formu.addEventListener('submit', function(e){ 
	e.preventDefault();
	
	var datos = new FormData(formu);
	
	fetch('db_conection.php',{
		method: 'POST',
		body: datos
	})
	
	.then(res => res.json())
											 })