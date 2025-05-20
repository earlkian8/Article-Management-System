document.addEventListener("DOMContentLoaded", function(){

    window.addEventListener('scroll', function() {
        const header = document.getElementById('header');
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    const articleCards = document.querySelectorAll('.article-card');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.1 });
    
    articleCards.forEach(card => {
        observer.observe(card);
    });

    // Header
    fetch("includes/index/header.php")
    .then(response => response.text())
    .then(data => {
        document.getElementById("header").innerHTML = data;
    })
    .catch(error => console.error(error));

    // Footer
    fetch("includes/index/footer.php")
    .then(response => response.text())
    .then(data => {
        document.getElementById("footer").innerHTML = data;
    })
    .catch(error => console.error(error));

});