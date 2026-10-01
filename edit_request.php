<?php
    require_once('request_db.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $request_id = $_POST['request_id'];
        $name       = $_POST['name'];
        $phone      = $_POST['phone'];
        $email      = $_POST['email'];
        $service    = $_POST['service'];
        $details    = $_POST['details'];

        update_request($request_id, $name, $phone, $email, $service, $details);
        header("Location: requests.php");
        exit();

    } else {
        $request_id = $_GET['request_id'];
        $request    = get_request($request_id);
    }

    $pageTtile = "Edit Request";
    include("header.php");
    include("navigation.php");
?>

<main>

    <div class="page-banner">
        <h2>Edit Request</h2>
        <p>Update the details for this quote request</p>
    </div>

    <section class="edit-page">
        <div class="container">

            <?php if (!$request): ?>
            <div class="empty-state">
                <div class="empty-state-icon">🔍</div>
                <h3>Request not found</h3>
                <p>This request could not be loaded. It may have been deleted or the database is not connected.</p>
                <a href="requests.php" class="btn btn-green" style="margin-top:20px">Back to Requests</a>
            </div>

            <?php else: ?>
            <div class="edit-card">
                <h3>Editing Request #<?php echo htmlspecialchars($request['request_id']); ?></h3>

                <form action="edit_request.php" method="post">
                    <input type="hidden" name="request_id" value="<?php echo htmlspecialchars($request['request_id']); ?>">

                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($request['name']); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" value="<?php echo htmlspecialchars($request['phone']); ?>" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($request['email']); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="service">Service Needed</label>
                            <select id="service" name="service" required>
                                <?php
                                $services = ['Patio', 'Driveway', 'Lawn Care', 'Mulching', 'Spring Cleanup', 'Material Removal', 'Other'];
                                foreach ($services as $svc):
                                    $selected = ($request['service'] === $svc) ? 'selected' : '';
                                ?>
                                <option value="<?php echo $svc; ?>" <?php echo $selected; ?>><?php echo $svc; ?></option>
                                <?php endforeach; ?>
                                <?php
                                // If the stored service isn't in the list, show it as selected
                                if (!in_array($request['service'], $services)): ?>
                                <option value="<?php echo htmlspecialchars($request['service']); ?>" selected><?php echo htmlspecialchars($request['service']); ?></option>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group full">
                        <label for="details">Project Details</label>
                        <textarea id="details" name="details"><?php echo htmlspecialchars($request['details']); ?></textarea>
                    </div>

                    <div class="form-actions">
                        <input type="submit" value="Save Changes" class="btn btn-primary">
                        <a href="requests.php" class="btn btn-subtle">Cancel</a>
                    </div>

                </form>
            </div>
            <?php endif; ?>

        </div>
    </section>

</main>

<?php include("footer.php"); ?>
