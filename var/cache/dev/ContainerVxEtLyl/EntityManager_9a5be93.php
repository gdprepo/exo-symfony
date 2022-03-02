<?php

namespace ContainerVxEtLyl;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6ad97 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeraf2ca = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf81aa = [
        
    ];

    public function getConnection()
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'getConnection', array(), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'getMetadataFactory', array(), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'getExpressionBuilder', array(), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'beginTransaction', array(), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'getCache', array(), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->getCache();
    }

    public function transactional($func)
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'transactional', array('func' => $func), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'wrapInTransaction', array('func' => $func), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'commit', array(), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->commit();
    }

    public function rollback()
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'rollback', array(), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'getClassMetadata', array('className' => $className), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'createQuery', array('dql' => $dql), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'createNamedQuery', array('name' => $name), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'createQueryBuilder', array(), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'flush', array('entity' => $entity), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'clear', array('entityName' => $entityName), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->clear($entityName);
    }

    public function close()
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'close', array(), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->close();
    }

    public function persist($entity)
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'persist', array('entity' => $entity), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'remove', array('entity' => $entity), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'refresh', array('entity' => $entity), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'detach', array('entity' => $entity), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'merge', array('entity' => $entity), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'getRepository', array('entityName' => $entityName), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'contains', array('entity' => $entity), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'getEventManager', array(), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'getConfiguration', array(), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'isOpen', array(), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'getUnitOfWork', array(), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'getProxyFactory', array(), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'initializeObject', array('obj' => $obj), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'getFilters', array(), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'isFiltersStateClean', array(), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'hasFilters', array(), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return $this->valueHolder6ad97->hasFilters();
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

        $instance->initializeraf2ca = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6ad97) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6ad97 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6ad97->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, '__get', ['name' => $name], $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        if (isset(self::$publicPropertiesf81aa[$name])) {
            return $this->valueHolder6ad97->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6ad97;

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

        $targetObject = $this->valueHolder6ad97;
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
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6ad97;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6ad97;
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
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, '__isset', array('name' => $name), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6ad97;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6ad97;
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
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, '__unset', array('name' => $name), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6ad97;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6ad97;
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
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, '__clone', array(), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        $this->valueHolder6ad97 = clone $this->valueHolder6ad97;
    }

    public function __sleep()
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, '__sleep', array(), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        return array('valueHolder6ad97');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeraf2ca = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeraf2ca;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'initializeProxy', array(), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6ad97;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6ad97;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
