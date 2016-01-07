<?php

namespace MaisonLigues\croisiereBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use MaisonLigues\croisiereBundle\Entity\Enregistrer;
use MaisonLigues\croisiereBundle\Form\EnregistrerType;


class ReservationType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text',array('label'=>'Numéro : ','attr' => ['class' => 'form-control']))
            ->add('adresse','text',array('label'=>'Numéro : ','attr' => ['class' => 'form-control']))
            ->add('cp','text',array('label'=>'Numéro : ','attr' => ['class' => 'form-control']))
            ->add('ville','text',array('label'=>'Numéro : ','attr' => ['class' => 'form-control']))
            ->add('lesEnregistrements','collection',
                array('label'=>'Enregistrements','type'=>new EnregistrerType()))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MaisonLigues\croisiereBundle\Entity\Reservation'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'maisonligues_croisierebundle_reservation';
    }
}
