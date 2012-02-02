<?php
$chunks = array();
$i = 0;

$chunks[$i] = $modx->newObject('modChunk');
$chunks[$i]->set('id', 0);
$chunks[$i]->set('name', 'bpSiteHeader');
$chunks[$i]->set('description', 'Site Header');
$chunks[$i]->set('snippet', file_get_contents($sources['source_assets'].'main/site_header.html'));
$i++;

$chunks[$i] = $modx->newObject('modChunk');
$chunks[$i]->set('id', 0);
$chunks[$i]->set('name', 'bpSiteHeader978');
$chunks[$i]->set('description', 'Site Header 978 grid');
$chunks[$i]->set('snippet', file_get_contents($sources['source_assets'].'main_978_grid/site_header_978.html'));
$i++;

$chunks[$i] = $modx->newObject('modChunk');
$chunks[$i]->set('id', 0);
$chunks[$i]->set('name', 'bpSiteHeaderFluid');
$chunks[$i]->set('description', 'Site Header Fluid Grid');
$chunks[$i]->set('snippet', file_get_contents($sources['source_assets'].'main_fluid_grid/site_header_fluid.html'));
$i++;

$chunks[$i] = $modx->newObject('modChunk');
$chunks[$i]->set('id', 0);
$chunks[$i]->set('name', 'bpSiteFooter');
$chunks[$i]->set('description', 'Site Footer');
$chunks[$i]->set('snippet', file_get_contents($sources['source_assets'].'main/site_footer.html'));
$i++;