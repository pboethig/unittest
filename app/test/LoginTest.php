<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 04.08.16
 * Time: 16:04
 */

use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\WebDriverBrowserType;
use Facebook\WebDriver\Remote\WebDriverCapabilityType;

class GitHubTest extends PHPUnit_Framework_TestCase {


    protected $url = 'http://github.com';
    /**
     * @var \RemoteWebDriver
     */
    protected $webDriver;

    /** @var RemoteWebDriver $driver */
    protected $driver;

    protected function setUp() {

        $this->webDriver = RemoteWebDriver::create(
            'http://localhost:4443/wd/hub',
            array(
                WebDriverCapabilityType::BROWSER_NAME
                => WebDriverBrowserType::CHROME,
            )
        );
    }

    protected function tearDown() {
        if ($this->driver) {
            $this->driver->quit();
        }
    }

    public function testGitHubHome()
    {
        $this->webDriver->get($this->url);
        // checking that page title contains word 'GitHub'
        $this->assertContains('GitHub', $this->webDriver->getTitle());
    }

}