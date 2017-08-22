<?php

namespace RationalBundle\Type;

/**
 * Enum gender type
 */
class EnumGenderType extends EnumType
{
    protected $name = 'enumgender';
    protected $values = array('M', 'F');
}