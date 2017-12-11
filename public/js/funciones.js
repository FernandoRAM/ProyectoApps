
function cargarTarjetas(){
	tarjetasAjax = new XMLHttpRequest();
	tarjetasAjax.open('GET','../public/php/tarjetas.php');
	tarjetasAjax.send();
	tarjetasAjax.onreadystatechange = function(){
		
		if (tarjetasAjax.readyState == 4 && tarjetasAjax.status == 200){
			tarjetas = JSON.parse(tarjetasAjax.responseText);
			// console.log(tarjetas);
				for(i=0; i<tarjetas.length; i++){
			
				div = "<p>"+tarjetas[i].numero+"</p>";
					// console.log(div);
				 document.getElementById('tarjetas').innerHTML += div;
			
				}
			
		}
	}
}
function alert() {

	alert("¡Producto agregado al carrito!");

}

function verDetalles(idProducto){
	console.log(idProducto);
	location.href = config['url']+"carrito/infoProducto?id="+idProducto;

}
function editar(idProducto){
	location.href=config['url']+"Carrito/editar?id="+idProducto;
}
function cargarPlayeras(){
	playerasAjax = new XMLHttpRequest();
	playerasAjax.open('GET','../public/php/playera.php');
	playerasAjax.send();
	playerasAjax.onreadystatechange = function(){
		
		if (playerasAjax.readyState == 4 && playerasAjax.status == 200){
			playera = JSON.parse(playerasAjax.responseText);
			console.log(playera);
				for(i=0; i<playera.length; i++){
			
				div = 
				"<div class='col-xs-12 col-sm-4 col-md-3 centrado producto'>"+
				"<p class='tipo0'>"+playera[i].nombre+"</p>"+
				"<img src='../public/img/"+playera[i].foto+"'>"+
				"<p class='tipo1'>"+"$"+playera[i].precio+"</p>"+
				"<div class='botones'>"+
						"<input type='submit' id='idProducto' onclick='verDetalles("+playera[i].idProducto+");' value='Ver detalles'"+
						" class='color0'>"+
					"</div>"+
				"</div>";
					//console.log(div);
				document.querySelector('section').innerHTML += div;
			
				}
			
		}
	}
}


function cargarCamisas(){
	camisasAjax = new XMLHttpRequest();
	camisasAjax.open('GET','../public/php/camisa.php');
	camisasAjax.send();
	camisasAjax.onreadystatechange = function(){
		
		if (camisasAjax.readyState == 4 && camisasAjax.status == 200){
			camisa = JSON.parse(camisasAjax.responseText);
			// console.log(camisa);
				for(i=0; i<camisa.length; i++){
			
				div = "<div class='col-xs-12 col-sm-4 col-md-3 centrado producto'>"+
				"<p class='tipo0'>"+camisa[i].nombre+"</p>"+
				"<img src='../public/img/"+camisa[i].foto+"'>"+
				"<p class='tipo1'>"+"$"+camisa[i].precio+"</p>"+
				"<input type='text'readonly class='hidden' value='"+camisa[i].idProducto+"'>"+
				"<div class='botones'>"+
						"<input type='submit' id='idProducto' onclick='verDetalles("+camisa[i].idProducto+");' value='Ver detalles'"+
						"class='color0'>"+
					"</div>"+
				"</div>";
					//console.log(div);
				document.querySelector('section').innerHTML += div;
			
				}
			
		}
	}
}

function cargarPantalones(){
	pantalonesAjax = new XMLHttpRequest();
	pantalonesAjax.open('GET','../public/php/pantalon.php');
	pantalonesAjax.send();
	pantalonesAjax.onreadystatechange = function(){
		
		if (pantalonesAjax.readyState == 4 && pantalonesAjax.status == 200){
			pantalon = JSON.parse(pantalonesAjax.responseText);
			console.log(pantalon);
				for(i=0; i<pantalon.length; i++){
			
				div = "<div class='col-xs-12 col-sm-4 col-md-3 centrado producto'>"+
				"<p class='tipo0'>"+pantalon[i].nombre+"</p>"+
				"<img src='../public/img/"+pantalon[i].foto+"'>"+
				"<p class='tipo1'>"+"$"+pantalon[i].precio+"</p>"+
				"<input type='text'readonly class='hidden' value='"+pantalon[i].idProducto+"'>"+
				"<div class='botones'>"+
				"<input type='submit' id='idProducto' onclick='verDetalles("+pantalon[i].idProducto+");' value='Ver detalles'"+
				"</div>"+
				"</div>";
					//console.log(div);
				document.querySelector('section').innerHTML += div;
			
				}
			
		}
	}
}

