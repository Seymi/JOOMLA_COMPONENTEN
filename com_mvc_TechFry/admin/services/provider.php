use Joomla\CMS\Dispatcher\ComponentDispatcherFactoryInterface;
use Joomla\CMS\Extension\ComponentInterface;
use Joomla\CMS\Extension\MVCComponent;
use Joomla\CMS\Extension\Service\Provider\ComponentDispatcherFactory;
use Joomla\CMS\Extension\Service\Provider\MVCFactory;
use Joomla\CMS\MVC\Factory\MVCFactoryInterface;
use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;

return new class implements ServiceProviderInterface
{

public function register(Container $container)
{
  $container->registerServiceProvider(new MVCFactory('\\TechFry\\Component\\Mvc'));
  $container->registerServiceProvider(new ComponentDispatcherFactory('\\TechFry\\Component\\Mvc'));
  $container->set(
   ComponentInterface::class,
    function (Container $container)
    {
       $component = new MVCComponent($container->get(ComponentDispatcherFactoryInterface::class));
       $component->setMVCFactory($container->get(MVCFactoryInterface::class));

       return $component;
    }
    );
 }
};
