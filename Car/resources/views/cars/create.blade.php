@extends('layouts.app')

@section('content')
    <h2>Thêm xe mới</h2>

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

    <form action="{{ route('cars.store') }}" method="POST">
        @csrf
        <label for="carName">Tên xe:</label>
        <input type="text" name="carName" value="{{ old('carName') }}"><br>

        <label for="carBrand">Hãng xe:</label>
        <input type="text" name="carBrand" value="{{ old('carBrand') }}"><br>

        <label for="carType">Loại xe:</label>
        <textarea name="carType">{{ old('carType') }}</textarea><br>

        <button type="submit">Thêm xe</button>
    </form>
@endsection