<?php
defined('TYPO3_MODE') || die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'SiteMonitor',
    'Dashboardlist',
    'Monitor dashboardlist'
);

$materialPluginSignature = 'sitemonitor_dashboardlist';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$materialPluginSignature] = 'layout,select_key,recursive';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$materialPluginSignature] = 'pi_flexform';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $materialPluginSignature,
    'FILE:EXT:site_monitor/Configuration/FlexForms/Dashboardlist.xml'
);
