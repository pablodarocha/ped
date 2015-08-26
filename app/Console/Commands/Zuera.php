<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;

class Zuera extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'zuera {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando que exibe uma mensagem de Hello.';

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
//    public function handle()
//    {
//        if ($name = $this->argument('name')) {
//            $this->info('Hello {name}!');
//
//            return [
//                ['name', InputArgument::OPTIONAL, 'O nome que deverá ser exibido.', 'World'],
//            ];
//        }
//
////        $name = $this->input->getArgument('name');
////            $this->info('Hello {name}!');
////
////        return [
////            ['name', InputArgument::OPTIONAL, 'O nome que deverá ser exibido.', 'World'],
////        ];
//    }

    public function fire() {
        $name = $this->input->getArgument("name");

        $this->info("Vai se fudeeeeeeeeer {$name}!");
    }

    protected function getArguments()
    {
        return [
            ['name', InputArgument::OPTIONAL, 'O nome que deverá ser exibido.', 'Doge'],
        ];
    }
}
