<?php
/**
 * Resolves setup-options settings by setting email options.
 *
 * @package quip
 * @subpackage build
 */
$success= false;
switch ($options[xPDOTransport::PACKAGE_ACTION]) {
    case xPDOTransport::ACTION_INSTALL:
    case xPDOTransport::ACTION_UPGRADE:
		
        /* modxbp.tpl */
        $setting = $object->xpdo->getObject('modSystemSetting',array('key' => 'modxbp.tpl'));
        if ($setting != null) {
            $setting->set('value',$options['tpl']);
            $setting->save();
        } else {
            $object->xpdo->log(xPDO::LOG_LEVEL_ERROR,'[modxbp] modxbp.tpl setting could not be found, so the setting could not be changed.');
        }
		
		/* modxbp.webfonts */
        $setting = $object->xpdo->getObject('modSystemSetting',array('key' => 'modxbp.webfonts'));
        if ($setting != null) {
            $setting->set('value',$options['webfonts']);
            $setting->save();
        } else {
            $object->xpdo->log(xPDO::LOG_LEVEL_ERROR,'[modxbp] modxbp.webfonts setting could not be found, so the setting could not be changed.');
        }
		
		/* modxbp.accessifyhtml5 */
        $setting = $object->xpdo->getObject('modSystemSetting',array('key' => 'modxbp.accessifyhtml5'));
        if ($setting != null) {
            $setting->set('value',$options['accessifyhtml5']);
            $setting->save();
        } else {
            $object->xpdo->log(xPDO::LOG_LEVEL_ERROR,'[modxbp] modxbp.accessifyhtml5 setting could not be found, so the setting could not be changed.');
        }
		
		/* modxbp.supportedIE */
        $setting = $object->xpdo->getObject('modSystemSetting',array('key' => 'modxbp.supportedIE'));
        if ($setting != null) {
            $setting->set('value',$options['supportedIE']);
            $setting->save();
        } else {
            $object->xpdo->log(xPDO::LOG_LEVEL_ERROR,'[modxbp] modxbp.supportedIE setting could not be found, so the setting could not be changed.');
        }
		
		/* modxbp.GACode */
        $setting = $object->xpdo->getObject('modSystemSetting',array('key' => 'modxbp.GACode'));
        if ($setting != null) {
            $setting->set('value',$options['GACode']);
            $setting->save();
        } else {
            $object->xpdo->log(xPDO::LOG_LEVEL_ERROR,'[modxbp] modxbp.GACode setting could not be found, so the setting could not be changed.');
        }
		
		/* modxbp.FBML */
        $setting = $object->xpdo->getObject('modSystemSetting',array('key' => 'modxbp.FBML'));
        if ($setting != null) {
            $setting->set('value',$options['FBML']);
            $setting->save();
        } else {
            $object->xpdo->log(xPDO::LOG_LEVEL_ERROR,'[modxbp] modxbp.FBML setting could not be found, so the setting could not be changed.');
        }
		
		/* modxbp.OpenGraph */
        $setting = $object->xpdo->getObject('modSystemSetting',array('key' => 'modxbp.OpenGraph'));
        if ($setting != null) {
            $setting->set('value',$options['OpenGraph']);
            $setting->save();
        } else {
            $object->xpdo->log(xPDO::LOG_LEVEL_ERROR,'[modxbp] modxbp.OpenGraph setting could not be found, so the setting could not be changed.');
        }
		
		/* modxbp.jQuery */
        $setting = $object->xpdo->getObject('modSystemSetting',array('key' => 'modxbp.jQuery'));
        if ($setting != null) {
            $setting->set('value',$options['jQuery']);
            $setting->save();
        } else {
            $object->xpdo->log(xPDO::LOG_LEVEL_ERROR,'[modxbp] modxbp.jQuery setting could not be found, so the setting could not be changed.');
        }
		 
        $success= true;
        break;
    case xPDOTransport::ACTION_UNINSTALL:
        $success= true;
        break;
}
return $success;