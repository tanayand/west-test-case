<?php

$breadcrumbs = Utils::breadcrumbsContent();

if ($breadcrumbs) {
    printf('<div class="breadcrumbs">%s</div>', $breadcrumbs);
}