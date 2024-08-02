<?php

namespace Pyz\Yves\GreenCreditsPage\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class GreenCreditsFormType extends AbstractType
{
    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     * @param array $options
     *
     * @return void
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('big_packet', CollectionType::class, [
            'label' => 'Big Packet',
            'constraints' => [
                new NotBlank(),
                // new Col(),
            ],
        ]);
        $builder->add('big_packet_items_count', NumberType::class, [
            'label' => 'Items Count',
            'constraints' => [
                new NotBlank(),
                // new Col(),
            ],
        ]);
        $builder->add('medium_packet', CollectionType::class, [
            'label' => 'Medium Packet',
            'constraints' => [
                new NotBlank(),
                // new Col(),
            ],
        ]);
        $builder->add('medium_packet_items_count', NumberType::class, [
            'label' => 'Items Count',
            'constraints' => [
                new NotBlank(),
                // new Col(),
            ],
        ]);
        $builder->add('small_packet', CollectionType::class, [
            'label' => 'Small Packet'
        ]);
        $builder->add('small_packet_items_count', NumberType::class, [
            'label' => 'Items Count',
            'constraints' => [
                new NotBlank(),
                // new Col(),
            ],
        ]);
    }
}
