<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemap extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// first load the library
        $this->load->library('sitemap');

        // create new instance
        $sitemap = new Sitemap();
    
        // add items to your sitemap (url, date, priority, freq)
        $sitemap->add('http://mysite.tld/', '2012-08-25T20:10:00+02:00', '1.0', 'daily');
        $sitemap->add('http://mysite.tld/page1', '2012-08-26T22:30:00+02:00', '0.6', 'monthly');
        $sitemap->add('http://mysite.tld/page2', '2012-08-26T23:45:00+02:00', '0.9', 'weekly');
    
        // add multiple items with a loop
        foreach ($posts as $post)
        {
            $sitemap->add($post->slug, $post->date, $post->priority, $post->freq);
        }
    
        // show your sitemap (options: 'xml', 'google-news', 'sitemapindex' 'html', 'txt', 'ror-rss', 'ror-rdf')
        $sitemap->render('xml');
	}
}
