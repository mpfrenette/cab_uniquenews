<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

    
if (TYPO3_MODE=='BE')    {    
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['tt_news']['what_to_display'][] = array('UNIQUE_LIST', 'UNIQUE_LIST');
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['tt_news']['what_to_display'][] = array('UNIQUE_LATEST', 'UNIQUE_LATEST');

}    
    
?>