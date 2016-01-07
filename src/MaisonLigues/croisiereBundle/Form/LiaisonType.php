<?php

namespace MaisonLigues\croisiereBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LiaisonType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('distance','integer',array('label'=>'Distance : ','attr' => ['class' => 'form-control']))
            ->add('leSecteur','entity',
                array('class'=>'MaisonLiguesCroisiereBundle:Secteur',
                    'property'=>'nom',
                    'multiple'=>false,
                    'expanded'=>true))
            ->add('leDepart','entity',
                array('class'=>'MaisonLiguesCroisiereBundle:Port',
                    'property'=>'nom',
                    'multiple'=>false,
                    'expanded'=>true))
            ->add('lArrive','entity',
                array('class'=>'MaisonLiguesCroisiereBundle:Port',
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
            'data_class' => 'MaisonLigues\croisiereBundle\Entity\Liaison'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'maisonligues_croisierebundle_liaison';
    }
}
