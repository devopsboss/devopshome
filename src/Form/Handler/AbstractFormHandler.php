<?php

namespace App\Form\Handler;

use App\Exception\InvalidFormException;
use Symfony\Component\Form\FormInterface;


/**
 * Class AbstractApiFormHandler
 *
 * @package Api\Form\Handler
 */
abstract class AbstractFormHandler
{

    /**
     * @param FormInterface $form
     */
    protected function invalidFormCheck(FormInterface $form)
    {
        if ($form->isValid() === false) {
            throw new InvalidFormException($form);
        }
    }
}