function cargarChamarras(){
	chamarrasAjax = new XMLHttpRequest();
	chamarrasAjax.open('GET','../public/php/chamarra.php');
	chamarrasAjax.send();
	chamarrasAjax.onreadystatechange = function(){
		
		if (chamarrasAjax.readyState == 4 && chamarrasAjax.status == 200){
			chamarra = JSON.parse(chamarrasAjax.responseText);
			//console.log(chamarra);
				for(i=0; i<chamarra.length; i++){
			
				div = "<div class='col-xs-12 col-sm-4 col-md-3 centrado producto'>"+
				"<p class='tipo0'>"+chamarra[i].nombre+"</p>"+
				"<img src='../public/img/"+chamarra[i].foto+"'>"+
				"<p class='tipo1'>"+"$"+chamarra[i].precio+"</p>"+
				"<input type='text'readonly class='hidden' value='"+chamarra[i].idProducto+"'>"+
				"<div class='botones'>"+
						"<input type='submit' id='idProducto' onclick='verDetalles("+chamarra[i].idProducto+");' value='Ver detalles'"+
						"class='color0'>"+
					"</div>"+
				"</div>";
					//console.log(div);
				document.querySelector('section').innerHTML += div;
			
				}
			
		}
	}
}

function cargarZapatos(){
	zapatosAjax = new XMLHttpRequest();
	zapatosAjax.open('GET','../public/php/zapato.php');
	zapatosAjax.send();
	zapatosAjax.onreadystatechange = function(){
		
		if (zapatosAjax.readyState == 4 && zapatosAjax.status == 200){
			zapato = JSON.parse(zapatosAjax.responseText);
			//console.log(zapato);
				for(i=0; i<zapato.length; i++){
			
				div = "<div class='col-xs-12 col-sm-4 col-md-3 centrado producto'>"+
				"<p class='tipo0'>"+zapato[i].nombre+"</p>"+
				"<img src='../public/img/"+zapato[i].foto+"'>"+
				"<p class='tipo1'>"+"$"+zapato[i].precio+"</p>"+
				"<input type='text'readonly class='hidden' value='"+zapato[i].idProducto+"'>"+
				"<div class='botones'>"+
						"<input type='submit' id='idProducto' onclick='verDetalles("+zapato[i].idProducto+");' value='Ver detalles'"+
						"class='color0'>"+
					"</div>"+
				"</div>";
					//console.log(div);
				document.querySelector('section').innerHTML += div;
			
				}
			
		}
	}
}

function cargarBusqueda(){
	string = localStorage.getItem('busqueda');
	categoria = localStorage.getItem('categoria');
	localStorage.clear();
	keywords = string.split(" ");
	regex = "";
	for (i = 0; i<keywords.length;i++){

		if(i==((keywords.length)-1)){
			regex= regex + keywords[i];
		}
		else{
			regex= regex + keywords[i]+"|";
		}
	}
	busquedaAjax = new XMLHttpRequest();
	busquedaAjax.open('POST','../public/php/busqueda.php');
	busquedaAjax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	busquedaAjax.send(encodeURI('reg=' + regex+"&cat="+categoria));
	busquedaAjax.onreadystatechange = function(){
		
		if (busquedaAjax.readyState == 4 && busquedaAjax.status == 200){
			busqueda = JSON.parse(busquedaAjax.responseText);
			console.log(busqueda);
				for(i=0; i<busqueda.length; i++){
			
				div = "<div class='col-xs-12 col-sm-4 col-md-3 centrado producto'>"+
				"<p class='tipo0'>"+busqueda[i].nombre+"</p>"+
				"<img src='../public/img/"+busqueda[i].foto+"'>"+
				"<p class='tipo1'>"+"$"+busqueda[i].precio+"</p>"+
				"<input type='text'readonly class='hidden' value='"+busqueda[i].idProducto+"'>"+
				"<div class='botones'>"+
						"<input type='submit' id='idProducto' onclick='verDetalles("+busqueda[i].idProducto+");' value='Ver detalles'"+
						"class='color0'>"+
					"</div>"+
				"</div>";
					//console.log(div);
				document.querySelector('section').innerHTML += div;
			
				}
			
		}
	}
}

