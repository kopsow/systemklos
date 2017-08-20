<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;
use Application\Model\Sprzedawcy;
use Application\Model\SprzedawcyTable;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
    
    public function getServiceConfig()
    {
       
        return array(
            'factories' => array(
                                
                'Sprzedawcy\Model\SprzedawcyTable'  =>  function($sm)  {
                    $tableGateway = $sm->get('SprzedawcyTableGateway');
                    $table = new SprzedawcyTable($tableGateway);
                    return $table;
                },
                'SprzedawcyTableGateway' =>function($sm) {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Sprzedawcy());
                    return new TableGateway('sprzedawcy', $dbAdapter, null, $resultSetPrototype);
                },  
                
                'mail.transport' => function ($sm) {
                    $config = $sm->get('Config');
                    $transport = new \Zend\Mail\Transport\Smtp();                
                    $transport->setOptions(new \Zend\Mail\Transport\SmtpOptions($config['mail']['transport']));
                    return $transport;
                },
                
            ),
        );
    }
}
