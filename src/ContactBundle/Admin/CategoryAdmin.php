<?php
/* For licensing terms, see /license.txt */

namespace Chamilo\ContactBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

/**
 * Class UserAdmin
 * @package Chamilo\ContactBundle\Admin
 */
class CategoryAdmin extends AbstractAdmin
{
    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('headline', null, array('identifier' => true))
            //->add('name', null, array('identifier' => true))
            ->add('translations', null, ['identifier' => true])
            ->add('email', null, ['identifier' => true])
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            //->add('name')
            ->add('translations', 'a2lix_translations', [])
            ->add('email')
        ;
    }

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('translations', null, ['identifier' => true])
            ->add('email', null, ['identifier' => true])
        ;
    }
}
