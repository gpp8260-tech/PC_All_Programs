const express = require('express');
const app = express();
const port = 4000;

app.get('/api/user',(req,res)=>{
    const userinfo = [{
    id: 1,
    name: 'Ramesh',
    email: 'ramesh.kapoor@example.com',
    age: 42,
    city: 'Ahmedabad'
  },
    {
         "id": 2,
    "name": "Jay",
    "email": "Jay.Shukla@example.com",
    "age": 42,
    "city": "Rajkot"

    }];

  
  res.json(userinfo);

})

app.listen(port,()=>{
     console.log(`Server running at http://localhost:${port}`);
});