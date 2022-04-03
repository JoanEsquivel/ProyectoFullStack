

function desplegarContenidoUsuarios(){

    var settings = {
      "url": "http://localhost/ProyectoFinalP3/ws/ws_usuarios.php?accion=listar_usuarios",
      "method": "POST",
      "timeout": 0,
    };
  
    $.ajax(settings).done(function (response) {
        $( "#contenedor" ).html(response);
    });
  }


  function borrarUsuario(id_usuario){
  
  
    var settings = {
      "url": "http://localhost/ProyectoFinalP3/ws/ws_usuarios.php?accion=borrar_usuario&id_usuario="+id_usuario,
      "method": "POST",
      "timeout": 0,
    };
  
    $.ajax(settings).done(function (response) {
        $( "#contenedor" ).html("");
        desplegarContenidoUsuarios();
    });
  }
  
  function abrirFrmEditarUsuario(id_usuario){
  
    var settings = {
      "url": "http://localhost/ProyectoFinalP3/index.php?accion=editar_usuario&id_usuario="+id_usuario,
      "method": "POST",
      "timeout": 0,
    };
  
    $.ajax(settings).done(function (response) {
        $( "#contenedor" ).html("");
        $( "#contenedor" ).html(response);
  
    });
  }