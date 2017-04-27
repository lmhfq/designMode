<?php

namespace designMode;
/**
 *
 *
 * Created by PhpStorm.
 * @author <qiufeng> (991564110@qq.com)
 * @date: 2017/4/8 13:19
 * project: test
 */

include 'vendor/autoload.php';
/*观察者模式*/
echo "\n/*观察者模式*/\n";
$subject = new User();
$subject->attach(new UserObserver());
$subject->attach(new UserObserver());
$subject->notify();

/*迭代器模式*/
echo "\n/*迭代器模式*/\n";
$bookList = new BookList();
$bookList->addBook(new Book('Learning PHP Design Patterns', 'William Sanders'));
$bookList->addBook(new Book('Professional Php Design Patterns', 'Aaron Saray'));
$bookList->addBook(new Book('Clean Code', 'Robert C. Martin'));
$bookList->removeBook($bookList->getBook(0));
//移除后要重新排序
$bookList->sortBook();
$iterator = new BookListIterator($bookList);
while ($iterator->valid()) {
    var_dump($iterator->current());
    $iterator->next();
}
/*命令模式*/
echo "\n/*命令模式*/\n";
$invoker = new Invoker();
//执行的命令
$string = 'designMode\\' . 'Receiver';
if (!in_array($string, $invoker->getCommandList())) {
    echo 'no command';
    exit(1);
}
$invoker->setCommand(new HelloCommand(new $string()));
$invoker->run();
/*代理模式*/
echo "\n/*代理模式*/\n";

$data = [];
$proxy = new RecordProxy($data);
$proxy->xyz = false;
var_dump($proxy->xyz);
/*服务定位器模式*/
echo "\n/*服务定位器模式*/\n";

$serviceLocator = new ServiceLocator();
$serviceLocator->add(
    'LogServiceInterface', __NAMESPACE__ . '\\LogService'
);
$serviceLocator->add(
    'DatabaseServiceInterface', __NAMESPACE__ . '\\DatabaseService'
);
$LogService = $serviceLocator->get('LogServiceInterface');
$LogService->log();

/*装饰器模式*/
echo "\n/*装饰器模式*/\n";

$service = new Webservice(['foo' => 'bar']);
$service = new RenderInXml($service);
$data = $service->renderData();
echo($data);

/*适配器模式*/
echo "\n/*适配器模式*/\n";

$paperBook = new PaperBook();
// 我们在适配器中引入了电子书
$eBook = new EBookAdapter(new Kindle());
$eBook->open();

/*静态工厂模式*/
echo "\n/*静态工厂模式*/\n";

$number = StaticFactory::factory('FormatNumber');
$number->format();

/*单例模式*/
echo "\n/*单例模式*/\n";
Singleton::getInstance();
Singleton::getInstance();


/*工厂方法模式*/
echo "\n/*工厂方法模式*/\n";

// 该方法扮演客户端角色，我们不关心什么工厂，我们只知道可以可以用它来造车
$type = array(
    FactoryMethod::CHEAP,
    FactoryMethod::FAST
);
$obj=(new GermanFactory())->create($type[0]);
$obj->setColor('sdsad');
var_dump($obj);