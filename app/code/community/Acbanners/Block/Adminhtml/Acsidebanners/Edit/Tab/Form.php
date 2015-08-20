<?php
 
class AffinityCloud_Acbanners_Block_Adminhtml_Acsidebanners_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
    protected function _prepareForm()
    {
        $form = new Varien_Data_Form();
        $this->setForm($form);
        $fieldset = $form->addFieldset('acsidebanners_form', array('legend'=>Mage::helper('acbanners')->__('Banner Information')));
       
        $fieldset->addField('title', 'text', array(
            'label'     => Mage::helper('acbanners')->__('Title'),
            'class'     => 'required-entry',
            'required'  => true,
            'name'      => 'title',
        ));
       
        $fieldset->addField('image', 'image', array(
            'label'     => Mage::helper('acbanners')->__('Image'),
            'class'     => 'required-entry',
            'required'  => true,
            'name'      => 'image',
        ));
       
        $fieldset->addField('description', 'text', array(
            'label'     => Mage::helper('acbanners')->__('Description'),
            'name'      => 'description',
        ));
       
        $fieldset->addField('url', 'text', array(
            'label'     => Mage::helper('acbanners')->__('Banner URL'),
            'name'      => 'url',
        ));
       
        $fieldset->addField('sort_order', 'text', array(
            'label'     => Mage::helper('acbanners')->__('Sort Order'),
            'class'     => 'required-entry',
            'required'  => true,
            'name'      => 'sort_order',
        ));

        $options = array(
            0   => Mage::helper('acbanners')->__('Inactive'),
            1   => Mage::helper('acbanners')->__('Active'),
        );
 
        $fieldset->addField('status', 'select', array(
            'label'     => Mage::helper('acbanners')->__('Status'),
            'name'      => 'status',
            'values'    => $options,
            'value'     => 1,
        ));
       
        // $fieldset->addField('content', 'editor', array(
        //     'name'      => 'content',
        //     'label'     => Mage::helper('acbanners')->__('Content'),
        //     'title'     => Mage::helper('acbanners')->__('Content'),
        //     'style'     => 'width:98%; height:400px;',
        //     'wysiwyg'   => false,
        //     'required'  => true,
        // ));
       
        if ( Mage::getSingleton('adminhtml/session')->getACBannersData() )
        {
            $form->setValues(Mage::getSingleton('adminhtml/session')->getACBannersData());
            Mage::getSingleton('adminhtml/session')->setACBannersData(null);
        } elseif ( Mage::registry('acbanners_data') ) {
            $form->setValues(Mage::registry('acbanners_data')->getData());
        }
        return parent::_prepareForm();
    }
}