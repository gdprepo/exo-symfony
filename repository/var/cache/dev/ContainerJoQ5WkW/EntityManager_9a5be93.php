<?php

namespace ContainerJoQ5WkW;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7c996 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer12039 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties650b4 = [
        
    ];

    public function getConnection()
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'getConnection', array(), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'getMetadataFactory', array(), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'getExpressionBuilder', array(), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'beginTransaction', array(), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'getCache', array(), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->getCache();
    }

    public function transactional($func)
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'transactional', array('func' => $func), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'wrapInTransaction', array('func' => $func), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'commit', array(), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->commit();
    }

    public function rollback()
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'rollback', array(), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'getClassMetadata', array('className' => $className), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'createQuery', array('dql' => $dql), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'createNamedQuery', array('name' => $name), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'createQueryBuilder', array(), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'flush', array('entity' => $entity), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'clear', array('entityName' => $entityName), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->clear($entityName);
    }

    public function close()
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'close', array(), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->close();
    }

    public function persist($entity)
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'persist', array('entity' => $entity), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'remove', array('entity' => $entity), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'refresh', array('entity' => $entity), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'detach', array('entity' => $entity), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'merge', array('entity' => $entity), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'getRepository', array('entityName' => $entityName), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'contains', array('entity' => $entity), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'getEventManager', array(), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'getConfiguration', array(), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'isOpen', array(), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'getUnitOfWork', array(), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'getProxyFactory', array(), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'initializeObject', array('obj' => $obj), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'getFilters', array(), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'isFiltersStateClean', array(), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'hasFilters', array(), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return $this->valueHolder7c996->hasFilters();
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

        $instance->initializer12039 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7c996) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7c996 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7c996->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, '__get', ['name' => $name], $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        if (isset(self::$publicProperties650b4[$name])) {
            return $this->valueHolder7c996->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7c996;

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

        $targetObject = $this->valueHolder7c996;
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
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7c996;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7c996;
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
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, '__isset', array('name' => $name), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7c996;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7c996;
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
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, '__unset', array('name' => $name), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7c996;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7c996;
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
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, '__clone', array(), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        $this->valueHolder7c996 = clone $this->valueHolder7c996;
    }

    public function __sleep()
    {
        $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, '__sleep', array(), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;

        return array('valueHolder7c996');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer12039 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer12039;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer12039 && ($this->initializer12039->__invoke($valueHolder7c996, $this, 'initializeProxy', array(), $this->initializer12039) || 1) && $this->valueHolder7c996 = $valueHolder7c996;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7c996;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7c996;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
