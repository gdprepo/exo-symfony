<?php

namespace ContainerFdPKvca;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolderabd58 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4ad3e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties435be = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer4ad3e && ($this->initializer4ad3e->__invoke($valueHolderabd58, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer4ad3e) || 1) && $this->valueHolderabd58 = $valueHolderabd58;

        if ($this->valueHolderabd58 === $returnValue = $this->valueHolderabd58->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer4ad3e = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderabd58) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderabd58 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer4ad3e && ($this->initializer4ad3e->__invoke($valueHolderabd58, $this, '__get', ['name' => $name], $this->initializer4ad3e) || 1) && $this->valueHolderabd58 = $valueHolderabd58;

        if (isset(self::$publicProperties435be[$name])) {
            return $this->valueHolderabd58->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderabd58;

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

        $targetObject = $this->valueHolderabd58;
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
        $this->initializer4ad3e && ($this->initializer4ad3e->__invoke($valueHolderabd58, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4ad3e) || 1) && $this->valueHolderabd58 = $valueHolderabd58;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderabd58;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderabd58;
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
        $this->initializer4ad3e && ($this->initializer4ad3e->__invoke($valueHolderabd58, $this, '__isset', array('name' => $name), $this->initializer4ad3e) || 1) && $this->valueHolderabd58 = $valueHolderabd58;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderabd58;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderabd58;
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
        $this->initializer4ad3e && ($this->initializer4ad3e->__invoke($valueHolderabd58, $this, '__unset', array('name' => $name), $this->initializer4ad3e) || 1) && $this->valueHolderabd58 = $valueHolderabd58;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderabd58;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderabd58;
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
        $this->initializer4ad3e && ($this->initializer4ad3e->__invoke($valueHolderabd58, $this, '__clone', array(), $this->initializer4ad3e) || 1) && $this->valueHolderabd58 = $valueHolderabd58;

        $this->valueHolderabd58 = clone $this->valueHolderabd58;
    }

    public function __sleep()
    {
        $this->initializer4ad3e && ($this->initializer4ad3e->__invoke($valueHolderabd58, $this, '__sleep', array(), $this->initializer4ad3e) || 1) && $this->valueHolderabd58 = $valueHolderabd58;

        return array('valueHolderabd58');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4ad3e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4ad3e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4ad3e && ($this->initializer4ad3e->__invoke($valueHolderabd58, $this, 'initializeProxy', array(), $this->initializer4ad3e) || 1) && $this->valueHolderabd58 = $valueHolderabd58;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderabd58;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderabd58;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
