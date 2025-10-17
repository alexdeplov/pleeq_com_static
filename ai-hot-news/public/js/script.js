<script>
document.addEventListener('DOMContentLoaded', function() {
    const progressBar = document.getElementById('progressBar');
    const targetProgress = progressBar.getAttribute('data-progress');
    const currentModule = '{{ $currentModule }}'; // Get current module
    
    // Get previous progress, specific to this module
    const previousProgress = localStorage.getItem(`progress_${currentModule}`) || '0';
    
    // Start from previous progress
    progressBar.style.width = `${previousProgress}%`;
    
    // Trigger reflow
    progressBar.offsetHeight;
    
    // Animate to new progress
    requestAnimationFrame(() => {
        progressBar.style.width = `${targetProgress}%`;
        // Store new progress
        localStorage.setItem(`progress_${currentModule}`, targetProgress);
    });
});
</script>