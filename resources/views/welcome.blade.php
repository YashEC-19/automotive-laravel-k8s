<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AutoDrive - Automotive Services</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', sans-serif; background: #f5f5f5; color: #333; }
        .navbar {
            background: #1a1a1a;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo { font-size: 24px; font-weight: bold; color: white; }
        .logo span { color: #e74c3c; }
        .version-badge {
            background: #e74c3c;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }
        .hero {
            height: 100vh;
            background: linear-gradient(135deg, #1a1a1a, #333);
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }
        .hero h1 { font-size: 50px; font-weight: 900; margin-bottom: 20px; }
        .hero h1 span { color: #e74c3c; }
        .hero p { font-size: 18px; color: #aaa; margin-bottom: 40px; }
        .btn {
            background: #e74c3c;
            color: white;
            padding: 15px 40px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
        }
        .footer {
            background: #1a1a1a;
            padding: 20px;
            text-align: center;
            color: #555;
        }
        .footer span { color: #e74c3c; }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">Auto<span>Drive</span></div>
        <span class="version-badge">v1.0</span>
    </nav>
    <section class="hero">
        <div>
            <h1>Welcome to <span>AutoDrive</span></h1>
            <p>Your trusted automotive service partner</p>
            <a href="#" class="btn">🚗 Get Started</a>
        </div>
    </section>
    <footer class="footer">
        <p>© 2026 <span>AutoDrive</span> — Version 1.0 — Running on Kubernetes</p>
    </footer>
</body>
</html>
