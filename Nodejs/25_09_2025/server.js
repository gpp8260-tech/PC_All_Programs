const { log } = require('node:console');
const http = require('node:http');
const { connect } = require('node:http2');
const { connected } = require('node:process');

const hostname= 'localhost';
const port = 3000;

const conect = http.createServer((req,res)=>{
    res.statusCode = 200;
    res.setHeader('Content-Type','text/plain');
    res.end('Hello World \n');
});
conect.listen(port, hostname,()=>{
    console.log(`Server running at http://${hostname}:${port}`);

});

