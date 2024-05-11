<?php
require_once __DIR__ . '/vendor/autoload.php';
use Workerman\Worker;
use PHPSocketIO\SocketIO;
// Listen port 2021 for socket.io client
$io = new SocketIO(2021);
$io->on('connection', function ($socket) use ($io) {
    $socket->on('send message', function ($msg) use ($io) {
        $io->emit('new message', $msg);
    });
});
Worker::runAll();
