document.getElementById('toggle-menu').addEventListener('click', function() {
    document.querySelector('.menu-container').classList.toggle('menu-open');
});

    const toggleSwitch = document.querySelector('#toggle-dark-mode');

// Function to toggle between light and dark theme
function toggleTheme() {
    if (toggleSwitch.checked) {
        document.body.classList.add('dark-mode');
        localStorage.setItem('theme', 'dark');
    } else {
        document.body.classList.remove('dark-mode');
        localStorage.setItem('theme', 'light');
    }
}

// Event listener for the toggle switch
toggleSwitch.addEventListener('change', toggleTheme);

// Check local storage for theme
const currentTheme = localStorage.getItem('theme');
if (currentTheme) {
    document.body.classList.toggle('dark-mode', currentTheme === 'dark');
    toggleSwitch.checked = currentTheme === 'dark';
}