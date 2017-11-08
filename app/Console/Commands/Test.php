<?php
/**
 * 测试任务
 * User: shiyikui@foxmail.com
 * Date: 2017/11/08
 * Time: 12:00
 */
namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
use Log;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Logger;

class Test extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '这是一个测试任务';

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

        $logger = new Logger('crontab');
        $logger->pushHandler(new RotatingFileHandler(storage_path('logs/crontab/crontab.log')));
        $logger->info('Test run ...');

        $this->process();
    }

    private function process(){

        //TODO  处理逻辑
    }
}