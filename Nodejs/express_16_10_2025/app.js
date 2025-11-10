const express = require('express')
const app = express()

app.get('/',(req,res)=>{
    res.send("Okay Send it");
})

app.post('/test',(req,res)=>{
    res.send({name:"Nirav",age:30});
})

app.listen(4000)