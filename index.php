index.php




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>QuickPOS – The Last POS System You’ll Ever Need</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <!-- Navigation & Header (SCRUM-12) -->
    <header class="site-header">
        <div class="container nav-container">
            <div class="logo">
                <span class="logo-mark">Q</span>
                <span class="logo-text">QuickPOS</span>
            </div>

            <nav class="main-nav">
                <ul>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>

            <a href="#contact" class="btn btn-outline">Sign Up</a>

            <button class="nav-toggle" aria-label="Toggle navigation">
                ☰
            </button>
        </div>
    </header>

    <!-- Mobile nav -->
    <div class="mobile-nav" id="mobileNav">
        <a href="#features">Features</a>
        <a href="#pricing">Pricing</a>
        <a href="#contact">Contact</a>
        <a href="#contact" class="btn btn-outline full-width">Sign Up</a>
    </div>

    <!-- Hero Section (SCRUM-17 content, SCRUM-18 image later) -->
    <section class="hero">
        <div class="container hero-grid">
            <div class="hero-content">
                <h1>The Last POS System You’ll Ever Need</h1>
                <p class="hero-subtitle">
                    QuickPOS brings together inventory, sales, and customer data into one simple,
                    powerful dashboard designed for modern retail and hospitality businesses.
                </p>
                <a href="#contact" class="btn btn-primary">Get Started for Free</a>
                <p class="hero-note">No credit card required · Set up in minutes</p>
            </div>

            <!-- Hero image block will be filled in SCRUM-18 -->
            <div class="hero-image hero-image-placeholder">
                <p>Hero mockup coming in SCRUM-18…</p>
            </div>
        </div>
    </section>

    <main class="placeholder-below-hero">
        <div class="container">
            <p>Features, Pricing, Contact & Footer will be implemented in later stories.</p>
        </div>
    </main>

    <script>
        // Mobile nav toggle
        const navToggle = document.querySelector('.nav-toggle');
        const mobileNav = document.getElementById('mobileNav');
        if (navToggle && mobileNav) {
            navToggle.addEventListener('click', () => {
                mobileNav.classList.toggle('open');
            });
        }

        // Smooth scrolling for nav links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const targetId = this.getAttribute('href');
                if (targetId.startsWith('#')) {
                    e.preventDefault();
                    const target = document.querySelector(targetId);
                    if (target) {
                        window.scrollTo({
                            top: target.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });
    </script>
</body>
</html>