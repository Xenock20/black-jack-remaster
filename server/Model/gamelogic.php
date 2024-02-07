<?php

class GameLogic
{
    public const TIPOS_CARTAS = ["diamante", "corazón", "pica", "trébol"];
    public const NUMEROS_CARTAS = ["A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K"];

    public static function crearArrayCartas()
    {
        $cartas = [];

        foreach (self::TIPOS_CARTAS as $tipo) {
            foreach (self::NUMEROS_CARTAS as $numero) {
                $cartas[] = ["tipo" => $tipo, "numero" => $numero];
            }
        }

        return $cartas;
    }

    public static function mezclarCartas(&$cartas)
    {
        shuffle($cartas);
    }

    public static function repartirCartas($jugadores, &$cartas)
    {
        // Repartir dos cartas a cada jugador y a la mesa
        for ($i = 0; $i < 2; $i++) {
            // Repartir una carta a cada jugador
            foreach ($jugadores as $jugador) {
                if (!empty($cartas)) {
                    $carta = array_shift($cartas);
                    $jugador->addCard($carta);
                }
            }
            // Repartir una carta a la mesa
            if (!empty($cartas)) {
                $carta = array_shift($cartas);
                // Lógica para asignar la carta a la mesa
            }
        }
    }
}
