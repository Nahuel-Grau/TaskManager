@include('navbar/nav')

    <body>
        <div class="mb-3">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{Route('edit', $task->id)}} ">
                        @csrf
                        
                        <h4 class="card-title">Edit task</h4>
                        <label for="" class="form-label"></label>
                        <input type="text" class="form-control" name="title" id="" rows="3" value="{{$task->title}}"></input>
                        <input type="text" class="form-control" name="description" id="" rows="3" value="{{$task->description}}"></input>
                        <br>
                        <button type="submit"id="" class="btn btn-primary" href="#" role="button">Edit</button>
                    </form>     
                </div>
                
            </div>
            
           
        </div>
        
    </body>
</html>