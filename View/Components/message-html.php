<?php if(isset($_SESSION['mensagem'])): ?>
    <div class="alert alert-<?= $_SESSION['tipo-mensagem']; ?> alert-dismissible mt-2" role="alert">
        <div><?= $_SESSION['mensagem']; ?></div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php 
        unset($_SESSION['mensagem']);
        unset($_SESSION['tipo-mensagem']);
    ?>
<?php endif; ?>