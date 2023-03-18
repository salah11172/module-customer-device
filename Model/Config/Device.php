<?php

namespace Teeela\CustomerDevice\Model\Config;

use Magento\Framework\Option\ArrayInterface;


class Device implements ArrayInterface
{

    /**
     * @var string[]
     */
    protected $devices = [
        'Desktop',
        'Mobile',
    ];


    /**
     * @return array
     */
    public function toOptionArray(): array
    {
        foreach ($this->devices as $code => $label) {
            $options[] = [
                'value' => $code,
                'label' => $label,
            ];
        }

        return $options;

    }//end toOptionArray()


}//end class
