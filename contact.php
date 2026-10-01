<?php
    $pageTtile = "Contact";
    require_once('request_db.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name    = $_POST['name'];
        $phone   = $_POST['phone'];
        $email   = $_POST['email'];
        $service = $_POST['service'];
        $details = $_POST['details'];

        add_request($name, $phone, $email, $service, $details);

        header("Location: thankyou.php");
        exit();
    }

    include("header.php");
    include("navigation.php");
?>

<main>

    <div class="page-banner">
        <h2>Request a Free Quote</h2>
        <p>Fill out the form below and we'll get back to you as soon as possible</p>
    </div>

    <section class="contact-page">
        <div class="container">
            <div class="contact-layout">

                <!-- LEFT: intro + form -->
                <div>
                    <div class="contact-intro">
                        <h3>Tell Us About Your Project</h3>
                        <p>If you're interested in landscaping or concrete work, please fill out the form below to request a quote. We're happy to answer questions and provide more information about our services.</p>
                        <p>Please include as much detail as possible — this helps us respond with a more accurate estimate for your specific project.</p>
                    </div>

                    <div class="form-card">
                        <form action="contact.php" method="post" novalidate>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input type="text" id="name" name="name" placeholder="Jane Smith" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" id="phone" name="phone" placeholder="(262) 555-0100" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" id="email" name="email" placeholder="jane@example.com" required>
                                </div>
                                <div class="form-group">
                                    <label for="service">Service Needed</label>
                                    <select id="service" name="service" required>
                                        <option value="" disabled selected>Select a service...</option>
                                        <option value="Patio">Patio</option>
                                        <option value="Driveway">Driveway</option>
                                        <option value="Lawn Care">Lawn Care</option>
                                        <option value="Mulching">Mulching</option>
                                        <option value="Spring Cleanup">Spring Cleanup</option>
                                        <option value="Material Removal">Material Removal</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group full">
                                <label for="details">Project Details</label>
                                <textarea id="details" name="details" placeholder="Please describe your project — size, location, timeline, any specific requirements..."></textarea>
                            </div>

                            <div class="form-actions">
                                <input type="submit" value="Send Request" class="btn btn-primary">
                                <input type="reset"  value="Clear Form"  class="btn btn-subtle">
                            </div>

                        </form>
                    </div>
                </div>

                <!-- RIGHT: sidebar info -->
                <div class="contact-sidebar">
                    <h3>Good to Know</h3>
                    <div class="sidebar-item">
                        <span class="sidebar-icon">📍</span>
                        <span>We serve Kenosha, WI and the surrounding area within approximately 50 miles.</span>
                    </div>
                    <div class="sidebar-item">
                        <span class="sidebar-icon">💬</span>
                        <span>We typically respond to quote requests within 1–2 business days.</span>
                    </div>
                    <div class="sidebar-item">
                        <span class="sidebar-icon">✅</span>
                        <span>Quotes are free and come with no obligation.</span>
                    </div>
                    <div class="sidebar-item">
                        <span class="sidebar-icon">🏗️</span>
                        <span>We work with both residential and commercial customers.</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

<?php include("footer.php"); ?>
