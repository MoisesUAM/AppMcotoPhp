 $(document).ready(function () {


        // haga clic en un enlace para cambiar el color, luego haga clic en otro para restaurar el color original 
      /*  function changCss(obj){  
            var arr = document.getElementById('#pageStyle');  
            for(var i=0;i<arr.length;i++){     
             if(obj==arr[i]){       // Estilo de página actual  
              obj.style.backgroundColor="#006B00";  
              obj.style.color="#ffffff";  
            }  
             else  
             {  
               arr[i].style.color="";  
               arr[i].style.backgroundColor="";  
             }  
            }  
         }*/


        $(function(){  
            var $table = $('#tblpersonas');  
            var currentPage = 0;// El valor predeterminado de la página actual es 0  
            var pageSize = 7;// Número que se muestra en cada página  
            $table.bind('paging',function(){  
                $table.find('tbody tr').hide().slice(currentPage*pageSize,(currentPage+1)*pageSize).show();  
            });       
            var sumRows = $table.find('tbody tr').length;  
            var sumPages = Math.ceil(sumRows/pageSize);//paginas totales    
              
            var $pager = $('.page');  // Crea un nuevo div, coloca una etiqueta, muestra el número de página inferior  
            for(var pageIndex = 0 ; pageIndex<sumPages ; pageIndex++){  
                $('<a href="#" id="pageStyle" class="btn btn-dark" rol="button" "><span>'+(pageIndex+1)+'</span></a>').bind("click",{"newPage":pageIndex},function(event){  
                    currentPage = event.data["newPage"];  
                    $table.trigger("paging");  
                      // Activar la función de paginación  
                    }).appendTo($pager);  
                    $pager.append(" ");  
                }     
                $pager.insertAfter($table);  
                $table.trigger("paging");  
                  
                // El efecto predeterminado de una etiqueta en la primera página  
                var $pagess = $('#pageStyle');  
                //$pagess[0].style.backgroundColor="#006B00";  
                //$pagess[0].style.color="#ffffff";  
       });  

       



     });


     function Eliminar(id){
      //var respuesta = confirm("Desea eliminar el registro?");
      //if(respuesta){
      //    window.location.href = "../controllers/eliminar.php?id="+id;
      //}
      Swal.fire({
        title: 'Esta seguro?',
        text: "Desea eliminar el registro?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Eliminar!'
      }).then((result) => {
        if (result.value) {
          window.location.href = "../controllers/eliminar.php?id="+id;
        }
      });

  }