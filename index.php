<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My First PWA</title>
  <meta name="theme-color" content="#ff0000" />
  <link rel="manifest" href="manifest.json">
  <script>
    //if browser support service worker
    if ('serviceWorker' in navigator) {
      navigator.serviceWorker.register('sw.js');
    };
  </script>
</head>

<body>
  <h1>PWA Test</h1>
  <p>Hello world!</p>
</body>

</html>