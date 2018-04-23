<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
            integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
            crossorigin="anonymous"></script>

</head>
<body>
<h1>Todos los mensajes</h1>

<table width="100%" border="1">
    <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Title</th>
        <th>Messages</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($messages as $message)
        <tr>
            <td>{{ $message->id }}</td>
            <td>
                <a href="{{ route('messages.show', $message->id) }}">
                    {{ $message->name }}
                </a>
            </td>
            <td>{{ $message->email }}</td>
            <td>{{ $message->message }}</td>
            <td>
                <a href="{{ route('messages.edit', $message->id) }}">Editar</a>
                <form style="display: inline" method="POST" action="{{ route('messages.destroy', $message->id) }}">
                    {!! method_field('DELETE') !!}
                    {!! csrf_field() !!}
                    <button type="submit">Remover</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>