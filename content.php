<link rel="stylesheet" href="scss/products.css" />
<link rel="stylesheet" href="scss/main.css" />
<!-- Item -->
<script src="./productsJS/items.js"></script>
<script src="./productsJS/list.js"></script>
<script src="./productsJS/spec.js"></script>
<script src="./productsJS/speclist.js"></script>
<script src="./productsJS/ref.js"></script>
<script src="./productsJS/slider-image.js"></script>
<script>
  $(function () {
    $("#sidebar").load("sidebar.php");
    $("#slideshow").load("slideshow.php");
    $("#slideshow_home").load("slideshow_home.php");
  });
  // -------------GET URL--------------------
  const getURL = (url) => {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const page = urlParams.get("page");
    return page;
  };
  // ----------------------------------------
  const selectItem = () => {
    let x = document.getElementById("itemSelect").value;
    if (x == "allItem") {
      $("#productListAll").html(allItem);
    } else {
      $("#productListAll").html(showList(window[x]));
    }
  };
</script>
<script>
  $(document).ready(function () {
    $("#productCon").attr("style", "display:none");
    let url = getURL();
    // ----Products----
    if (url) {
      $("#maincontent").attr("style", "display:none");
      $("#productCon").attr("style", "display:block");
      // ----HeadName----
      $("#headname").html(getHead(url));
      // ----Info----
      let infoUrl = `./page/${url}`;
      var http = new XMLHttpRequest();
      http.open("HEAD", infoUrl, false);
      http.send();
      if (http.status == 404) {
        $("#info").load(`./page/nopage.html`);
      } else {
        $("#info").load(infoUrl);
      }
      // ----Specs----
      $("#spec").html(specList(url));
    }
    $("#productListAll").html(allItem);
    showList(itemsUS);
    $("#productListTD").html(showList(itemsTD));
  });
</script>
<div class="content">
  <div class="sidebar" id="sidebar"></div>
  <div class="maincontent" id="maincontent">
    <div class="comname">บริษัท ไอโซเทค อินสตรูเมนท์ (ไทยแลนด์) จำกัด</div>
    <!-- Load -->
    <div id="slideshow_home"></div>
    <div id="item_container">
      <script>
        // Show Item List
        var allItem =
          showList(itemsVapor) +
          showList(itemsVen) +
          showList(itemsDefib) +
          showList(itemsESA) +
          showList(itemsNIBP) +
          showList(itemsECG) +
          showList(itemsPressure) +
          showList(itemsIFP) +
          showList(itemsFlow) +
          showList(itemsUS) +
          showList(itemsESU);
      </script>
      <script></script>
      <div class="itemName">ตู้อุ่นสารละลาย/ตู้อบสายยาง</div>
      <div id="productListTD" class="pdFlex"></div>
      <div class="itemName">เครื่องสอบเทียบอุปกรณ์ทางการแพทย์</div>
      <div>
        <label>เลือกดูเฉพาะ : </label>
        <select id="itemSelect" onchange="selectItem()" style="width: 72vw">
          <option value="allItem">ทั้งหมด</option>
          <option value="itemsDefib">
            Defibrillator Analyzer
            (เครื่องวิเคราะห์การทำงานของเครื่องกระตุกหัวใจ)
          </option>
          <option value="itemsECG">
            ECG Simulator / Patient Simulator (เครื่องจำลองสัญญาณชีพ ECG)
          </option>
          <option value="itemsESA">
            Electrical Safety Analyzer (เครื่องวิเคราะห์ความปลอดภัยทางไฟฟ้า)
          </option>
          <option value="itemsIFP">
            Infusion Pump Analyzer
            (เครื่องวิเคราะห์การทำงานของเครื่องให้สารละลาย)
          </option>
          <option value="itemsNIBP">
            NIBP Simulator (เครื่องจำลองสัญญาณชีพเครื่องวัดความดัน NIBP, BP)
          </option>
          <option value="itemsPressure">
            Pressure Tester (เครื่องวัดแรงดันบวก/ลบ)
          </option>
          <option value="itemsFlow">
            Primary Flow Meter (เครื่องวัดอัตราการไหล)
          </option>
          <option value="itemsUS">
            Ultrasound Power Meter (เครื่องวัดพลังงานของเครื่องอัลตร้าซาวน์)
          </option>
          <option value="itemsVapor">
            Vaporizer Analyzer (เครื่องวิเคราะห์การทำงานของเครื่องให้สารสลบ)
          </option>
          <option value="itemsVen">
            Ventilator Analyzer (เครื่องวิเคราะห์การทำงานของเครื่องช่วยหายใจ)
          </option>
          <option value="itemsESU">
            Electrosurgical Analyzer (เครื่องวิเคราะห์การทำงานของเครื่องตัดจี้)
          </option>
        </select>
      </div>
      <div id="productListAll" class="pdFlex"></div>
    </div>
  </div>
  <div id="productCon">
    <div class="comname" id="headname"></div>
    <!-- Button trigger modal -->
    <div
      class="mx-auto"
      data-bs-toggle="modal"
      data-bs-target="#productModal"
      style="cursor: pointer; text-align: center"
      id="firstImg"
    ></div>
    <!-- Modal -->
    <div
      class="modal fade"
      id="productModal"
      tabindex="-1"
      aria-labelledby="productModalLabel"
      aria-hidden="true"
      style="text-align: center"
    >
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="productModalLabel">รูปสินค้า</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div id="slideshow"></div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              ปิด
            </button>
          </div>
        </div>
      </div>
    </div>

    <div id="info"></div>
    <table class="tb_spec">
      <tbody id="spec"></tbody>
    </table>
  </div>
</div>
