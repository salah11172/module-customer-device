<?php

namespace Teeela\CustomerDevice\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;


class Device implements ArrayInterface
{

    public function toOptionArray()
    {
        $result = [];
        foreach ($this->getOptions() as $value => $label) {
            $result[] = [
                'value' => $value,
                'label' => $label,
            ];
        }

        return $result;
    }

    public function getOptions()
    {
        return [
            'desktop' => __('Desktop'),
            'mobile' => __('Mobile')
            ];
    }


}//end class
