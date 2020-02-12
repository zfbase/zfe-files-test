<?php

class ArticlesController extends Controller_AbstractResource
{
    protected static $_modelName = Articles::class;
    protected static $_editFormName = Application_Form_Edit_Article::class;
}
