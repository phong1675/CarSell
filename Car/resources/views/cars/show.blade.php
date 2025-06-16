@extends('layouts.app')

@section('content')
<div style="max-width: 600px; margin: 0 auto; background-color: #fff; padding: 24px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
    <h2 style="font-size: 22px; font-weight: bold; margin-bottom: 20px;">📄 Thông tin chi tiết xe</h2>

    <table style="width: 100%; border-collapse: collapse; font-size: 16px;">
        <tr>
            <td style="font-weight: bold; padding: 8px;">Tên xe:</td>
            <td style="padding: 8px;">{{ $car->carName }}</td>
        </tr>
        <tr>
            <td style="font-weight: bold; padding: 8px;">Hãng xe:</td>
            <td style="padding: 8px;">{{ $car->carBrand }}</td>
        </tr>
        <tr>
            <td style="font-weight: bold; padding: 8px;">Giá:</td>
            <td style="padding: 8px; color: green; font-weight: bold;">{{ number_format($car->price, 0, ',', '.') }} đ</td>
        </tr>
        <tr>
            <td style="font-weight: bold; padding: 8px;">Loại xe:</td>
            <td style="padding: 8px;">{{ $car->carType ?? 'Không có mô tả' }}</td>
        </tr>
        <tr>
            <td style="font-weight: bold; padding: 8px;">Thông tin chi tiết:</td>
            <td style="padding: 8px;">{{ $car->description ?? 'Không có mô tả' }}</td>
        </tr>
    </table>

    <div style="margin-top: 24px;">
        <a href="{{ route('cars.index') }}"
           style="text-decoration: none; background-color: #6666cc; color: white; padding: 10px 16px; border-radius: 5px; display: inline-block;">
           🔙 Quay lại
        </a>
    </div>
</div>
@endsection
