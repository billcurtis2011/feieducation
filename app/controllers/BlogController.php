<?php

class BlogController extends BaseController {

    protected $layout = 'blog.index';

    function __construct () {

        //Ge the language file to get the meta data from
        $this->metaData = Lang::get('metadata');

    }
    public function showBlog()
    {
        //Get the page that we are on
        $page = (Input::get('page'))?Input::get('page'):1;
        $records_per_page = 10;


        //Get the artivles that we are going to display
        $data['articles'] = Tools::getBlogPosts($page, $records_per_page);


        // instantiate the pagination object
        $pagination = new Paging();

        // the number of total records is the number of records in the array
        $pagination->records(count($data['articles']));
        //$pagination->records(500);

        // records per page
        $pagination->records_per_page($records_per_page);

        $data['pagination'] = $pagination;

        //Create the view
        $this->layout->content =  View::make('blog.blog', $data);

        $this->layout->header =  View::make('includes.header');

        $headerData = array(
            'title' => (isset($this->metaData['blog_title']))?$this->metaData['blog_title']:null,
            'description' => (isset($this->metaData['blog_desc']))?$this->metaData['blog_desc']:null
            );
        $this->layout->header =  View::make('includes.header', $headerData);

    }
    public function showBlog_post($slug){

        //$current_domain = $_SERVER['HTTP_HOST'];

        $current_domain = 'www.fei.edu';

        //Get the blog posts that we are going to use
        $xmlFeed = Tools::getDataFromUrl($current_domain, '/wordpress/feed/');

        $parsedXML = simplexml_load_string($xmlFeed);

        $data['articles'] = array();

        foreach ($parsedXML->channel->item as $item) {
            $post_link = end((explode('/', rtrim($item->link, '/'))));
            if($post_link == Request::segment(2)) {
                $data['article'] = $item;
            }

        }

        $data['articles'] = Tools::getBlogPosts();

        //Create the view
        $this->layout->content =  View::make('blog.blog_post', $data);

        $headerData = array(
            'title' => $data['article']->title.' - FEI',
            'description' => substr_replace(html_entity_decode(strip_tags($data['article']->children("content", true)), ENT_COMPAT, 'utf-8'), "...", 140)
            );
        $this->layout->header =  View::make('includes.header', $headerData);

    }

}
