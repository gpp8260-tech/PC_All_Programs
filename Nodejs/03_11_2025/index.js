const express = require('express');
const start = express();
const port = 5000;

start.get('/',(req,res)=>{
    res.send("Hello World");
});

start.get('/json',(req,res)=>{
    res.json({name:"Raj",age:23});
})
start.listen(port,()=>{
    console.log(`Example app listening on port ${port}`);
})
