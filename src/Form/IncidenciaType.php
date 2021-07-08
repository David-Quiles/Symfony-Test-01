<?php

namespace App\Form;

use App\Entity\Incidencia;
use App\Entity\TipoIncidencia;
use App\Entity\Emplazamiento;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class IncidenciaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idUsuario', TextType::class, [
                'label' => 'Input your user ID',
            ])
            ->add('numeroIncidencia')
            ->add('fechaIntroduccion', DateTimeType::class, [
                'widget' => 'single_text',
                // this is actually the default format for single_text
                //'format' => 'yyyy-MM-dd',
            ])
            ->add('fechaIncidencia', DateType::class, [
                'widget' => 'single_text',
                // this is actually the default format for single_text
                'format' => 'yyyy-MM-dd',
            ])
            ->add('turno', ChoiceType::class, ['choices'  => ['Mañana' => 1, 'Tarde' => 2, 'Noche' => 3]])
            ->add('estado')
            ->add('otroEmplazamiento')
            ->add('descripcion')
            ->add('analisisCausa')
            ->add('isAnonimo', CheckboxType::class, ['label' => 'Quiere que el grupo de análisis vea la incidencia con su nombre?','attr' => ['class' => 'form-check-input']])
            ->add('emplazamiento', EntityType::class, ['class' => Emplazamiento::class, 'choice_label' => 'nombre', 'multiple' => false, 'expanded' => true, 'attr'=>["class"=>"btn-check"],  'label_attr'=>["class"=>"btn btn-primary"]])
            ->add('tipoIncidencia', EntityType::class, ['class' => TipoIncidencia::class, 'choice_label' => 'nombre'])
            //->add('emplazamiento', EntityType::class, ['class' => Emplazamiento::class, 'choice_label' => 'nombre'])
            ->add('insertar', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Incidencia::class,
        ]);
    }
}