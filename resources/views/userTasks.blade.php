<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminApp</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand">AdminApp</a>
        <div class=" d-flex justify-content-around">
        </div>
    </nav>
    <div class="container">

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>TaskName</th>
                    <th>taskContent</th>
                    <th>Status</th>
                    <th>Project</th>
                    <th>Username</th>
                    <th>Update Task</th>
                    <th>Comments</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{{$task['task_id']}}</td>
                    <td>{{$task['task_name']}}</td>
                    <td>{{$task['task_detail']}}</td>
                    <td>{{$task['status']}}</td>
                    <td>{{$task['project_name']}}</td>
                    <td>{{$task['username']}}</td>
                    <td><a href="/tasks/{{$task['task_id']}}/edit"><button class="btn btn-primary">Update</button></a></td>
                    <!-- <td> <a href="{{url('/')}}/tasks/{{$task['task_id']}}/delete">
                            <button class="btn btn-danger">Delete</button></a></td> -->
                    <td><a href="{{url('/')}}/tasks/{{$task['task_id']}}/comment/create">
                            <button class="btn btn-secondary">Add</button></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Add Bootstrap JS (Optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>