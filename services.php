<?php
$pageTtile = "Services";
include("header.php");
include("navigation.php");
?>

<main>

    <div class="page-banner">
        <h2>Our Services</h2>
        <p>Landscaping and concrete solutions for homes and businesses in Kenosha and nearby areas</p>
    </div>

    <section class="services-page">
        <div class="container">

            <div class="services-intro">
                <p>Miranda Outdoors offers a variety of landscaping and concrete services designed to keep outdoor spaces clean, attractive, and well-maintained throughout the year. Whether you need a new concrete patio, seasonal lawn care, or help cleaning up after a project, we have you covered.</p>
                <p>Our concrete services are built to last — from driveways to patios, we pay attention to every detail. Our landscaping services are designed around your property's specific needs, so you get results that look great and hold up over time.</p>
            </div>

            <!-- Services checklist panel -->
            <div class="svc-list-panel">
                <h3>Services We Offer</h3>
                <div class="svc-checklist">
                    <div class="svc-checklist-item">Patios</div>
                    <div class="svc-checklist-item">Driveways</div>
                    <div class="svc-checklist-item">Lawn Care</div>
                    <div class="svc-checklist-item">Mulching</div>
                    <div class="svc-checklist-item">Spring Cleanup</div>
                    <div class="svc-checklist-item">Removal of Extra Dirt &amp; Mulch</div>
                </div>
            </div>

            <!-- Image cards -->
            <div class="svc-image-grid">
                <div class="svc-image-card">
                    <img src="img2.png" alt="Landscaping project">
                    <div class="svc-image-card-body">
                        <h3>Landscaping</h3>
                        <p>Seasonal cleanup, mulching, lawn care, and material removal to keep your property looking its best year-round.</p>
                    </div>
                </div>
                <div class="svc-image-card">
                    <img src="img3.png" alt="Concrete patio project">
                    <div class="svc-image-card-body">
                        <h3>Concrete Work</h3>
                        <p>Custom patios, driveways, and other concrete surfaces — professionally installed and finished for durability and appearance.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>

<?php include("footer.php"); ?>
