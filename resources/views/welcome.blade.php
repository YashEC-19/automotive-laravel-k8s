<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AutoDrive Pro - Premium Automotive Services</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', sans-serif; background: #0a0a0a; color: white; }
        
        /* Navbar */
        .navbar {
            background: linear-gradient(90deg, #0a0a0a, #1a1a1a);
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #b8860b;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        .logo { font-size: 24px; font-weight: bold; color: #b8860b; }
        .logo span { color: white; }
        .nav-links a { color: #ccc; text-decoration: none; margin-left: 25px; font-size: 14px; }
        .nav-links a:hover { color: #b8860b; }
        .version-badge {
            background: #b8860b;
            color: black;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            background: linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 50%, #0d0d0d 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding-top: 70px;
            position: relative;
            overflow: hidden;
        }
        .hero::before {
            content: '';
            position: absolute;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(184,134,11,0.1) 0%, transparent 70%);
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .hero-content { position: relative; z-index: 1; }
        .hero h1 { font-size: 60px; font-weight: 900; margin-bottom: 20px; }
        .hero h1 span { color: #b8860b; }
        .hero p { font-size: 20px; color: #aaa; margin-bottom: 40px; max-width: 600px; }
        .btn-primary {
            background: linear-gradient(90deg, #b8860b, #daa520);
            color: black;
            padding: 15px 40px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-right: 15px;
            text-decoration: none;
            display: inline-block;
        }
        .btn-secondary {
            border: 2px solid #b8860b;
            color: #b8860b;
            padding: 13px 40px;
            border-radius: 5px;
            font-size: 16px;
            text-decoration: none;
            display: inline-block;
        }

        /* Services Section */
        .services {
            padding: 80px 40px;
            background: #111;
        }
        .services h2 { text-align: center; font-size: 36px; margin-bottom: 10px; }
        .services h2 span { color: #b8860b; }
        .subtitle { text-align: center; color: #aaa; margin-bottom: 50px; }
        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            max-width: 1100px;
            margin: 0 auto;
        }
        .service-card {
            background: #1a1a1a;
            border: 1px solid #333;
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            transition: border-color 0.3s;
        }
        .service-card:hover { border-color: #b8860b; }
        .service-icon { font-size: 40px; margin-bottom: 15px; }
        .service-card h3 { font-size: 18px; margin-bottom: 10px; color: #b8860b; }
        .service-card p { color: #aaa; font-size: 14px; line-height: 1.6; }

        /* Stats Section */
        .stats {
            padding: 60px 40px;
            background: linear-gradient(90deg, #b8860b, #daa520);
            display: flex;
            justify-content: space-around;
            text-align: center;
        }
        .stat h3 { font-size: 48px; font-weight: 900; color: black; }
        .stat p { font-size: 14px; color: #333; font-weight: bold; }

        /* Footer */
        .footer {
            background: #0a0a0a;
            padding: 30px;
            text-align: center;
            color: #555;
            border-top: 1px solid #222;
        }
        .footer span { color: #b8860b; }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">Auto<span>Drive</span> Pro</div>
        <div class="nav-links">
            <a href="#">Home</a>
            <a href="#">Services</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </div>
        <span class="version-badge">🚀 v2.0 LIVE</span>
    </nav>

    <!-- Hero -->
    <section class="hero">
        <div class="hero-content">
            <h1>Premium <span>Automotive</span><br>Services</h1>
            <p>Experience world-class car services with cutting-edge technology and expert mechanics at your doorstep.</p>
            <a href="#" class="btn-primary">🚗 Book a Service</a>
            <a href="#" class="btn-secondary">Learn More</a>
        </div>
    </section>

    <!-- Services -->
    <section class="services">
        <h2>Our <span>Services</span></h2>
        <p class="subtitle">Everything your vehicle needs, all in one place</p>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">🔧</div>
                <h3>Engine Repair</h3>
                <p>Complete engine diagnostics and repair by certified mechanics using latest tools.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">🛞</div>
                <h3>Tire Services</h3>
                <p>Tire replacement, balancing, and alignment for a smooth and safe ride.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">🚿</div>
                <h3>Car Wash & Detailing</h3>
                <p>Premium car wash and interior detailing to keep your vehicle spotless.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">⚡</div>
                <h3>EV Services</h3>
                <p>Specialized electric vehicle charging, battery diagnostics and maintenance.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">🛡️</div>
                <h3>Insurance Claims</h3>
                <p>Hassle-free insurance claim processing and accident repair services.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">📋</div>
                <h3>Vehicle Inspection</h3>
                <p>Comprehensive 100-point vehicle inspection report for complete peace of mind.</p>
            </div>
        </div>
    </section>

    <!-- Stats -->
    <section class="stats">
        <div class="stat"><h3>15K+</h3><p>HAPPY CUSTOMERS</p></div>
        <div class="stat"><h3>50+</h3><p>EXPERT MECHANICS</p></div>
        <div class="stat"><h3>10+</h3><p>YEARS EXPERIENCE</p></div>
        <div class="stat"><h3>99%</h3><p>SATISFACTION RATE</p></div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>© 2026 <span>AutoDrive Pro</span> — Deployed on Kubernetes with Zero Downtime Rolling Updates 🚀</p>
    </footer>

</body>
</html>
