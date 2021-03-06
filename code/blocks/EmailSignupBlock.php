<?php

class EmailSignupBlock extends Block
{
    /**
     * @return string
     */
    public function singular_name()
    {
        return _t('EmailSignupBlock.SINGULARNAME', 'Email Signup Block');
    }

    /**
     * @return string
     */
    public function plural_name()
    {
        return _t('EmailSignupBlock.PLURALNAME', 'Email Signup Blocks');
    }

    /**
     * @var array
     */
    private static $db = [
        'EmbedCode' => 'HTMLText',
    ];

    /**
     * @return FieldList
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Main', TextareaField::create('EmbedCode')->setTitle('Embed code for signup form'));

        return $fields;
    }
}