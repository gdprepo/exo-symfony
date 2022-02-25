<?php

namespace Container8qD5tYg;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdde5f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc3a32 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb1476 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'getConnection', array(), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'getMetadataFactory', array(), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'getExpressionBuilder', array(), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'beginTransaction', array(), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'getCache', array(), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'transactional', array('func' => $func), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'commit', array(), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->commit();
    }

    public function rollback()
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'rollback', array(), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'getClassMetadata', array('className' => $className), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'createQuery', array('dql' => $dql), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'createNamedQuery', array('name' => $name), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'createQueryBuilder', array(), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'flush', array('entity' => $entity), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'clear', array('entityName' => $entityName), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->clear($entityName);
    }

    public function close()
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'close', array(), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->close();
    }

    public function persist($entity)
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'persist', array('entity' => $entity), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'remove', array('entity' => $entity), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'refresh', array('entity' => $entity), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'detach', array('entity' => $entity), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'merge', array('entity' => $entity), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'contains', array('entity' => $entity), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'getEventManager', array(), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'getConfiguration', array(), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'isOpen', array(), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'getUnitOfWork', array(), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'getProxyFactory', array(), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'initializeObject', array('obj' => $obj), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'getFilters', array(), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'isFiltersStateClean', array(), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'hasFilters', array(), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return $this->valueHolderdde5f->hasFilters();
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

        $instance->initializerc3a32 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderdde5f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdde5f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderdde5f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, '__get', ['name' => $name], $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        if (isset(self::$publicPropertiesb1476[$name])) {
            return $this->valueHolderdde5f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdde5f;

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

        $targetObject = $this->valueHolderdde5f;
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
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdde5f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdde5f;
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
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, '__isset', array('name' => $name), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdde5f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderdde5f;
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
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, '__unset', array('name' => $name), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdde5f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderdde5f;
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
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, '__clone', array(), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        $this->valueHolderdde5f = clone $this->valueHolderdde5f;
    }

    public function __sleep()
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, '__sleep', array(), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        return array('valueHolderdde5f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc3a32 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc3a32;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'initializeProxy', array(), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdde5f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdde5f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
