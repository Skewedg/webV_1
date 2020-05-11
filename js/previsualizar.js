
var div = document.getElementById('registro-usuario');
var but = document.getElementById('opcRegistro');
var btnClose = document.getElementById('btnClose');
//la funcion que oculta y muestra
function showHide(e){
e.preventDefault();
e.stopPropagation();
if(div.style.display == "none"){
div.style.display = "block";
} else if(div.style.display == "block"){
div.style.display = "none";
}
}
//al hacer click en el boton
but.addEventListener("click", showHide, false);

btnClose.addEventListener("click",cerrarVentana,false);
//funcion para cualquier clic en el documento
document.addEventListener("click", function(e){


//obtiendo informacion del DOM para  
var clic = e.target;
if(div.style.display == "block" && click != div || click){
 div.style.display = "none";
}
}, false);

function cerrarVentana(){
    div.style.display="none";
}



/* function archivo(evt) {
    var files = evt.target.files; // FileList object

    // Obtenemos la imagen del campo "file".
    for (var i = 0, f; f = files[i]; i++) {
      //Solo admitimos imágenes.
      if (!f.type.match('image.*')) {
          continue;
      }

      var reader = new FileReader();

      reader.onload = (function(imgFile) {
          return function(e) {
            // Insertamos la imagen
           document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(imgFile.name), '"  border="1px solid black"  "width="150px"  height="150px"/>'].join('');
          };
      })(f);

      reader.readAsDataURL(f);
    }
}
function archivo(evt) {
    var files = evt.target.files; // FileList object

    // Obtenemos la imagen del campo "file".
    for (var i = 0, f; f = files[i]; i++) {
      //Solo admitimos imágenes.
      if (!f.type.match('image.*')) {
          continue;
      }

      var reader = new FileReader();

      reader.onload = (function(imgFile) {
          return function(e) {
            // Insertamos la imagen
           document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(imgFile.name), '"  border="1px solid black"  "width="150px"  height="150px"/>'].join('');
          };
      })(f);

      reader.readAsDataURL(f);
    }
}



document.getElementById('files').addEventListener('change', archivo, false);


 */


document.getElementById('files').addEventListener('change', archivo, false);

//almacenando el div y el boton en unas variables








function userForm(){
    $(document).ready(function(){

       
        $("#btnUsuario").click(function(evento){
            evento.preventDefault();
            //ocultarBotones();
            $("#container-usuario-form").load("registroUsuario.php");
        });
    });
    
}

function empresaForm(){
  
    $(document).ready(function(){

        $("#btnEmpresa").click(function(evento){
          
            evento.preventDefault();
            //ocultarBotones();
            $("#container-usuario-form").load("registroEmpresa.php");
          
        });
    });
    
}

function ocultarBotones(){
    document.getElementById('btnEmpresa').style.display='none';
    document.getElementById('btnUsuario').style.display='none';
}



