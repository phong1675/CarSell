@extends('layouts.app')

@section('content')
<h1 style="font-size: 24px; font-weight: bold; margin-bottom: 20px;">🚗 Danh sách xe</h1>

<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
    <a href="{{ route('cars.create') }}"
       style="background-color: #7d4af2; color: white; padding: 8px 16px; border-radius: 5px; text-decoration: none;">
        ➕ Thêm xe
    </a>

    <form action="{{ route('cars.index') }}" method="GET" style="display: flex; gap: 10px;">
        <input type="text" name="search" placeholder="Tìm xe theo tên hoặc hãng"
            value="{{ request('search') }}"
            style="padding: 8px; width: 250px; border: 1px solid #ccc; border-radius: 4px;">
        <button type="submit"
            style="padding: 8px 14px; background-color: #2d92ec; color: white; border: none; border-radius: 4px;">
            🔍 Tìm
        </button>
    </form>
</div>

<table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse; background-color: white; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-radius: 8px; overflow: hidden;">
    <thead style="background-color: #f4f4f4;">
        <tr>
            <th style="padding: 12px;">STT</th>
            <th style="padding: 12px;">Tên xe</th>
            <th style="padding: 12px;">Hãng xe</th>
            <th style="padding: 12px;">Giá</th>
            <th style="padding: 12px;">Loại xe</th>
            <th style="padding: 12px;">Hành động</th>
        </tr>
    </thead>
    <tbody style="text-align: center;">
        @foreach ($cars as $index => $car)
        <tr style="border-top: 1px solid #ccc;">
            <td>{{ $index + 1 }}</td>
            <td>{{ $car->carName }}</td>
            <td>{{ $car->carBrand }}</td>
            <td style="color: green; font-weight: bold;">
                {{ number_format($car->price, 0, ',', '.') }} đ
            </td>
            <td>{{ $car->carType }}</td>
            <td>
                <a href="{{ route('cars.edit', $car) }}"
                   style="background-color: #ffa94d; color: white; padding: 4px 10px; border-radius: 4px; text-decoration: none; margin-right: 5px;">
                    ✏️ Sửa
                </a>

                <form action="{{ route('cars.destroy', $car) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            style="background-color: #ff4d4d; color: white; padding: 4px 10px; border-radius: 4px; border: none; cursor: pointer; margin-right: 5px;"
                            onclick="return confirm('Bạn có chắc muốn xóa xe này không?')">
                        🗑️ Xóa
                    </button>
                </form>

                <a href="{{ route('cars.show', $car) }}"
                   style="background-color: #827efc; color: white; padding: 4px 10px; border-radius: 4px; text-decoration: none;">
                    📖 Chi tiết
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
