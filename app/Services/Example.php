<?php

namespace App\Services;

use Laracord\Services\Service;

class Example extends Service
{
    /**
     * The service interval.
     */
    protected int $interval = 5;

    /**
     * Handle the service.
     */
    public function handle(): void
    {
        dd($this->discord());
        $channel = $this->discord()->getChannel('1290494625802358848');

        $this
            ->message("Bem vindo ao Buteco bora beber uma ou fazer a fezinha!\n
            Compre bebidas e aumente o prêmio.\n
            Aposte com responsabilidade o bicheiro aqui não atira. Total acumulado: valorAcumulado\n
            Suco: 100 coins\n
            Cerveja: 1000 coins\n
            Whisky: 10000 coins\n
            ")
            ->title(('BUTECO TECO'))
            ->image(config('butecobot.images.example'))
            ->button("Apostar", route: 'action:pedra:',  )
            ->button("Suco", route: 'action:papel:' )
            ->button("Cerveja", route: 'action:tesoura:' )
            ->button("Whisky", route: 'action:lagarto:' )
            ->send($channel);
    }
}
