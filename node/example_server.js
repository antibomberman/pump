const express = require('express');
const http = require('http');
const socketIO = require('socket.io');
const cors = require('cors');
const app = express();
const corsOptions = {
    origin: 'http://localhost:3000',
    credentials: true,
};

const server = http.createServer(app);
const io = socketIO(server,{
    cors: {
        origin: '*',
    }
});

//create get / route
app.get('/', (req, res) => {
    res.send('Hello World!');
});

app.use(cors(corsOptions));

const PORT = 3000;

io.on('connection', (socket) => {
    console.log('Пользователь подключен');
});

server.listen(PORT, () => {
    console.log(`Сервер запущен на порту ${PORT}`);
});
