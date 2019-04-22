#include <Ethernet.h>
#include <LiquidCrystal.h>
#include <MySQL_Connection.h>
#include <MySQL_Cursor.h>
#include <EmonLib.h>

//medidor
EnergyMonitor emon1;
LiquidCrystal lcd(7, 8, 9, 10, 11, 12);
 
//Tensao da rede eletrica
int rede = 127.0;
 
//Pino do sensor SCT
int pino_sct = 1;

byte mac_addr[] = { 0x00, 0xAA, 0xBB, 0xCC, 0xDE, 0x02 };

IPAddress server_addr(192,168,0,26);  // IP of the MySQL *server* here
char user[] = "arduino";              // MySQL user login username
char password[] = "arduino1234";        // MySQL user login password

EthernetClient client;
MySQL_Connection conn((Client *)&client);

void setup() {
  Serial.begin(115200);
  while (!Serial); // wait for serial port to connect
  Ethernet.begin(mac_addr);
  Serial.println("Connecting...");
  if (conn.connect(server_addr, 3306, user, password)) {
    delay(1000);
  }
  else
    Serial.println("Connection failed.");
}

void loop() {

  lcd.begin(16, 2);
  lcd.clear();
  Serial.begin(115200);   
  //Pino, calibracao - Cur Const= Ratio/BurdenR. 1800/62 = 29. 
  emon1.current(pino_sct, 29);
  //Informacoes iniciais display
  lcd.setCursor(0,0);
  lcd.print("Corr.(A):");
  lcd.setCursor(0,1);
  lcd.print("Pot. (W):");
 
  //Calcula a corrente  
  double Irms = emon1.calcIrms(1480);
  //Mostra o valor da corrente
  Serial.print("Corrente : ");
  Serial.print(Irms); // Irms
  lcd.setCursor(10,0);
  lcd.print(Irms);
   
  //Calcula e mostra o valor da potencia
  Serial.print(" Potencia : ");
  Serial.println(Irms*rede);
  lcd.setCursor(10,1);
  lcd.print("      ");
  lcd.setCursor(10,1);
  lcd.print(Irms*rede,1);
  
  delay(70000);
  
 
  // Sample query
char prepend_INSERT_SQL[] = "Insert into arduino.arduino_consumo (potencia_w,consumo,tarifa,cod_equipamento) values (";
char INSERT_SQL[100];
char charray[12];
double potenciaf = Irms*rede;
dtostrf(potenciaf , 8,4, charray);

strcpy(INSERT_SQL, prepend_INSERT_SQL);
strcat(INSERT_SQL, charray);
strcat(INSERT_SQL, ",ROUND(potencia_w *0.038/1000,4),consumo*0.59,7);");

Serial.println(INSERT_SQL);
Serial.println(charray);

Serial.println("Recording data.");
    // Initiate the query class instance
MySQL_Cursor *cur_mem = new MySQL_Cursor(&conn);
  // Execute the query
cur_mem->execute(INSERT_SQL);
  // Note: since there are no results, we do not need to read any data
  // Deleting the cursor also frees up memory used
  delete cur_mem;   
  delay(70000); 

}

