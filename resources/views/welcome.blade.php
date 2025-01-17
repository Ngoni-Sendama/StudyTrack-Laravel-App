<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gemini Text Generation</title>
</head>
<body>
    <h1>Gemini Text Generator</h1>

    <form action="{{ route('generate-text') }}" method="POST">
        @csrf
        <label for="text">Enter Text to Generate:</label>
        <input type="text" id="text" name="text" placeholder="Type your text here" required>

        <button type="submit">Generate Text</button>
    </form>

    @if(session('generated_text'))
        <div>
            <h2>Generated Text:</h2>
            <p>{{ session('generated_text') }}</p>
        </div>
    @endif

    @if(session('error'))
        <div style="color: red;">
            <strong>Error: </strong>{{ session('error') }}
        </div>
    @endif
</body>
</html>
