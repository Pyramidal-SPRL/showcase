// Quand le document est prêt (pas de jquery)
document.addEventListener('DOMContentLoaded', function() {
    // Tous les éléments avec la classe tab-btn et event click
    if(window.innerWidth <= 768) {
        document.querySelectorAll('.offer-step-btn').forEach(function(tabBtn) {
            tabBtn.addEventListener('click', function() {
                document.getElementById('offer-step-content').scrollIntoView();
            });
        });
    }
});