<?php
/**
 * Created by PhpStorm.
 * User: pvassoilles
 * Date: 16/01/17
 * Time: 11:28
 */

namespace IT\InputMaskBundle\Form\Type;


use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DateMaskType extends DateType
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

        $resolver->setDefault('mask-alias', 'date');
        $resolver->setDefault('widget', 'single_text');
        $resolver->setDefault('format', 'dd/MM/yyyy');
        $resolver->setDefault('attr', array(
            'class' => 'form-control',
            'placeholder' => 'jj/mm/aaaa',
        ));
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'it_date_mask';
    }

    /**
     * @inheritdoc
     */
    public function getBlockPrefix()
    {
        return $this->getName();
    }

}