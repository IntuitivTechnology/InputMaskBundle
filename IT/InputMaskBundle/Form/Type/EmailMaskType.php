<?php
/**
 * Created by PhpStorm.
 * User: pvassoilles
 * Date: 16/01/17
 * Time: 11:28
 */

namespace IT\InputMaskBundle\Form\Type;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class EmailMaskType
 *
 * InputMask field with email format
 *
 * @package IT\InputMaskBundle\Form\Type
 */
class EmailMaskType extends EmailType
{

    /**
     * @inheritdoc
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        parent::buildView($view, $form, $options);

        $view->vars['mask_alias'] = $options['mask-alias'];
    }

    /**
     * @inheritdoc
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefault('mask-alias', 'email');
        $resolver->setDefault('attr', array(
            'class' => 'form-control',
        ));
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'it_email_mask';
    }
    
    /**
     * @inheritdoc
     */
    public function getBlockPrefix()
    {
        return 'it_alias_mask';
    }

}