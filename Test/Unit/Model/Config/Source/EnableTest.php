<?php

namespace Unet\SocialShare\Test\Unit\Model\Config\Source;

/**
 * Class EnableTest
 * @package Unet\SocialShare\Test\Unit\Model\Config\Source
 */
class EnableTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Unet\SocialShare\Model\Config\Source\Enable
     */
    protected $configSource;

    /**
     * @var array
     */
    protected $expectConfig;

    public function setUp()
    {
        $objectManager = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);
        $this->configSource = $objectManager->getObject('Unet\SocialShare\Model\Config\Source\Enable');
        $this->expectConfig = [
            ['value' => 0, 'label' => __('No')],
            ['value' => 1, 'label' => __('Yes')]
        ];
    }

    public function testGetConfigSource()
    {
        $this->assertEquals($this->expectConfig, $this->configSource->toOptionArray());
    }
}