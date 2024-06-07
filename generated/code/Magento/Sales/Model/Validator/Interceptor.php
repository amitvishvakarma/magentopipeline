<?php
namespace Magento\Sales\Model\Validator;

/**
 * Interceptor class for @see \Magento\Sales\Model\Validator
 */
class Interceptor extends \Magento\Sales\Model\Validator implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, \Magento\Sales\Model\ValidatorResultInterfaceFactory $validatorResult)
    {
        $this->___init();
        parent::__construct($objectManager, $validatorResult);
    }

    /**
     * {@inheritdoc}
     */
    public function validate($entity, array $validators, $context = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validate');
        return $pluginInfo ? $this->___callPlugins('validate', func_get_args(), $pluginInfo) : parent::validate($entity, $validators, $context);
    }
}
