const express = require('express')
const app = express()
const port =2000

app.use(express.json());
app.post('/',(req,res)=>{
    res.send({name:"Nirav",city:"Rajkot"})
})
app.listen(port,()=>{
    console.log(`Server is running on port ${port}`)
})