<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 05.08.16
 * Time: 10:58
 */

class GitHubSearchTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var RemoteWebDriver
     */
    protected $_webdriver;


    protected $_url = 'https://github.com';

    public function setUp()
    {
        $capabilities = [
            \WebDriverCapabilityType::BROWSER_NAME=>'chrome',
            \WebDriverCapabilityType::BROWSER_NAME=>'firefox'
        ];

        $this->_webdriver = RemoteWebDriver::create('http://localhost:4443/wd/hub', $capabilities);
    }

    public function testGitHub()
    {
        //get content of an url
        $this->_webdriver->get($this->_url);

        //check for word "GitHub"
        $this->assertContains('GitHub', $this->_webdriver->getTitle());
    }


    public function testSearch()
    {
        $term = 'vagrant_puppet_magento';

        //get url
        $this->_webdriver->get($this->_url);

        //find the searchfield
        $search = $this->_webdriver->findElement(WebDriverBy::cssSelector('.header-search-input'));

        //set focus on this field
        $search->click();

        //type in searchstring and submit the form
        $search->sendKeys($term)->submit();

        $searchUrl = $this->_url . "/search?utf8=%E2%9C%93&q=".$term;

        $this->_webdriver->get($searchUrl);

        $content = $this->_webdriver->findElement(WebDriverBy::tagName('body'))->getText();

        $this->assertContains($term, $content);
    }


    public function tearDown()
    {
        $this->_webdriver->close();
        $this->_webdriver->quit();
    }
}