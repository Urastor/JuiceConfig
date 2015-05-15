<?php 

require_once './src/Utility/Singleton.php';

require_once './src/Exceptions/JuiceConfigException.php';
require_once './src/Exceptions/ConfigNotFoundException.php';

require_once './src/Config/Juiceable.php';
require_once './src/Config/BaseConfig.php';
require_once './src/Config/ArrayConfig.php';
require_once './src/JuiceContainer.php';

$container = JuiceConfig\JuiceContainer::instance();
$container->add('test', new \JuiceConfig\Config\ArrayConfig());

try {
	var_dump($container->get('b'));
} catch(\JuiceConfig\Exceptions\JuiceConfigException $e) {
	echo $e;
}