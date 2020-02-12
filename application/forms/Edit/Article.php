<?php

class Application_Form_Edit_Article extends ZFE_Form_Edit_AutoGeneration
{
    protected $_modelName = Articles::class;

    public function init()
    {
        parent::init();

        $this->addFileAjaxElement('file');
        $this->addImageFileAjaxElement('image');
        $this->addAudioFileAjaxElement('audio');
        $this->addVideoFileAjaxElement('video');
    }
}
