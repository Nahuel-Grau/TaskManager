
@include('navbar/nav')
    <body>
    
       
        
         <div class="card">
         
            <div class="card-body">
                <h4 class="card-title">Tareas</h4>
                <div class=""role="group" aria-label="Basic checkbox toggle button group">
                    
                    <br>
                 
                    <h2>selecciona la tarea que deseas eliminar o modificar</h2>
                    <br>
                        
                        <form action="">

                            <input type="checkbox"class="btn-check"id="btncheck1"autocomplete="off"/>
                            <label class="btn btn-outline-primary" for="btncheck1">Primer tarea</label><br>
                            <br>

                            <a  role="button" type="submit"class="btn btn-primary danger">Eliminar</a>
                            <a  href="{{route('edit.task')}}"  role="button" type="submit"class="btn btn-primary">Modificar</button> </a>
                            
                        </form>
                       
                    
                    </div>
                   
            </div>
             <div class="card-footer">
                <h2><a href="{{route('create.task');}}">añadir nueva tarea</a></h2>
             </div>
            
     


         </div>
         
            
   
         

        
    </body>
</html>
