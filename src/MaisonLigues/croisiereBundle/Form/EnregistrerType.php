<?php

namespace MaisonLigues\croisiereBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EnregistrerType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('quantite','integer',array('label'=>'','attr'=>['class'=>'form-control']))
                        ->add('leType','entity',
                array('class'=>'MaisonLiguesCroisiereBundle:Type',
                    'property'=>'libelle',
                    'multiple'=>false,
                    'expanded'=>false,'read_only'=>true))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MaisonLigues\croisiereBundle\Entity\Enregistrer'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'maisonligues_croisierebundle_enregistrer';
    }
}
