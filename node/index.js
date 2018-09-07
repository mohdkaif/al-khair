var express = require('express');
var request = require('request');
var http = require('http');
var $app = express();
var $server = require('http').Server($app);
var socket = require('socket.io');
var $io = socket($server);
var $port = process.env.PORT || 4595;

$io.set('origins', '*:*');
$app.use(function(req, res, next) {
    res.header('Access-Control-Allow-Origin', req.get('Origin') || '*');
    res.header('Access-Control-Allow-Credentials', 'true');
    res.header('Access-Control-Allow-Methods', 'GET,HEAD,PUT,PATCH,POST,DELETE');
    res.header('Access-Control-Expose-Headers', 'Content-Length');
    res.header('Access-Control-Allow-Headers', 'Accept, Authorization, Content-Type, X-Requested-With, Range');
    if (req.method === 'OPTIONS') {
        return res.send(200);
    } else {
        return next();
    }
});
$server.listen($port, function () {console.log('Listening on port %d',$port);});


$io.on('connection', function (socket) {
  socket.emit('news', { hello: 'world' },function($k){
  	console.log($k);
  });
  
  socket.on('my other event', function (user_id,lat,long) {
    console.log('user_id'+user_id+','+'lat'+lat+','+'long'+long);
  });
});