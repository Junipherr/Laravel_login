document.getElementById('profile-link').addEventListener('click', function() {
    document.getElementById('content').style.display = 'none';
    document.getElementById('profile-page').style.display = 'block';
});

document.getElementById('logout-link').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('logout-form').submit();
});