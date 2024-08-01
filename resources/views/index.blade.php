<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <div class="row">
            <div clas="col-12">
            <table class="table table-hover table-stripped">
        <thead>
            <tr>
                <th>Task Name</th>
                <th>Status</th>
                <th>Description</th>
                <th>Deadline</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user_tasks as $user_task)
            <tr>
                <td>{{ $user_task->task_name }}</td>
                <td>{{ $user_task->status }}</td>
                <td>{{ $user_task->description }}</td>
                <td>{{ $user_task->deadline }}</td>
                <td>
                    <a href="{{  url('user_task') }}/edit" class="btn btn-outline-success btn-sm">Edit</a>
                    <form action="{{  url('user_task') }}" method="POST">
                        @method('delete')
                        @csrf
                    <button type="submit"class="btn btn-outline-danger btn-sm" onclick="return confirm('Sure kana ba?')">Delete</button>
                 </form>

                </td>
            </tr>
            @endforeach
            <tr>
                <td colspan="8" class="text-right">
                 {!! $user_tasks->links() !!}     
                </td>
            </tr>
        </tbody>
    </table>
            </div>
        </div>
    </div>
    
</body>
</html>