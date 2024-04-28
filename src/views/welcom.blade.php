<!-- resources/views/contact.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>
<h1>Contact Us</h1>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<form method="POST" action="{{ route('contact') }}">
    @csrf
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" value="{{ old('name') }}"><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" value="{{ old('email') }}"><br>

    <label for="message">Message:</label><br>
    <textarea id="message" name="message">{{ old('message') }}</textarea><br>

    <button type="submit">Submit</button>
</form>
</body>
</html>
