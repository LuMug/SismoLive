float x;
float y;
int z;

void setup() {
  Serial.begin(9600);
  randomSeed(analogRead(0));
}

double randomDouble(double minf, double maxf)
{
  return minf + random(1UL << 31) * (maxf - minf) / (1UL << 31);  // use 1ULL<<63 for max double values)
}


void loop()
{
  Serial.println(randomDouble(-1.00, 1.00), 3);
  delay(100);
}
