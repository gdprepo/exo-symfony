<?php

namespace Container8qD5tYg;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        if ($this->valueHolderdde5f === $returnValue = $this->valueHolderdde5f->paginate($target, $page, $limit, $options)) {
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

        $instance->initializerc3a32 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderdde5f) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderdde5f = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerc3a32 && ($this->initializerc3a32->__invoke($valueHolderdde5f, $this, '__get', ['name' => $name], $this->initializerc3a32) || 1) && $this->valueHolderdde5f = $valueHolderdde5f;

        if (isset(self::$publicPropertiesb1476[$name])) {
            return $this->valueHolderdde5f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
