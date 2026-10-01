<?php
    $pageTtile = "Quote Requests";
    require_once('request_db.php');

    // Check if DB connected
    $db_connected = isset($db) && $db !== null;
    $requests     = $db_connected ? get_requests() : [];

    include("header.php");
    include("navigation.php");
?>

<main>

    <div class="page-banner">
        <h2>Quote Requests</h2>
        <p>Admin view — all submitted quote requests from the database</p>
    </div>

    <section class="requests-page">
        <div class="container">

            <?php if (!$db_connected): ?>
            <div class="db-error">
                <span>⚠️</span>
                <div>
                    <strong>Database not connected.</strong> Copy <code>config.example.php</code> to <code>config.local.php</code> and set your local credentials to connect to your MySQL database. See <code>setup.sql</code> for the required table structure.
                </div>
            </div>
            <?php endif; ?>

            <div class="requests-header">
                <h2 class="section-title" style="margin-bottom:0">All Requests</h2>
                <?php if ($db_connected): ?>
                <span class="requests-count"><?php echo count($requests); ?> request<?php echo count($requests) !== 1 ? 's' : ''; ?></span>
                <?php endif; ?>
                <a href="contact.php" class="btn btn-green" style="margin-left:auto">+ New Request</a>
            </div>

            <?php if (empty($requests)): ?>
            <div class="empty-state">
                <div class="empty-state-icon">📋</div>
                <h3>No requests yet</h3>
                <p>Once customers submit the contact form, their quote requests will appear here for you to review, edit, or delete.</p>
            </div>

            <?php else: ?>
            <div class="table-wrap">
                <table class="requests-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Service</th>
                            <th>Details</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($requests as $request): ?>
                        <tr>
                            <td style="color:var(--text-muted);font-size:.8rem"><?php echo htmlspecialchars($request['request_id']); ?></td>
                            <td><strong><?php echo htmlspecialchars($request['name']); ?></strong></td>
                            <td><?php echo htmlspecialchars($request['phone']); ?></td>
                            <td><?php echo htmlspecialchars($request['email']); ?></td>
                            <td><?php echo htmlspecialchars($request['service']); ?></td>
                            <td class="details-cell"><?php echo htmlspecialchars($request['details']); ?></td>
                            <td>
                                <div class="action-cell">
                                    <a href="edit_request.php?request_id=<?php echo $request['request_id']; ?>" class="action-btn edit">Edit</a>
                                    <a href="delete_request.php?request_id=<?php echo $request['request_id']; ?>" class="action-btn delete" onclick="return confirm('Delete this request?')">Delete</a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?php endif; ?>

        </div>
    </section>

</main>

<?php include("footer.php"); ?>
