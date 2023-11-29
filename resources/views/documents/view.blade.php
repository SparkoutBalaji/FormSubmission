<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Document</title>
</head>
<body>
    <embed src="data:application/pdf;base64,{{ base64_encode($fileContent) }}" type="application/pdf" width="100%" height="600px">
</body>
</html>
