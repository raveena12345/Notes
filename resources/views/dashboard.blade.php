<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <div class="container">
        <h2>Notes Dashboard</h2>

        <!-- Add Note Form -->
        <form action="{{ route('notes.store') }}" method="POST">
            @csrf
            <input type="text" name="title" placeholder="Enter Note Title" required>
            <textarea name="content" placeholder="Enter Note Content" required></textarea>
            <button type="submit">Add Note</button>
        </form>

        <hr>

        <!-- List of Notes -->
        <h3>Your Notes</h3>
        @foreach($notes as $note)
            <div class="note">
                <h4>{{ $note->title }}</h4>
                <p>{{ $note->content }}</p>

                <!-- <a href="{{ route('notes.edit', $note->id) }}">✏️ Edit</a> -->

                <a href="{{ route('notes.edit', $note->id) }}">
                    <button type="button">✏️ Edit</button>
                </a>


                <form action="{{ route('notes.delete', $note->id) }}" method="POST">
                    @csrf
                    <button type="submit">🗑️ Delete</button>
                </form>
            </div>
        @endforeach

        <!-- Logout Button -->
        <form action="{{ route('logout') }}" method="POST">
        @csrf
            <button type="submit">Logout</button>
        </form>

    </div>
</body>
</html>
