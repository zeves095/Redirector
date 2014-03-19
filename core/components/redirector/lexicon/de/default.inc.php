<?php
/**
 * Default German Lexicon Entries for Redirector
 *
 * @package redirector
 * @subpackage lexicon
 */
$_lang['redirector'] = 'Redirector';
$_lang['redirector.active'] = 'Aktiv';
$_lang['redirector.desc'] = 'Verwalten Sie Umleitungen für Ihre Webseite. Die roten Linien bedeuten, dass das URL Muster noch existiert ODER dass das Ziel-Url für die Ressource nicht existiert und nicht weitergeleitet wird';
$_lang['redirector.nothing_found'] = 'No redirects found yet!';
$_lang['redirector.description'] = 'Beschreibung';
$_lang['redirector.redirect_err_ae'] = 'Es existiert bereits eine Umleitung mit diesem Namen.';
$_lang['redirector.redirect_err_ae_patctx'] = 'A redirect with this pattern and "[[+context]]" context already exists.';
$_lang['redirector.redirect_err_ae_uri'] = 'URI already exists for Resource ID [[+id]] in "[[+context]]" context... Redirect will not work!';
$_lang['redirector.redirect_err_nf'] = 'Umleitung nicht gefunden.';
$_lang['redirector.redirect_err_ns'] = 'Keine Umleitung erstellt.';
$_lang['redirector.redirect_err_ns_name'] = 'Bitte geben Sie einen Namen für die Umleitung an.';
$_lang['redirector.redirect_err_ne_target'] = 'Target URI doesn\'t exists... Redirect won\'t work...';
$_lang['redirector.redirect_err_remove'] = 'Es ist ein Fehler beim Entfernen der Umleitung aufgetreten.';
$_lang['redirector.redirect_err_save'] = 'Es ist ein Fehler beim Speichern der Umleitung aufgetreten.';
$_lang['redirector.redirect_create'] = 'neue Umleitung erstellen';
$_lang['redirector.redirect_remove'] = 'Umleitung entfernen';
$_lang['redirector.redirect_remove_confirm'] = 'Sind Sie sicher, dass Sie die Umleitung entfernen möchten?';
$_lang['redirector.redirect_update'] = 'Umleitung bearbeiten';
$_lang['redirector.redirects'] = 'Umleitungen';
$_lang['redirector.management'] = 'Umleitungsverwaltung';
$_lang['redirector.menu_desc'] = 'Verwalten Sie Umleitungen für Ihre Webseite.';
$_lang['redirector.pattern'] = 'Muster';
$_lang['redirector.search...'] = 'Suche...';
$_lang['redirector.target'] = 'Ziel';
$_lang['redirector.context'] = 'Context';
$_lang['redirector.context_desc'] = 'If context is set, redirect only affects on loaded context.';

$_lang['redirector.import'] = 'Import CSV';
$_lang['redirector.import_desc'] = 'Here you can import new rules provided in CSV format. You can upload a CSV file or past raw CSV format in the textarea below';
$_lang['redirector.import.csv_desc'] = 'Notice: format of the CSV must be "pattern;target;context", where "context" may be skipped or empty.<br/>Also; use relative URLs, not include [[+site_url]] or similar ones.';
$_lang['redirector.import.csv_file'] = 'CSV File selection';
$_lang['redirector.import.raw_csv'] = 'Paste raw CSV data here';
$_lang['redirector.import.do'] = 'Start Import!';
$_lang['redirector.import.doing'] = 'Busy with importing CSV data...';
$_lang['redirector.import.success'] = 'Total [[+total]] records found. Imported: [[+succeed]] successful and [[+failed]] failed!';
$_lang['redirector.import.failed'] = 'Failed importing CSV data... Try again!';

$_lang['redirector.regex_explain'] = 'You can use regular expressions in the pattern and retrieve your replacements back in your target URL.

For example; you have many old URLs like "shop/category-{name}/" and you want to redirect all those URLs to the new "webshop/{name}/" structure, no problem!
Enter these values:

<b>Pattern:</b> ^shop\/category-(.*)\/$
<b>Target:</b> webshop/$1/

You can also apply more wildcards (.*) and use $2, $3 etc. And as you can see, you need to escape the forward slashes and define a ^ for the start and $ for the end position.';

// settings
$_lang['setting_redirector.track_uri_updates'] = 'Track URI Updates';
$_lang['setting_redirector.track_uri_updates_desc'] = 'If enabled, this will keep track on resource URI updates. Automatically created redirects for old > new URIs.';