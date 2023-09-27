<link rel="stylesheet" href="scss/sidebar.css" />
<!-- <script src="./productsJS/list.js"></script> -->
<!-- Contents -->
<table
  border="0"
  style="
    color: #005601;
    font-size: 1em;
    background-color: white;
    width: 100%;
    border-radius: 15px;
    margin-bottom: 10px;
  "
>
  <tbody>
    <tr>
      <td width="70" rowspan="2" align="center">
        <img
          src="https://icons-for-free.com/iconfiles/png/512/cell+communication+interface+multimedia+phone+telephone+icon-1320185665809934611.png"
          width="50"
          height="51"
          alt=""
        />
      </td>
      <td align="left">
        <span>โทรศัพท์: </span><a href="tel:028844398">02-884-4398</a>
      </td>
    </tr>
    <tr>
      <td align="left">
        <span>มือถือ: </span><a href="tel:0818234285">081-823-4285</a>
      </td>
    </tr>
  </tbody>
</table>
<!-- Menu -->
<div class="header">Isotech</div>
<table class="l_menu">
  <tbody>
    <tr>
      <td onclick="ggFunction('itemsTD','Isotech')">
        • ตู้อบสายยาง/ตู้อุ่นน้ำเกลือ
      </td>
    </tr>
  </tbody>
</table>
<div class="header">BC Biomedical</div>
<table class="l_menu">
  <tbody>
    <tr>
      <td onclick="ggFunction('itemsDefib','BC Biomedical')">
        • Defibrillator Analyzer
      </td>
    </tr>
    <tr>
      <td onclick="ggFunction('itemsECG','BC Biomedical')">
        • ECG Simulator / Patient Simulator
      </td>
    </tr>
    <tr>
      <td onclick="ggFunction('itemsESA','BC Biomedical')">
        • Electrical Safety Analyzer
      </td>
    </tr>
    <tr>
      <td onclick="ggFunction('itemsIFP','BC Biomedical')">
        • Infusion Pump Analyzer
      </td>
    </tr>
    <tr>
      <td onclick="ggFunction('itemsNIBP','BC Biomedical')">
        • NIBP Simulator
      </td>
    </tr>
    <tr>
      <td onclick="ggFunction('itemsPressure','BC Biomedical')">
        • Pressure Tester
      </td>
    </tr>
    <tr>
      <td onclick="ggFunction('itemsUS','Ohmic')">• Ultrasound Power Meter</td>
    </tr>
    <tr>
      <td onclick="ggFunction('itemsVapor','BC Biomedical')">
        • Vaporizer Analyzer
      </td>
    </tr>
    <tr>
      <td onclick="ggFunction('itemsVen','BC Biomedical')">
        • Ventilator Analyzer
      </td>
    </tr>
  </tbody>
</table>
<div class="header">S.P.L. Elektronik</div>
<table class="l_menu">
  <tbody>
    <tr>
      <td onclick="ggFunction('itemsDefib','S.P.L. Elektronik')">
        • Defibrillator Analyzer
      </td>
    </tr>
    <tr>
      <td onclick="ggFunction('itemsESA','S.P.L. Elektronik')">
        • Electrical Safety Analyzer
      </td>
    </tr>
    <tr>
      <td onclick="ggFunction('itemsESU','S.P.L. Elektronik')">
        • Electrosurgical Analyzer
      </td>
    </tr>
  </tbody>
</table>
<div class="header">MesaLabs</div>
<table class="l_menu">
  <tbody>
    <tr>
      <td onclick="ggFunction('itemsFlow','MesaLabs')">• Primary Flow Meter</td>
    </tr>
  </tbody>
</table>
<!-- Other -->
<hr />
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Covid</title>
<link href="https://fonts.googleapis.com/css?family=Mitr" rel="stylesheet" />
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
/>

<!-- Start HTML -->

<script>
  function Covid19() {
    let url = "https://static.easysunday.com/covid-19/getTodayCases.json";
    fetch(url)
      .then(function (response) {
        return response.json();
      })
      .then(function (data) {
        let r1,
          r2,
          r3,
          r4 = "";
        let upper = `<i class="fa fa-arrow-up" aria-hidden="true"></i> +`;
        let lower = `<i class="fa fa-arrow-down" aria-hidden="true"></i> `;
        let stand = `<i class="fa fa-minus-circle" aria-hidden="true"></i> `;
        if (data.NewConfirmed > 0) {
          r1 = upper;
        } else if (data.NewConfirmed < 0) {
          r1 = lower;
        } else {
          r1 = stand;
        }
        if (data.NewRecovered > 0) {
          r2 = upper;
        } else if (data.NewRecovered < 0) {
          r2 = lower;
        } else {
          r2 = stand;
        }
        if (data.NewHospitalized > 0) {
          r3 = upper;
        } else if (data.NewHospitalized < 0) {
          r3 = lower;
        } else {
          r3 = stand;
        }
        if (data.NewDeaths > 0) {
          r4 = upper;
        } else if (data.NewDeaths < 0) {
          r4 = lower;
        } else {
          r4 = stand;
        }
        document.getElementById("covid19").innerHTML = `
          <div class="covidContainer">
          <div class="covidR Deaths">
            <p>เสียชีวิต</p>
            <p>${data.Deaths.toLocaleString("th-th")} <span>(${
          r4 + data.NewDeaths.toLocaleString("th-th")
        })</span></p>
          </div>
          <div class="covidR covidConfirmed">
            <h4>ติดเชื้อสะสม</h4>
            <p>${data.Confirmed.toLocaleString("th-th")} <span>(${
          r1 + data.NewConfirmed.toLocaleString("th-th")
        })</span></p>
          </div>
      
          <div class="covidR Recovered">
            <p>หายแล้ว</p>
            <p>${data.Recovered.toLocaleString("th-th")} <span>(${
          r2 + data.NewRecovered.toLocaleString("th-th")
        })</span></p>
          </div>
          <div class="covidR Hospitalized">
            <p>กำลังรักษา</p>
            <p>${data.Hospitalized.toLocaleString("th-th")} <span>(${
          r3 + data.NewHospitalized.toLocaleString("th-th")
        })</span></p>
          </div>
          <div style="text-shadow:none;">อัพเดทเมื่อ ${data.UpdateDate.toLocaleString(
            "th-th"
          )}น.</div>
      
        </div>
          
          
          `;
      });
  }
  window.onload = Covid19();
</script>
<style>
  .covidContainer {
    margin: auto;
    width: 100%;
    display: flex;
    flex-direction: column;
    text-shadow: 2px 1px 2px rgb(0, 0, 0);
    overflow: hidden;
  }
  .covidR {
    background-color: #3d9ad8;
    border-radius: 5px;
    text-align: center;
    margin: 5px;
    padding: 0;
  }
  .covidR h4,
  .covidR p {
    margin: 5px;
    color: rgb(255, 255, 255);
  }
  .Recovered {
    background-color: #42d83d;
  }
  .Hospitalized {
    background-color: #e2c12d;
  }
  .Deaths {
    background-color: #a11f1f;
  }
</style>
<h3 style="text-align: center">สถานการณ์ Covid-19</h3>
<div id="covid19"></div>

<!-- End HTML -->
