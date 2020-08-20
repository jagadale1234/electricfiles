const int sensorIn = A0;
int mVperAmp = 185; // 5A version SC712 – use 100 for 20A Module or 66 for 30A Module
int Watt = 0;
double Voltage = 0;
double VRMS = 0;
double AmpsRMS = 0;

void setup() {

Serial.begin(9600);

}

void loop() {
Voltage = getVPP();
VRMS = (Voltage/2.0) *0.707; //root 2 is 0.707 – dealing with sine
AmpsRMS = (VRMS * 1000)/mVperAmp;

Serial.print(AmpsRMS);

Watt = (AmpsRMS*240/1.3);
// note: 1.3 is my own empirically established calibration factor
// as the voltage measured at A0 depends on the lenght of the OUT-to-A0 wire
// 240 is the mean AC grid power voltage – this parameter fluctuates local
Serial.print(Watt);
}
float getVPP()
{
float result;
int readValue; // value read from the sensor
int maxValue = 0; // store max value here
int minValue = 1024; // store min value here

uint32_t start_time = millis();
while((millis()-start_time) < 1000) //sample for 1 Sec
{
readValue = analogRead(sensorIn);
// see if you have a new maxValue
if (readValue > maxValue)
{
/*record the maximum sensor value*/
maxValue = readValue;
}
if (readValue < minValue)
{
/*record the minimum sensor value*/
minValue = readValue;
}
}

result=((maxValue-minValue)*5.0)/1024.0;

return result;
}
