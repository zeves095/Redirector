<?php

class ResourcesGetListProcessor extends modObjectGetListProcessor {
	public $classKey = 'modResource';
	public $languageTopics = array('redirector:default');
	public $defaultSortField = 'pagetitle';
	public $defaultSortDirection = 'ASC';
	public $objectType = 'modresource';

    public function prepareQueryBeforeCount(xPDOQuery $c) {

		$contextKey = $this->getProperty('cntx');
		if(!empty($contextKey)) {
			$c->andCondition(array(
				'context_key' => $contextKey,
			));
		}

		$query = $this->getProperty('query');
		if(!empty($query)) {
			$c->andCondition(array(
				'id' => $query,
				'OR:pagetitle:LIKE' => '%'.$query.'%',
			));
		}
		return $c;
    }

    public function prepareRow(xPDOObject $object) {
        $arr = $object->toArray();
        $arr['pagetitle'] .= ' ('.$object->get('context_key').', '.$object->get('id').')';

        return $arr;
    }
}
return 'ResourcesGetListProcessor';