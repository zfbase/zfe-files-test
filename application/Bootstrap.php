<?php

/**
 * Bootstrap.
 */
class Application_Bootstrap extends ZFE_Bootstrap
{
    /**
     * @inheritDoc
     */
    protected function _initLayout()
    {
        parent::_initLayout();

        $layout = Zend_Layout::getMvcInstance();
        $view = $layout->getView();
        $view->addHelperPath(
            APPLICATION_PATH . '/../vendor/zfbase/zfe-files/library/ZfeFiles/View/Helper',
            'ZfeFiles_View_Helper_');
    }
}
