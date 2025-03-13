<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Note</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <div class="container">
        <h2>Edit Note</h2>
        <form action="{{ route('notes.update', $note->id) }}" method="POST">
            @csrf
            <input type="text" name="title" value="{{ $note->title }}" required placeholder="Enter Note Title">
            <textarea name="content" required placeholder="Enter Note Content">{{ $note->content }}</textarea>
            <button type="submit">Update Note</button>
        </form>
        <a href="{{ route('dashboard') }}" class="back-link">⬅ Back to Dashboard</a>
    </div>
</body>
</html>
