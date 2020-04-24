#include <Fishino.h>

//Configurazione fishino.
#ifndef __MY_NETWORK_H
  //Nome della rete a cui connettersi.
  #define MY_SSID  "test"
  //Password della rete.
  #define MY_PASS  "testtest"

  //L'IP del fishino viene dato automaticamente dal DHCP.
  #define GATEWAY    192, 168,   1,   1
  #define NETMASK   255, 255, 255,   0
#endif 

#ifdef IPADDR
  IPAddress ip(IPADDR);
  #ifdef GATEWAY
    IPAddress gw(GATEWAY);
  #else
    IPAddress gw(ip[0], ip[1], ip[2], 1);
  #endif
  #ifdef NETMASK
    IPAddress nm(NETMASK);
  #else
    IPAddress nm(255, 255, 255, 0);
  #endif
#endif

void printWifiStatus()
{
  Serial.print("SSID: ");
  #ifdef STANDALONE_MODE
    Serial.println(MY_SSID);
  #else
    Serial.println(Fishino.SSID());
  #endif

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

  #ifdef STANDALONE_MODE

  IPAddress ip, gw, nm;
  if(Fishino.getApIPInfo(ip, gw, nm))
  {
    Serial << F("Fishino IP      :") << ip << "\r\n";
    Serial << F("Fishino GATEWAY :") << gw << "\r\n";
    Serial << F("Fishino NETMASK :") << nm << "\r\n";
  }
  else
    Serial << F("Couldn't get Fishino IP info\r\n");
  
#else

  // print your Fishino's IP address:
  // stampa l'indirizzo IP del Fishino
  IPAddress ip = Fishino.localIP();
  Serial.print("IP Address: ");
  Serial.println(ip);

  // print the received signal strength:
  // stampa la qualità del segnale WiFi
  Serial.print("signal strength (RSSI):");
  Serial.print(Fishino.RSSI());
  Serial.println(" dBm");
#endif
}

void setup() {
  Serial.begin(9600);
  //Resetta il fishino.
  Serial << F("Resetting Fishino...");
  while(!Fishino.reset())
  {
    Serial << ".";
    delay(500);
  }
  Fishino.setPhyMode(PHY_MODE_11G);

  Serial << F("Setting mode STATION_MODE\r\n");
  Fishino.setMode(STATION_MODE);
  Serial << F("Connecting to AP...");
  while(!Fishino.begin(MY_SSID, MY_PASS))
  {
    Serial << ".";
    delay(500);
  }
  Serial << F("OK\r\n");
  Fishino.staStartDHCP();
  Serial << F("Waiting for IP...");
  while(Fishino.status() != STATION_GOT_IP)
  {
    Serial << ".";
    delay(500);
  }
  Serial << F("OK\r\n");
  printWifiStatus();
  

}

FishinoClient client;

void send(double geophoneData)
{

  if(client.connect("www.samtrevano.ch",80) == 1)
  {
    client.println(F("POST /retrieve.php?data=%u' HTTP/1.1"));
    //client.println("Host: ");
    //client.print("Data:");
    client.print(geophoneData);
    client.flush();
    client.stop();
  }
  else
  {
    Serial.println("Connection failed");
  }
}

double randomDouble(double minf, double maxf)
{
  return minf + random(1UL << 31) * (maxf - minf) / (1UL << 31);
}

void loop() {
  //void send(randomDouble(-1.00, 1.00));
  Serial.println(randomDouble(-1.00, 1.00));
  delay(200);
}
