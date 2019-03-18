# Informations relatives au câblage

## Tableau des broches :

| Arduino       |     photorésistor     |     humidity   |  ESP8266 | LM35 |
| :------------ | :-------------:       | -------------: | :------: | :---:|
| 5V            |     VCC               |     VCC        |          |  VCC |
| 3.3V          |                       |                |VIN/ENABLE|      |
|GND            |      GND              | GND            |     GND  |  GND | 
| A0            |      GND              |                |          |      |
| A1            |                       |                |          | VOUT |
| A2            |                       |    A0          |          |      | 
| RX            |                       |                |   TX     |      |
| TX            |                       |                |   RX     |      |
|  inutile      |                       |    D0          |          |      |

## Câblage des capteurs

![Image cablage](./images/cablage.PNG)

## Câblage du module WiFi

![Image cablage](./images/cablage_wifi.png)
