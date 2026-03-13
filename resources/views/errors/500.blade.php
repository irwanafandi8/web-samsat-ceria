<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>500 - Server Error</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #fff5f5, #ffffff, #fff5f5);
            font-family: 'Segoe UI', sans-serif;
        }

        .error-inner {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            gap: 1rem;
            padding: 2rem;
        }

        .error-code {
            font-size: 8rem;
            font-weight: 900;
            line-height: 1;
            background: linear-gradient(135deg, #dc2626, #7f1d1d);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .error-icon {
            font-size: 3rem;
            color: #fca5a5;
        }

        .error-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #111827;
        }

        .error-desc {
            font-size: 0.95rem;
            color: #6b7280;
            max-width: 30rem;
            line-height: 1.6;
        }

        .error-actions {
            display: flex;
            gap: 0.75rem;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 0.5rem;
        }

        .btn-error-home {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.625rem 1.5rem;
            background: linear-gradient(135deg, #dc2626, #7f1d1d);
            color: #ffffff;
            border-radius: 0.5rem;
            font-size: 0.875rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn-error-home:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }

        .btn-error-info {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.625rem 1.5rem;
            background: #f3f4f6;
            color: #374151;
            border-radius: 0.5rem;
            font-size: 0.875rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn-error-info:hover {
            background: #e5e7eb;
            transform: translateY(-2px);
        }

        @media (max-width: 639px) {
            .error-code {
                font-size: 5rem;
            }

            .error-title {
                font-size: 1.25rem;
            }

            .error-actions {
                flex-direction: column;
                width: 100%;
            }

            .btn-error-home,
            .btn-error-info {
                justify-content: center;
            }
        }
    </style>
</head>

<body>
    <div class="error-inner">
        <div class="error-code">500</div>
        <div class="error-icon"><i class="fas fa-server"></i></div>
        <h1 class="error-title">Server Bermasalah</h1>
        <p class="error-desc">Maaf, terjadi kesalahan pada server kami. Tim kami sedang menangani masalah ini. Silakan
            coba beberapa saat lagi.</p>
        <div class="error-actions">
            <a href="{{ route('home') }}" class="btn-error-home">
                <i class="fas fa-home"></i> Kembali ke Beranda
            </a>
            <a href="{{ route('hubungi-kami.index') }}" class="btn-error-info">
                <i class="fas fa-envelope"></i> Hubungi Kami
            </a>
        </div>
    </div>
</body>

</html>
