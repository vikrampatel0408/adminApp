<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminApp</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Create a New Task</h2>

        <form action="{{url('/')}}/tasks/{{$id}}" method="post">
            @csrf
            <input type="hidden" name="_method" value="put" />

            <div class="form-group">
                
                <label for="taskName">Task Name</label>
                @if (!$isAdmin)
                <input disabled type="text" class="form-control" id="taskName" name="taskName" placeholder="" value="{{$task[0]['task_name']}}">
                @else
                <input  type="text" class="form-control" id="taskName" name="taskName" placeholder="" value="{{$task[0]['task_name']}}">
                @endif

            </div>
            <div class="form-group">
                <label for="taskContent">Task Content</label>
                @if (!$isAdmin)
                <textarea disabled class="form-control"value="{{$task[0]['task_detail']}}" id="taskContent" rows="4"name="taskContent" placeholder="Enter task content" ></textarea>
                @else
                <textarea  class="form-control"value="{{$task[0]['task_detail']}}" id="taskContent" rows="4"name="taskContent" placeholder="Enter task content" ></textarea>
                @endif

            </div>
            
            <div class="form-group">
                <label for="status">Status</label>
               
                <select name="status" id="status" class="form-control">
                <option value="{{$task[0]['status']}}" selected>{{$task[0]['status']}}</option>
                <option value="Todo">Todo</option>           
                <option value="Inprogress">Inprogress</option>
                <option value="Testing">Testing</option>
                <option value="Complete">Complete</option>
                </select>
            </div>
            <div class="form-group">
                <label for="projectName">Project Name</label>
                @if (!$isAdmin)
                <select disabled name="projectName" id="projectName" class="form-control">
                @foreach ($projects as $project)
                    <option value="{{$project['project_name']}}">{{$project['project_name']}}</option>
                    @endforeach
                    <option value="{{$task[0]['project_name']}}" selected>{{$task[0]['project_name']}}</option>
                </select>
                @else
                <select  name="projectName" id="projectName" class="form-control">
                    @foreach ($projects as $project)
                    <option value="{{$project['project_name']}}">{{$project['project_name']}}</option>
                    @endforeach
                    <option value="{{$task[0]['project_name']}}" selected>{{$task[0]['project_name']}}</option>
                </select>
                @endif
            </div>
            <div class="form-group">
                <label for="userName">User Name</label>
                @if (!$isAdmin)
                <select disabled name="userName" class="form-select form-control" aria-label="size 3 select example" >
                    <option value="{{$task[0]['username']}}" selected>{{$task[0]['username']}}</option>
                @foreach ($users as $user)
                    <option value="{{$user['username']}}">{{$user['username']}}</option>
                    @endforeach
                </select>
                @else
                <select  name="userName" class="form-select form-control" aria-label="size 3 select example" >
                    <option value="{{$task[0]['username']}}" selected>{{$task[0]['username']}}</option>
                    @foreach ($users as $user)
                    <option value="{{$user['username']}}">{{$user['username']}}</option>
                    @endforeach
                </select>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">update</button>
        </form>
    </div>

    <!-- Add Bootstrap JS and jQuery (for form validation) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>

</html>