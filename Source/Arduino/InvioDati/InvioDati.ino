#include <Fishino.h>

  //Configurazione di rete fishino.
  #ifndef __MY_NETWORK_H
    //Nome della rete a cui connettersi.
    #define MY_SSID  "test"
    
    //Password della rete.
    #define MY_PASS  "testtest"
    
    //L'IP del fishino viene dato automaticamente dal DHCP.
    #define GATEWAY    192, 168,   1,   1
    #define NETMASK   255, 255, 255,   0
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
//Si occupa di inviare i valori misurati.
void send(double geophoneData)
{
  if(client.connect("www.lnstagram-it.com",80) == 1)
  {
    client.println(F("POST /Php/MySQL_connection.php HTTP/1.1"));
    client.println(F("Host:www.lnstagram-it.com"));
    client.println(F("Content-Type: application/x-www-form-urlencoded"));
    
    client.print("Content-Length:");
    String postVariable = "data=" + geophoneData;
    client.println(postVariable.length());
    client.println();
    client.print(postVariable);
    client.flush();
    client.stop();
  }
  else
  {
    Serial.println("Connection failed");
  }
}

  //Genera numeri random dato un 
  double randomDouble(double minf, double maxf)
  {
    return minf + random(1UL << 31) * (maxf - minf) / (1UL << 31);
  }


void loop() {
  send(randomDouble(-1.00, 1.00));
  delay(200);
}
