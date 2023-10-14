<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Comment Table</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Comment Content</th>
                    <th>Username</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comments as $comment)
                <tr>
                    <td>{{$comment['comment_content']}}</td>
                    <td>{{$comment['username']}}</td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        <a href="{{url('/')}}/tasks"><button class="btn btn-primary">Back</button></a>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
