
<?php include '../includes/header.php'; ?>

<nav class="navbar" id="navbar">
    <a href="home.php">Home</a>
    <a href="records.php" class="active">Violation Records</a>
    <a href="description.php">Violation Descriptions</a>
    <a href="community-service.php">Community Service</a>
    <a href="logout.php" class="logout-link">Logout</a>
</nav>
</div>

<main class="main-content records-page">

    <section class="violation-section">

        <!-- PAGE HEADER -->
        <div class="records-header">
            <div>
                <h2>Violation Records</h2>
            </div>
        </div>


        <!-- SEARCH AND FILTERS -->
        <div class="records-toolbar">

            <!-- SEARCH BAR -->
            <div class="search-wrapper">

                <span class="search-icon">&#9906;</span>

                <input
                    type="text"
                    id="searchViolation"
                    placeholder="Search violation..."
                    autocomplete="off">

            </div>


            <!-- MOBILE FILTER BUTTON -->
            <button
                type="button"
                class="mobile-filter-toggle"
                id="mobileFilterToggle">

                <span>Filters</span>
                <span id="filterArrow">▼</span>

            </button>


            <!-- FILTER OPTIONS -->
            <div class="filter-wrapper" id="filterWrapper">

                <select id="filterType">
                    <option value="all">All Types</option>
                    <option value="minor">Minor Offenses</option>
                    <option value="major">Major Offenses</option>
                </select>

                <select id="filterStatus">
                    <option value="all">All Statuses</option>
                    <option value="pending">Pending</option>
                    <option value="ongoing">Ongoing</option>
                    <option value="completed">Completed</option>
                </select>

                <select id="sortDate">
                    <option value="newest">Newest First</option>
                    <option value="oldest">Oldest First</option>
                </select>

            </div>

        </div>


        <!-- VIOLATION RECORDS -->
        <div class="violation-list">


            <!-- RECORD 1 -->
            <div class="violation-record">

                <div class="violation-record-info">

                    <h3>Littering within the school premises</h3>

                    <p>
                        <strong>Date Recorded:</strong>
                        November 10, 2026
                    </p>

                    <p>
                        <strong>Classification:</strong>
                        Minor Offense
                    </p>

                    <p>
                        <strong>Sanction:</strong>
                        Second Offense | Counseling and Community Service for 8 hrs
                    </p>

                </div>

                <div class="violation-record-action">

                    <a href="community-service.php" class="view-service-link">
                        View Community Service Details
                    </a>

                    <span class="status ongoing">Ongoing</span>

                </div>

            </div>


            <!-- RECORD 2 -->
            <div class="violation-record">

                <div class="violation-record-info">

                    <h3>
                        Not wearing the proper ID or wearing the ID
                        of someone else or lending out one's ID
                    </h3>

                    <p>
                        <strong>Date Recorded:</strong>
                        November 8, 2026
                    </p>

                    <p>
                        <strong>Classification:</strong>
                        Minor Offense
                    </p>

                    <p>
                        <strong>Sanction:</strong>
                        First Offense | Counseling
                    </p>

                </div>

</div>

            <!-- RECORD 3 -->
            <div class="violation-record">

                <div class="violation-record-info">

                    <h3>Not wearing the proper uniform</h3>

                    <p>
                        <strong>Date Recorded:</strong>
                        November 5, 2026
                    </p>

                    <p>
                        <strong>Classification:</strong>
                        Minor Offense
                    </p>

                    <p>
                        <strong>Sanction:</strong>
                        Warning
                    </p>

                </div>

            </div>


        </div>

    </section>

</main>

<script src="../js/records.js"></script>
<?php include '../includes/footer.php'; ?>
