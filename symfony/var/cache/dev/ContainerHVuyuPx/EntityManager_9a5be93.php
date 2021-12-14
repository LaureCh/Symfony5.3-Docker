<?php

namespace ContainerHVuyuPx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfb678 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfbd8a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2cf8d = [
        
    ];

    public function getConnection()
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'getConnection', array(), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'getMetadataFactory', array(), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'getExpressionBuilder', array(), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'beginTransaction', array(), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'getCache', array(), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'transactional', array('func' => $func), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'wrapInTransaction', array('func' => $func), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'commit', array(), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->commit();
    }

    public function rollback()
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'rollback', array(), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'getClassMetadata', array('className' => $className), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'createQuery', array('dql' => $dql), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'createNamedQuery', array('name' => $name), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'createQueryBuilder', array(), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'flush', array('entity' => $entity), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'clear', array('entityName' => $entityName), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->clear($entityName);
    }

    public function close()
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'close', array(), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->close();
    }

    public function persist($entity)
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'persist', array('entity' => $entity), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'remove', array('entity' => $entity), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'refresh', array('entity' => $entity), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'detach', array('entity' => $entity), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'merge', array('entity' => $entity), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'contains', array('entity' => $entity), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'getEventManager', array(), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'getConfiguration', array(), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'isOpen', array(), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'getUnitOfWork', array(), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'getProxyFactory', array(), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'initializeObject', array('obj' => $obj), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'getFilters', array(), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'isFiltersStateClean', array(), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'hasFilters', array(), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return $this->valueHolderfb678->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerfbd8a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderfb678) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfb678 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfb678->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, '__get', ['name' => $name], $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        if (isset(self::$publicProperties2cf8d[$name])) {
            return $this->valueHolderfb678->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb678;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfb678;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb678;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfb678;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, '__isset', array('name' => $name), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb678;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfb678;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, '__unset', array('name' => $name), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb678;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfb678;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, '__clone', array(), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        $this->valueHolderfb678 = clone $this->valueHolderfb678;
    }

    public function __sleep()
    {
        $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, '__sleep', array(), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;

        return array('valueHolderfb678');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfbd8a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfbd8a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfbd8a && ($this->initializerfbd8a->__invoke($valueHolderfb678, $this, 'initializeProxy', array(), $this->initializerfbd8a) || 1) && $this->valueHolderfb678 = $valueHolderfb678;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfb678;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfb678;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
