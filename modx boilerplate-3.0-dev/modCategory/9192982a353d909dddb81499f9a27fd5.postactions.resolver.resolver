<?php

$success = false;

// Create a reference to MODx since this resolver is executed from WITHIN a modCategory
$modx =& $object->xpdo;

switch ($options[xPDOTransport::PACKAGE_ACTION]) {
	case xPDOTransport::ACTION_UPGRADE:
    case xPDOTransport::ACTION_INSTALL:
		$success = true;
		break;
    case xPDOTransport::ACTION_UNINSTALL:
           $modx->log(xPDO::LOG_LEVEL_INFO,'Uninstalling . . .');
           $success = true;
           break;
}

return $success;