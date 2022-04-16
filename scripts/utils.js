function getCustomers(){
    
    var settings = {
        "url": "http://localhost/proyectoPrograFinal/apis/ws_customer.php?accion=getCustomers",
        "method": "GET",
        "timeout": 0,
      };
      $.ajax(settings).done(function (response) {
        console.log(response)
        //This hide prevent the website to render infinite tables.
        $(".container-lg").hide();
        //This append the table from the API response
        $( "header" ).append(response);
        //Hidding sections from home
        $("section").hide();
        //Adding and removing active class.
        $("ul li.nav-item:nth-child(1) a").removeClass("active")
        $("ul li.nav-item:nth-child(3) a").addClass("active")
        
      });
}

function desplegarNota(id_usuario){
    var settings = {
        "url": "http://localhost/proyectoProgra/ws/ws_notas.php?accion=obtener_nota&id_usuario="+id_usuario,
        "method": "POST",
        "timeout": 0,
      };
      
      $.ajax(settings).done(function (response) {
        // console.log(response);
        $( ".grades" ).append(response);
      });
}

$(".desplegar_notas_button").click(function(){
    $(".desplegar_notas_button").hide();
  });

function deleteCustomer(customer_id){


    var settings = {
      "url": "http://localhost/proyectoPrograFinal/apis/ws_customer.php?accion=deleteCustomer&customer_id="+customer_id,
      "method": "POST",
      "timeout": 0,
    };
  
    $.ajax(settings).done(function (response) {
      getCustomers()
    });
  
  }


function editarNota(id_usuario){
    
    var settings = {
        "url": "http://localhost/proyectoProgra/index.php?accion=abrirFormActualizarNotas&id_usuario="+id_usuario,
        "method": "POST",
        "timeout": 0,
        };
        
        
        
        $.ajax(settings).done(function (response) {
        $( "body" ).html("");
        $( "body" ).html(response);
        });      
}

window.onload = function() {
    // desplegarNotas()
    // desplegarNota()
   }