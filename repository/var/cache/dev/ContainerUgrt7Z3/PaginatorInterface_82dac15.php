<?php

namespace ContainerUgrt7Z3;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4a043 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera7087 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties65011 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializera7087 && ($this->initializera7087->__invoke($valueHolder4a043, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializera7087) || 1) && $this->valueHolder4a043 = $valueHolder4a043;

        if ($this->valueHolder4a043 === $returnValue = $this->valueHolder4a043->paginate($target, $page, $limit, $options)) {
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

        $instance->initializera7087 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder4a043) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder4a043 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializera7087 && ($this->initializera7087->__invoke($valueHolder4a043, $this, '__get', ['name' => $name], $this->initializera7087) || 1) && $this->valueHolder4a043 = $valueHolder4a043;

        if (isset(self::$publicProperties65011[$name])) {
            return $this->valueHolder4a043->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a043;

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

        $targetObject = $this->valueHolder4a043;
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
        $this->initializera7087 && ($this->initializera7087->__invoke($valueHolder4a043, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera7087) || 1) && $this->valueHolder4a043 = $valueHolder4a043;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a043;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4a043;
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
        $this->initializera7087 && ($this->initializera7087->__invoke($valueHolder4a043, $this, '__isset', array('name' => $name), $this->initializera7087) || 1) && $this->valueHolder4a043 = $valueHolder4a043;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a043;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4a043;
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
        $this->initializera7087 && ($this->initializera7087->__invoke($valueHolder4a043, $this, '__unset', array('name' => $name), $this->initializera7087) || 1) && $this->valueHolder4a043 = $valueHolder4a043;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a043;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4a043;
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
        $this->initializera7087 && ($this->initializera7087->__invoke($valueHolder4a043, $this, '__clone', array(), $this->initializera7087) || 1) && $this->valueHolder4a043 = $valueHolder4a043;

        $this->valueHolder4a043 = clone $this->valueHolder4a043;
    }

    public function __sleep()
    {
        $this->initializera7087 && ($this->initializera7087->__invoke($valueHolder4a043, $this, '__sleep', array(), $this->initializera7087) || 1) && $this->valueHolder4a043 = $valueHolder4a043;

        return array('valueHolder4a043');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera7087 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera7087;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera7087 && ($this->initializera7087->__invoke($valueHolder4a043, $this, 'initializeProxy', array(), $this->initializera7087) || 1) && $this->valueHolder4a043 = $valueHolder4a043;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4a043;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4a043;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
