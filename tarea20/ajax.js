function cargar(pagina) {
    var ajax = new XMLHttpRequest() //es hacer llamadas apaginas 
    ajax.open("get", pagina, true); //a quien llamara
    ajax.onreadystatechange = function() { // funcion de respuesta
    if (ajax.readyState == 4) {
          document.getElementById("contenido").innerHTML = ajax.responseText;
    }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8"); //cabecera
    ajax.send(); //llamar a la pagina
    }

/*--------------------------------------------------*/     
     function llamaregistrarHB(){
        numH=document.getElementById("numH").value;
        tipoHabitacion=document.getElementById("tipoHabitacion").value;
        bp=document.getElementById("bp").value;
        tamanio=document.getElementById("tamanio").value;
        precio=document.getElementById("precio").value;
        var ajax=new XMLHttpRequest();
		ajax.onreadystatechange=function()
		{
		 if(ajax.readyState == 4) { 
		 	
		 	 document.getElementById('contenido').innerHTML=ajax.responseText;
		 	
		 	}	
        }
        var parametros = "numH="+numH + "&tipoHabitacion="+tipoHabitacion + "&bp="+bp  
        +"&tamanio="+tamanio +"&precio="+precio+"&nocache=" + Math.random();
            alert(tipoHabitacion);
            alert(bp);
            
            ajax.open('POST', 'RegistrarHB.php', true); //a quien llamara
            ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            ajax.send(parametros);       
    } 



    function formEditarHB(ID){
        var ajax=new XMLHttpRequest();
        var parametros = "FormEditarHB.php?ID="+ID+ "&nocache=" + Math.random();
        
         ajax.open("get", parametros , true); //a quien llamara
         
         ajax.onreadystatechange=function()
         {
          if(ajax.readyState == 4) { 
              
               document.getElementById('contenido').innerHTML=ajax.responseText;
              
              }	
         }
         
             //alert(direccion);
             
             ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
             ajax.send(parametros);       
     }  
 

     function editarHB(ID){
        numH=document.getElementById("numH").value;
        tipoHabitacion=document.getElementById("tipoHabitacion").value;
        bp=document.getElementById("bp").value;
        tamanio=document.getElementById("tamanio").value;
        precio=document.getElementById("precio").value;
        var ajax=new XMLHttpRequest();
        ajax.onreadystatechange=function()
        {
         if(ajax.readyState == 4) { 
             
              document.getElementById('contenido').innerHTML=ajax.responseText;
             
             }	
        }
        var parametros = "ID="+ID+ "&numH="+numH + "&tipoHabitacion="+tipoHabitacion + "&bp="+bp  
        +"&tamanio="+tamanio +"&precio="+precio+ "&nocache=" + Math.random();
            ajax.open('POST', 'EditarHB.php', true); //a quien llamara
            ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            ajax.send(parametros);       
    } 


     function eliminarHB(id){
        var ajax=new XMLHttpRequest();
        var parametros = "EliminarHB.php?ID="+id+ "&nocache=" + Math.random();
        
         ajax.open("get",parametros , true); //a quien llamara
         
         ajax.onreadystatechange=function()
         {
          if(ajax.readyState == 4) { 
              
               document.getElementById('contenido').innerHTML=ajax.responseText;
              
              }	
         }   
             ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
             ajax.send(parametros);       
     } 
 
/*--------------------------------------------------*/  
    
    function llamaregistrarTH(){  
        descripcion=document.getElementById("descripcion").value; 
        ncamas=document.getElementById("ncamas").value;
    
        var ajax=new XMLHttpRequest();
		ajax.onreadystatechange=function()
		{
		 if(ajax.readyState == 4) { 
		 	
		 	 document.getElementById('contenido').innerHTML=ajax.responseText;
		 	
		 	}	
        }
        var parametros = "descripcion="+descripcion + "&ncamas="+ncamas+"&nocache=" + Math.random();
            
            ajax.open('POST', 'RegistrarTH.php', true); //a quien llamara
            ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            ajax.send(parametros);       
    } 


     function formEditarTH(ID){
        var ajax=new XMLHttpRequest();
        var parametros = "FormEditarTH.php?ID="+ID+ "&nocache=" + Math.random();
        
         ajax.open("get", parametros , true); //a quien llamara
         
         ajax.onreadystatechange=function()
         {
          if(ajax.readyState == 4) { 
              
               document.getElementById('contenido').innerHTML=ajax.responseText;
              
              }	
         }
         
             //alert(direccion);
             
             ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
             ajax.send(parametros);       
     }  
 

     function editarTH(ID){
        var ajax=new XMLHttpRequest();
        ajax.onreadystatechange=function()
        {
         if(ajax.readyState == 4) { 
             
              document.getElementById('contenido').innerHTML=ajax.responseText;
             
             }	
        }
        var parametros = "ID="+ID+"&descripcion="+encodeURI(document.getElementById('descripcion').value) + "&ncamas=" 
        + encodeURI(document.getElementById('ncamas').value) + "&nocache=" + Math.random();
            //alert(direccion);
            ajax.open('POST', 'EditarTH.php', true); //a quien llamara
            ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            ajax.send(parametros);       
    } 


     function eliminarTH(id){
        var ajax=new XMLHttpRequest();
        var parametros = "EliminarTH.php?ID="+id+ "&nocache=" + Math.random();
        
         ajax.open("get",parametros , true); //a quien llamara
         
         ajax.onreadystatechange=function()
         {
          if(ajax.readyState == 4) { 
              
               document.getElementById('contenido').innerHTML=ajax.responseText;
              
              }	
         }   
             ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
             ajax.send(parametros);       
     } 
 
 
 
 /*--------------------------------------------------*/    
    function llamaregistrarU(){  
        correo=document.getElementById("correo").value; 
        password=document.getElementById("password").value; 
        nombre=document.getElementById("nombre").value; 
        apellidos=document.getElementById("apellidos").value; 
        rol=document.getElementById("rol").value; 
        estado=document.getElementById("estado").value;
        var ajax=new XMLHttpRequest();
		ajax.onreadystatechange=function()
		{
		 if(ajax.readyState == 4) { 
		 	
		 	 document.getElementById('contenido').innerHTML=ajax.responseText;
		 	
		 	}	
        }
        var parametros = "correo="+correo + "&password="+password
        +"&nombre="+nombre + "&apellidos="+apellidos
        +"&rol="+rol + "&estado="+estado +"&nocache=" + Math.random();
            
            ajax.open('POST', 'RegistrarU.php', true); //a quien llamara
            ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            ajax.send(parametros);       
    } 

    function formEditarU(id){
        var ajax=new XMLHttpRequest();
        var parametros = "FormEditarU.php?id="+id+ "&nocache=" + Math.random();
        
         ajax.open("get", parametros , true); //a quien llamara
         
         ajax.onreadystatechange=function()
         {
          if(ajax.readyState == 4) { 
              
               document.getElementById('contenido').innerHTML=ajax.responseText;
              
              }	
         }
         
             //alert(direccion);
             
             ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
             ajax.send(parametros);       
     }  
 

     function editarU(id){
     correo=document.getElementById("correo").value; 
     password=document.getElementById("password").value; 
     nombre=document.getElementById("nombre").value; 
     apellidos=document.getElementById("apellidos").value; 
     rol=document.getElementById("rol").value; 
     estado=document.getElementById("estado").value;
        var ajax=new XMLHttpRequest();
        ajax.onreadystatechange=function()
        {
         if(ajax.readyState == 4) { 
             
              document.getElementById('contenido').innerHTML=ajax.responseText;
             
             }	
        }
        var parametros = "id="+id+ "&correo="+correo + "&password="+password
        +"&nombre="+nombre + "&apellidos="+apellidos
        +"&rol="+rol + "&estado="+estado + "&nocache=" + Math.random();
            //alert(direccion);
            ajax.open('POST', 'EditarU.php', true); //a quien llamara
            ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            ajax.send(parametros);       
    } 


     function eliminarU(id){
        var ajax=new XMLHttpRequest();
        var parametros = "EliminarU.php?id="+id+ "&nocache=" + Math.random();
        
         ajax.open("get",parametros , true); //a quien llamara
         
         ajax.onreadystatechange=function()
         {
          if(ajax.readyState == 4) { 
              
               document.getElementById('contenido').innerHTML=ajax.responseText;
              
              }	
         }   
             ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
             ajax.send(parametros);       
     } 


      /*--------------------------------------------------*/    
    function RegistrarReserva(){  

              
        codigoReserva=document.getElementById("codigoReserva").value; 
        fechaIngreso=document.getElementById("fechaIngreso").value; 
        fechaSalida=document.getElementById("fechaSalida").value; 
        IdHabitacion=document.getElementById("IdHabitacion").value; 
        precio=document.getElementById("precio").value; 
        pago=document.getElementById("pago").value;
        nombre=document.getElementById("nombre").value; 
        apellidos=document.getElementById("apellidos").value; 
        correo=document.getElementById("correo").value;

        var ajax=new XMLHttpRequest();
		ajax.onreadystatechange=function()
		{
		 if(ajax.readyState == 4) { 
		 	
		 	 document.getElementById('contenido').innerHTML=ajax.responseText;
		 	
		 	}	
        }
        var parametros = "codigoReserva="+codigoReserva + "&fechaIngreso="+fechaIngreso
        +"&fechaSalida="+fechaSalida + "&IdHabitacion="+IdHabitacion
        +"&precio="+precio + "&pago="+pago+ "&nombre="+nombre
        +"&apellidos="+apellidos + "&correo="+correo+"&nocache=" + Math.random();
            
            ajax.open('POST', 'RegistrarReserva.php', true); //a quien llamara
            ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            ajax.send(parametros);       
    } 

    

    
     
     