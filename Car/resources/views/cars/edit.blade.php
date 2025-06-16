@extends('layouts.app')

@section('content')
    <h2>Sửa xe</h2>

    @if ($errors->any())
        <div>
            <strong>Lỗi:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('cars.update', $car) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="carName">Tên xe:</label>
        <input type="text" name="carName" value="{{ old('carName', $car->carName) }}"><br>

        <label for="carBrand">Hãng xe:</label>
        <input type="text" name="carBrand" value="{{ old('carBrand', $car->carBrand) }}"><br>

        <label for="carType">Loại xe:</label>
        <textarea name="carType">{{ old('carType', $car->carType) }}</textarea><br>

        <button type="submit">Cập nhật xe</button>
    </form>
@endsection