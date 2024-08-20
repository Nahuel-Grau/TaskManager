
@include('navbar/nav')
    <body>
    
       
        
         <div class="card">
         
            <div class="row">
                <h4 class="card-title">Tareas</h4>
                <div class=""role="group" aria-label="Basic checkbox toggle button group">
                    
                    <br>
                 
                    <h2>selecciona la tarea que deseas eliminar o modificar</h2>
                    <br>
                        
                        <form method="POST" action="{{route('')}}">
                            @foreach ($tasks as $task)
                            <div class="row" >
                                <div class="col-sm-6">
                                    <div class="card" style="width: 12rem;">
                                        <div class="card-body" >
                                            <h3 class="card-title"> 
                                                 <input type="checkbox"class="btn-check"id="{!!$task->id!!}"autocomplete="off"/> 
                                                 <label class="btn btn-outline-primary" for="{!!$task->id!!}">{!! $task->title !!}</label> </h3>
                                            <p class="card-text">{!! $task->description!!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            @endforeach
                          
                            <br>

                            <button type="submit"class="btn btn-primary danger" >Eliminar</button>
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
