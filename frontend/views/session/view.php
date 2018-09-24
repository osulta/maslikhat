<?php

$l = $this->params['language'];
?>

<div class="col-sm-9">
    <div class="row">
        <div class="col-sm-12">
            <h3><?= $session->{'title_' . $l}; ?></h3>
            <?= $session->{'content_' . $l}; ?>
        </div>
    </div>
</div>

