<?php

class AffinityCloud_Acbanners_Block_Sidebanners extends Mage_Core_Block_Template {

    public function getSideBanners()
    {
        $bannersCollection = Mage::getModel('acbanners/acsidebanners')->getCollection()->setOrder('sort_order', 'ASC');
        $banners = array();

        foreach ($bannersCollection as $key => $banner)
        {
            if ($banner->status === '1')
            {
                $banners[$key]['title'] = $banner->title;
                $banners[$key]['imageUrl'] = Mage::getBaseUrl('media').$banner->image;
                $banners[$key]['description'] = $banner->description;
                $banners[$key]['url'] = $banner->url;
            }
        }

        return $banners;
    }
}