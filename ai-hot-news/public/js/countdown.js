document.addEventListener('DOMContentLoaded', function() {
    // Set the initial time (1 hour 29 minutes 59 seconds)
    let totalSeconds = 1 * 3600 + 29 * 60 + 59;
    const countdownElement = document.getElementById('countdown');

    function updateCountdown() {
        if (totalSeconds <= 0) {
            countdownElement.textContent = '0h 0m 0s';
            return;
        }

        const hours = Math.floor(totalSeconds / 3600);
        const minutes = Math.floor((totalSeconds % 3600) / 60);
        const seconds = totalSeconds % 60;

        // Format the time with leading zeros if needed
        const formattedTime = `${hours}h ${minutes.toString().padStart(2, '0')}m ${seconds.toString().padStart(2, '0')}s`;
        countdownElement.textContent = formattedTime;

        totalSeconds--;
    }

    // Update immediately and then every second
    updateCountdown();
    const timerInterval = setInterval(() => {
        updateCountdown();
        if (totalSeconds <= 0) {
            clearInterval(timerInterval);
        }
    }, 1000);
});