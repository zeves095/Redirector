<?php

class RedirectorUpdateProcessor extends modObjectUpdateProcessor {
    public $classKey = 'modRedirect';
    public $languageTopics = array('redirector:default');
    public $objectType = 'redirector.redirect';

    public function beforeSet() {
        $context = $this->getProperty('context_key');
        if(empty($context)) {
            $this->setProperty('context_key', NULL);
        }
        $context = $this->getProperty('context_key');

        // check if pattern is an existing resource
        $criteria = array('uri' => $this->getProperty('pattern'));
        if(!empty($context)) { $criteria['context_key'] = $context; }
        $resource = $this->modx->getObject('modResource', $criteria);
        if(!empty($resource) && is_object($resource)) {
            $this->addFieldError('pattern', $this->modx->lexicon('redirector.redirect_err_ae_uri', array('id' => $resource->get('id'), 'context' => $resource->get('context_key'))));
        }

        // check if target is a NON existing resource
        $target = $this->getProperty('target');
        if(!strpos($target, '$') && !strpos($target, '://')) {

            // DEPRECATED: because target should not contain any MODX tags anymore
            if(stripos($target, '[[') !== false) {
                $this->modx->getParser();
                $this->modx->parser->processElementTags('', $target, true, true);
            }

            $criteria = array('uri' => $target);
            if(!empty($context)) { $criteria['context_key'] = $context; }
            $resource = $this->modx->getObject('modResource', $criteria);
            if(empty($resource) || !is_object($resource)) {
                $this->addFieldError('target', $this->modx->lexicon('redirector.redirect_err_ne_target'));
            }
        }

        return parent::beforeSet();
    }
}

return 'RedirectorUpdateProcessor';