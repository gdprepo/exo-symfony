<?php

namespace ContainerLxn6o3J;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        if ($this->valueHoldera6f08 === $returnValue = $this->valueHoldera6f08->paginate($target, $page, $limit, $options)) {
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

        $instance->initializerb092d = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHoldera6f08) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHoldera6f08 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerb092d && ($this->initializerb092d->__invoke($valueHoldera6f08, $this, '__get', ['name' => $name], $this->initializerb092d) || 1) && $this->valueHoldera6f08 = $valueHoldera6f08;

        if (isset(self::$publicPropertiesbc063[$name])) {
            return $this->valueHoldera6f08->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
