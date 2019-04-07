<?php

namespace MaterielBundle\Form;

use MaterielBundle\Enum\MaterielTypeEnum;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class MaterielType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nbtable')
            ->add('nbchaise')
            ->add('typesalle', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType', array(
            'required' => true,
            'choices' => MaterielTypeEnum::getAvailableSalleTypes(),
            'choices_as_values' => true,
            'choice_label' => function($choice) {
                return MaterielTypeEnum::getTypeName($choice);
            },
        ))->add('typelumiere', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType', array(
            'required' => true,
            'choices' => MaterielTypeEnum::getAvailableLumiereTypes(),
            'choices_as_values' => true,
            'choice_label' => function($choice) {
                return MaterielTypeEnum::getTypeName($choice);
            },
        ))
            ->add('save',SubmitType::class);

    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MaterielBundle\Entity\Materiel'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'materielbundle_materiel';
    }


}
