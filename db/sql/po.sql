CREATE TABLE cal_po(
    ID INTEGER(11)  NOT NULL PRIMARY KEY AUTO_INCREMENT
    ,Code VARCHAR(20)
    ,Caldate TIMESTAMP
    ,Room_T FLOAT(4)
    ,Room_H FLOAT(4)
-- ECG
    ,S_HR1 INTEGER(3) DEFAULT '60'
    ,S_HR2 INTEGER(3) DEFAULT '90'
    ,S_HR3 INTEGER(3) DEFAULT '120'
    ,S_HR1_Raw VARCHAR(50)
    ,S_HR2_Raw VARCHAR(50)
    ,S_HR3_Raw VARCHAR(50)
    ,S_HR1_Cal FLOAT(10)
    ,S_HR2_Cal FLOAT(10)
    ,S_HR3_Cal FLOAT(10)
-- SpO2
    ,S_Sensor VARCHAR(20) DEFAULT 'Nellcor'
    ,S_PO1 INTEGER(3) DEFAULT '90'
    ,S_PO2 INTEGER(3) DEFAULT '94'
    ,S_PO3 INTEGER(3) DEFAULT '98'
    ,S_PO1_Raw VARCHAR(50)
    ,S_PO2_Raw VARCHAR(50)
    ,S_PO3_Raw VARCHAR(50)
    ,S_PO1_Cal FLOAT(10)
    ,S_PO2_Cal FLOAT(10)
    ,S_PO3_Cal FLOAT(10)
);