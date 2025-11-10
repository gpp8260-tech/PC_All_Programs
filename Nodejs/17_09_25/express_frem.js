let express = require('express');
let test = express();

test.get('/',(req,res)=>res.send('Hello World'));
test.get('/about',(req,res)=>res.send('This About page'));
test.get('/sum',(req,res)=>res.send(9+9));
test.listen(9090);