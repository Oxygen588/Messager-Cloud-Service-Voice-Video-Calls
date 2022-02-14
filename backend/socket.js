var http = require('http');
var Static = require('node-static');
var WebSocketServer = new require('ws');

// list of users
var CLIENTS = [];
var id;
let users = [];

// web server is using 8081 port
var webSocketServer = new WebSocketServer.Server({ port: 9898 });

// check if connection is established
webSocketServer.on('connection', function (ws) {


    id = ws;
    ws.on('message', function (message) {
        //console.log("primit")

        //console.log('received: %s', message[0]);
        //console.log(message)
        var received = JSON.parse(message);
        if (received.name) {
            console.log(received.room)
            console.log(received.name + " got connected")
            users[received.name] = {};

            if (received.radio = ! null) {
                users[received.name].radio = toString(received.room);
            }
            users[received.name].ws = id
            //console.log(users)
            console.log(users)
        }

        if (received.data != null) {

            sendAll(message, users[received.name].radio)
        }

        //console.log(users[JSON.parse(message).receiver])
        if (received.receiver != null) {
            //console.log(received)
            if (users[received.receiver] != null) {
                if (received.tp == "call") {
                    console.log("call")
                    tosend = {}
                    tosend.tp = "call"
                    tosend.link = received.link
                    if (users[received.receiver].ws) {
                        users[received.receiver].ws.send(JSON.stringify(tosend))
                    }
                } else {
                    console.log("logged")
                    sendmsg = {};
                    sendmsg.toset = message;
                    towho = users[received.receiver].ws;
                    towho.send(JSON.stringify(sendmsg));
                }
            } else {
                console.log("not logged");
                sendmsg = {};
                sendmsg.toset = message;
                sendmsg.type = "notonline";
                ws.send(JSON.stringify(sendmsg));
            }
        }

    });



    ws.on('close', function () {

        for (const [key, value] of Object.entries(users)) {

            if (users[key].ws == id) {
                console.log(key + " left the chat");
                users[key] = null;
            }

        }
        //console.log('user ' + received.name + ' left chat');

    });

});

function sendAll(message, radioo) {
    console.log('sendAll : ');

    //console.log(message)
    for (const [key, value] of Object.entries(users)) {
        if (users[key] != null) {
            if (users[key].radio == radioo) {

                // console.log(users[key].ws)
                //console.log(value)
                let tos = users[key].ws;
                tos.send(message);
            }
        }


    }
}



