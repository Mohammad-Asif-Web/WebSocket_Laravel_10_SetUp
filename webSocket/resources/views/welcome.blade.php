<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Socket</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <div id="app">
        <h1>Laravel WebSockets</h1>
        <div id="messages"></div>
    </div>

    <!-- Ensure the Vite-built JavaScript is loaded correctly -->
    @vite('resources/js/app.js')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
        Echo.channel('testDataChannel')
            .listen('TestData', (data) => {
                const messagesDiv = document.getElementById('messages');
                const messageElement = document.createElement('div');
                messageElement.textContent = data.data;
                messagesDiv.appendChild(messageElement);
            });
        });
    </script>

</body>
</html>
