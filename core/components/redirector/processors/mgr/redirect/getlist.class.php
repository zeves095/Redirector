<?php

class RedirectorGetListProcessor extends modObjectGetListProcessor {
    public $classKey = 'modRedirect';
    public $languageTopics = array('redirector:default');
    public $objectType = 'redirector.redirect';
    public $defaultSortField = 'pattern ASC, target';
    public $defaultSortDirection = 'ASC';

    public function initialize() {
        $this->modx->getParser();
        return parent::initialize();
    }

    public function prepareQueryBeforeCount(xPDOQuery $c) {

        $query = $this->getProperty('query');
        if(!empty($query)) {
            $c->andCondition(array(
                'pattern:LIKE' => '%'.$query.'%',
                'OR:target:LIKE' => '%'.$query.'%',
            ));
        }

        $context = $this->getProperty('context');
        if(!empty($context)) {
            $c->andCondition(array(
                'context_key:LIKE' => '%'.$context.'%',
            ));
        }

        return $c;
    }

    public function prepareRow(xPDOObject $object) {
        $arr = $object->toArray();

        $arr['failure_msg'] = '';
        $arr['valid'] = true;

        // find out if pattern URI exists
        $criteria = array('uri' => $object->get('pattern'));
        if(!empty($arr['context_key'])) {
            $criteria['context_key'] = $object->get('context_key');
        }

        $resource = $this->modx->getObject('modResource', $criteria);
        if(!empty($resource) && is_object($resource)) {
            //$arr['failure_msg'] = 'Pattern URL exists for Resource ID '.$resource->get('id').' in context '.$resource->get('context_key').'. Redirect won\'t work!';
            $arr['failure_msg'] .= '(!) '.$this->modx->lexicon('redirector.pattern').' '.$this->modx->lexicon('redirector.redirect_err_ae_uri', array('id' => $resource->get('id'), 'context' => $resource->get('context_key')));
            $arr['valid'] = false;
        }

        // OR target not exists
        $target = $arr['target'];
        if(!strpos($target, '$')) {

            $this->modx->parser->processElementTags('', $target, true, true);

            if(!strpos($target, '://')) {

                $criteria = array('uri' => $target);
                if(!empty($arr['context_key'])) {
                    $criteria['context_key'] = $object->get('context_key');
                }

                $resource = $this->modx->getObject('modResource', $criteria);
                if(empty($resource) || !is_object($resource)) {
                    $arr['failure_msg'] .= ((!empty($arr['failure_msg'])) ? '<br/>' : '').'(!) '.$this->modx->lexicon('redirector.redirect_err_ne_target');
                    $arr['valid'] = false;
                }
            }
        }

        return $arr;
    }
}

return 'RedirectorGetListProcessor';