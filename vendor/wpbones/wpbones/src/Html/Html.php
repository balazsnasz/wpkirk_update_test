<?php

namespace BalazsKirkUpdate\WPBones\Html;

class Html
{
    protected static $htmlTags = [
    'a'        => '\BalazsKirkUpdate\WPBones\Html\HtmlTagA',
    'button'   => '\BalazsKirkUpdate\WPBones\Html\HtmlTagButton',
    'checkbox' => '\BalazsKirkUpdate\WPBones\Html\HtmlTagCheckbox',
    'datetime' => '\BalazsKirkUpdate\WPBones\Html\HtmlTagDatetime',
    'fieldset' => '\BalazsKirkUpdate\WPBones\Html\HtmlTagFieldSet',
    'form'     => '\BalazsKirkUpdate\WPBones\Html\HtmlTagForm',
    'input'    => '\BalazsKirkUpdate\WPBones\Html\HtmlTagInput',
    'label'    => '\BalazsKirkUpdate\WPBones\Html\HtmlTagLabel',
    'optgroup' => '\BalazsKirkUpdate\WPBones\Html\HtmlTagOptGroup',
    'option'   => '\BalazsKirkUpdate\WPBones\Html\HtmlTagOption',
    'select'   => '\BalazsKirkUpdate\WPBones\Html\HtmlTagSelect',
    'textarea' => '\BalazsKirkUpdate\WPBones\Html\HtmlTagTextArea',
  ];

    public static function __callStatic($name, $arguments)
    {
        if (in_array($name, array_keys(self::$htmlTags))) {
            $args = (isset($arguments[ 0 ]) && ! is_null($arguments[ 0 ])) ? $arguments[ 0 ] : [];

            return new self::$htmlTags[ $name ]($args);
        }
    }
}
