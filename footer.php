<footer class="site-footer">
    <div class="footer-inner">
        <div class="footer-brand">
            <h3>Miranda Outdoors</h3>
            <p>Professional landscaping and concrete services for residential and commercial customers in Kenosha, Wisconsin and the surrounding area.</p>
        </div>
        <div class="footer-col">
            <h4>Navigation</h4>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>Services</h4>
            <ul>
                <li><a href="services.php">Patios &amp; Driveways</a></li>
                <li><a href="services.php">Lawn Care</a></li>
                <li><a href="services.php">Mulching</a></li>
                <li><a href="services.php">Spring Cleanup</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2026 Miranda Outdoors &mdash; Kenosha, Wisconsin &mdash; All rights reserved.</p>
    </div>
</footer>

</body>

<script>
    // Hamburger toggle
    const hamburgerBtn = document.getElementById('hamburgerBtn');
    const siteNav      = document.getElementById('siteNav');
    if (hamburgerBtn && siteNav) {
        hamburgerBtn.addEventListener('click', function () {
            siteNav.classList.toggle('open');
            hamburgerBtn.classList.toggle('open');
        });
    }
</script>

</html>
