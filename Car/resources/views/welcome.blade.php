<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nguyen Hong Phong AUTO</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 100%;
            max-width: 900px;
            background: #fff;
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            margin: 2rem;
        }

        .header {
            display: flex;
            justify-content: flex-end;
            gap: 12px;
            margin-bottom: 20px;
        }

        .header a {
            text-decoration: none;
            color: #333;
            border: 1px solid #ccc;
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 14px;
            transition: background 0.2s ease;
        }

        .header a:hover {
            background-color: #000;
            color: white;
        }

        .title {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #111;
        }

        .desc {
            font-size: 16px;
            color: #555;
            margin-bottom: 1.2rem;
        }

        .list {
            list-style: none;
            padding: 0;
            margin: 1.5rem 0;
        }

        .list li {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            font-size: 15px;
        }

        .dot {
            width: 10px;
            height: 10px;
            background-color: #ff6b6b;
            border-radius: 50%;
            margin-right: 10px;
        }

        .cta-link {
            color: #e74c3c;
            text-decoration: none;
            font-weight: 500;
            margin-left: 6px;
        }

        .cta-link:hover {
            text-decoration: underline;
        }

        .footer {
            margin-top: 1.5rem;
            font-size: 15px;
            color: #333;
        }

        .banner {
            width: 100%;
            max-height: 350px;
            overflow: hidden;
            border-radius: 10px;
            margin-bottom: 2rem;
        }

        .banner img {
            width: 100%;
            object-fit: cover;
            border-radius: 10px;
        }

        @media (max-width: 768px) {
            .container {
                padding: 1.5rem;
            }

            .title {
                font-size: 22px;
            }

            .desc, .footer {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}">Vào trang chính</a>
                @else
                    <a href="{{ route('login') }}">Đăng nhập</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Đăng ký</a>
                    @endif
                @endauth
            @endif
        </div>

        <div class="banner">
            <img src="{{ asset('xehoi.jpg') }}" alt="Ảnh xe ô tô đẹp">
        </div>

        <div class="title">Chào mừng đến với cửa hàng xe</div>
        <div class="desc">Khám phá những mẫu xe mới nhất với dịch vụ tận tâm từ chúng tôi.</div>

        <ul class="list">
            <li><div class="dot"></div>Hotline: 09xxxxxxxx</li>
            <li>
                <div class="dot"></div>
                Tìm hiểu về tôi:
                <a href="https://www.facebook.com/nguyen.phong.66443" class="cta-link" target="_blank">I'm here</a>
            </li>
        </ul>

        <div class="footer">Chúng tôi rất hân hạnh được phục vụ bạn.</div>
    </div>
</body>
</html>
