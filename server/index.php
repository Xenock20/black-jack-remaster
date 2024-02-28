<?php
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;

class MyWebSocketServer implements MessageComponentInterface {
    public function onOpen(ConnectionInterface $conn) {
        echo "New connection! ({$conn->resourceId})\n";
    }

    public function onMessage(ConnectionInterface $from, $msg) {
        echo "Message from {$from->resourceId}: $msg\n";
        // Aquí puedes procesar el mensaje recibido y enviar una respuesta si es necesario.
        $from->send("Received: $msg");
    }

    public function onClose(ConnectionInterface $conn) {
        echo "Connection {$conn->resourceId} has disconnected\n";
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        echo "An error occurred: {$e->getMessage()}\n";
        $conn->close();
    }
}

// Iniciar el servidor
$server = IoServer::factory(
    new WsServer(new MyWebSocketServer()),
    8080 // Puerto en el que escuchará el servidor
);

echo "WebSocket server started\n";

// Ejecutar el servidor
$server->run();
