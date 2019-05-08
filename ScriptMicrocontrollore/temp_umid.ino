#include <dht11.h>
#include <WiFiClient.h>
#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>

#define pin 2
dht11 sens;
float temp, umid;
//const char* ssid     = "EmaPhone";
//const char* password = "pippo2000";
const char* ssid = "CowHouse";
const char* password = "nonnanina32";

void setup() {
  delay(4000);
  Serial.begin(115200);
 // HTTPClient http;
  //Collegamento wifi
  WiFi.begin(ssid, password);
  Serial.println();
  Serial.println();
  Serial.print("Collegando a: ");
  Serial.println(ssid);
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED)
  {
    delay(500);
    Serial.println(".");
  }
    Serial.println("");
    Serial.println("Wifi connesso");
}

void loop() {
  int chk=sens.read(pin);
  temp=sens.temperature;
  umid=sens.humidity;
  Serial.print("Temperatura: ");
  Serial.println(temp);
  Serial.print("Umidità: ");
  Serial.println(umid);
  HTTPClient http;
  String url = "http://192.168.0.17/ema/8266/temp_umid/input.php?temp="+String(temp)+"&umid="+String(umid);
  Serial.println(url);     
  http.begin(url);
  int httpCode = http.GET();
  if(httpCode > 0){
    Serial.printf("[HTTP] GET...code: %d\n", httpCode);
    if(httpCode == HTTP_CODE_OK){
        String payload = http.getString();
        Serial.println(payload);
    }
  }else{
      Serial.printf("[HTTP] GET... failed, error: %s\n", http.errorToString(httpCode).c_str());
  }
  http.end();
  delay(60000);
}

