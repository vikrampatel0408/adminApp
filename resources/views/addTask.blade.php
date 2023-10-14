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

        <form action="{{url('/')}}/tasks" method="post">
            @csrf
            <div class="form-group">
                <label for="taskName">Task Name</label>
                <input type="text" class="form-control" id="taskName" name="taskName" placeholder="Enter task name">
            </div>
            <div class="form-group">
                <label for="taskContent">Task Content</label>
                <textarea class="form-control" id="taskContent" rows="4"name="taskContent" placeholder="Enter task content"></textarea>
            </div>
            
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                <option value="Todo">Todo</option>           
                <option value="Inprogress">Inprogress</option>
                <option value="Testing">Testing</option>
                <option value="Complete">Complete</option>
                </select>
            </div>
            <div class="form-group">
                <label for="projectName">Project Name</label>
                <select name="projectName" id="projectName" class="form-control">
                @foreach ($projects as $project)
                    <option value="{{$project['project_name']}}">{{$project['project_name']}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="userName">User Name</label>
                <select name="userName" class="form-select form-control" aria-label="size 3 select example" >
                @foreach ($users as $user)
                    <option value="{{$user['username']}}">{{$user['username']}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Assign </button>
        </form>
    </div>

    <!-- Add Bootstrap JS and jQuery (for form validation) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>

</html>