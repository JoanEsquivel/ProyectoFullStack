function getCustomers() {

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
    $("header").append(response);
    //Hidding sections from home
    $("section").hide();
    //Adding and removing active class.
    $("ul li.nav-item:nth-child(1) a").removeClass("active")
    $("ul li.nav-item:nth-child(2) a").removeClass("active")
    $("ul li.nav-item:nth-child(3) a").addClass("active")

  });
}

function getUsers() {

  var settings = {
    "url": "http://localhost/proyectoPrograFinal/apis/ws_users.php?accion=getUsers",
    "method": "GET",
    "timeout": 0,
  };
  $.ajax(settings).done(function (response) {
    console.log(response)
    //This hide prevent the website to render infinite tables.
    $(".container-lg").hide();
    //This append the table from the API response
    $("header").append(response);
    //Hidding sections from home
    $("section").hide();
    $("#table").hide();
    //Adding and removing active class.
    $("ul li.nav-item:nth-child(1) a").removeClass("active")
    $("ul li.nav-item:nth-child(2) a").removeClass("active")
    $("ul li.nav-item:nth-child(3) a").addClass("active")
    $("ul li.nav-item:nth-child(4) a").removeClass("active")

    let myTable = document.querySelector("#table")
    myTable.innerHTML = '';
  });
}

function getSalaries() {

  var settings = {
    "url": "http://localhost/proyectoPrograFinal/apis/ws_users.php?accion=getSalaries",
    "method": "GET",
    "timeout": 0,
  };
  $.ajax(settings).done(function (response) {
    console.log(response)
    //This hide prevent the website to render infinite tables.
    $(".container-lg").hide();
    //This append the table from the API response
    $("header").append(response);
    //Hidding sections from home
    $("section").hide();
    $("#table").hide();
    //Adding and removing active class.
    $("ul li.nav-item:nth-child(1) a").removeClass("active")
    $("ul li.nav-item:nth-child(2) a").removeClass("active")
    $("ul li.nav-item:nth-child(3) a").removeClass("active")
    $("ul li.nav-item:nth-child(4) a").addClass("active")

    let myTable = document.querySelector("#table")
    myTable.innerHTML = '';
  });
}

function genereReport() {

  var settings = {
    "url": "http://localhost/proyectoPrograFinal/apis/ws_users.php?accion=payrolReport",
    "method": "GET",
    "timeout": 0,
  };
  $.ajax(settings).done(function (response) {
    alert("Payment report generated!");

  });
}

function getPayrollReport() {

  // myTable.appendChild('');

  var settings = {
    "url": "http://localhost/proyectoPrograFinal/apis/ws_users.php?accion=getPayrollReport",
    "method": "GET",
    "timeout": 0,
  };
  $.ajax(settings).done(function (response) {
    console.log(response)
    //This hide prevent the website to render infinite tables.
    $(".container-lg").hide();
    //This append the table from the API response
    //Hidding sections from home
    $("section").hide();
    $("#table").show();
    //Adding and removing active class.
    $("ul li.nav-item:nth-child(1) a").removeClass("active")
    $("ul li.nav-item:nth-child(2) a").removeClass("active")
    $("ul li.nav-item:nth-child(3) a").removeClass("active")
    $("ul li.nav-item:nth-child(4) a").removeClass("active")
    $("ul li.nav-item:nth-child(5) a").addClass("active")

    //Table generation based on API/JSON response.
    let myTable = document.querySelector("#table")
    let headers = ['Payment ID', 'ID User', 'Salary Amount', 'Payment Generated At'];
    let payroll = JSON.parse(response)
    let table = document.createElement('table');
    let headerRow = document.createElement('tr');
    headers.forEach(headerText => {
      let header = document.createElement('th');
      let textNode = document.createTextNode(headerText);
      header.appendChild(textNode);
      headerRow.appendChild(header);
    });
    table.appendChild(headerRow);
    payroll.forEach(payment => {
      let row = document.createElement('tr');
      Object.values(payment).forEach(text => {
        let cell = document.createElement('td');
        let textNode = document.createTextNode(text);
        cell.appendChild(textNode);
        row.appendChild(cell);
      })
      table.appendChild(row);
    });
    myTable.appendChild(table);

  });
}

function desplegarNota(id_usuario) {
  var settings = {
    "url": "http://localhost/proyectoProgra/ws/ws_notas.php?accion=obtener_nota&id_usuario=" + id_usuario,
    "method": "POST",
    "timeout": 0,
  };

  $.ajax(settings).done(function (response) {
    // console.log(response);
    $(".grades").append(response);
  });
}

$(".desplegar_notas_button").click(function () {
  $(".desplegar_notas_button").hide();
});

function deleteCustomer(customer_id) {


  var settings = {
    "url": "http://localhost/proyectoPrograFinal/apis/ws_customer.php?accion=deleteCustomer&customer_id=" + customer_id,
    "method": "POST",
    "timeout": 0,
  };

  $.ajax(settings).done(function (response) {
    getCustomers()
  });

}
function deleteEmployee(id_user) {
  var settings = {
    "url": "http://localhost/proyectoPrograFinal/apis/ws_users.php?accion=deleteUser&id_user=" + id_user,
    "method": "POST",
    "timeout": 0,
  };

  $.ajax(settings).done(function (response) {
    getUsers()
  });

}


function editarNota(id_usuario) {

  var settings = {
    "url": "http://localhost/proyectoProgra/index.php?accion=abrirFormActualizarNotas&id_usuario=" + id_usuario,
    "method": "POST",
    "timeout": 0,
  };



  $.ajax(settings).done(function (response) {
    $("body").html("");
    $("body").html(response);
  });
}
