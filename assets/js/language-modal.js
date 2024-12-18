<script>
        function setLanguage(lang) {
            if (lang === 'es') {
                window.location.href = 'index_es.html'; // Redirect to Spanish version
            } else {
                document.getElementById('language-modal').style.display = 'none';
                document.body.classList.remove('hidden');
                document.getElementById('main-content').classList.remove('hidden-content');
            }
        }
</script>