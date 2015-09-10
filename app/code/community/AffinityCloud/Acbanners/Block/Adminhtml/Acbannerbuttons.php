<?php
 
class AffinityCloud_Acbanners_Block_Adminhtml_Acbannerbuttons extends Mage_Adminhtml_Block_Widget_Grid_Container {
    public function __construct()
    {
        $this->_controller = 'adminhtml_acbannerbuttons';
        $this->_blockGroup = 'acbanners';
        $this->_headerText = Mage::helper('acbanners')->__('Manage Banner Buttons');
        $this->_addButtonLabel = Mage::helper('acbanners')->__('Add Banner Button');

        parent::__construct();
    }
}