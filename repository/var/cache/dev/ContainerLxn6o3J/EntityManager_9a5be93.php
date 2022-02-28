<?php

namespace ContainerLxn6o3J;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera6f08 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb092d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbc063 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'getConnection', array(), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'getMetadataFactory', array(), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'getExpressionBuilder', array(), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'beginTransaction', array(), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'getCache', array(), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'transactional', array('func' => $func), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'commit', array(), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->commit();
    }

    public function rollback()
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'rollback', array(), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'getClassMetadata', array('className' => $className), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'createQuery', array('dql' => $dql), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'createNamedQuery', array('name' => $name), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'createQueryBuilder', array(), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'flush', array('entity' => $entity), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'clear', array('entityName' => $entityName), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->clear($entityName);
    }

    public function close()
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'close', array(), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->close();
    }

    public function persist($entity)
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'persist', array('entity' => $entity), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'remove', array('entity' => $entity), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'refresh', array('entity' => $entity), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'detach', array('entity' => $entity), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'merge', array('entity' => $entity), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'contains', array('entity' => $entity), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'getEventManager', array(), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'getConfiguration', array(), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'isOpen', array(), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'getUnitOfWork', array(), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'getProxyFactory', array(), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'initializeObject', array('obj' => $obj), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'getFilters', array(), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'isFiltersStateClean', array(), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'hasFilters', array(), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return $this->valueHoldera6f08->hasFilters();
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

        $instance->initializerb092d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera6f08) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera6f08 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera6f08->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, '__get', ['name' => $name], $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        if (isset(self::$publicPropertiesbc063[$name])) {
            return $this->valueHoldera6f08->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera6f08;

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

        $targetObject = $this->valueHoldera6f08;
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
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera6f08;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera6f08;
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
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, '__isset', array('name' => $name), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera6f08;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera6f08;
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
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, '__unset', array('name' => $name), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera6f08;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera6f08;
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
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, '__clone', array(), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        $this->valueHoldera6f08 = clone $this->valueHoldera6f08;
    }

    public function __sleep()
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, '__sleep', array(), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        return array('valueHoldera6f08');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb092d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb092d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'initializeProxy', array(), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera6f08;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera6f08;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
