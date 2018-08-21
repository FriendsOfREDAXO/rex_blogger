<?php

$fragment = $this;

$id = $fragment->getVar('id');
$func = $fragment->getVar('func');

if ($func == 'edit') {
  $formLabel = 'Tag Bearbeiten';
} elseif ($func == 'add') {
  $formLabel = 'Neuen Tag erstellen';
}

$table = rex::getTable('blogger_tags');
$where = sprintf("`id` = %d", $id);
$form = rex_form::factory($table, '', $where);

$field = $form->addTextField('tag');
$field->setLabel(rex_i18n::msg('blogger_forms_tag'));

if ($func == 'edit') {
  $form->addParam('id', $id);
}

$form->show();