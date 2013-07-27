<?php if (!defined('APPLICATION')) exit();

// Conversations
$Configuration['Conversations']['Version'] = '2.0.18.8';

// Database
$Configuration['Database']['Name'] = $_SERVER['DB1_NAME'];
$Configuration['Database']['Host'] = $_SERVER['DB1_HOST'];
$Configuration['Database']['User'] = $_SERVER['DB1_USER'];
$Configuration['Database']['Password'] = $_SERVER['DB1_PASS'];

// EnabledApplications
$Configuration['EnabledApplications']['Conversations'] = 'conversations';
$Configuration['EnabledApplications']['Vanilla'] = 'vanilla';

// EnabledPlugins
$Configuration['EnabledPlugins']['GettingStarted'] = 'GettingStarted';
$Configuration['EnabledPlugins']['HtmLawed'] = 'HtmLawed';

// Garden
$Configuration['Garden']['Title'] = 'Vanilla';
$Configuration['Garden']['Cookie']['Salt'] = 'QGDWRQZWXJ';
$Configuration['Garden']['Cookie']['Domain'] = '';
$Configuration['Garden']['Registration']['ConfirmEmail'] = TRUE;
$Configuration['Garden']['Email']['SupportName'] = 'Vanilla';
$Configuration['Garden']['Version'] = '2.0.18.8';
$Configuration['Garden']['RewriteUrls'] = TRUE;
$Configuration['Garden']['CanProcessImages'] = TRUE;
$Configuration['Garden']['Installed'] = TRUE;

// Plugins
$Configuration['Plugins']['GettingStarted']['Dashboard'] = '1';
$Configuration['Plugins']['GettingStarted']['Discussion'] = '1';

// Routes
$Configuration['Routes']['DefaultController'] = 'discussions';

// Vanilla
$Configuration['Vanilla']['Version'] = '2.0.18.8';
