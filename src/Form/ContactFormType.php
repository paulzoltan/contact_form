<?php

namespace App\Form;

use App\Entity\Inquiry;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;

class ContactFormType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add(
        'name',
        TextType::class,
        [
          'label' => 'Neved',
          'constraints' => [
            new NotBlank(message: 'Hiba! Kérjük töltsd ki az összes mezőt!'),
          ],
          'attr' => [
            'oninvalid' => 'validate(this)'
          ],
        ]
      )
      ->add(
        'email',
        EmailType::class,
        [
          'label' => 'E-mail címed',
          'constraints' => [
            new NotBlank(message: 'Hiba! Kérjük töltsd ki az összes mezőt!'),
            new Email(message: 'Hiba! Az email cím nem érvényes'),
          ],
          'attr' => [
            'oninvalid' => 'validate(this)'
          ],
        ]
      )
      ->add(
        'message',
        TextareaType::class,
        [
          'label' => 'Üzenet szövege',
          'constraints' => [
            new NotBlank(message: 'Hiba! Kérjük töltsd ki az összes mezőt!'),
          ],
          'attr' => [
            'oninvalid' => 'validate(this)'
          ],
        ]
      );
  }
  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults([
      'data_class' => Inquiry::class
    ]);
  }
}
