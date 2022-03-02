<?php

namespace ContainerVxEtLyl;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        if ($this->valueHolder6ad97 === $returnValue = $this->valueHolder6ad97->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
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

        $instance->initializeraf2ca = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder6ad97) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder6ad97 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializeraf2ca && ($this->initializeraf2ca->__invoke($valueHolder6ad97, $this, '__get', ['name' => $name], $this->initializeraf2ca) || 1) && $this->valueHolder6ad97 = $valueHolder6ad97;

        if (isset(self::$publicPropertiesf81aa[$name])) {
            return $this->valueHolder6ad97->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
