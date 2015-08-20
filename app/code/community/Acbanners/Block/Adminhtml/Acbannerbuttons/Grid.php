<?php
 
class AffinityCloud_Acbanners_Block_Adminhtml_Acbannerbuttons_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('acbannerbuttonsGrid');
        // This is the primary key of the database
        $this->setDefaultSort('id');
        $this->setDefaultDir('ASC');
        $this->setSaveParametersInSession(true);
        $this->setUseAjax(true);
    }
 
    protected function _prepareCollection()
    {
        $collection = Mage::getModel('acbanners/acbannerbuttons')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }
 
    protected function _prepareColumns()
    {
        $this->addColumn('id', array(
            'header'    => Mage::helper('acbanners')->__('Banner ID'),
            'align'     =>'right',
            'width'     => '50px',
            'index'     => 'id',
        ));
 
        $this->addColumn('image', array(
            'header'    => Mage::helper('acbanners')->__('Banner'),
            'align'     =>'left',
            'filter'    => false,
            'index'     => 'image',
            'renderer'  => 'acbanners/adminhtml_acbannerbuttons_grid_renderer_image',
            'width'     => '200px'
        ));
 
        $this->addColumn('title', array(
            'header'    => Mage::helper('acbanners')->__('Title'),
            'align'     =>'left',
            'index'     => 'title',
        ));
 
        $this->addColumn('url', array(
            'header'    => Mage::helper('acbanners')->__('Banner URL'),
            'align'     =>'left',
            'index'     => 'url',
        ));
 
        $this->addColumn('url', array(
            'header'    => Mage::helper('acbanners')->__('Colour'),
            'align'     =>'left',
            'index'     => 'colour',
        ));
 
        /*
        $this->addColumn('content', array(
            'header'    => Mage::helper('banners')->__('Item Content'),
            'width'     => '150px',
            'index'     => 'content',
        ));
        */
 
        $this->addColumn('created_time', array(
            'header'    => Mage::helper('acbanners')->__('Creation Time'),
            'align'     => 'left',
            'width'     => '120px',
            'type'      => 'date',
            'default'   => '--',
            'index'     => 'created_time',
        ));
 
        $this->addColumn('update_time', array(
            'header'    => Mage::helper('acbanners')->__('Update Time'),
            'align'     => 'left',
            'width'     => '120px',
            'type'      => 'date',
            'default'   => '--',
            'index'     => 'update_time',
        ));   
 
 
        $this->addColumn('status', array(
            'header'    => Mage::helper('acbanners')->__('Status'),
            'align'     => 'left',
            'width'     => '80px',
            'index'     => 'status',
            'type'      => 'options',
            'options'   => array(
                1 => 'Active',
                0 => 'Inactive',
            ),
        ));
 
        return parent::_prepareColumns();
    }
 
    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }
 
    public function getGridUrl()
    {
      return $this->getUrl('*/*/grid', array('_current'=>true));
    }
 
 
}