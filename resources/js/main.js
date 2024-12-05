function showForm(formType) {
  if (formType === "login") {
    document.querySelector(".login-form").style.display = "block";
    document.querySelector(".signup-form").style.display = "none";
    document.querySelector(".login-link").classList.add("active");
    document.querySelector(".signup-link").classList.remove("active");
  } else {
    document.querySelector(".login-form").style.display = "none";
    document.querySelector(".signup-form").style.display = "block";
    document.querySelector(".login-link").classList.remove("active");
    document.querySelector(".signup-link").classList.add("active");
  }
}

function login() {
  // Simulasi proses login, jika berhasil:
  window.location.href = "dashboard.html"; // Redirect ke halaman dashboard.html
}

function logout() {
  document.getElementById("dashboard-section").style.display = "none";
  document.getElementById("auth-section").style.display = "flex";
}

document.addEventListener("DOMContentLoaded", () => {
  showForm("login"); // Show login form by default
});

function login() {
  // Simulasi proses login berhasil
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;

  // Validasi sederhana
  if (email === "test@example.com" && password === "password123") {
    // Pengalihan ke halaman dashboard
    window.location.href = "dashboard.html";
  } else {
    alert("Email atau password salah, coba lagi!");
  }
}
