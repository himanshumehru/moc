<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class createQuestionForm extends Form
{
    public function buildForm()
    {
        $this->add([name=>'title', type=>'text']);
        $this->add([name=>'description', type=>'textarea']);
    }
}
