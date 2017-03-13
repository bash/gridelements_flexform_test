<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'gridelements_flexform_test',
    'Plugin',
    'Gridelements Flexform Test'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['gridelementsflexformtest_plugin'] = 'pi_flexform';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'gridelementsflexformtest_plugin',
    'FILE:EXT:gridelements_flexform_test/Configuration/FlexForms/Plugin.xml'
);
