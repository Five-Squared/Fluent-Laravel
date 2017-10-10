<?php

namespace Fluent\Laravel\Console;

use Illuminate\Console\Command;
use Config;

class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fluent:test {address : valid email address of test recipient}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send test message via Fluent service';

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
        $messageId = \Fluent::message()->create()
            ->title('My Laravel Message')
            ->paragraph('Lorem ipsum dolor sit amet, consectetur adipiscing elit.')
            ->to($this->argument('address'))
            ->subject('Test from Laravel')
            ->send();

        $this->info("Test message sent to {$this->argument('address')} - message id is {$messageId}");
    }
}
