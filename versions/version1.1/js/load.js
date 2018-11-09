//definimos una variable llamada 'x'.
var x;
//le asignamos el 'documento'.
x=$(document);
//cuando el documento est� listo ejecutaremos la funci�n 'cargar()'.
x.ready(cargar);

//definimos la funci�n 'cargar()'.
function cargar(){
/*creamos otra variable 'x' y le asignamos el valor de los elementeos que 
sean enlaces, a trav�s del selector de jquery.*/
var x=$('.link-show');
//haciendo click en los enlaces se disparar� la funci�n 'muestra_info()';
x.click(muestra_info);
}

//definimos la funci�n 'muestra_info()'.
function muestra_info(){

/*definimos una variable llamada 'info' y le asignamos el valor del atributo 
'href' del elemento sobre el que estamos haciendo 'click', que en definitiva, 
ser� el elemento que dispare el evento.*/
var info=$(this).attr('href');
/*creamos otra variable 'x' y le asignamos el elemento que tenga como 'id' 
el valor 'caja_info', usando los selectores de jquery.*/
	/*var styles = "@import url('http://localhost/portfolio/version1.1/css/project.css?v=3');";*/
	var styles = "@import url('http://localhost:/portfolio/version1.1/css/project.css?v=3');";
	var newSS=document.createElement('link');
	newSS.rel='stylesheet';
	newSS.href='data:text/css,'+escape(styles);
	document.getElementsByTagName("head")[0].appendChild(newSS);
	  
var x=$('#centre-me');
/*decimos que en 'x', osea en 'caja_info', sea donde trabaje la funci�n 
'load()' de jquery, que se encargar� de hacer la petici�n AJAX y mostrar� 
los datos obtenidos en el elemento seleccionado.*/
x.load(info);

//hacemos que retorne 'false', ya que esta funci�n no retornar� valor alguno.
return false;
}