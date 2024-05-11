<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <table class="table table-bordered">
            <thead class="table-sm">
                <tr>
                    <th scope="col" class="col-2">ID</th>
                    <th scope="col" class="col-4">Name</th>
                    <th scope="col" class="col-4">Email</th>
                    <th scope="col" class="col-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <form action="{{route('user.delete',$user->id)}}" method="post">
                                @csrf
                                @method('DELETE')

                                <button class = 'btn btn-danger'>Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
    
        </table>
        @if (session('success'))
        <div class="alert alert-danger mt-3" role="alert">
            {{ session('success') }}
        </div>
        @endif        
    </div>

</body>
</html>