<?php
class PageController extends BaseController {

    protected $layout = 'layouts.main';

    public function getIndex()
    {
        $data['post'] = Posts::all();
        $this->layout->content = View::make('blog.index', $data);
    }

    public function getAbout(){
        $this->layout->content = View::make('blog.about');
    }

    public function getCategories(){
        $this->layout->content = View::make('blog.categories');
    }
}
