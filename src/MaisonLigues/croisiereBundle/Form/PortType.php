<?php

namespace MaisonLigues\croisiereBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PortType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
                $builder
            ->add('nom','text',array('label'=>'Nom : ','attr' => ['class' => 'form-control']))

        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MaisonLigues\croisiereBundle\Entity\Port'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'maisonligues_croisierebundle_port';
    }
}
