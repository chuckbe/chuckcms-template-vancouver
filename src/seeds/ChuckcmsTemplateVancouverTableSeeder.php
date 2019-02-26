<?php

namespace Chuckbe\ChuckcmsTemplateVancouver\seeds;

use Chuckbe\Chuckcms\Models\Template;
use Illuminate\Database\Seeder;

class ChuckcmsTemplateVancouverTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// php artisan db:seed --class=Chuckbe\\ChuckcmsTemplateStarter\\seeds\\ChuckcmsTemplateStarterTableSeeder
        $fonts = [];
        $fonts['raw'] = 'Lato:100,200,300,400,500,600,700,800,900';
        $fonts['dosis'] = 'https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700|Open+Sans:300,400,400i,600,700';
        
        
        $css = [];
        $css['bootstrap']['href'] = 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css';
        $css['bootstrap']['asset'] = 'false';
        
        $css['bootstrap']['href'] = 'chuckbe/chuckcms-template-vancouver/css/bootstrap.min.css';
        $css['bootstrap']['asset'] = 'true';
        
        $css['themify-icons']['href'] = 'chuckbe/chuckcms-template-vancouver/css/themify-icons.css';
        $css['themify-icons']['asset'] = 'true';
        
        $css['elements']['href'] = 'chuckbe/chuckcms-template-vancouver/css/elements.css';
        $css['elements']['asset'] = 'true';
        
        $css['animated-heading']['href'] = 'chuckbe/chuckcms-template-vancouver/css/animated-heading.css';
        $css['animated-heading']['asset'] = 'true';
        
        $css['font-awesome']['href'] = 'chuckbe/chuckcms-template-vancouver/css/font-awesome.min.css';
        $css['font-awesome']['asset'] = 'true';
        
        $css['magnific-popup']['href'] = 'chuckbe/chuckcms-template-vancouver/css/magnific-popup.css';
        $css['magnific-popup']['asset'] = 'true';
        
        $css['slick']['href'] = 'chuckbe/chuckcms-template-vancouver/css/slick.css';
        $css['slick']['asset'] = 'true';

        $css['style']['href'] = 'chuckbe/chuckcms-template-vancouver/css/style.css';
        $css['style']['asset'] = 'true';
        
        $css['responsive']['href'] = 'chuckbe/chuckcms-template-vancouver/css/responsive.css';
        $css['responsive']['asset'] = 'true';

        $css['custom']['href'] = 'chuckbe/chuckcms-template-vancouver/css/custom.css';
        $css['custom']['asset'] = 'true';
        
        
        $js = []; 
        
        
        $js['modernizr']['href'] = 'chuckbe/chuckcms-template-vancouver/js/modernizr-2.8.3.min.js';
        $js['modernizr']['asset'] = 'true';
        
        $js['jquery']['href'] = 'chuckbe/chuckcms-template-vancouver/js/jquery-1.12.4.min.js';
        $js['jquery']['asset'] = 'true';
        
        $js['bootstrap']['href'] = 'chuckbe/chuckcms-template-vancouver/js/bootstrap.min.js';
        $js['bootstrap']['asset'] = 'true';
        
        $js['plugins']['href'] = 'chuckbe/chuckcms-template-vancouver/js/plugins.js';
        $js['plugins']['asset'] = 'true';
        
        $js['jquery-isotope']['href'] = 'chuckbe/chuckcms-template-vancouver/js/jquery-isotope.js';
        $js['jquery-isotope']['asset'] = 'true';
        
        $js['main']['href'] = 'chuckbe/chuckcms-template-vancouver/js/main.js';
        $js['main']['asset'] = 'true';
        
        $js['ajax-mail']['href'] = 'chuckbe/chuckcms-template-vancouver/js/ajax-mail.js';
        $js['ajax-mail']['asset'] = 'true';
        
        $js['particles']['href'] = 'chuckbe/chuckcms-template-vancouver/js/particles.min.js';
        $js['particles']['asset'] = 'true';
        

        $json = [];

        // create template
        Template::updateOrCreate(
            ['slug' => 'chuckcms-template-vancouver'],
            ['name' => 'ChuckCMS Template Vancouver',
            'hintpath' => 'chuckcms-template-vancouver',
            'path' => 'chuckbe/chuckcms-template-vancouver',
            'type' => 'default',
            'version' => '0.1',
            'author' => 'Karel Brijs (karel@chuck.be)',
            'fonts' => $fonts,
            'css' => $css,
            'js' => $js,
            'json' => $json,
            'active' => 1]
        );
    }
}
