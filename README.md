# WiFi (RC) Car with Wemos D1 Mini
A Wifi-Controlled DIY Car Robot made using the Wemos D1 Mini board (ESP8266)

[![Youtube Video](https://img.youtube.com/vi/h6ZLOk6Ywlw/0.jpg)](https://www.youtube.com/watch?v=h6ZLOk6Ywlw)

There are two folders : "Arduino" and "Server".
"Arduino" contains the sketch that you should download to your Wemos D1 Mini.
"Server" contains the source code for the remote control (made in PHP, to be hosted on a website).
The two scripts communicate through reading (Arduino) and writing (Server) a "cmd.txt" file, hosted on the same Server.