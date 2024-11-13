// const { readFile } = require('fs').promises;
// const express = require('express');
// const {response} = require("express");
// const app = express();
//
// app.get('/', async (req, res) => {
//     response.send( await readFile('./user-home.php'));
// })
//
//
// app.listen(process.env.PORT || 3000, () => console.log(`App available on localhost:3000`));

const express = require('express');
const app = express();

app.set('view engine', 'ejs')

app.get('/', (req, res) => {
    console.log('Here')
    res.render('contact')
})

app.listen(3000);