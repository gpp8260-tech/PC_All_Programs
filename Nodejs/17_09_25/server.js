let http = require('http');
const os = require('os');
let express = require('express');

http.createServer(function (req,res){
    let name="Nirav";
    //res.writeHead(200,{'COntent-Type':'text/plain'});
    res.writeHead(200,{'COntent-Type':'text/html'});
    res.write(name);
    res.write("<br>");
    res.write(os.platform());
    res.write("<br>");
    res.end('Hello Test');

}).listen(3000);

console.log('Server running at http://localhost:3000/');