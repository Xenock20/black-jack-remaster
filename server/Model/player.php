<?php

class Player
{
    public $name;
    public $hand = [];
    public $coins = 0; // Propiedad para almacenar las monedas del jugador

    public function __construct($name, $coins)
    {
        $this->name = $name;
        $this->coins = $coins; // Asignar las monedas iniciales al jugador
    }

    public function addCard($carta)
    {
        $this->hand[] = $carta;
    }

    public function apostar($cantidad)
    {
        // Verificar si el jugador tiene suficientes monedas para realizar la apuesta
        if ($this->coins >= $cantidad) {
            $this->coins -= $cantidad; // Restar la cantidad apostada de las monedas del jugador
            return $cantidad; // Devolver la cantidad apostada
        } else {
            return 0; // El jugador no tiene suficientes monedas para realizar la apuesta
        }
    }

    public function actualizarMonedas($cantidadApostada, $resultado)
    {
        // Actualizar la cantidad de monedas del jugador según el resultado del juego
        if ($resultado === "win") {
            // El jugador ganó, incrementar sus monedas
            $this->coins += $cantidadApostada * 2; // Se recupera la apuesta y se gana el mismo monto
        } elseif ($resultado === "tie") {
            // El juego fue un empate, devolver la apuesta al jugador
            $this->coins += $cantidadApostada;
        }
    }
}
