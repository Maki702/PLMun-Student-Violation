
document.addEventListener("DOMContentLoaded", function () {

    console.log("Student Violation Records JS is connected!");

    // ELEMENTS

    const searchInput = document.getElementById("searchViolation");
    const filterType = document.getElementById("filterType");
    const filterStatus = document.getElementById("filterStatus");
    const sortDate = document.getElementById("sortDate");

    const mobileFilterToggle = document.getElementById("mobileFilterToggle");
    const filterWrapper = document.getElementById("filterWrapper");
    const filterArrow = document.getElementById("filterArrow");

    const violationList = document.querySelector(".violation-list");

    const records = Array.from(
        document.querySelectorAll(".violation-record")
    );

    // MOBILE FILTER TOGGLE

    if (mobileFilterToggle && filterWrapper) {

        mobileFilterToggle.addEventListener("click", function () {

            filterWrapper.classList.toggle("show-filters");

            const isOpen = filterWrapper.classList.contains("show-filters");

            if (filterArrow) {
                filterArrow.textContent = isOpen ? "▲" : "▼";
            }

        });

    }

    // SEARCH AND FILTER

    function filterRecords() {

        const searchValue = searchInput.value.toLowerCase().trim();
        const selectedType = filterType.value;
        const selectedStatus = filterStatus.value;

        records.forEach(function (record) {

            const recordText = record.textContent.toLowerCase();

            const classification = record.querySelector(
                ".violation-record-info p:nth-of-type(2)"
            );

            const statusElement = record.querySelector(".status");

            const recordType = classification
                ? classification.textContent.toLowerCase()
                : "";

            const recordStatus = statusElement
                ? statusElement.textContent.toLowerCase().trim()
                : "";

            const matchesSearch = recordText.includes(searchValue);

            const matchesType =
                selectedType === "all" ||
                recordType.includes(selectedType);

            const matchesStatus =
                selectedStatus === "all" ||
                recordStatus === selectedStatus;

            record.style.display =
                matchesSearch && matchesType && matchesStatus
                    ? ""
                    : "none";

        });

        updateNoRecordsMessage();

    }

    // NO RECORDS MESSAGE

    function updateNoRecordsMessage() {

        const visibleRecords = records.filter(function (record) {
            return record.style.display !== "none";
        });

        let noRecordsMessage = document.getElementById("noRecordsMessage");

        if (visibleRecords.length === 0) {

            if (!noRecordsMessage) {

                noRecordsMessage = document.createElement("p");
                noRecordsMessage.id = "noRecordsMessage";
                noRecordsMessage.className = "no-records";
                noRecordsMessage.textContent = "No violation records found.";

                violationList.appendChild(noRecordsMessage);

            }

        } else if (noRecordsMessage) {

            noRecordsMessage.remove();

        }

    }

    // SORT BY DATE

    function sortRecords() {

        const sortOrder = sortDate.value;

        const sortedRecords = [...records].sort(function (a, b) {

            const dateTextA = a.querySelector(
                ".violation-record-info p"
            ).textContent.replace("Date Recorded:", "").trim();

            const dateTextB = b.querySelector(
                ".violation-record-info p"
            ).textContent.replace("Date Recorded:", "").trim();

            const dateA = new Date(dateTextA);
            const dateB = new Date(dateTextB);

            return sortOrder === "newest"
                ? dateB - dateA
                : dateA - dateB;

        });

        sortedRecords.forEach(function (record) {
            violationList.appendChild(record);
        });

        filterRecords();

    }

    // EVENT LISTENERS

    if (searchInput) {
        searchInput.addEventListener("input", filterRecords);
    }

    if (filterType) {
        filterType.addEventListener("change", filterRecords);
    }

    if (filterStatus) {
        filterStatus.addEventListener("change", filterRecords);
    }

    if (sortDate) {
        sortDate.addEventListener("change", sortRecords);
    }

});
