function addBook() {
    let title = document.getElementById("title").value.trim();
    let year = document.getElementById("year").value.trim();
    let currentYear = new Date().getFullYear();

    // Title validation: only letters
    let titlePattern = /^[A-Za-z]+$/;

    if (!titlePattern.test(title)) {
        alert("Title must contain only letters and cannot be empty.");
        return;
    }

    // Year validation: 4 digits & between 1900 and current year
    if (!/^\d{4}$/.test(year) || year < 1900 || year > currentYear) {
        alert("Enter a valid year between 1900 and " + currentYear);
        return;
    }

    // Add row to table
    let table = document.getElementById("bookTable");
    let row = table.insertRow(-1);

    // Set background color
    if (year < 2000) {
        row.className = "light-gray";
    } else {
        row.className = "light-green";
    }

    let cell1 = row.insertCell(0);
    let cell2 = row.insertCell(1);

    cell1.innerHTML = title;
    cell2.innerHTML = year;

    // Clear inputs
    document.getElementById("title").value = "";
    document.getElementById("year").value = "";
}
