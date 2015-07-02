<?php
/**
 * TextPictureType.php
 *
 */

namespace enhavo\ContentBundle\Form\Type;

use enhavo\ContentBundle\Item\ItemFormType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use enhavo\ContentBundle\Item\Type\Text;

class TextPictureType extends ItemFormType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', 'text', array(
            'label' => 'form.label.title'
        ));

        $builder->add('text', 'wysiwyg', array(
            'label' => 'form.label.text'
        ));

        $builder->add('files', 'enhavo_files', array(
            'label' => 'form.label.picture'
        ));

        $builder->add('textLeft', 'choice', array(
            'label' => 'form.label.position',
            'choices'   => array(
                '1' => 'label.text_left-picture_right',
                '0' => 'label.picture_left-text_right'
            ),
            'expanded' => true,
            'multiple' => false
        ));

        $builder->add('frame', 'choice', array(
            'label' => 'form.label.frame',
            'choices'   => array(
                '1' => 'label.yes',
                '0' => 'label.no'
            ),
            'expanded' => true,
            'multiple' => false
        ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'enhavo\ContentBundle\Entity\TextPicture'
        ));
    }

    public function getName()
    {
        return 'enhavo_content_item_text_picture';
    }
} 