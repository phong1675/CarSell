@extends('layouts.app')

@section('content')
<h1 style="font-size: 24px; font-weight: bold;">Danh sách xe</h1>

<div style="margin: 15px 0;">
    <a href="{{ route('cars.create') }}" 
       class="px-4 py-2 text-white rounded" 
       style="background-color: #35bfe6;">
        ➕ Thêm xe

    </a>
    
    <form action="{{ route('cars.index') }}" method="GET" style="margin-bottom: 20px;">
        <input type="text" name="search" placeholder="Tìm xe theo tên hoặc hãng xe"
            value="{{ request('search') }}"
            style="padding: 8px; width: 300px; border: 1px solid #ccc; border-radius: 4px;">
        <button type="submit"
            style="padding: 8px 12px; background-color: #35bfe6; color: white; border: none; border-radius: 4px;">
                🔍 Tìm
        </button>
    </form>
</div>

<table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse; text-align: center;">
    <thead style="background-color: #f0f0f0;">
        <tr>
            <th style="border: 2px solid #999; padding: 12px; background-color: #f0f0f0;">STT</th>
            <th style="border: 2px solid #999; padding: 12px; background-color: #f0f0f0;">Tên xe</th>
            <th style="border: 2px solid #999; padding: 12px; background-color: #f0f0f0;">Hãng xe</th>
            <th style="border: 2px solid #999; padding: 12px; background-color: #f0f0f0;">Loại xe</th>
            <th style="border: 2px solid #999; padding: 12px; background-color: #f0f0f0;">Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cars as $index => $car)
            <tr class="items-center">
                <td>{{ $index + 1 }}</td>
                <td>{{ $car->carName }}</td>
                <td>{{ $car->carBrand }}</td>
                <td>{{ $car->carType }}</td>
                <td>
                    <a href="{{ route('cars.edit', $car) }}" 
                       class="px-3 py-1 text-white rounded" 
                       style="background-color: #25dd2b; margin-right: 5px;">
                        ✏️ Sửa
                    </a>

                    <form action="{{ route('cars.destroy', $car) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="px-3 py-1 text-white rounded" 
                                style="background-color: #f63939">
                            🗑️ Xóa
                        </button>
                    </form>

                    <a href="{{ route('cars.show', $car) }}" 
                    class="px-3 py-1 text-white rounded" 
                    style="background-color: #777bbb; margin-right: 5px;">
                        📖 Chi tiết
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection