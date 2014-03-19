<?php
/**
 * Default Russian Lexicon Entries for Redirector
 *
 * @package redirector
 * @subpackage lexicon
 */
$_lang['redirector'] = 'Redirector';
$_lang['redirector.active'] = 'Включён';
$_lang['redirector.desc'] = 'Управление редиректами на вашем сайте. Red lines means that the pattern URL is still exists OR target URL doesn\'t exists for a resource and will not be redirected.';
$_lang['redirector.nothing_found'] = 'No redirects found yet!';
$_lang['redirector.description'] = 'Описание';
$_lang['redirector.redirect_err_ae'] = 'Редирект с таким именем уже есть.';
$_lang['redirector.redirect_err_ae_patctx'] = 'A redirect with this pattern and "[[+context]]" context already exists.';
$_lang['redirector.redirect_err_ae_uri'] = 'URI already exists for Resource ID [[+id]] in "[[+context]]" context... Redirect will not work!';
$_lang['redirector.redirect_err_nf'] = 'Редирект не найден.';
$_lang['redirector.redirect_err_ns'] = 'Редирект не указан.';
$_lang['redirector.redirect_err_ns_name'] = 'Укажите имя редиректа.';
$_lang['redirector.redirect_err_ne_target'] = 'Target URI doesn\'t exists... Redirect won\'t work...';
$_lang['redirector.redirect_err_remove'] = 'Произошла ошибка при попытке удалить редирект.';
$_lang['redirector.redirect_err_save'] = 'Произошла ошибка при попытке сохранить редирект.';
$_lang['redirector.redirect_create'] = 'Создать новый редирект';
$_lang['redirector.redirect_remove'] = 'Удалить редирект';
$_lang['redirector.redirect_remove_confirm'] = 'Вы уверены, что хотите удалить этот редирект?';
$_lang['redirector.redirect_update'] = 'Обновить редирект';
$_lang['redirector.redirects'] = 'Редиректы';
$_lang['redirector.management'] = 'Управление редиректами';
$_lang['redirector.menu_desc'] = 'Управление редиректами.';
$_lang['redirector.pattern'] = 'Шаблон';
$_lang['redirector.search...'] = 'Поиск...';
$_lang['redirector.target'] = 'Цель';
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