const express = require('express');
const app = express();
// const redis = require('redis');
const https = require('https');
const socketIO = require('socket.io');
const  fs =    require('fs');
const prefix = 'pump_database_';
// ...

// Middleware для обработки CORS
app.use((req, res, next) => {
    res.header('Access-Control-Allow-Origin', '*');
    res.header('Access-Control-Allow-Headers', 'Origin, X-Requested-With, Content-Type, Accept');
    next();
});


//SSL cert and key


// const privateKey = fs.readFileSync('./certbot/live/pump.heat-pump.kz/privkey.pem', 'utf8')
// const certificate = fs.readFileSync('./certbot/live/pump.heat-pump.kz/cert.pem', 'utf8')

// const credentials = {
//     key: privateKey,
//     cert: certificate,
// }
var server = require('https').createServer({}, app);


const io = socketIO(server);
//Redis

// const redisClient = redis.createClient({
//     url:'redis://redis:6379'
// });

// (async () => {
//     try {
//         await redisClient.connect();
//         redisClient.on('connect', function () {
//             console.log('redis connected')
//         })
//         redisClient.on('error', function (err) {
//             console.log('Redis Client Error', err)
//         });
//
//     }catch (e) {
//         console.error(e)
//     }
// })();


io.on("connection",function(socket){
    console.log('new connection');
    socket.on('join', function (room) {
        console.log('join: ' + room)
        socket.join(room)
    })

    socket.on('disconnect', function () {
        console.log('disconnected');
    });
})


//every 2setcund send message "hello world" all clients

setInterval(function () {
    io.emit('message', 'hello world')
},1000);


server.listen(3000)
console.log('server create!')
