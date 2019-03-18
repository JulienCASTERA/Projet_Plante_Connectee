#define LDR_PIN A0
#define TEMP_PIN A1
#define HUMI_PIN A2

float temp_value;
int ldr_value;
int humi_value;

void setup() {
  pinMode(LDR_PIN, INPUT);
  pinMode(TEMP_PIN, INPUT);
  pinMode(HUMI_PIN, INPUT);
  
  //inutile pour le programme final
  Serial.begin(9600);
}

void loop() {
  //Luminosity
  ldr_value = analogRead(LDR_PIN);
  
  //Température
  temp_value = analogRead(TEMP_PIN);
  temp_value = temp_value * 0.48828125;

  //humidity
  humi_value = analogRead(HUMI_PIN);

  delay(3000);
  
  //inutile pour le programme final
  Serial.print("Luminosité :");
  Serial.println(ldr_value);
  
  Serial.print("Temperature :");
  Serial.println(temp_value);

  Serial.print("humidity (%) :");
  Serial.println(humi_value);
}
