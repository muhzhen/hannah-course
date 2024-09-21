<button type="button" onclick="togglePassword()" id="togglePassword" class="text-gray-600">
    Show
</button>

<script>
    function togglePassword() {
        const passwordInput = document.getElementById('passwordInput');
        const toggleButton = document.getElementById('togglePassword');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleButton.textContent = 'Hide';
        } else {
            passwordInput.type = 'password';
            toggleButton.textContent = 'Show';
        }
    }
</script>
