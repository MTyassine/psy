<?php

namespace SmartPsyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TestAffecterType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateAffect')
            ->add('passage')
            ->add('datePassage')
            ->add('psy')
            ->add('patient')
            ->add('test')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SmartPsyBundle\Entity\TestAffecter'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'smartpsybundle_testaffecter';
    }
}
