<!-- resources/views/Car.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Car List</title>
</head>
<body>
    <h1>Danh sách xe</h1>
    <ul>
        @foreach ($cars as $car)
            <li>{{ $car->name ?? 'Xe không tên' }}</li>
        @endforeach
    </ul>
</body>
</html>

