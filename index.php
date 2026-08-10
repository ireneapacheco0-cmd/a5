<!doctype html>
<html lang="zxx">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<meta name="description" content="Premium kitchen designs, modular cooktop planning, and ergonomic cabinet layouts from CulinaryVista Hub.">
	<!-- Page Title -->
    <title>CulinaryVista Hub | Premium Kitchen Design & Gourmet Layouts</title>
	<!-- Bootstrap Css -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome Icon Css-->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
	<!-- Main Custom Css -->
	<link href="assets/style.css" rel="stylesheet">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-0LY0HY7L01');
    </script>
    <style>
        /* Extra custom styles for pure image hero & new sections */
        .hero-images-only {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            padding: 15px;
            background: var(--white-color);
            border-bottom: 1px solid var(--border-color);
        }
        .hero-img-item {
            height: 580px;
            overflow: hidden;
            border-radius: 4px;
            border: 1px solid var(--border-color);
            position: relative;
        }
        .hero-img-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s ease;
        }
        .hero-img-item:hover img {
            transform: scale(1.05);
        }
        
        /* Material Palette Section */
        .material-library {
            padding: 100px 0;
            background: var(--white-color);
            border-bottom: 1px solid var(--border-color);
        }
        .material-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
        }
        .material-card {
            background: var(--bg-color);
            border: 1px solid var(--border-color);
            padding: 30px;
            border-radius: 4px;
            transition: all 0.3s ease;
        }
        .material-card:hover {
            border-color: var(--accent-coral);
            transform: translateY(-3px);
        }
        .material-card h4 {
            font-family: var(--font-serif);
            font-size: 20px;
            color: var(--accent-color);
            margin-bottom: 10px;
        }
        .material-card p {
            font-size: 14px;
            margin: 0;
            opacity: 0.8;
        }
        
        /* Testimonials Section */
        .testimonials-section {
            padding: 100px 0;
            background: var(--bg-color);
            border-bottom: 1px solid var(--border-color);
        }
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }
        .testimonial-card {
            background: var(--white-color);
            border: 1px solid var(--border-color);
            padding: 40px;
            border-radius: 4px;
            position: relative;
        }
        .testimonial-card p {
            font-size: 15px;
            font-style: italic;
            margin-bottom: 25px;
            line-height: 1.7;
        }
        .testimonial-author {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid var(--border-color);
            padding-top: 15px;
        }
        .testimonial-author h5 {
            font-family: var(--font-serif);
            font-size: 16px;
            color: var(--accent-color);
            margin: 0;
        }
        .testimonial-author span {
            font-size: 12px;
            color: var(--accent-coral);
            font-weight: 700;
        }

        @media (max-width: 992px) {
            .hero-images-only {
                grid-template-columns: 1fr;
                gap: 10px;
            }
            .hero-img-item {
                height: 350px;
            }
            .material-grid {
                grid-template-columns: 1fr;
            }
            .testimonials-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <!-- Topbar Section Start -->
    <div class="topbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <div class="topbar-content-info">
                        <p><i class="fa-solid fa-kitchen-set"></i> Gourmet Workstation Blueprints and Ergonomic Cabinet Plans - Online Atelier</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar Section End -->

    <!-- Header Start -->
	<header class="main-header">
        <div class="container">
            <div class="header-row">
                <!-- Logo Left -->
                <a class="navbar-brand" href="index.php">
                    CulinaryVista <span>Hub</span>
                </a>
                
                <!-- Nav Links Center -->
                <nav class="d-none d-lg-block">
                    <ul class="header-nav">
                        <li><a class="active" href="index.php">Home</a></li>                                
                        <li><a href="about.html">Atelier Craft</a></li>
                        <li><a href="blog.html">Supper Logs</a></li>
                        <li><a href="contact.html">Curator Desk</a></li>
                    </ul>
                </nav>
                
                <!-- Actions Right -->
                <div class="header-actions">
                    <a href="contact.html"><i class="fa-regular fa-user"></i> Account</a>
                    <a href="blog.html"><i class="fa-solid fa-basket-shopping"></i> Cart</a>
                </div>
            </div>
        </div>
	</header>
	<!-- Header End -->
   
    <!-- Fullscreen Pure Image Hero Showcase Start (Image Section 1 - Text Removed) -->
    <section class="hero-images-only">
        <!-- Image 1 -->
        <div class="hero-img-item" data-reveal="left">
            <img src="assets/img/hero.jpg" alt="Modern luxury gourmet kitchen counter top">
        </div>
        <!-- Image 2 -->
        <div class="hero-img-item" data-reveal="zoom">
            <img src="assets/img/coll_1.jpg" alt="Stainless steel gas cooktop burner range">
        </div>
        <!-- Image 3 -->
        <div class="hero-img-item" data-reveal="right">
            <img src="assets/img/coll_2.jpg" alt="Marble baking slab workstation island close-up">
        </div>
    </section>
    <!-- Fullscreen Pure Image Hero Showcase End -->

    <!-- Steps Timeline Section Start (Image Section 2) -->
    <section class="timeline-section">
        <div class="container">
            <div class="section-title" data-reveal>
                <span>Design Principles</span>
                <h2>Gourmet Setup Steps</h2>
            </div>
            
            <div class="timeline-wrap">
                <div class="timeline-line"></div>
                
                <!-- Step 1 -->
                <div class="timeline-item" data-reveal="left">
                    <div class="timeline-content">
                        <h3>01 // Ergonomic Slabs</h3>
                        <p>We place marble pastry prep counters at exactly ninety centimeters from ground levels. This standard minimizes wrist strain and keeps pastry butter cold during laminations.</p>
                    </div>
                    <div>
                        <img src="assets/img/prod_2.jpg" alt="Kitchen island marble slab details" style="width: 100%; height: 180px; object-fit: cover; border-radius: 4px; border: 1px solid var(--border-color);">
                    </div>
                </div>
                
                <!-- Step 2 -->
                <div class="timeline-item" data-reveal="right">
                    <div class="timeline-content">
                        <h3>02 // Active Exhaust Zones</h3>
                        <p>Our kitchen plans feature dual-inlet hoods capable of moving six hundred cubic meters of air per hour. This speed prevents garlic oils from clinging to living room curtains.</p>
                    </div>
                    <div>
                        <img src="assets/img/prod_3.jpg" alt="High speed cooktop exhaust hood close" style="width: 100%; height: 180px; object-fit: cover; border-radius: 4px; border: 1px solid var(--border-color);">
                    </div>
                </div>
                
                <!-- Step 3 -->
                <div class="timeline-item" data-reveal="left">
                    <div class="timeline-content">
                        <h3>03 // Oak Drawer Tracks</h3>
                        <p>We specify soft-close wooden rails treated with food-safe linseed oils. Our tests ensure each kitchen cabinet drawer holds up to thirty kilograms without rail sag.</p>
                    </div>
                    <div>
                        <img src="assets/img/prod_5.jpg" alt="Solid oak kitchen drawer construction close" style="width: 100%; height: 180px; object-fit: cover; border-radius: 4px; border: 1px solid var(--border-color);">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Steps Timeline End -->

    <!-- New Section A: The Material Palette Showcase Start -->
    <section class="material-library">
        <div class="container">
            <div class="section-title" data-reveal>
                <span>Material Atelier</span>
                <h2>Premium Kitchen Materials</h2>
            </div>
            
            <div class="material-grid">
                <!-- Material 1 -->
                <div class="material-card" data-reveal="zoom">
                    <h4>Calacatta Marble</h4>
                    <p>Highly compact metamorphic rock selected for its thermal mass stability, ideal for rolling high-fat pastry doughs.</p>
                </div>
                <!-- Material 2 -->
                <div class="material-card" data-reveal="zoom">
                    <h4>Brushed Brass</h4>
                    <p>Solid hardware finishes treated with anti-tarnish protective coatings to withstand grease splatters and cleaning rubs.</p>
                </div>
                <!-- Material 3 -->
                <div class="material-card" data-reveal="zoom">
                    <h4>Smoked Oak</h4>
                    <p>Fume-darkened timber panels sealed with organic linseed oils to resist warping under high boil steam climates.</p>
                </div>
                <!-- Material 4 -->
                <div class="material-card" data-reveal="zoom">
                    <h4>Fluted Glass</h4>
                    <p>Textured cabinet glass panes designed to distort interior utensil profiles while letting ambient tasks light pass.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- New Section A End -->

    <!-- Premium Workstations Section Start (Image Section 3) -->
    <section class="workstations-section">
        <div class="container">
            <div class="section-title" data-reveal>
                <span>Featured Blueprints</span>
                <h2>Luxury Kitchen Workstations</h2>
            </div>
            
            <div class="workstations-grid">
                <!-- Card 1 -->
                <div class="workstation-card" data-reveal="zoom">
                    <img src="assets/img/coll_2.jpg" alt="Marble baking slab workstation">
                    <div class="workstation-body">
                        <h3>Baking Slabs</h3>
                        <p>Thick white marble slab panels preheat-isolated to preserve cold dough surface properties during kneading.</p>
                        <a href="blog.html" class="btn-default mt-4 w-100 text-center" style="background: transparent; color: var(--accent-color); border: 1px solid var(--border-color);">View Logs</a>
                    </div>
                </div>
                
                <!-- Card 2 -->
                <div class="workstation-card" data-reveal="zoom">
                    <img src="assets/img/coll_3.jpg" alt="Professional chef knife workstation layout">
                    <div class="workstation-body">
                        <h3>Chef Knife Zones</h3>
                        <p>Magnetic knife rails integrated into backsplash panels to secure instant blade access and keep counters clean.</p>
                        <a href="blog.html" class="btn-default mt-4 w-100 text-center" style="background: transparent; color: var(--accent-color); border: 1px solid var(--border-color);">View Logs</a>
                    </div>
                </div>
                
                <!-- Card 3 -->
                <div class="workstation-card" data-reveal="zoom">
                    <img src="assets/img/prod_1.jpg" alt="Modular cooktop stove workstation">
                    <div class="workstation-body">
                        <h3>Herb Wall Gardens</h3>
                        <p>Vertical herb boxes built next to kitchen prep counters, illuminated by dedicated grow LEDs.</p>
                        <a href="blog.html" class="btn-default mt-4 w-100 text-center" style="background: transparent; color: var(--accent-color); border: 1px solid var(--border-color);">View Logs</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Premium Workstations End -->

    <!-- New Section B: Chef Testimonials & Workstation Reviews Start -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-title" data-reveal>
                <span>Client Validation</span>
                <h2>Workstation Case Reviews</h2>
            </div>
            
            <div class="testimonials-grid">
                <!-- Card 1 -->
                <div class="testimonial-card" data-reveal="zoom">
                    <p>"The Carrara marble dough counter stays at the perfect temperature even during long lamination shifts. Hinge clearances are incredibly smooth."</p>
                    <div class="testimonial-author">
                        <h5>Chef Jean-Louis</h5>
                        <span>32m² Kitchen Draft</span>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="testimonial-card" data-reveal="zoom">
                    <p>"Exhaust hood volumes are calculated perfectly. We cook with hot woks and deep frying pans, and there is zero lingering aroma in the dining hall."</p>
                    <div class="testimonial-author">
                        <h5>Marcus Sterling</h5>
                        <span>45m² Kitchen Draft</span>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="testimonial-card" data-reveal="zoom">
                    <p>"Solid oak drawers slide like silk under thirty kilograms of heavy copper pans. Soft-close tracks work without rail sags after a year of heavy use."</p>
                    <div class="testimonial-author">
                        <h5>Sarah Jenkins</h5>
                        <span>24m² Kitchen Draft</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- New Section B End -->

    <!-- Kitchen Analytics Section Start -->
    <section class="analytics-section">
        <div class="container">
            <div class="analytics-grid" data-reveal>
                <!-- Metric 1 -->
                <div class="analytic-card">
                    <h2 class="counter-value" data-target="320" data-suffix="+">0+</h2>
                    <h3>Kitchen Drafts</h3>
                    <p>Designed for custom cooktop ranges, exhaust hoods, and cabinet corners.</p>
                </div>
                
                <!-- Metric 2 -->
                <div class="analytic-card">
                    <h2 class="counter-value" data-target="180" data-suffix="+">0+</h2>
                    <h3>Wood Finish Tests</h3>
                    <p>Conducted in high humidity chambers to test water resistance ratings.</p>
                </div>
                
                <!-- Metric 3 -->
                <div class="analytic-card">
                    <h2 class="counter-value" data-target="12" data-suffix="+">0+</h2>
                    <h3>Smart Cooker Logs</h3>
                    <p>Calibrated to sync cooktop temperatures directly with ventilation speeds.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Kitchen Analytics End -->

    <!-- Double Column Footer Start -->
    <footer class="double-footer">
        <div class="container">
            <div class="footer-grid">
                <!-- Left Brand -->
                <div class="footer-left">
                    <h3>CulinaryVista <span>Hub</span></h3>
                    <p>Independent research and logs for gourmet kitchen layout blueprints, mechanical exhaust flow designs, and custom workstation calibrations.</p>
                    <p style="font-size: 14px; opacity: 0.8; margin-top: 20px;"><i class="fa-solid fa-location-dot"></i> 181 Mercer Street, New York, NY 10012, United States<br><i class="fa-solid fa-phone"></i> +1-888-777-5845</p>
                </div>
                
                <!-- Col 1 Links -->
                <div class="footer-col">
                    <h4>Explore</h4>
                    <ul>
                        <li><a href="about.html">Atelier Craft</a></li>
                        <li><a href="blog.html">Supper Logs</a></li>
                        <li><a href="contact.html">Curator Desk</a></li>
                    </ul>
                </div>
                
                <!-- Col 2 Links -->
                <div class="footer-col">
                    <h4>Compliance</h4>
                    <ul>
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li><a href="cookies.html">Cookies Policy</a></li>
                        <li><a href="disclaimer.html">Disclaimer</a></li>
                        <li><a href="terms.html">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <span>&copy; 2026 CulinaryVista Hub. Independent culinary archives. Not a commercial retail shop.</span>
                <span>SYSTEM STATUS: COMPLIANT // GTAG: G-0LY0HY7L01</span>
            </div>
        </div>
    </footer>
    <!-- Double Column Footer End -->

    <script src="assets/app.js"></script>
</body>
</html>
