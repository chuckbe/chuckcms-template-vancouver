<?php

namespace Chuckbe\ChuckcmsTemplateVancouver\Commands;

use Chuckbe\ChuckcmsTemplateVancouver\seeds\ChuckcmsTemplateVancouverTableSeeder;
use Illuminate\Console\Command;

class PublishVancouver extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'chuckcms-template-vancouver:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command publishes the Vancouver template for ChuckCMS.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $seeder = new ChuckcmsTemplateVancouverTableSeeder();
        $seeder->run();
        
        $this->info('Just a moment... ChuckCMS is generating your template.');

        $this->info('.         .');
        $this->info('..         ..');
        $this->info('...         ...');
        $this->info('.... VANCOUVER ....');
        $this->info('...         ...');
        $this->info('..         ..');
        $this->info('.         .');
        $this->info('.         .');
        $this->info('..         ..');
        $this->info('...         ...');
        $this->info('....   NOW   ....');
        $this->info('...         ...');
        $this->info('..         ..');
        $this->info('.         .');
        $this->info(' ');
        $this->info('ChuckCMS Template Vancouver published successfully');
        $this->info(' ');
        

        
    }
}
