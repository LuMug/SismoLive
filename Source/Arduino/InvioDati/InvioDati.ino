#include <Fishino.h>
#include "RTClib.h"

RTC_DS1307 rtc;

  //Configurazione di rete fishino.
  #ifndef __MY_NETWORK_H
    
    //Nome della rete a cui connettersi.
    #define MY_SSID  "test"
    
    //Password della rete.
    #define MY_PASS  "testtest"
    
    //L'IP del fishino viene dato automaticamente dal DHCP.
    #define GATEWAY    192, 168,   1,   1
    #define NETMASK    s255, 255, 255,   0
  #endif 
  


void printWifiStatus()
{
  Serial.print("SSID: ");
  Serial.println(Fishino.SSID());
  uint8_t mode = Fishino.getPhyMode();
  Serial.print("PHY MODE: (");
  Serial.print(mode);
  Serial.print(") ");
  switch(mode)
  {
    case PHY_MODE_11B:
      Serial.println("11B");
      break;

    case PHY_MODE_11G:
      Serial.println("11G");
      break;

    case PHY_MODE_11N:
      Serial.println("11N");
      break;
      
    default:
      Serial.println("UNKNOWN");
  }

  // print your Fishino's IP address:
  // stampa l'indirizzo IP del Fishino
  IPAddress ip = Fishino.localIP();
  Serial.print("IP Address: ");
  Serial.println(ip);

  // print the received signal strength:
  // stampa la qualità del segnale WiFi
  Serial.print("signal strength (RSSI):");
  Serial.print(Fishino.RSSI());
  Serial.println("dBm");
}

void setup() {
  Serial.begin(9600);
  //Configurazione RTC Orologio Real Time
  if (! rtc.begin()) {
    Serial.println("Couldn't find RTC");
    while (1);
  }
  rtc.adjust(DateTime(F(__DATE__), F(__TIME__)));
  
  //Resetta il fishino.
  Serial << F("Resetting Fishino...");
  while(!Fishino.reset())
  {
    Serial << ".";
    delay(500);
  }

  //Imposta la modalità fisica a 11G
  Fishino.setPhyMode(PHY_MODE_11G);
  //Imposta il modo di operazione a STATION_MODE.
  Serial << F("Setting mode STATION_MODE\r\n");
  Fishino.setMode(STATION_MODE);

  
  Serial << F("Connecting to AP...");
  while(!Fishino.begin(MY_SSID, MY_PASS))
  {
    Serial << ".";
    delay(500);
  }
  Serial << F("OK\r\n");
  
  //Fa richiesta al DHCP di un IP.
  Fishino.staStartDHCP();
  Serial << F("Waiting for IP...");
  while(Fishino.status() != STATION_GOT_IP)
  {
    Serial << ".";
    delay(500);
  }
  Serial << F("OK\r\n");
  Serial.flush();
  //Stampo lo stato della connessione al WIFI.
  printWifiStatus();
}

FishinoClient client;
String postData;
String postVarValue = "value=";
String postVarDate = "date=";
String postVarTime = "time=";
//Si occupa di inviare i valori misurati.
void send(double geophoneData)
{
  
  /* Questa parte di codice servirebbe a mandare la data e l'ora di rilevamento dei valori
  DateTime time = rtc.now();
  String date = time.timestamp(DateTime::TIMESTAMP_DATE);
  String tempo = time.timestamp(DateTime::TIMESTAMP_TIME);
  
  postData = postVarValue + geophoneData + postVarDate + date + postVarTime + tempo;*/
  postData = postVarValue + geophoneData;
  Serial.println(postData);
  if(client.connect("www.sismolive.online",80) == 1)
  {
    client.println(F("POST /php/MySQL_connection.php HTTP/1.1"));
    client.println(F("Host:www.sismolive.online"));
    client.println(F("User-Agent: FISHINO"));
    client.println("Connection: close");
    client.println(F("Content-Type: application/x-www-form-urlencoded"));
    
    
    client.print("Content-Length:");
    client.println(postData.length());
    client.println();
    client.print(postData);
    //Serial.println("Inviato" + postData);
    client.flush();
    client.stop();
  }
  else
  {
    Serial.println("Connection failed");
  }
}

  //Genera numeri random dato un minimo e un massimo
  double randomDouble(double minf, double maxf)
  {
    return  random(minf,maxf)/10.0;
  }


void loop() {
  //range da 10 a 100 --> sara range da 1,00 a 10,00
  send(randomDouble(10.0, 100.0));
  delay(1000);
}
