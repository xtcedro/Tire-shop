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
 <script>
        // Función para mostrar/ocultar el menú móvil
        function toggleMenu() {
            document.querySelector('.mobile-menu').classList.toggle('show');
        }

        // Función para establecer el idioma
        function setLanguage(lang) {
            if (lang === 'en') {
                window.location.href = 'index.html'; // Redirige a la versión en inglés
            } else {
                document.getElementById('language-modal').style.display = 'none';
                document.body.classList.remove('hidden');
                document.getElementById('main-content').classList.remove('hidden-content');
            }
        }
    </script>