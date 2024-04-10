<!DOCTYPE html>
<html>
<head>
    <title>Pertanyaan</title>
</head>
<body>

<p>{{ strtoupper($data['name']) }} ({{ $data['email'] }})</p>
<br>
Pertanyaan, <br>
<p>{{ $data['message'] }}</p>

</body>
</html>
