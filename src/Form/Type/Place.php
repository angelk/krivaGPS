<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Range;

class Place extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $coordinatesConstraints = [
            new Range([
                'min' => -180,
                'max' => 180,
            ])
        ];

        $builder->add(
            'lat',
            NumberType::class,
            [
                'scale' => 8,
                'label' => 'Latitude',
                'constraints' => $coordinatesConstraints,
            ]
        );

        $builder->add(
            'lng',
            NumberType::class,
            [
                'scale' => 8,
                'label' => 'Longitude',
                'constraints' => $coordinatesConstraints,
            ]
        );
    }
}
