const express = require('express')
const mysql = require('mysql')

const db = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '123456',
    database: 'room_rent'
})

db.connect(err => {
    if (err) {
        throw err
    }
    console.log('My SQL Connected')
})



let server = app.listen(5500, function()  {
    console.log('port 5500');
});
