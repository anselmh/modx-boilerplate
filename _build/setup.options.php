<?php
/**
 * Build the setup options form.
 *
 * @package MODXBoilerplate
 * @subpackage build
 */
/* set some default values */
$values = array(
    'webfonts' => '0',
    'accessifyhtml5' => '1',
    'supportedIE' => '8',
	'GACode' => 'UA-XXXXX-X',
	'FBML' => '0',
	'OpenGraph' => '0',
	'jQuery' => '1'
);
switch ($options[xPDOTransport::PACKAGE_ACTION]) {
    case xPDOTransport::ACTION_INSTALL:
    case xPDOTransport::ACTION_UPGRADE:
        $setting = $modx->getObject('modSystemSetting',array('key' => 'modxbp.webfonts'));
        if ($setting != null) { $values['webfonts'] = $setting->get('value'); }
        unset($setting);
 
        $setting = $modx->getObject('modSystemSetting',array('key' => 'modxbp.accessifyhtml5'));
        if ($setting != null) { $values['accessifyhtml5'] = $setting->get('value'); }
        unset($setting);
 
        $setting = $modx->getObject('modSystemSetting',array('key' => 'modxbp.supportedIE'));
        if ($setting != null) { $values['supportedIE'] = $setting->get('value'); }
        unset($setting);
		
		$setting = $modx->getObject('modSystemSetting',array('key' => 'modxbp.GACode'));
        if ($setting != null) { $values['GACode'] = $setting->get('value'); }
        unset($setting);
		
        $setting = $modx->getObject('modSystemSetting',array('key' => 'modxbp.FBML'));
        if ($setting != null) { $values['FBML'] = $setting->get('value'); }
        unset($setting);
		
        $setting = $modx->getObject('modSystemSetting',array('key' => 'modxbp.OpenGraph'));
        if ($setting != null) { $values['OpenGraph'] = $setting->get('value'); }
        unset($setting);	
		
		$setting = $modx->getObject('modSystemSetting',array('key' => 'modxbp.jQuery'));
        if ($setting != null) { $values['jQuery'] = $setting->get('value'); }
        unset($setting);
		
    break;
    case xPDOTransport::ACTION_UNINSTALL: break;
}
 
$output = '
<style type="text/css">
	    label{
        display: block;
    }
    input{
        display: inline-block;
        width: 210px;
        height: 18px;
        padding: 4px;
        margin-bottom: 9px;
        font-size: 13px;
        line-height: 18px;
        color: #555555;
        border: 1px solid #ccc;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        -webkit-transition: border linear 0.2s, box-shadow linear 0.2s;
        -moz-transition: border linear 0.2s, box-shadow linear 0.2s;
        -ms-transition: border linear 0.2s, box-shadow linear 0.2s;
        -o-transition: border linear 0.2s, box-shadow linear 0.2s;
        transition: border linear 0.2s, box-shadow linear 0.2s;
    }
    input[type="checkbox"]{
        width: auto;
        height: auto;
        padding: 0;
        margin: 3px 0;
        line-height: normal;
        border: 0;
        cursor: pointer;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        border-radius: 0;
    }
    select{
        height: 28px;
        line-height: 28px;
        }
    select{
        display: inline-block;
        width: 210px;
        height: 18px;
        padding: 4px;
        margin-bottom: 9px;
        font-size: 13px;
        line-height: 18px;
        color: #555555;
        border: 1px solid #ccc;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        -webkit-appearance: menulist;
        box-sizing: border-box;
        -webkit-box-align: center;
        border: 1px solid;
        border-image: initial;
        white-space: pre;
        -webkit-rtl-ordering: logical;
        color: black;
        background-color: white;
        cursor: default;
    }
</style>
<label for="modxbp-webfonts">Use webfonts (via @font-face, not typekit)?:</label>
<input type="checkbox" name="webfonts" id="modxbp-webfonts" value="'.$values['webfonts'].'" checked />
<br /><br /> 
<label for="modxbp-googlewbfnt">Specify Google Webfont Families (<a href="https://developers.google.com/webfonts/docs/getting_started?hl=de#Syntax" target="_blank" title="see help at google webfont directory">?</a>):</label>
<input type="text" name="webfonts" id="modxbp-webfonts" value="'.$values['webfonts'].'" placeholder="Droid+Sans:400,700|Droid+Sans+Mono" />

<label for="modxbp-accessifyhtml5">Use WAI/ARIA Accessibility script (highly recommended unless there are js-errors ocurring):</label>
<input type="checkbox" name="accessifyhtml5" id="modxbp-accessifyhtml5" value="'.$values['accessifyhtml5'].'" checked />
<br /><br />
 
<label for="modxbp-supportedIE">Down to which Internet Explorer version would you optimize the site?</label>
<select name="supportedIE" id="modxbp-supportedIE" value="'.$values['supportedIE'].'">
	<option value="6">IE6</option>
	<option value="7">IE7</option>
	<option value="8" selected>IE8</option>
	<option value="9">IE9</option>
	<option value="10">IE10</option>
</select>

<label for="modxbp-GACode">If you use Google Analytics, provide GA-Code:</label>
<input type="text" name="GACode" id="modxbp-GACode" value="'.$values['GACode'].'" checked />
<br /><br />

<label for="modxbp-FBML">Use Facebook API?:</label>
<input type="checkbox" name="FBML" id="modxbp-FBML" value="'.$values['GACode'].'" />
<br /><br />

<label for="modxbp-FBMLAppID">If you use Facebook, provide FBML AppID:</label>
<input type="text" name="FBMLAppID" id="modxbp-FBMLAppID" value="'.$values['FBMLAppID'].'" />
<br /><br />

<label for="modxbp-OpenGraph">Use OpenGraph Meta?</label>
<input type="checkbox" name="OpenGraph" id="modxbp-OpenGraph" value="'.$values['OpenGraph'].'" />
<br /><br />

<label for="modxbp-jQuery">Use jQuery?</label>
<input type="checkbox" name="jQuery" id="modxbp-jQuery" value="'.$values['jQuery'].'" checked />
<br /><br />


';

return $output;