function buscarProducto(){
	busqueda = document.getElementById("valorBuscar").value;
	categoria = document.getElementById('cateBuscar');
	categoria = categoria[categoria.selectedIndex].value;
	localStorage.setItem("busqueda", busqueda);
	localStorage.setItem("categoria", categoria);
	document.location.href = "busquedas";
}

function cargarCarrito(idUsuario){

	var usuario = idUsuario;
	carritoAjax = new XMLHttpRequest();
	carritoAjax.open('POST','../public/php/miCarrito.php');
	carritoAjax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	carritoAjax.send(encodeURI('usuario='+idUsuario));
	carritoAjax.onreadystatechange = function(){
		
		if (carritoAjax.readyState == 4 && carritoAjax.status == 200){
			carrito = JSON.parse(carritoAjax.responseText);
			//console.log(camisa);
			for(i=0; i<carrito.length; i++){
				div = "<div class='col-xs-12 col-md-5 borde'>"+
				  	"<div class='col-xs-12 col-md-12 close'>"+
						"<i class='fa fa-times' aria-hidden='true' title='Eliminar producto'></i>"+
					"</div>"+
					"<img src='../public/img/"+carrito[i].foto+"' class='col-xs-12 col-md-4 imgc'>"+
				    "<p class='bold col-md-8 col-xs-12'>"+carrito[i].nombre+"</p>"+
					"<p class='col-md-8 col-xs-12'>"+carrito[i].talla+"</p>"+
					"<div class='file col-xs-12 col-md-8'>"+
						"<p class=''>Cantidad</p>"+
						"<input type='number' class='cantidad' name='' min='1' value='1'>"+
					"</div>"+
					"<p class='col-xs-12 col-md-8 top'>Subtotal: <span class='bold'>"+carrito[i].precio+"</span></p>"+
				 "</div>";

					//console.log(div);
				document.querySelector('section').innerHTML += div;
			
			}
		}
	}
}

function eliminarAlgoCarrito(){

	borrarAlgoAjax = new XMLHttpRequest();
	borrarAlgoAjax.open('POST','../public/php/miCarrito.php');
	borrarAlgoAjax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	borrarAlgoAjax.send(encodeURI('usuario='+idUsuario));
	borrarAlgoAjax.onreadystatechange = function(){
		
		if (borrarAlgoAjax.readyState == 4 && borrarAlgoAjax.status == 200){
			borrar = JSON.parse(borrarAlgoAjax.responseText);
			//console.log(camisa);
			for(i=0; i<carrito.length; i++){
				div = "<div class='col-xs-12 col-md-5 borde'>"+
				  	"<div class='col-xs-12 col-md-12 close'>"+
						"<i class='fa fa-times' aria-hidden='true' title='Eliminar producto'></i>"+
					"</div>"+
					"<img src='../public/img/"+carrito[i].foto+"' class='col-xs-12 col-md-4 imgc'>"+
				    "<p class='bold col-md-8 col-xs-12'>"+carrito[i].nombre+"</p>"+
					"<p class='col-md-8 col-xs-12'>"+carrito[i].talla+"</p>"+
					"<div class='file col-xs-12 col-md-8'>"+
						"<p class=''>Cantidad</p>"+
						"<input type='number' class='cantidad' name='' min='1' value='1'>"+
					"</div>"+
					"<p class='col-xs-12 col-md-8 top'>Subtotal: <span class='bold'>"+carrito[i].precio+"</span></p>"+
				 "</div>";

					//console.log(div);
				document.querySelector('section').innerHTML += div;
			
			}
		}
	}
}

/*PARA EL ADMIN*/

