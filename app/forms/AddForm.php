<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Forms\Element\Select;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Email;
class AddForm extends Form
{
    public function initialize($entity = null, $options = null)
    {
        $this->add(
            new Text(
                "name"
            )
        );

        $this->add(
            new Select(
                "species",
                [
                    "felidaes" => "Felidaes",
                    "birds" => "Birds",
                ]
            )
        );
    }
}
