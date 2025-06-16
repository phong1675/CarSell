@extends('layouts.app')

@section('content')
<h2>Chi tiết xe</h2>
<ul style="font-size: 16px;">
    <li><strong>Tên xe:</strong> {{ $car->carName }}</li>
    <li><strong>Hãng xe:</strong> {{ $car->carBrand }}</li>
    <li><strong>Loại xe:</strong> {{ $car->carType ?? 'Không có mô tả' }}</li>
</ul>

<a href="{{ route('cars.index') }}" 
   style="margin-top: 15px; display: inline-block; background-color: #999; color: white; padding: 8px 12px; border-radius: 5px;">
   🔙 Quay lại
</a>
@endsection