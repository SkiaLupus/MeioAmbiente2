<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Higrômetro</title>
    <link rel="stylesheet" href="sty.css">
</head>
<body>
    <header>
        <h1>Higrômetro</h1>
        <nav>
            <ul>
                <li><a href="404.html">Voltar</a></li>
                <li><a href="#artigo2">Higrômetros Mecânicos</a></li>
                <li><a href="#artigo3">Higrômetro Analógico</a></li>
                <li><a href="#artigo4">Higrômetro Digital</a></li>
                <li><a href="#artigo5">Codigo do Higrômetro</a></li>
            </ul>
        </nav>
<section id="artigo1">
    <article>
    <h2>Sobre o Higrômetro</h2>
        <img src="https://acdn.mitiendanube.com/stores/002/690/878/products/termo-higrometro-simpla-th01-16281-6c74a647ec241b4c0516720873781161-640-0.png" alt="Higrômetro">
      <p>O primeiro dispositivo para medir a umidade atmosférica, precursor do moderno higrômetro, foi concebido por Johann Heinrich Lambert (1728 – 1777).Os suíços Horace Bénédict de Saussure (1740 – 1799) e Jean-André de Luc (1727 – 1817) também desempenharam papéis importantes na evolução dos higrômetros. Em 1783, Saussure desenvolveu um higroscópio que funcionava medindo a alteração no comprimento de um fio de cabelo em resposta à umidade do ar. Por sua vez, André de Luc criou um instrumento similar utilizando um fino corte de osso de baleia. Outro marco histórico foi o higrômetro desenvolvido pelo inglês John Frederic Daniell (1790–1845), embora este exigisse montagem mais complexa e medições mais demoradas.</p>
   
      <p> Existem cinco principais categorias de higrômetros: psicrômetros, higrômetros de absorção, higrômetros de condensação, higrômetros elétricos e higrômetros químicos.</p>
      
      <p>Os psicrômetros consistem em dois termômetros colocados lado a lado, um com bulbo seco e outro com bulbo úmido envolvido em gaze embebida em água destilada. A evaporação da água faz com que o termômetro úmido registre uma temperatura mais baixa do que o termômetro seco. A diferença de temperatura entre os dois termômetros permite calcular a umidade atmosférica.</p>
      
      <p>Os higrômetros de absorção funcionam pela absorção do vapor de água por uma substância química higroscópica, semelhantes aos instrumentos utilizados por Saussure e de Luc.</p>
      
      <p>Os higrômetros de condensação operam de maneira semelhante aos psicrômetros. Vapor de água é conduzido sobre uma superfície fria, onde condensa, e a diferença de temperatura entre o condensado e a temperatura ambiente permite determinar a umidade atmosférica.</p>
      
      <p>Os higrômetros elétricos utilizam a variação da resistência elétrica de uma substância em resposta à umidade atmosférica. Eletrodos metálicos revestidos com sais captam a umidade, alterando a resistência elétrica, o que permite determinar a umidade do ar.</p>
      
      <p>Por fim, os higrômetros químicos empregam substâncias hidrofílicas para determinar a umidade atmosférica, medindo o aumento de massa dessas substâncias devido à absorção de vapor de água.</p>
           <section id="artigo2">
            <article>
                <h2>Higrômetros Mecânicos</h2>
                <img src="https://m.media-amazon.com/images/I/61legroxf+L._AC_UF894,1000_QL80_.jpg" alt="Higrômetro Mecânicos">
                
                <p>Os higrômetros mecânicos operam com base na dilatação e contração de certos materiais sensíveis à variação da umidade. Cabelos e pelos são exemplos comuns desses materiais, e alguns instrumentos de medição e controle de umidade utilizam pelos de cavalo. Nesses higrômetros, a variação no comprimento do elemento é proporcional à mudança na umidade do ambiente. No entanto, os higrômetros de cabelo exigem manutenção regular para prevenir o ressecamento e a quebra dos fios, necessitando de tratamento adequado.</p>
            </article>
        </section>
    
        <section id="artigo3">
            <article>
                <h2>Higrômetros Eletrônicos Analógicos</h2>
                <img src="https://m.media-amazon.com/images/I/61pDJ5lfs6L._AC_UF894,1000_QL80_.jpg" alt="Higrômetros Eletrônicos Analógicos">
                <p>Esses higrômetros usam um sensor eletrônico para medir a umidade. Eles geralmente têm um mostrador analógico para exibir a leitura. O sensor pode ser baseado em capacitância, resistência ou outros princípios eletrônicos. Eles podem oferecer uma boa precisão e são relativamente acessíveis.</p>
                
            </article>
        </section>
    
        <section id="artigo4">
            <article>
                <h2>Higrômetros Eletrônicos Digitais</h2>
                <img src="https://images.tcdn.com.br/img/img_prod/1239939/termo_higrometro_digital_com_sensor_externo_e_relogio_ak28_new_769_1_58cc4ede43ee7e378bda703021c204be.jpg" alt="Higrômetros Eletrônicos Digitais">
            
                <p>São higrômetros que usam um sensor eletrônico para medir a umidade, mas exibem a leitura em formato digital em vez de analógico. Eles são frequentemente mais precisos que os modelos analógicos e podem oferecer recursos adicionais, como registro de leituras históricas ou conectividade com outros dispositivos, como smartphones ou computadores.</p>
                </article>
            <section id="artigo5">
            <article>
                <h2>Codigo do Higrômetro em linguagem C </h2>        
                <p>#include <stdio.h></stdio.h></p>
