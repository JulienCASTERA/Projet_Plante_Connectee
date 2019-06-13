#define LDR_PIN A3
#define TEMP_PIN A4
#define HUMI_PIN A2

float temp_value;
int ldr_value;
float humi_value;

void setup() {
  pinMode(LDR_PIN, INPUT);
  pinMode(TEMP_PIN, INPUT);
  pinMode(HUMI_PIN, INPUT);
  
  //inutile pour le programme final
  Serial.begin(9600);
}

void loop() {
  //Luminosity (Lux)
  ldr_value = analogRead(LDR_PIN);
  ldr_value = ldr_value * 2.34;
  
  //Température (°C)
  temp_value = analogRead(TEMP_PIN);
  temp_value = temp_value * 0.48828125;

  //humidity (%)
  humi_value = analogRead(HUMI_PIN) /10.23;
  humi_value = humi_value / 10.23;

  delay(2000);
  
  //inutile pour le programme final
  Serial.print("Luminosité :");
  Serial.println(ldr_value);
  
  Serial.print("Temperature :");
  Serial.println(temp_value);

  Serial.print("humidity (%) :");
  Serial.println(humi_value);
}
