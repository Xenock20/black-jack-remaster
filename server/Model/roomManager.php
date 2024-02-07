<?php
class RoomManager
{
    // Array para almacenar las 4 salas
    private $salas = [];

    public function __construct()
    {
        // Crear las 4 salas al inicializar el RoomManager
        for ($i = 1; $i <= 4; $i++) {
            $this->salas[$i] = []; // Cada sala es un array vacío inicialmente
        }
    }

    // Función para obtener el estado de todas las salas
    public function obtenerEstadoSalas()
    {
        $estadoSalas = [];
        foreach ($this->salas as $numeroSala => $jugadores) {
            $estadoSalas[$numeroSala] = count($jugadores); // Cantidad de jugadores en la sala
        }
        return $estadoSalas;
    }

    // Función para que un jugador se una a una sala específica
    public function unirseASala($numeroSala, $jugador)
    {
        if (isset($this->salas[$numeroSala]) && count($this->salas[$numeroSala]) < 4) {
            $this->salas[$numeroSala][] = $jugador; // Agregar jugador a la sala
            return true; // Se unió exitosamente a la sala
        } else {
            return false; // No se pudo unir a la sala (sala llena o inexistente)
        }
    }

    // Otras funciones para gestionar las salas según sea necesario
}
