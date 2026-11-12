
<?php include '../includes/header.php'; ?>

<!-- NAVIGATION BAR -->
<nav class="navbar" id="navbar">
    <a href="home.php">Home</a>
    <a href="records.php">Violation Records</a>
    <a href="description.php">Violation Descriptions</a>
    <a href="community-service.php" class="active">Community Service</a>
    <a href="logout.php" class="logout-link">Logout</a>
</nav>
</div>

<!-- MAIN CONTENT -->
<main class="main-content community-service-page">

    <!-- SERVICE SUMMARY -->
    <section class="service-summary">

        <div class="section-header">
            <h2>Service Summary</h2>
            <p>Overview of your assigned community service requirements.</p>
        </div>

        <div class="summary-container">

            <div class="summary-card">
                <h3>8 hrs</h3>
                <p>Required Hours</p>
            </div>

            <div class="summary-card">
                <h3>3 hrs</h3>
                <p>Completed Hours</p>
            </div>

            <div class="summary-card">
                <h3>5 hrs</h3>
                <p>Remaining Hours</p>
            </div>

        </div>

    </section>


    <!-- SERVICE PROGRESS -->
    <section class="service-progress">

        <h2>Service Progress</h2>

        <div class="progress-card">

            <div class="progress-header">
                <h3>Overall Completion</h3>
                <span>37.5%</span>
            </div>

            <div class="progress-bar">
                <div class="progress-fill" style="width: 37.5%;"></div>
            </div>

            <p>You have completed 3 out of your required 8 community service hours.</p>

        </div>

    </section>


    <!-- ASSIGNED COMMUNITY SERVICE -->
    <section class="assigned-service">

        <h2>Assigned Community Service</h2>

        <div class="service-list">

            <div class="service-card">

                <div class="service-card-header">
                    <div>
                        <h3>Community Service Requirement</h3>
                        <p class="service-violation">
                            Related Violation: Littering within the school premises
                        </p>
                    </div>

                    <span class="status ongoing">Ongoing</span>
                </div>

                <div class="service-details">

                    <div class="service-detail-item">
                        <span>Required Hours</span>
                        <strong>8 Hours</strong>
                    </div>

                    <div class="service-detail-item">
                        <span>Completed Hours</span>
                        <strong>3 Hours</strong>
                    </div>

                    <div class="service-detail-item">
                        <span>Remaining Hours</span>
                        <strong>5 Hours</strong>
                    </div>

                    <div class="service-detail-item">
                        <span>Schedule</span>
                        <strong>To Be Announced</strong>
                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- SERVICE HISTORY -->
    <section class="service-history">

        <h2>Service History</h2>

        <div class="history-list">

            <div class="history-card">

                <div class="history-info">
                    <h3>Community Service Attendance</h3>
                    <p>Related Violation: Littering within the school premises</p>
                    <p>Date: November 11, 2026</p>
                </div>

                <div class="history-hours">
                    <strong>3 Hours</strong>
                    <span class="status completed">Recorded</span>
                </div>

            </div>

        </div>

    </section>

</main>

<?php include '../includes/footer.php'; ?>
