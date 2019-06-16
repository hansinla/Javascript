var net = require('net');
var portnum = process.argv[2];


// "2013-07-06 17:42"

var server = net.createServer(function (socket) {
    var date = new Date();

    var data = date.getFullYear() + "-";
    data += padWithZero((date.getMonth() + 1).toString()) + "-"; // starts at 0
    data += padWithZero(date.getDate()) + " ";
    data += padWithZero(date.getHours()) + ":";
    data += padWithZero(date.getMinutes()) + "\n";
    
    socket.write(data);
    socket.end();

});
server.listen(portnum);

var padWithZero = function(date){
    if(date.length < 2){
        date = "0"+ date;
    }
    return date;
};
