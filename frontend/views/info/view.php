<?php
$l = $this->params['language'];
?>

<div class="col-sm-9">
    <div class="row">
        <div class="col-sm-12">
            <h3><?= $info->{'title_' . $l}; ?></h3>
            <?= $info->{'content_' . $l}; ?>
        </div>
    </div>
</div>
