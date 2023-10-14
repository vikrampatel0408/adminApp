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
    <div class="container">
        <h1>Project Information</h1>
        <form action="{{url('/')}}/projects" method="post">
            @csrf
            <div class="form-group">
                <label for="projectName">Project Name:</label>
                <input type="text" class="form-control" id="projectName" name="projectName" placeholder="Enter project name">
            </div>
            <div class="form-group">
                <label for="projectDate">Project Deadline:</label>
                <input type="date" class="form-control" id="projectDate" name="projectDate">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
    
    <!-- Add Bootstrap JS (Optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
