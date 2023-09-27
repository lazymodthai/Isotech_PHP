var productsRef = [
  // ====================TD======================
  {
    id: "td03",
    name: "ตู้อบแห้งสายยางเครื่องช่วยหายใจ",
    brand: "Isotech",
    model: "TD-03",
  },
  {
    id: "td04",
    name: "ตู้อบแห้งสายยางเครื่องช่วยหายใจ",
    brand: "Isotech",
    model: "TD-04",
  },
  {
    id: "td05",
    name: "ตู้อบแห้งสายยางเครื่องช่วยหายใจ",
    brand: "Isotech",
    model: "TD-05",
  },
  // ====================WS======================
  {
    id: "ws01",
    name: "ตู้อุ่นน้ำเกลือ",
    brand: "Isotech",
    model: "WS-01",
  },
  {
    id: "ws02",
    name: "ตู้อุ่นน้ำเกลือ",
    brand: "Isotech",
    model: "WS-02",
  },
  {
    id: "wsc",
    name: "ตู้อุ่นน้ำเกลือ",
    brand: "Isotech",
    model: "WSC",
  },
  // ====================VAPOR======================
  {
    id: "aa8000",
    name: "เครื่องวิเคราะห์การทำงานของเครื่องให้สารสลบ",
    brand: "BC Biomedical",
    model: "AA-8000",
  },
  {
    id: "aa1000",
    name: "เครื่องวิเคราะห์การทำงานของเครื่องให้สารสลบ",
    brand: "BC Biomedical",
    model: "AA-1000",
  },
  {
    id: "fi8000p",
    name: "เครื่องวิเคราะห์การทำงานของเครื่องให้สารสลบ",
    brand: "Riken Keiki",
    model: "FI-8000P",
  },
  // ====================VEN======================
  {
    id: "faplus4080",
    name: "เครื่องวิเคราะห์การทำงานของเครื่องช่วยหายใจ",
    brand: "TSI",
    model: "FA Plus 4080",
  },
  {
    id: "fa4070",
    name: "เครื่องวิเคราะห์การทำงานของเครื่องช่วยหายใจ",
    brand: "TSI",
    model: "FA 4070",
  },
  {
    id: "pfc3000",
    name: "เครื่องวิเคราะห์การทำงานของเครื่องช่วยหายใจ",
    brand: "BC Biomedical",
    model: "PFC-3000",
  },
  {
    id: "citrex-h4",
    name: "เครื่องวิเคราะห์การทำงานของเครื่องช่วยหายใจ",
    brand: "CITREX",
    model: "H4",
  },
  {
    id: "citrex-h5",
    name: "เครื่องวิเคราะห์การทำงานของเครื่องช่วยหายใจ",
    brand: "CITREX",
    model: "H5",
  },
  // ====================Defib======================
  {
    id: "da-2006",
    name: "เครื่องวิเคราะห์การทำงานของเครื่องกระตุกหัวใจ",
    brand: "BC Biomedical",
    model: "DA-2006",
  },
  {
    id: "da-2006p",
    name: "เครื่องวิเคราะห์การทำงานของเครื่องกระตุกหัวใจ",
    brand: "BC Biomedical",
    model: "DA-2006P",
  },
  {
    id: "dp600",
    name: "เครื่องวิเคราะห์การทำงานของเครื่องกระตุกหัวใจ",
    brand: "S.P.L. Elektronik",
    model: "DP-600",
  },
  // ====================ESA======================
  {
    id: "sa2000",
    name: "เครื่องวิเคราะห์ความปลอดภัยทางไฟฟ้า",
    brand: "BC Biomedical",
    model: "SA-2000",
  },
  {
    id: "sa2001",
    name: "เครื่องวิเคราะห์ความปลอดภัยทางไฟฟ้า",
    brand: "BC Biomedical",
    model: "SA-2001",
  },
  {
    id: "sa2005",
    name: "เครื่องวิเคราะห์ความปลอดภัยทางไฟฟ้า",
    brand: "BC Biomedical",
    model: "SA-2005",
  },
  {
    id: "sa2010",
    name: "เครื่องวิเคราะห์ความปลอดภัยทางไฟฟ้า",
    brand: "BC Biomedical",
    model: "SA-2010",
  },
  {
    id: "sa2010s",
    name: "เครื่องวิเคราะห์ความปลอดภัยทางไฟฟ้า",
    brand: "BC Biomedical",
    model: "SA-2010S",
  },
  {
    id: "gm610",
    name: "เครื่องวิเคราะห์ความปลอดภัยทางไฟฟ้า",
    brand: "S.P.L. Elektronik",
    model: "GM-610",
  },
  {
    id: "gm410",
    name: "เครื่องวิเคราะห์ความปลอดภัยทางไฟฟ้า",
    brand: "S.P.L. Elektronik",
    model: "GM-410",
  },
  {
    id: "gm300",
    name: "เครื่องวิเคราะห์ความปลอดภัยทางไฟฟ้า",
    brand: "S.P.L. Elektronik",
    model: "GM-300",
  },
  // ====================Simulator======================
  {
    id: "nibp1010",
    name: "เครื่องจำลองสัญญาณชีพ",
    brand: "BC Biomedical",
    model: "NIBP-1010",
  },
  {
    id: "nibp1020",
    name: "เครื่องจำลองสัญญาณชีพ",
    brand: "BC Biomedical",
    model: "NIBP-1020",
  },
  {
    id: "nibp1030",
    name: "เครื่องจำลองสัญญาณชีพ",
    brand: "BC Biomedical",
    model: "NIBP-1030",
  },
  {
    id: "nibp1040",
    name: "เครื่องจำลองสัญญาณชีพ",
    brand: "BC Biomedical",
    model: "NIBP-1040",
  },
  // ====================ECG Simulator======================
  {
    id: "ps2005",
    name: "เครื่องจำลองสัญญาณชีพ",
    brand: "BC Biomedical",
    model: "PS-2005",
  },
  {
    id: "ps2006",
    name: "เครื่องจำลองสัญญาณชีพ",
    brand: "BC Biomedical",
    model: "PS-2006",
  },
  {
    id: "ps2010",
    name: "เครื่องจำลองสัญญาณชีพ",
    brand: "BC Biomedical",
    model: "PS-2010",
  },
  // ====================Simulator======================
  {
    id: "ps2105",
    name: "เครื่องจำลองสัญญาณชีพ",
    brand: "BC Biomedical",
    model: "PS-2105",
  },
  {
    id: "ps2110",
    name: "เครื่องจำลองสัญญาณชีพ",
    brand: "BC Biomedical",
    model: "PS-2110",
  },
  // ====================Simulator======================
  {
    id: "ps2210",
    name: "เครื่องจำลองสัญญาณชีพ",
    brand: "BC Biomedical",
    model: "PS-2210",
  },
  {
    id: "ps2220",
    name: "เครื่องจำลองสัญญาณชีพ",
    brand: "BC Biomedical",
    model: "PS-2220",
  },
  {
    id: "ps2240",
    name: "เครื่องจำลองสัญญาณชีพ",
    brand: "BC Biomedical",
    model: "PS-2240",
  },
  // ====================Pressure======================
  {
    id: "dpm2001",
    name: "เครื่องวัดแรงดัน",
    brand: "BC Biomedical",
    model: "DPM-2001",
  },
  {
    id: "dpm2001plus",
    name: "เครื่องวัดแรงดัน",
    brand: "BC Biomedical",
    model: "DPM-2001 Plus",
  },
  {
    id: "dpm2100",
    name: "เครื่องวัดแรงดัน",
    brand: "BC Biomedical",
    model: "DPM-2100",
  },
  // ====================Infusion======================
  {
    id: "ipa3400",
    name: "เครื่องวิเคราะห์การทำงานของ Infusion Pump",
    brand: "BC Biomedical",
    model: "IPA-3400",
  },
  // ====================Flow======================
  {
    id: "defender510",
    name: "เครื่องวัดอัตราการไหลของแกส",
    brand: "MesaLabs",
    model: "Defender 510",
  },
  {
    id: "defender520",
    name: "เครื่องวัดอัตราการไหลของแกส",
    brand: "MesaLabs",
    model: "Defender 520",
  },
  {
    id: "defender530",
    name: "เครื่องวัดอัตราการไหลของแกส",
    brand: "MesaLabs",
    model: "Defender 530",
  },
  // ====================Ultrasound======================
  {
    id: "upm-dt-10pa",
    name: "เครื่องวัดพลังงานของเครื่องอัลตร้าซาวน์",
    brand: "OHMIC",
    model: "UPM-DT-1PA",
  },
  // ====================ESU======================
  {
    id: "hf400",
    name: "เครื่องวิเคราะห์การทำงานของเครื่องตัดจี้",
    brand: "S.P.L. Elektronik",
    model: "HF-400",
  },
];
