<?php

namespace App\Exception;

use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

/**
 * Class InvalidApiFormException
 *
 * Extends HttpException so it's more api friendly
 *
 * @package App\Exception
 */
class InvalidFormException extends HttpException
{
    /** @var FormInterface */
    private $form;

    /**
     * InvalidFormException constructor.
     *
     * @param FormInterface $form
     */
    public function __construct(FormInterface $form)
    {
        $this->form = $form;

        $message = implode('\n', $this->getErrorMessagesFromUnbubblingForm($this->form));
        parent::__construct(Response::HTTP_BAD_REQUEST, $message);
    }

    /**
     * @return FormInterface
     */
    public function getForm()
    {
        return $this->form;
    }


    /**
     * @param FormInterface $form
     *
     * @return array
     */
    private function getErrorMessagesFromUnbubblingForm(FormInterface $form)
    {
        $errors = array();
        foreach ($form->getErrors() as $key => $error) {
            $template   = $error->getMessageTemplate();
            $parameters = $error->getMessageParameters();

            foreach ($parameters as $var => $value) {
                // if the parameter key does exist in the error message then string replace the parameter
                if (strpos($template, $var) !== false) {
                    $template = str_replace($var, $value, $template);
                } else {
                    // else add the param to the error message
                    $template = $template . ' ' . str_replace(['{{ ', ' }}'], '', $var) . ': ' . $value;
                }
            }

            $errors[$key] = $template;
        }
        if ($form->count() > 0) {
            foreach ($form as $child) {
                if ($child->isValid() === false) {
                    $errors[$child->getName()] = $this->getErrorMessagesFromUnbubblingForm($child);
                }
            }
        }

        return $errors;
    }
}
