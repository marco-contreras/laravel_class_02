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

    <style>
        .error {
            color: red;
            font-size: 12px;
        }
    </style>
</head>
<body>
@if(session()->has('info'))
    <h1>{{ session('info') }}</h1>
@else
    <form method="POST" action="message">
        <label for="nombre">
            Name
            <input type="text" name="name" value="{{ old('name') }}">
            {!! $errors->first('name', '<span class="error">:message</span>') !!}
        </label><br>

        <label for="email">
            Email
            <input type="text" name="email" value="{{ old('email') }}">
            {!! $errors->first('email', '<span class="error">:message</span>') !!}
        </label><br>

        <label for="message">
            Message
            <textarea name="message">{{ old('message') }}</textarea>
            {!! $errors->first('message', '<span class="error">:message</span>') !!}
        </label><br>

        <input type="submit" value="Send">
    </form>
@endif

</body>
</html>