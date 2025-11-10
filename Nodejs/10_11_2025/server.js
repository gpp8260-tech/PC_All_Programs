const port = 4000

app.get('/',(req,res)=>{
    res.send("Hello world")
})
app.linten(port,()=>{
    console.log(`Example app listening on port ${port}`);
})