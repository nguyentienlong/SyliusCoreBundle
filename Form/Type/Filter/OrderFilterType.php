<?php

/*
* This file is part of the Sylius package.
*
* (c) Paweł Jędrzejewski
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Sylius\Bundle\CoreBundle\Form\Type\Filter;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class OrderFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('number', 'text', array(
                'required' => false,
                'label'    => 'sylius.form.order_filter.number'
            ))
            ->add('totalFrom', 'money', array(
                'required' => false,
                'label'    => 'sylius.form.order_filter.total_from'
            ))
            ->add('totalTo', 'money', array(
                'required' => false,
                'label'    => 'sylius.form.order_filter.total_to'
            ))
        ;
    }

    public function getName()
    {
        return 'sylius_order_filter';
    }
}
