$(document).ready(function() {
    // Function to smoothly scroll to a specific section
    function scrollToSection(sectionId) {
        const section = document.querySelector(sectionId);
        if (section) {
            section.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    }

  
});
