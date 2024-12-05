// script.js

// Toggle dropdown visibility on user-info click
document.getElementById("user-info").addEventListener("click", function () {
  this.classList.toggle("active"); // Toggle active class to show/hide the dropdown
});

// Optional: Close the dropdown if clicked outside
window.addEventListener("click", function (event) {
  const userInfo = document.getElementById("user-info");
  const dropdown = document.getElementById("dropdown-menu");

  if (!userInfo.contains(event.target)) {
      userInfo.classList.remove("active"); // Hide dropdown if clicked outside
  }
});

// Function to show the content in Section 2 based on the menu clicked in Section 1
function showContent(sectionId) {
  // Hide all content sections
  const sections = document.querySelectorAll('.content-section');
  sections.forEach(section => section.style.display = 'none');

  // Show the selected content section
  const selectedSection = document.getElementById('content-' + sectionId);
  if (selectedSection) {
      selectedSection.style.display = 'block';
  }
}
