
<?php

// Include header.
include '../includes/header.php';

?>

<nav class="navbar" id="navbar">

    <a href="home.php" class="active">Home</a>
    <a href="records.php">Violation Records</a>
    <a href="description.php">Violation Descriptions</a>
    <a href="community-service.php">Community Service</a>
    <a href="logout.php" class="logout-link">Logout</a>

</nav>
</div>

<main class="main-content">

    <!-- WELCOME -->
    <section class="welcome-section">

        <h5 class="welcome-label">
            PAMANTASAN NG LUNGSOD NG MUNTINLUPA
        </h5>

        <h1>
            Student Violation and Community Service
        </h1>

        <h4 class="welcome-name">
            Welcome, Test User!
        </h4>

        <a href="records.php" class="shortcut-violation-button">
            View My Violations
        </a>

    </section>


    <!-- OVERVIEW OF VIOLATIONS -->
    <section class="overview-section">

        <h2>Violation Overview</h2>

        <div class="overview-container">

            <div class="overview-card">
                <p>Total Violations</p>
                <h3>3</h3>
            </div>

            <div class="overview-card">
                <p>Ongoing Violations</p>
                <h3>1</h3>
            </div>

        </div>

    </section>


    <!-- RECENT VIOLATIONS -->
    <section class="recent-section">

        <div class="section-heading">
            <h2>Recent Violation Records</h2>
        </div>

        <div class="recent-list">

            <!-- RECORD 1 -->
            <div class="recent-record">

                <div class="recent-record-info">
                    <h3>Littering within the school premises</h3>
                    <p>November 10, 2026</p>
                </div>

            </div>


            <!-- RECORD 2 -->
            <div class="recent-record">

                <div class="recent-record-info">
                    <h3>Not wearing the proper ID or wearing the ID of someone else or lending out one's ID</h3>
                    <p>November 8, 2026</p>
                </div>

            </div>


            <!-- RECORD 3 -->
            <div class="recent-record">

                <div class="recent-record-info">
                    <h3>
Not wearing the proper uniform</h3>
                    <p>November 5, 2026</p>
                </div>

            </div>

        </div>

    </section>


    <!-- EXPLORE THE SYSTEM -->
    <section class="features-section">

        <h2>Explore the System</h2>

        <div class="feature-container">

            <div class="feature-card">

                <h2>My Violations</h2>

                <p>
                    View your recorded student violations and their corresponding sanctions.
                </p>

                <a href="records.php">View Details</a>

            </div>


            <div class="feature-card">

                <h2>Violation Guidelines</h2>

                <p>
                    Learn about school violations and their corresponding sanctions.
                </p>

                <a href="description.php">Learn More</a>

            </div>


            <div class="feature-card">

                <h2>Community Service</h2>

                <p>
                    Monitor your assigned community service requirements and progress.
                </p>

                <a href="community-service.php">View Progress</a>

            </div>

        </div>

    </section>

</main>

</body>

</html>

<?php include '../includes/footer.php'; ?>
