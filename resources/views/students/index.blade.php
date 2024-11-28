<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Florante at Laura</title>
</head>
<body>
    <table>
        <h2>Student's Information</h2>
        <tr>
            <th>Student's Name</th>
            <th>Email</th>
            <th>Posts</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>
                    <ul>
                        @foreach ($student->posts as $post)
                            <li>{{ $post->content }}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $students->links() !!}
</body>
</html>
