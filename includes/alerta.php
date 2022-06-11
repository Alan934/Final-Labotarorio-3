<?php 
    function alerta($text, $color) : void {
        ?>
            <div class="alert alert-<?php $color ?> d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                    ¡<?php $text ?>!
                </div>
            </div>
        <?php
    }
?>