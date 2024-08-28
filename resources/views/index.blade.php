
@include('navbar/nav')
    <body>
    
       
        
         <div class="card">
         
            <div class="row">
                <h4 class="card-title">Tareas</h4>
                <div class=""role="group" aria-label="Basic checkbox toggle button group">
                    
                    <br>
                 
                    <h2>selecciona la tarea que deseas eliminar o modificar</h2>
                    <br>
                    
                    @foreach ($tasks as $task)
                        <form method="POST" action="{{Route('delete', $task->id)}}">
                            @csrf 
                            @method('delete')
                            <div class="row" >
                                <div class="col-sm-6">
                                    <div class="card" style="width: 12rem;">
                                        <div class="card-body" >
                                            <h3 class="card-title"> 
                                             <p class="card-text">{!! $task->title!!}</p>
                                             <p class="card-text">{!! $task->description!!}</p>
                                            
                                            <button type="submit"class="btn btn-danger" >Eliminar</button><br>
                                            <a  href="{{route('edit.task',$task->id)}}"  role="button" type="submit"class="btn btn-primary">Modificar</button> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            @endforeach
                          
                            <br>


                           
                        </form>
                       
                    
                    </div>
                   
            </div>
             <div class="card-footer">
                <h2><a href="{{route('create.task');}}">añadir nueva tarea</a></h2>
             </div>
            
     


         </div>
         
            
   
         

        
    </body>
</html>
