<?php
namespace Magento\AsyncOrder\Model\CartRepository;

/**
 * Interceptor class for @see \Magento\AsyncOrder\Model\CartRepository
 */
class Interceptor extends \Magento\AsyncOrder\Model\CartRepository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Model\QuoteRepository $quoteRepository)
    {
        $this->___init();
        parent::__construct($quoteRepository);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Quote\Api\Data\CartInterface $quote)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($quote);
    }
}
