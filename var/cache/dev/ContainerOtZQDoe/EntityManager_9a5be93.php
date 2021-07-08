<?php

namespace ContainerOtZQDoe;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder59076 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer22299 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7ee0a = [
        
    ];

    public function getConnection()
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'getConnection', array(), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'getMetadataFactory', array(), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'getExpressionBuilder', array(), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'beginTransaction', array(), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'getCache', array(), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->getCache();
    }

    public function transactional($func)
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'transactional', array('func' => $func), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->transactional($func);
    }

    public function commit()
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'commit', array(), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->commit();
    }

    public function rollback()
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'rollback', array(), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'getClassMetadata', array('className' => $className), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'createQuery', array('dql' => $dql), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'createNamedQuery', array('name' => $name), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'createQueryBuilder', array(), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'flush', array('entity' => $entity), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'clear', array('entityName' => $entityName), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->clear($entityName);
    }

    public function close()
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'close', array(), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->close();
    }

    public function persist($entity)
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'persist', array('entity' => $entity), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'remove', array('entity' => $entity), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'refresh', array('entity' => $entity), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'detach', array('entity' => $entity), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'merge', array('entity' => $entity), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'getRepository', array('entityName' => $entityName), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'contains', array('entity' => $entity), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'getEventManager', array(), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'getConfiguration', array(), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'isOpen', array(), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'getUnitOfWork', array(), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'getProxyFactory', array(), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'initializeObject', array('obj' => $obj), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'getFilters', array(), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'isFiltersStateClean', array(), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'hasFilters', array(), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return $this->valueHolder59076->hasFilters();
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

        $instance->initializer22299 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder59076) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder59076 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder59076->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, '__get', ['name' => $name], $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        if (isset(self::$publicProperties7ee0a[$name])) {
            return $this->valueHolder59076->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59076;

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

        $targetObject = $this->valueHolder59076;
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
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59076;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder59076;
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
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, '__isset', array('name' => $name), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59076;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder59076;
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
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, '__unset', array('name' => $name), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59076;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder59076;
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
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, '__clone', array(), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        $this->valueHolder59076 = clone $this->valueHolder59076;
    }

    public function __sleep()
    {
        $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, '__sleep', array(), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;

        return array('valueHolder59076');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer22299 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer22299;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer22299 && ($this->initializer22299->__invoke($valueHolder59076, $this, 'initializeProxy', array(), $this->initializer22299) || 1) && $this->valueHolder59076 = $valueHolder59076;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder59076;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder59076;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
