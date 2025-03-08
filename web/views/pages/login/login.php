<!-- Formulario de Login Flotante -->
<div id="loginModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeLoginModal()">&times;</span>
        <h2>Iniciar Sesión</h2>
        <form onsubmit="return fakeLogin(event)">
            <label for="email">Correo:</label>
            <input type="email" id="email" required>
            
            <label for="password">Contraseña:</label>
            <input type="password" id="password" required>
            
            <button type="submit">Ingresar</button>
        </form>
    </div>
</div>

<!-- Script para manejar el login visualmente -->
<script>
    function fakeLogin(event) {
        event.preventDefault(); // Evita el envío del formulario
        closeLoginModal();
        alert("Inicio de sesión exitoso (solo visual)");
    }

    function openLoginModal() {
        document.getElementById('loginModal').style.display = 'block';
    }

    function closeLoginModal() {
        document.getElementById('loginModal').style.display = 'none';
    }
</script>