function acargarPlayeras(){
	var link = "location.href='<?=URL?>Carrito/editar'";
	playerasAjax = new XMLHttpRequest();
	playerasAjax.open('GET','../public/php/playera.php');
	playerasAjax.send();
	playerasAjax.onreadystatechange = function(){
		
		if (playerasAjax.readyState == 4 && playerasAjax.status == 200){
			playera = JSON.parse(playerasAjax.responseText);
			//console.log(playera);
				for(i=0; i<playera.length; i++){
			
				div = 
				"<div class='col-xs-12 col-sm-4 col-md-3 centrado producto'>"+
				"<div class='opadmin'>"+
						"<i class='fa fa-pencil' aria-hidden='true' title='Editar'"+
						"onclick='editar("+playera[i].idProducto+")'></i>"+
						"<i class='fa fa-trash' aria-hidden='true' title='Eliminar'></i>"+
				"</div>"+
				"<p class='tipo0'>"+playera[i].nombre+"</p>"+
				"<img src='../public/img/"+playera[i].foto+"'>"+
				"<p class='tipo1'>"+"$"+playera[i].precio+"</p>"+
				"<div class='botones'>"+
					"</div>"+
				"</div>";
					//console.log(div);
				document.querySelector('section').innerHTML += div;
			
				}
			
		}
	}
}


function acargarCamisas(){
	camisasAjax = new XMLHttpRequest();
	camisasAjax.open('GET','../public/php/camisa.php');
	camisasAjax.send();
	camisasAjax.onreadystatechange = function(){
		
		if (camisasAjax.readyState == 4 && camisasAjax.status == 200){
			camisa = JSON.parse(camisasAjax.responseText);
			//console.log(camisa);
				for(i=0; i<camisa.length; i++){
			
				div = "<div class='col-xs-12 col-sm-4 col-md-3 centrado producto'>"+
				"<div class='opadmin'>"+
						"<i class='fa fa-pencil' aria-hidden='true' title='Editar'"+
						"onclick='editar("+playera[i].idProducto+")'></i>"+
						"<i class='fa fa-trash' aria-hidden='true' title='Eliminar'></i>"+
				"</div>"+
				"<p class='tipo0'>"+camisa[i].nombre+"</p>"+
				"<img src='../public/img/"+camisa[i].foto+"'>"+
				"<p class='tipo1'>"+"$"+camisa[i].precio+"</p>"+
				"<input type='text'readonly class='hidden' value='"+camisa[i].idProducto+"'>"+
				"<div class='botones'>"+
					"</div>"+
				"</div>";
					//console.log(div);
				document.querySelector('section').innerHTML += div;
			
				}
			
		}
	}
}

function acargarPantalones(){
	pantalonesAjax = new XMLHttpRequest();
	pantalonesAjax.open('GET','../public/php/pantalon.php');
	pantalonesAjax.send();
	pantalonesAjax.onreadystatechange = function(){
		
		if (pantalonesAjax.readyState == 4 && pantalonesAjax.status == 200){
			pantalon = JSON.parse(pantalonesAjax.responseText);
			//console.log(pantalon);
				for(i=0; i<pantalon.length; i++){
			
				div = "<div class='col-xs-12 col-sm-4 col-md-3 centrado producto'>"+
				"<div class='opadmin'>"+
						"<i class='fa fa-pencil' aria-hidden='true' title='Editar'"+
						"onclick='editar("+playera[i].idProducto+")'></i>"+
						"<i class='fa fa-trash' aria-hidden='true' title='Eliminar'></i>"+
				"</div>"+
				"<p class='tipo0'>"+pantalon[i].nombre+"</p>"+
				"<img src='../public/img/"+pantalon[i].foto+"'>"+
				"<p class='tipo1'>"+"$"+pantalon[i].precio+"</p>"+
				"</div>"+
				"</div>";
					//console.log(div);
				document.querySelector('section').innerHTML += div;
			
				}
			
		}
	}
}

function acargarChamarras(){
	chamarrasAjax = new XMLHttpRequest();
	chamarrasAjax.open('GET','../public/php/chamarra.php');
	chamarrasAjax.send();
	chamarrasAjax.onreadystatechange = function(){
		
		if (chamarrasAjax.readyState == 4 && chamarrasAjax.status == 200){
			chamarra = JSON.parse(chamarrasAjax.responseText);
			//console.log(chamarra);
				for(i=0; i<chamarra.length; i++){
			
				div = "<div class='col-xs-12 col-sm-4 col-md-3 centrado producto'>"+
				"<div class='opadmin'>"+
						"<i class='fa fa-pencil' aria-hidden='true' title='Editar'"+
						"onclick='editar("+chamarra[i].idProducto+")'></i>"+
						"<i class='fa fa-trash' aria-hidden='true' title='Eliminar'></i>"+
				"</div>"+
				"<p class='tipo0'>"+chamarra[i].nombre+"</p>"+
				"<img src='../public/img/"+chamarra[i].foto+"'>"+
				"<p class='tipo1'>"+"$"+chamarra[i].precio+"</p>"+
				"<div class='botones'>"+
					"</div>"+
				"</div>";
					//console.log(div);
				document.querySelector('section').innerHTML += div;
			
				}
			
		}
	}
}

