document.getElementById("loginForm").addEventListener("submit", function(e) {
    e.preventDefault();
  
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value.trim();
    const errorEl = document.getElementById("error");
  
    // Example hardcoded accounts
    const accounts = {
      "admin@example.com": { password: "admin123", role: "admin" },
      "customer@example.com": { password: "cust123", role: "customer" }
    };
  
    if (accounts[email] && accounts[email].password === password) {
      if (accounts[email].role === "admin") {
        window.location.href = "admin-dashboard.html";
      } else {
        window.location.href = "market.html";
      }
    } else {
      errorEl.textContent = "Invalid email or password.";
    }
  });
  