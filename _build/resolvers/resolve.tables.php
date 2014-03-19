<?php
/**
 * Resolve creating custom db tables during install.
 *
 * @package redirector
 * @subpackage build
 */

$modx =& $object->xpdo;

$modx->log(xPDO::LOG_LEVEL_INFO, 'Creating database tables.');
switch ($options[xPDOTransport::PACKAGE_ACTION]) {
    case xPDOTransport::ACTION_INSTALL:
    case xPDOTransport::ACTION_UPGRADE:

        $modelPath = $modx->getOption('redirector.core_path',null,$modx->getOption('core_path').'components/redirector/').'model/';
        $modx->addPackage('redirector',$modelPath);

        // to not report table creation in the console
        $oldLogLevel = $modx->getLogLevel();
        $modx->setLogLevel(0);

        $manager = $modx->getManager();

        $manager->createObjectContainer('modRedirect');

        // set back console logging
        $modx->setLogLevel($oldLogLevel);

    break;

    case xPDOTransport::ACTION_UNINSTALL:

        $manager->removeObjectContainer('modRedirect');

    break;
}

return true;