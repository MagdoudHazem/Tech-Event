<?php

namespace MaterialBundle\Form;

use MaterialBundle\Enum\MaterielTypeEnum;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MaterialType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('typetable', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType', array(
            'required' => true,
            'choices' => MaterielTypeEnum::getAvailableTableTypes(),
            'choices_as_values' => true,
            'choice_label' => function($choice) {
                return MaterielTypeEnum::getTypeName($choice);
            },
        ))->add('typesalle', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType', array(
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
            ->add('nbtable')
            ->add('nbchaise');
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MaterialBundle\Entity\Material'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'materialbundle_material';
    }


}
