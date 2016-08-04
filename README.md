phpunit with selenium and some other simple tests


Prerequisits
-phpunit
 - http://magento2-tuts.blogspot.de/2016/08/ubuntu-install-phpunit.html 

- composer
 - http://magento2-tuts.blogspot.de/2016/08/ubuntu-install-composer.html 

- selenium rc
  - http://magento2-tuts.blogspot.de/2016/08/install-selenium-rc-server-2-3-on.html


Installation:
 - clone project
 - cd to rootdirectory of the project
 - run php composer install


Usage:
 - run all tests in folder "test"
   - type: "phpunit" in root directory

If you want to add new testsuites just edit <testsuites> object in phpunit.xml

