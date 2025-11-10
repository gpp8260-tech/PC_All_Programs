const express = require('express');
const start = express();
start.use(express.json());
const port = 4000;
const checkCredentials = require('./checkCredentials');


start.get('/',(req,res)=>{

    res.send(`Hello Express`);

});

start.post('/login', checkCredentials, (req, res) => {
  res.json({ message: 'Login successful!' });
});

start.post('/about',(req,res)=>{
    res.json({name:"Raj",age:15,city:"Rajkot"});

});

start.listen(port,()=>{
    console.log(`Server is running on ${port}`);
})
