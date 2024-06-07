<?php
namespace Magento\AsyncOrder\Model\Order\Email\Sender\RejectedOrderSender;

/**
 * Interceptor class for @see \Magento\AsyncOrder\Model\Order\Email\Sender\RejectedOrderSender
 */
class Interceptor extends \Magento\AsyncOrder\Model\Order\Email\Sender\RejectedOrderSender implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Sales\Model\Order\Email\Container\Template $templateContainer, \Magento\Sales\Model\Order\Email\Container\OrderCommentIdentity $identityContainer, \Magento\Sales\Model\Order\Email\SenderBuilderFactory $senderBuilderFactory, \Psr\Log\LoggerInterface $logger, \Magento\Sales\Model\Order\Address\Renderer $addressRenderer, \Magento\Framework\Event\ManagerInterface $eventManager)
    {
        $this->___init();
        parent::__construct($templateContainer, $identityContainer, $senderBuilderFactory, $logger, $addressRenderer, $eventManager);
    }

    /**
     * {@inheritdoc}
     */
    public function send(\Magento\Sales\Model\Order $order, $notify = true, $comment = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'send');
        return $pluginInfo ? $this->___callPlugins('send', func_get_args(), $pluginInfo) : parent::send($order, $notify, $comment);
    }
}
