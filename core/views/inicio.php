<?php
    use core\classes\App_geral;
 ?>
<div>

    <?php if (App_geral::ClienteLogado()):?>
        <p>Sim</p>      
    <?php else: ?>    
        <p>Nao</p> 
    <?php endif; ?>

</div>