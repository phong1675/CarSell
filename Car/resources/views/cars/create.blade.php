@extends('layouts.app')

@section('content')
<div style="max-width: 700px; margin: 0 auto; background: #fff; padding: 24px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
    <h2 style="font-size: 22px; font-weight: bold; margin-bottom: 20px;">➕ Thêm xe mới</h2>

    @if ($errors->any())
        <div style="padding: 12px; margin-bottom: 20px; background-color: #ffe5e5; border-left: 5px solid #ff4d4d;">
            <strong>Lỗi:</strong>
            <ul style="margin-left: 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('cars.store') }}" method="POST">
        @csrf

        <div style="margin-bottom: 16px;">
            <label for="carName" style="font-weight: bold;">Tên xe:</label><br>
            <input type="text" name="carName" value="{{ old('carName') }}"
                   style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div style="margin-bottom: 16px;">
            <label for="carBrand" style="font-weight: bold;">Hãng xe:</label><br>
            <input type="text" name="carBrand" value="{{ old('carBrand') }}"
                   style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div style="margin-bottom: 16px;">
            <label for="price" style="font-weight: bold;">Giá (VNĐ):</label><br>
            <input type="number" name="price" step="100000" value="{{ old('price') }}"
                   style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div style="margin-bottom: 16px;">
            <label for="carType" style="font-weight: bold;">Loại xe:</label><br>
            <textarea name="carType" rows="2"
                      style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">{{ old('carType') }}</textarea>
        </div>

        <div style="margin-bottom: 20px;">
            <label for="description" style="font-weight: bold;">Thông tin chi tiết:</label><br>
            <textarea name="description" rows="4"
                      style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">{{ old('description') }}</textarea>
        </div>

        <div style="text-align: right;">
            <button type="submit"
                    style="background-color: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 5px; font-weight: bold; cursor: pointer;">
                🚗 Thêm xe
            </button>
        </div>
    </form>
</div>
@endsection
