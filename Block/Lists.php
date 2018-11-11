<?php
/**
 * GiftList
 *
 * Gift List Extension for Magento 2.
 *
 * @package UnknownDevs\GiftList
 * @author Edilson Cichon <edilsoncichon@hotmail.com>
 * @author Paulo Araújo <pauloaraujos@gmail.com>
 * @copyright Copyright (c) 2018 UnknownDevs (https://unknowndevs.com.br/)
 * @license https://opensource.org/licenses/OSL-3.0.php Open Software License 3.0
 */
namespace UnknownDevs\GiftList\Block;

use Magento\Framework\View\Element\Template;

class Lists extends Template
{
    /**
     * @var \Magento\Framework\App\Http\Context
     */
    protected $httpContext;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Framework\App\Http\Context $httpContext
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\App\Http\Context $httpContext,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->httpContext = $httpContext;
    }
}