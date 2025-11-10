let express = require('express');
let start = express();
let port=5000;

start.use((req, res, next) => {
  console.log(`${req.method} ${req.url}`);
   next(); // pass control to the next middleware
});
start.get('/',(req,res)=>{
    res.send('Hello  Express');
});
start.post('/test',(req,res)=>{
    res.json({name:'Raj',city:'Rajkot',pincode:'360001'});
});

start.post('/login', (req, res) => {
  res.send('Login Successful');
});



start.listen(port,()=>{
    console.log(`Server running on http://localhost:${port}`);
});