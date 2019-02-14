<?php
/**
 * Created by PhpStorm.
 * User: pvassoilles
 * Date: 16/01/17
 * Time: 11:28
 */

namespace IT\InputMaskBundle\Form\Type;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class RegexMaskType
 *
 * Default InputMask for text field. Use "regex" option to define the regex-mask to apply.
 *
 * @package IT\InputMaskBundle\Form\Type
 */
class RegexMaskType extends TextType
{

    /**
     * @inheritdoc
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        parent::buildView($view, $form, $options);

        $view->vars['regex'] = $options['regex'];
    }

    /**
     * @inheritdoc
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setRequired('regex');
        $resolver->setDefault('attr', array(
            'class' => 'form-control',
        ));
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'it_regex_mask';
    }

    /**
     * @inheritdoc
     */
    public function getBlockPrefix()
    {
        return $this->getName();
    }

}