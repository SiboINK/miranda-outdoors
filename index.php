<?php
$pageTtile = "Home";
include("header.php");
include("navigation.php");
?>

<main>

    <!-- HERO -->
    <section class="hero">
        <img src="img2.png" alt="Landscaping project by Miranda Outdoors" class="hero-bg">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <div class="hero-tag">Kenosha, Wisconsin</div>
            <h1 class="hero-title">Professional Landscaping &amp; Concrete Services</h1>
            <p class="hero-sub">Miranda Outdoors helps homeowners and businesses create beautiful, functional outdoor spaces. Quality work, dependable service, and results you'll be proud of.</p>
            <div class="hero-ctas">
                <a href="contact.php" class="btn btn-primary">Get a Free Quote</a>
                <a href="services.php" class="btn btn-outline">View Our Services</a>
            </div>
        </div>
    </section>

    <!-- SERVICE CARDS -->
    <section class="services-strip">
        <div class="container">
            <h2 class="section-title">What We Do</h2>
            <p class="section-lead">From concrete driveways to seasonal lawn care, we handle a wide range of outdoor projects for residential and commercial customers in Kenosha and nearby areas.</p>
            <div class="services-grid">
                <div class="svc-card">
                    <span class="svc-icon">🏗️</span>
                    <div class="svc-title">Patios</div>
                    <p class="svc-desc">Custom concrete patios designed to enhance your outdoor living space and add lasting value.</p>
                </div>
                <div class="svc-card">
                    <span class="svc-icon">🚗</span>
                    <div class="svc-title">Driveways</div>
                    <p class="svc-desc">Durable concrete driveways installed, formed, and finished to last for years.</p>
                </div>
                <div class="svc-card">
                    <span class="svc-icon">🌱</span>
                    <div class="svc-title">Lawn Care</div>
                    <p class="svc-desc">Ongoing lawn maintenance to keep your property looking clean and professional.</p>
                </div>
                <div class="svc-card">
                    <span class="svc-icon">🍂</span>
                    <div class="svc-title">Mulching</div>
                    <p class="svc-desc">Professional mulching for healthier landscape beds and better curb appeal.</p>
                </div>
                <div class="svc-card">
                    <span class="svc-icon">🌿</span>
                    <div class="svc-title">Spring Cleanup</div>
                    <p class="svc-desc">Seasonal property cleanup to get your outdoor spaces ready for the warmer months.</p>
                </div>
                <div class="svc-card">
                    <span class="svc-icon">🚛</span>
                    <div class="svc-title">Material Removal</div>
                    <p class="svc-desc">Removal of extra dirt, mulch, or debris from your job site once work is complete.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US -->
    <section class="why-us">
        <div class="container">
            <div class="why-grid">
                <img src="img3.png" alt="Concrete project by Miranda Outdoors" class="why-img">
                <div>
                    <h2 class="section-title">Why Choose <span class="accent">Miranda Outdoors</span></h2>
                    <p class="section-lead">We take pride in delivering quality results for every customer, whether the job is large or small. Our goal is to make the process simple from start to finish.</p>
                    <div class="why-features">
                        <div class="why-feature">
                            <div class="why-feature-icon">✓</div>
                            <div>
                                <h4>Residential &amp; Commercial</h4>
                                <p>We work with homeowners and businesses throughout Kenosha and the surrounding area.</p>
                            </div>
                        </div>
                        <div class="why-feature">
                            <div class="why-feature-icon">🌿</div>
                            <div>
                                <h4>Landscaping &amp; Concrete</h4>
                                <p>A complete range of outdoor services — lawn, mulch, patios, driveways — all under one roof.</p>
                            </div>
                        </div>
                        <div class="why-feature">
                            <div class="why-feature-icon">📋</div>
                            <div>
                                <h4>Free, No-Obligation Quotes</h4>
                                <p>We provide transparent estimates so you know exactly what to expect before work begins.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA STRIP -->
    <div class="cta-strip">
        <h2>Ready to Start Your Project?</h2>
        <p>Get in touch today and let us know what you need. We're happy to provide a free quote with no obligation.</p>
        <a href="contact.php" class="btn btn-primary">Request a Free Quote</a>
    </div>

    <!-- SERVICE AREA -->
    <section class="service-area-strip">
        <div class="container">
            <div class="sa-inner">
                <div class="sa-icon">📍</div>
                <div>
                    <h3>Service Area</h3>
                    <p>Miranda Outdoors proudly serves Kenosha, Wisconsin and nearby areas within approximately a 50-mile radius. We work with both residential and commercial customers.</p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include("footer.php"); ?>
