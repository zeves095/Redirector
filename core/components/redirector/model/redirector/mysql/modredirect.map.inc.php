<?php
$xpdo_meta_map['modRedirect']= array (
  'package' => 'redirector',
  'version' => '1.0',
  'table' => 'redirects',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'pattern' => '',
    'target' => '',
    'context_key' => NULL,
    'active' => 1,
  ),
  'fieldMeta' => 
  array (
    'pattern' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
      'index' => 'index',
    ),
    'target' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
      'index' => 'index',
    ),
    'context_key' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => true,
      'default' => NULL,
      'index' => 'index',
    ),
    'active' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'attributes' => 'unsigned',
      'phptype' => 'boolean',
      'null' => false,
      'default' => 1,
      'index' => 'index',
    ),
  ),
  'aggregates' => 
  array (
    'PatternResource' => 
    array (
      'class' => 'modResource',
      'local' => 'pattern',
      'foreign' => 'uri',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
    'TargetResource' => 
    array (
      'class' => 'modResource',
      'local' => 'target',
      'foreign' => 'uri',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
    'Context' => 
    array (
      'class' => 'modContext',
      'local' => 'context_key',
      'foreign' => 'key',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
