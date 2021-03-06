<?php

namespace PrivateMessaging\Factory;

use PrivateMessaging\Mapper\MessageReceiverMapper;
use PrivateMessaging\Stdlib\Hydrator\MessageReceiverHydrator;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class MessageReceiverMapperFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $options = $serviceLocator->get('PrivateMessaging\ModuleOptions');
        $mapper = new MessageReceiverMapper();
        $mapper->setDbAdapter($serviceLocator->get('PrivateMessaging\DbAdapter'));
        $entityClass = $options->getMessageReceiverEntityClass();
        $mapper->setEntityPrototype(new $entityClass);
        $mapper->setHydrator(new MessageReceiverHydrator);
        $mapper->setSortDirection($options->getSortDirection());

        return $mapper;
    }
}
