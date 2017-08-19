<?php

/*
 * This file is part of the EmharSonataTimePickerBundle bundle.
 *
 * (c) Emmanuel Harleaux
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Emhar\SonataTimePickerBundle\Form\Type;

use Sonata\CoreBundle\Form\Type\BasePickerType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * {@inheritDoc}
 */
class TimePickerType extends BasePickerType
{

    /**
     * {@inheritdoc}
     * @throws \Symfony\Component\OptionsResolver\Exception\AccessException
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array_merge($this->getCommonDefaults(), array(
            'dp_use_minutes' => true,
            'dp_use_seconds' => false,
            'dp_minute_stepping' => 1,
            'format' => 'T',
            'dp_icons' => array('fa fa-clock-o'),
            'dp_pickDate' => false
        )));
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return TimeType::class;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->getBlockPrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'sonata_type_time_picker';
    }
}