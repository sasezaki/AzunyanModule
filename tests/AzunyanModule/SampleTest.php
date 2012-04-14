<?php
namespace AzunyanModuleTest;

class SampleTest extends Framework\TestCase
{

    public function testSample()
    {
        //$this->assertInstanceOf('\Zend\Di\Locator', $this->getLocator());
        

        var_dump($this->getLocator()->get('cache'));
    }
}
