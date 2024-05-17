//Node server to handle socket io connections

const io = require('socket.io')(8000)

const users = {};

io.on('connection', socket => {
    socket.on('new-user-joined', nam => {
        console.log("New user joined", nam);
        users[socket.id] = nam;
        //nam = users[socket.id];
        socket.broadcast.emit('user-joined', nam);
    });

    socket.on('send', message => {
        var text = message;
        socket.broadcast.emit('recieve', text);
        //socket.broadcast.emit('receive', { message: text, nam: nam });
    });



    /*socket.on('disconnect', message => {
        socket.broadcast.emit('leave', users[socket.id]);
        delete users[socket.id];*/
})