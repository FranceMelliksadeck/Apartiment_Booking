document.addEventListener("DOMContentLoaded", function() {
    const loader = document.getElementById('loader');
    
    // Show loader on page load
    loader.style.display = 'block';
  
    window.onload = function() {
      // Hide loader when content is loaded
      loader.style.display = 'none';
    };
  });
  