function acargarZapatos(){
	zapatosAjax = new XMLHttpRequest();
	zapatosAjax.open('GET','../public/php/zapato.php');
	zapatosAjax.send();
	zapatosAjax.onreadystatechange = function(){
		
		if (zapatosAjax.readyState == 4 && zapatosAjax.status == 200){
			zapato = JSON.parse(zapatosAjax.responseText);
			//console.log(zapato);
				for(i=0; i<zapato.length; i++){
			
				div = "<div class='col-xs-12 col-sm-4 col-md-3 centrado producto'>"+
				"<div class='opadmin'>"+
						"<i class='fa fa-pencil' aria-hidden='true' title='Editar'"+
						"onclick='editar("+playera[i].idProducto+")'></i>"+
						"<i class='fa fa-trash' aria-hidden='true' title='Eliminar'></i>"+
				"</div>"+
				"<p class='tipo0'>"+zapato[i].nombre+"</p>"+
				"<img src='../public/img/"+zapato[i].foto+"'>"+
				"<p class='tipo1'>"+"$"+zapato[i].precio+"</p>"+
				"<div class='botones'>"+
					"</div>"+
				"</div>";
					//console.log(div);
				document.querySelector('section').innerHTML += div;
			
				}
			
		}
	}
}

function showSnackbar(id, text, time) {
    // Obtiene el div #snackbar
    var x = document.getElementById(id);
    
    //Añadde el texto a mostrar
    x.innerHTML = text;

    // Añade la clase para mostrar
    x.className = "show";
    
    // Despues de x milisegundos, se remueve el div.
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, time);
}
function showSnackbarBol(id, text, i) {
    // Obtiene el div #snackbar
    var x = document.getElementById(id);
    
    //Añadde el texto a mostrar
    x.innerHTML = text;

    // Remueve/añade el div segun el index bool
	if(!i){
		setTimeout(function(){ x.className = x.className.replace("show", ""); }, 0);
	}
	else{
		// Añade la clase para mostrar
    	x.className = "show";
	}
}

//Div de snackbars
// <div id="snackbarBottom">...</div>

function cargarDirecciones(){
	direccionesAjax = new XMLHttpRequest();
	direccionesAjax.open('GET','../public/php/direccion.php');
	direccionesAjax.send();
	direccionesAjax.onreadystatechange = function(){
		
		if (direccionesAjax.readyState == 4 && direccionesAjax.status == 200){
			direcciones = JSON.parse(direccionesAjax.responseText);
			// console.log(direcciones);
				for(i=0; i<direcciones.length; i++){
			
				div = "<p>"+direcciones[i].direccion+"</p>";
					// console.log(div);
				 document.getElementById('direcciones').innerHTML += div;
			
				}
			
		}
	}
}
function cargarHistorial(){
	historialAjax = new XMLHttpRequest();
	historialAjax.open('GET','../public/php/historial.php');
	historialAjax.send();
	historialAjax.onreadystatechange = function(){
		
		if (historialAjax.readyState == 4 && historialAjax.status == 200){
			historial = JSON.parse(historialAjax.responseText);
			console.log(historial);
				for(i=0; i<historial.length; i++){
			
				div = "<div class='list-group'>"+
				    "<div class='list-group-item'>"+
				    "<p class='list-group-item-text'>"+historial[i].cantidad+"  "+ historial[i].nombre+"</p>"+
				    "<p class='list-group-item-text'>"+historial[i].fecha+"</p>"+
				    "<p class='list-group-item-text'>"+"Total de: $ "+"<span class='b'>"+historial[i].cantidad+"</span>"+"</p>"+
				  "</div>"+
				  "</div>";
					// console.log(div);
				 document.querySelector('section').innerHTML += div;
			
				}
			
		}
	}
}