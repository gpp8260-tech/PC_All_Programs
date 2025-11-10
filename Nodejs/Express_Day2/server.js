const express = require('express')
const app = express()
const port = 4000

app.post('/',(req,res)=>{
    res.send({name:"Nirav",
             age:33,
             city:"Rajkot",
            country:"India"});
})
app.listen(port, ()=>{
    console.log(`Server is running on port ${port}`)
})