<?php
/**
 * MODX Boilerplate build script
 *
 * @package modxBoilerplate
 * @subpackage build
 */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tstart = $mtime;
set_time_limit(0); /* makes sure our script doesn't timeout */

$root = dirname(dirname(__FILE__)).'/';

$root = $_SERVER['DOCUMENT_ROOT'].'/';

$sources= array (
    'root' => $root,
    'build' => $root .'_build/',
    'resolvers' => $root . '_build/resolvers/',
    'data' => $root . '_build/data/',
    'source_assets' => $root.'assets/modx-boilerplate/',
);

unset($root); // save memory

require_once dirname(__FILE__) . '/build.config.php';

require_once MODX_CORE_PATH . 'model/modx/modx.class.php';

$modx= new modX();
$modx->initialize('mgr');
$modx->setLogLevel(modX::LOG_LEVEL_INFO);
$modx->setLogTarget(XPDO_CLI_MODE ? 'ECHO' : 'HTML');

$modx->loadClass('transport.modPackageBuilder','',false, true);
$builder = new modPackageBuilder($modx);
$builder->createPackage('MODX Boilerplate','3.0','dev');
$builder->registerNamespace('modxbp',false,true,'{core_path}components/modxbp/');

/* create category */
$category= $modx->newObject('modCategory');
$category->set('id',1);
$category->set('category','MODX Boilerplate');

include $sources['data'].'transport.chunks.php';
$category->addMany($chunks);

/* create category vehicle */
$attr = array(
    xPDOTransport::UNIQUE_KEY => 'category',
    xPDOTransport::PRESERVE_KEYS => false,
    xPDOTransport::UPDATE_OBJECT => true,
    xPDOTransport::RELATED_OBJECTS => true,
    xPDOTransport::RELATED_OBJECT_ATTRIBUTES => array (
        'Chunks' => array (
            xPDOTransport::PRESERVE_KEYS => false,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => 'name',
        ),
    )
);
$vehicle = $builder->createVehicle($category,$attr);

$vehicle->resolve('file',array(
    'source' => $sources['source_assets'],
    'target' => "return MODX_ASSETS_PATH;",
));
$vehicle->resolve('php',array(
    'source' => $sources['resolvers'] . 'setupoptions.resolver.php',
));
$vehicle->resolve('php',array(
    'source' => $sources['resolvers'].'postactions.resolver.php',
));
$builder->putVehicle($vehicle);

/* now pack in the license file, readme and setup options */

$builder->setPackageAttributes(array(
    'readme' => file_get_contents($sources['source_assets'] . 'README.md'),
    'license' => file_get_contents($sources['source_assets'] . 'license.md'),
    'changelog' => file_get_contents($sources['source_assets'] . 'CHANGELOG.md'),
	'setup-options' => array(
        'source' => $sources['build'] . 'setup.options.php'
	),
));

$builder->pack();

$mtime= microtime();
$mtime= explode(" ", $mtime);
$mtime= $mtime[1] + $mtime[0];
$tend= $mtime;
$totalTime= ($tend - $tstart);
$totalTime= sprintf("%2.4f s", $totalTime);

$modx->log(modX::LOG_LEVEL_INFO,"\nPackage Built.\nExecution time: {$totalTime}\n");
exit();