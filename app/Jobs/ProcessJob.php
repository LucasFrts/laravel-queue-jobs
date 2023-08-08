<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private string $nome;
    private int $codigo;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(string $nome, int $codigo)
    {
        $this->nome = $nome;
        $this->codigo = $codigo;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        info("Lancei um job do " . $this->nome) . "código: " . $this->codigo;
    }
}