<p>#include <stdlib.h></p>
<p>#include <wiringPi.h> // Biblioteca para Raspberry Pi (pode variar de acordo com o hardware utilizado)</p>
<p>#include "DHT.h"     // Biblioteca para o sensor DHT</p>
<p>#include "adc.h"     // Biblioteca para leitura de ADC (exemplo: MCP3008)</p>

<p>#define DHTPIN 7        // Pino GPIO conectado ao sensor DHT</p>
<p>#define DHTTYPE DHT22   // Tipo do sensor (DHT11 ou DHT22)</p>
<p>#define VREF 3.3        // Referência de tensão do ADC</p>
<p>#define PRESSURE_CHANNEL 0 // Canal do ADC para leitura da pressão</p>
<p>#define VOLTAGE_CHANNEL 1 // Canal do ADC para leitura da tensão de saída do higrômetro</p>

<p>DHT dht(DHTPIN, DHTTYPE); // Inicialização do objeto DHT</p>

<p>// Função para ler o valor da pressão de vapor de água</p>
<p>float readVaporPressure() {</p>
  <p>  // Ler a tensão de saída do higrômetro</p>
  <p>  int adc_value = analogRead(VOLTAGE_CHANNEL</p>
   <p> float voltage = (adc_value * VREF) / 1023.0; // Conversão do valor do ADC para tensão</p>
   <p> // Aqui pode ser aplicado um algoritmo para converter a tensão lida em pressão de vapor de água</p>
  <p>  // Por exemplo, utilizando uma curva de calibração específica para o seu sensor</p>
  <p>  return vapor_pressure;</p>
<p>}</p>

<p>int main() {</p>
   <p> if (wiringPiSetup() == -1) {</p>
   <p>     printf("Erro ao inicializar o WiringPi!\n");</p>
    <p>    return 1;</p>
   <p> }</p>

  <p>  if (!dht.begin()) {</p>
  <p>      printf("Falha ao iniciar o sensor DHT!\n");</p>
   <p>     return 1;</p>
   <p> }</p>

  <p>  // Inicializa o ADC para leitura da pressão de vapor de água</p>
  <p>  if (adcSetup() == -1) {</p>
   <p>     printf("Falha ao inicializar o ADC!\n");</p>
   <p>     return 1;</p>
  <p>  }</p>

  <p>  while (1) {</p>
       <p> delay(2000); // Aguarda 2 segundos para a próxima leitura</p>

       <p> // Lê a umidade e a temperatura do sensor DHT</p>
      <p>  float humidity = dht.readHumidity();</p>
       <p> float temperature = dht.readTemperature();</p>

       <p> // Lê a pressão de vapor de água</p>
      <p>  float vapor_pressure = readVaporPressure();</p>

      <p>  // Verifica se a leitura do sensor foi bem-sucedida</p>
      <p>  if (isnan(humidity) || isnan(temperature)) {</p>
       <p>     printf("Falha ao ler os dados do sensor DHT!\n");</p>
        <p>    continue;</p>
       <p> }</p>

       <p> // Verifica se a leitura da pressão de vapor de água foi bem-sucedida</p>
       <p> if (vapor_pressure == -1) {</p>
          <p>  printf("Falha ao ler os dados do higrômetro!\n");</p>
          <p>  continue;</p>
       <p> }</p>
       <p> // Calcula a umidade relativa do ar</p>
       <p> float relative_humidity = (vapor_pressure / 610.78) * 100; // Calculando a umidade relativa do ar com base na pressão de vapor de água</p>

       <p> // Aqui podem ser aplicadas técnicas avançadas de processamento de sinais para garantir precisão</p>
      <p>  // Por exemplo, filtragem de dados, compensação de erros, etc.</p>

       <p> // Exibe os resultados</p>
       <p> printf("Umidade: %.2f%%\n", humidity);</p>
        <p>printf("Temperatura: %.2f°C\n", temperature);</p>
       <p> printf("Pressão de Vapor de Água: %.2f Pa\n", vapor_pressure);</p>
        <p>printf("Umidade Relativa do Ar: %.2f%%\n", relative_humidity);</p>
    <p>}</p>

    <p>return 0;</p>
<p>}</p>
<p>.</p>
                </article>
        </section>
        <section id="Referencias">
            <article>
                <h2>Referências</h2>
                <p>• The Encyclopedia of Earth: De Saussure, Horace Bénédict, consultado em 09/11/2012.</p>
                <p>• C. F. Partington, ed., The British cyclopaedia of the arts, sciences, history, geography, literature, natural history, and biography, Volume I, London: Orr & Smith, 1838.</p>
                <p>• K. Hile, The handy weather answer book, Canton, MI: Visible Ink Press, 2009, ISBN: 978-1-578-59221-0.                </p>
                <p>• R. K. Rajput, Engineering thermodynamics, Jones & Bartlett Learning, 2009, ISBN: 978-1-934-01514-8.</p>    
            </article>
        </section>
    </body>
    </html>
    
