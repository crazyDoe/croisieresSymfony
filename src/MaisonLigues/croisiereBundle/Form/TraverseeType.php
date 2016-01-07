<?php

namespace MaisonLigues\croisiereBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TraverseeType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date','datetime',array('label'=>'Date : '))
            ->add('laLiaison','entity',
                array('class'=>'MaisonLiguesCroisiereBundle:Liaison',
                    'property'=>'id',
                    'multiple'=>false,
                    'expanded'=>true))
            ->add('leBateau','entity',
                array('class'=>'MaisonLiguesCroisiereBundle:Bateau',
                    'property'=>'nom',
                    'multiple'=>false,
                    'expanded'=>true))




        ;
        
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MaisonLigues\croisiereBundle\Entity\Traversee'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'maisonligues_croisierebundle_traversee';
    }
}
