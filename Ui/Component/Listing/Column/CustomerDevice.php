<?php

namespace Teeela\CustomerDevice\Ui\Component\Listing\Column;

use Magento\Framework\HTTP\Header;
use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Ui\Component\Listing\Columns\Column;
use Zend_Http_UserAgent_Mobile;

class CustomerDevice extends Column
{

    /**
     * @var Header
     */
    protected $_httpHeader;


    public function __construct(
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        array $components=[],
        array $data=[],
        Header $httpHeader
    ) {
        $this->_httpHeader = $httpHeader;
        parent::__construct($context, $uiComponentFactory, $components, $data);

    }//end __construct()


    /**
     * @param array $dataSource
     * @return array
     */
    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as & $item) {
                if ($this->isMobileDevice()) {
                    $item[$this->getData('name')] = 'Mobile';
                } else {
                    $item[$this->getData('name')] = 'Desktop';
                }
            }
        }

        return $dataSource;

    }//end prepareDataSource()


    /**
     * @return boolean
     */
    public function isMobileDevice(): bool
    {
        $reqUserAgent = $this->_httpHeader->getHttpUserAgent();

        $isRequestFromMobile = Zend_Http_UserAgent_Mobile::match($reqUserAgent, $_SERVER);

        if ($isRequestFromMobile) {
            return true;
        }

        return false;

    }//end isMobileDevice()


}//end class
