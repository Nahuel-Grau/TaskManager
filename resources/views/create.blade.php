@include('navbar/nav')

    <body>
        <div class="mb-3">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ Route('post.create.task')}}">
                        @csrf
                        <h4 class="card-title">Añadir tarea</h4>
                        <label for="" class="form-label"></label>
                        <label for="">Tarea</label>
                        <input type="text" class="form-control" name="title" id="" rows="3"></input>

                        <label for="">Descripcion</label>
                        <input type="text" class="form-control" name="description" id="" rows="3"></input>
                        <br>
                        <div class=>
                            <button type="submit" class="btn btn-primary">
                               Añadir
                            </button>
                        </div>
                    </form>     
                </div>
                
            </div>
            
           
        </div>
        
    </body>
</html>
