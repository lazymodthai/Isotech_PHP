<?php

function PM($name, $pos)
{
    if ($name == "Bedside Monitor" || $name == "Vital Signs Monitor" || $name == "Monitor(MRI)" || $name == "Monitor CT") {
        if ($pos == 1) return "<span style='color:#00FFFB'>หน้าปัด</span>";
        if ($pos == 2) return "<span style='color:#00FFFB'>สวิตช์ เปิด-ปิด Power</span>";
        if ($pos == 3) return "<span style='color:#00FFFB'>สวิตช์ เลือก Mode การใช้งาน</span>";
        if ($pos == 4) return "<span style='color:#00FFFB'>ปลั๊กไฟ AC</span>";
        if ($pos == 5) return "<span style='color:#00FFFB'>สายเสียบปลั๊กไฟ AC</span>";
        if ($pos == 6) return "<span style='color:#00FFFB'>จุดต่อสายดิน</span>";
        if ($pos == 7) return "<span style='color:#00FFFB'>Electrode</span>";
        if ($pos == 8) return "<span style='color:#00FFFB'>NIBP Arm Cuff</span>";
        if ($pos == 9) return "<span style='color:#00FFFB'>NIBP Tubing</span>";
        if ($pos == 10) return "<span style='color:#00FFFB'>SpO2 Sensor</span>";
        if ($pos == 11) return "<span style='color:#00FFFB'>Temperature Sensor</span>";
        if ($pos == 12) return "<span style='color:#00FFFB'>Monitor Display</span>";
        if ($pos == 13) return "<span style='color:#00FFFB'>Recorder</span>";
        if ($pos == 14) return "<span style='color:#00FFFB'>Paper</span>";
        // ----------------------------------------------------------------
        if ($pos == 16) return "<span style='color:#00FF8B'>ECG Waveform</span>";
        if ($pos == 17) return "<span style='color:#00FF8B'>Heart Rate</span>";
        if ($pos == 18) return "<span style='color:#00FF8B'>Gain Amplifier</span>";
        if ($pos == 19) return "<span style='color:#00FF8B'>Speed Tracing 25 mm/sec</span>";
        if ($pos == 20) return "<span style='color:#00FF8B'>Speed Tracing 50 mm/sec</span>";
        if ($pos == 21) return "<span style='color:#00FF8B'>Frequency Response</span>";
        if ($pos == 22) return "<span style='color:#00FF8B'>Filter 50 Hz.</span>";
        if ($pos == 23) return "<span style='color:#00FF8B'>Blood Pressure (Normal)</span>";
        if ($pos == 24) return "<span style='color:#00FF8B'>Blood Pressure (High)</span>";
        if ($pos == 25) return "<span style='color:#00FF8B'>Blood Pressure (Low)</span>";
        if ($pos == 26) return "<span style='color:#00FF8B'>Temperature</span>";
        if ($pos == 27) return "<span style='color:#00FF8B'>Respiration Rate</span>";
        if ($pos == 28) return "<span style='color:#00FF8B'>Alarm</span>";
        if ($pos == 29) return "<span style='color:#00FFFB'></span>";
        if ($pos == 30) return "<span style='color:#00FFFB'></span>";
    }
    if ($name == "Digital Blood Pressure" || $name == "Ambulatory Blood Pressure Monitoring(บันทึกความดัน24 Hr)") {
        if ($pos == 1) return "<span style='color:#00FFFB'>หน้าปัด</span>";
        if ($pos == 2) return "<span style='color:#00FFFB'>สวิตช์ เปิด-ปิด Power</span>";
        if ($pos == 3) return "<span style='color:#00FFFB'>สวิตช์ เลือก Mode การใช้งาน</span>";
        if ($pos == 4) return "<span style='color:#00FFFB'>ปลั๊กไฟ AC</span>";
        if ($pos == 5) return "<span style='color:#00FFFB'>สายเสียบปลั๊กไฟ AC</span>";
        if ($pos == 6) return "<span style='color:#00FFFB'>จุดต่อสายดิน</span>";
        if ($pos == 7) return "<span style='color:#00FFFB'>NIBP Arm Cuff</span>";
        if ($pos == 8) return "<span style='color:#00FFFB'>NIBP Tubing</span>";
        if ($pos == 9) return "<span style='color:#00FFFB'>Monitor Display</span>";
        if ($pos == 10) return "<span style='color:#00FFFB'>Recorder</span>";
        if ($pos == 11) return "<span style='color:#00FFFB'>Paper</span>";
        if ($pos == 12) return "<span style='color:#00FFFB'>Battery</span>";
        if ($pos == 13) return "<span style='color:#00FFFB'></span>";
        if ($pos == 14) return "<span style='color:#00FFFB'></span>";
        if ($pos == 15) return "<span style='color:#00FFFB'></span>";
        // ----------------------------------------------------------------
        if ($pos == 16) return "<span style='color:#00FF8B'>Blood Pressure (Normal)</span>";
        if ($pos == 17) return "<span style='color:#00FF8B'>Blood Pressure (High)</span>";
        if ($pos == 18) return "<span style='color:#00FF8B'>Blood Pressure (Low)";
        if ($pos == 19) return "<span style='color:#00FF8B'>Alarm</span>";
        if ($pos == 20) return "<span style='color:#00FF8B'></span>";
        if ($pos == 21) return "<span style='color:#00FF8B'></span>";
        if ($pos == 22) return "<span style='color:#00FF8B'></span>";
        if ($pos == 23) return "<span style='color:#00FF8B'></span>";
        if ($pos == 24) return "<span style='color:#00FF8B'></span>";
        if ($pos == 25) return "<span style='color:#00FF8B'></span>";
        if ($pos == 26) return "<span style='color:#00FF8B'></span>";
        if ($pos == 27) return "<span style='color:#00FF8B'></span>";
        if ($pos == 28) return "<span style='color:#00FFFB'></span>";
        if ($pos == 29) return "<span style='color:#00FFFB'></span>";
        if ($pos == 30) return "<span style='color:#00FFFB'></span>";
    }
    if ($name == "Ankle brachial index(เครื่องตรวจสมรรถภาพหลอดเลือดแดง)ABI") {
        if ($pos == 1) return "<span style='color:#00FFFB'>หน้าปัด</span>";
        if ($pos == 2) return "<span style='color:#00FFFB'>สวิตช์ เปิด-ปิด Power</span>";
        if ($pos == 3) return "<span style='color:#00FFFB'>สวิตช์ เลือก Mode การใช้งาน</span>";
        if ($pos == 4) return "<span style='color:#00FFFB'>ปลั๊กไฟ AC</span>";
        if ($pos == 5) return "<span style='color:#00FFFB'>สายเสียบปลั๊กไฟ AC</span>";
        if ($pos == 6) return "<span style='color:#00FFFB'>จุดต่อสายดิน</span>";
        if ($pos == 7) return "<span style='color:#00FFFB'>Electrode</span>";
        if ($pos == 8) return "<span style='color:#00FFFB'>NIBP Arm Cuff</span>";
        if ($pos == 9) return "<span style='color:#00FFFB'>NIBP Tubing</span>";
        if ($pos == 10) return "<span style='color:#00FFFB'>Monitor Display</span>";
        if ($pos == 11) return "<span style='color:#00FFFB'>Recorder</span>";
        if ($pos == 12) return "<span style='color:#00FFFB'>Paper</span>";
        if ($pos == 13) return "<span style='color:#00FFFB'></span>";
        if ($pos == 14) return "<span style='color:#00FFFB'></span>";
        if ($pos == 15) return "<span style='color:#00FFFB'></span>";
        // ----------------------------------------------------------------
        if ($pos == 16) return "<span style='color:#00FF8B'>ECG Waveform</span>";
        if ($pos == 17) return "<span style='color:#00FF8B'>Heart Rate</span>";
        if ($pos == 18) return "<span style='color:#00FF8B'>Gain Amplifier</span>";
        if ($pos == 19) return "<span style='color:#00FF8B'>Speed Tracing 25 mm/sec</span>";
        if ($pos == 20) return "<span style='color:#00FF8B'>Speed Tracing 50 mm/sec</span>";
        if ($pos == 21) return "<span style='color:#00FF8B'>Frequency Response</span>";
        if ($pos == 22) return "<span style='color:#00FF8B'>Filter 50 Hz.</span>";
        if ($pos == 23) return "<span style='color:#00FF8B'>Temperature</span>";
        if ($pos == 24) return "<span style='color:#00FF8B'>Respiration Rate</span>";
        if ($pos == 25) return "<span style='color:#00FF8B'>Alarm</span>";
        if ($pos == 26) return "<span style='color:#00FF8B'>Battery</span>";
        if ($pos == 27) return "<span style='color:#00FF8B'></span>";
        if ($pos == 28) return "<span style='color:#00FFFB'></span>";
        if ($pos == 29) return "<span style='color:#00FFFB'></span>";
        if ($pos == 30) return "<span style='color:#00FFFB'></span>";
    }
    if ($name == "Pulse Oximeter") {
        if ($pos == 1) return "<span style='color:#00FFFB'>หน้าปัด</span>";
        if ($pos == 2) return "<span style='color:#00FFFB'>สวิตช์ เปิด-ปิด Power</span>";
        if ($pos == 3) return "<span style='color:#00FFFB'>สวิตช์ เลือก Mode การใช้งาน</span>";
        if ($pos == 4) return "<span style='color:#00FFFB'>ปลั๊กไฟ AC</span>";
        if ($pos == 5) return "<span style='color:#00FFFB'>สายเสียบปลั๊กไฟ AC</span>";
        if ($pos == 6) return "<span style='color:#00FFFB'>จุดต่อสายดิน</span>";
        if ($pos == 7) return "<span style='color:#00FFFB'>Sensor Clamp / Fingertip</span>";
        if ($pos == 8) return "<span style='color:#00FFFB'>Sensor Connector</span>";
        if ($pos == 9) return "<span style='color:#00FFFB'>Red Light</span>";
        if ($pos == 10) return "<span style='color:#00FFFB'>Display</span>";
        if ($pos == 11) return "<span style='color:#00FFFB'></span>";
        if ($pos == 12) return "<span style='color:#00FFFB'></span>";
        if ($pos == 13) return "<span style='color:#00FFFB'></span>";
        if ($pos == 14) return "<span style='color:#00FFFB'></span>";
        if ($pos == 15) return "<span style='color:#00FFFB'></span>";
        // ----------------------------------------------------------------
        if ($pos == 16) return "<span style='color:#00FF8B'>Waveform</span>";
        if ($pos == 17) return "<span style='color:#00FF8B'>Heart Rate</span>";
        if ($pos == 18) return "<span style='color:#00FF8B'>SpO2 Rate</span>";
        if ($pos == 19) return "<span style='color:#00FF8B'>Alarm</span>";
        if ($pos == 20) return "<span style='color:#00FF8B'></span>";
        if ($pos == 21) return "<span style='color:#00FF8B'></span>";
        if ($pos == 22) return "<span style='color:#00FF8B'></span>";
        if ($pos == 23) return "<span style='color:#00FF8B'></span>";
        if ($pos == 24) return "<span style='color:#00FF8B'></span>";
        if ($pos == 25) return "<span style='color:#00FF8B'></span>";
        if ($pos == 26) return "<span style='color:#00FF8B'></span>";
        if ($pos == 27) return "<span style='color:#00FF8B'></span>";
        if ($pos == 28) return "<span style='color:#00FFFB'></span>";
        if ($pos == 29) return "<span style='color:#00FFFB'></span>";
        if ($pos == 30) return "<span style='color:#00FFFB'></span>";
    }
    if ($name == "Electrocardiograph" || $name == "Holter Recorder(บันทึกคลื่นไฟฟ้าหัวใจ)") {
        if ($pos == 1) return "<span style='color:#00FFFB'>หน้าปัด</span>";
        if ($pos == 2) return "<span style='color:#00FFFB'>สวิตช์ เปิด-ปิด Power</span>";
        if ($pos == 3) return "<span style='color:#00FFFB'>สวิตช์ เลือก Mode การใช้งาน</span>";
        if ($pos == 4) return "<span style='color:#00FFFB'>ปลั๊กไฟ AC</span>";
        if ($pos == 5) return "<span style='color:#00FFFB'>สายเสียบปลั๊กไฟ AC</span>";
        if ($pos == 6) return "<span style='color:#00FFFB'>จุดต่อสายดิน</span>";
        if ($pos == 7) return "<span style='color:#00FFFB'>Electrode Plate</span>";
        if ($pos == 8) return "<span style='color:#00FFFB'>Clip Electrode</span>";
        if ($pos == 9) return "<span style='color:#00FFFB'>Patient Cable</span>";
        if ($pos == 10) return "<span style='color:#00FFFB'>Patient Jack cable</span>";
        if ($pos == 11) return "<span style='color:#00FFFB'>Selector Lead</span>";
        if ($pos == 12) return "<span style='color:#00FFFB'>Thermal Head Printer</span>";
        if ($pos == 13) return "<span style='color:#00FFFB'>Paper Recorder</span>";
        if ($pos == 14) return "<span style='color:#00FFFB'>Pen Marker</span>";
        if ($pos == 15) return "<span style='color:#00FFFB'>Battery</span>";
        // ----------------------------------------------------------------
        if ($pos == 16) return "<span style='color:#00FF8B'>ECG Waveform</span>";
        if ($pos == 17) return "<span style='color:#00FF8B'>Heart Rate</span>";
        if ($pos == 18) return "<span style='color:#00FF8B'>Gain Amplifier</span>";
        if ($pos == 19) return "<span style='color:#00FF8B'>Speed Tracing 25 mm/sec</span>";
        if ($pos == 20) return "<span style='color:#00FF8B'>Speed Tracing 50 mm/sec</span>";
        if ($pos == 21) return "<span style='color:#00FF8B'>Frequency Response</span>";
        if ($pos == 22) return "<span style='color:#00FF8B'>Filter 50 Hz.</span>";
        if ($pos == 23) return "<span style='color:#00FF8B'>Standard 1 mv.</span>";
        if ($pos == 24) return "<span style='color:#00FF8B'>Damping</span>";
        if ($pos == 25) return "<span style='color:#00FF8B'>Sensitivity</span>";
        if ($pos == 26) return "<span style='color:#00FF8B'>Manual Mode</span>";
        if ($pos == 27) return "<span style='color:#00FF8B'>Auto Mode</span>";
        if ($pos == 28) return "<span style='color:#00FFFB'>Analyze mode</span>";
        if ($pos == 29) return "<span style='color:#00FFFB'>Alarm</span>";
        if ($pos == 30) return "<span style='color:#00FFFB'></span>";
    }
    if (
        $name == "Blood warmer(เครื่องอุ่นสารให้เลือด)" || $name == "Hypo / Hyperthermia" || $name == "อ่างแช่พาราฟิน (Parafin Bath)"
        || $name == "Cloth warmer(เครื่องอุ่นผ้า)" || $name == "Hydrocollator(เครื่องต้มแผ่นให้ความร้อน)" || $name == "Forced air Warming Blankets"
    ) {
        if ($pos == 1) return "<span style='color:#00FFFB'>หน้าปัด</span>";
        if ($pos == 2) return "<span style='color:#00FFFB'>สวิตช์ เปิด-ปิด Power</span>";
        if ($pos == 3) return "<span style='color:#00FFFB'>สวิตช์ เลือก Mode การใช้งาน</span>";
        if ($pos == 4) return "<span style='color:#00FFFB'>ปลั๊กไฟ AC</span>";
        if ($pos == 5) return "<span style='color:#00FFFB'>สายเสียบปลั๊กไฟ AC</span>";
        if ($pos == 6) return "<span style='color:#00FFFB'>จุดต่อสายดิน</span>";
        if ($pos == 7) return "<span style='color:#00FFFB'>Heater</span>";
        if ($pos == 8) return "<span style='color:#00FFFB'>Temperature Set</span>";
        if ($pos == 9) return "<span style='color:#00FFFB'>Thermostat</span>";
        if ($pos == 10) return "<span style='color:#00FFFB'>Temperature display</span>";
        if ($pos == 11) return "<span style='color:#00FFFB'>Lamp</span>";
        if ($pos == 12) return "<span style='color:#00FFFB'>Chamber</span>";
        if ($pos == 13) return "<span style='color:#00FFFB'>Water Tank, Paraffin Tank*</span>";
        if ($pos == 14) return "<span style='color:#00FFFB'>Water Pad Leak, Hose, Connector*</span>";
        if ($pos == 15) return "<span style='color:#00FFFB'>Hot Pack Hanger*</span>";
        // ----------------------------------------------------------------
        if ($pos == 16) return "<span style='color:#00FF8B'>Temperature Control</span>";
        if ($pos == 17) return "<span style='color:#00FF8B'></span>";
        if ($pos == 18) return "<span style='color:#00FF8B'></span>";
        if ($pos == 19) return "<span style='color:#00FF8B'></span>";
        if ($pos == 20) return "<span style='color:#00FF8B'></span>";
        if ($pos == 21) return "<span style='color:#00FF8B'></span>";
        if ($pos == 22) return "<span style='color:#00FF8B'></span>";
        if ($pos == 23) return "<span style='color:#00FF8B'></span>";
        if ($pos == 24) return "<span style='color:#00FF8B'></span>";
        if ($pos == 25) return "<span style='color:#00FF8B'></span>";
        if ($pos == 26) return "<span style='color:#00FF8B'></span>";
        if ($pos == 27) return "<span style='color:#00FF8B'></span>";
        if ($pos == 28) return "<span style='color:#00FFFB'></span>";
        if ($pos == 29) return "<span style='color:#00FFFB'></span>";
        if ($pos == 30) return "<span style='color:#00FFFB'></span>";
    }
    if ($name == "Infant Incubator(ตู้อบเด็กทารก)" || $name == "Infant Warmer (ช่วยเด็กแรกเกิด)" || $name == "Radiant warmer(ให้ความอบอุ่นเด็กด้วยแสง)") {
        if ($pos == 1) return "<span style='color:#00FFFB'>หน้าปัด</span>";
        if ($pos == 2) return "<span style='color:#00FFFB'>สวิตช์ เปิด-ปิด Power</span>";
        if ($pos == 3) return "<span style='color:#00FFFB'>สวิตช์ เลือก Mode การใช้งาน</span>";
        if ($pos == 4) return "<span style='color:#00FFFB'>ปลั๊กไฟ AC</span>";
        if ($pos == 5) return "<span style='color:#00FFFB'>สายเสียบปลั๊กไฟ AC</span>";
        if ($pos == 6) return "<span style='color:#00FFFB'>จุดต่อสายดิน</span>";
        if ($pos == 7) return "<span style='color:#00FFFB'>ล้อเลื่อน</span>";
        if ($pos == 8) return "<span style='color:#00FFFB'>Hood</span>";
        if ($pos == 9) return "<span style='color:#00FFFB'>Bed</span>";
        if ($pos == 10) return "<span style='color:#00FFFB'>Filter</span>";
        if ($pos == 11) return "<span style='color:#00FFFB'>ถังน้ำ</span>";
        if ($pos == 12) return "<span style='color:#00FFFB'>Temperature Display</span>";
        if ($pos == 13) return "<span style='color:#00FFFB'>Temperature Adjust</span>";
        if ($pos == 14) return "<span style='color:#00FFFB'>Oxygen Flow Meter</span>";
        if ($pos == 15) return "<span style='color:#00FFFB'>Suction</span>";
        // ----------------------------------------------------------------
        if ($pos == 16) return "<span style='color:#00FF8B'>Temperature Control</span>";
        if ($pos == 17) return "<span style='color:#00FF8B'>Sound Level</span>";
        if ($pos == 18) return "<span style='color:#00FF8B'>Alarm</span>";
        if ($pos == 19) return "<span style='color:#00FF8B'>Flow Rate</span>";
        if ($pos == 20) return "<span style='color:#00FF8B'>Vacuum Regulator</span>";
        if ($pos == 21) return "<span style='color:#00FF8B'></span>";
        if ($pos == 22) return "<span style='color:#00FF8B'></span>";
        if ($pos == 23) return "<span style='color:#00FF8B'></span>";
        if ($pos == 24) return "<span style='color:#00FF8B'></span>";
        if ($pos == 25) return "<span style='color:#00FF8B'></span>";
        if ($pos == 26) return "<span style='color:#00FF8B'></span>";
        if ($pos == 27) return "<span style='color:#00FF8B'></span>";
        if ($pos == 28) return "<span style='color:#00FFFB'></span>";
        if ($pos == 29) return "<span style='color:#00FFFB'></span>";
        if ($pos == 30) return "<span style='color:#00FFFB'></span>";
    }
    if ($name == "Centrifuge") {
        if ($pos == 1) return "<span style='color:#00FFFB'>หน้าปัด</span>";
        if ($pos == 2) return "<span style='color:#00FFFB'>สวิตช์ เปิด-ปิด Power</span>";
        if ($pos == 3) return "<span style='color:#00FFFB'>สวิตช์ เลือก Mode การใช้งาน</span>";
        if ($pos == 4) return "<span style='color:#00FFFB'>ปลั๊กไฟ AC</span>";
        if ($pos == 5) return "<span style='color:#00FFFB'>สายเสียบปลั๊กไฟ AC</span>";
        if ($pos == 6) return "<span style='color:#00FFFB'>จุดต่อสายดิน</span>";
        if ($pos == 7) return "<span style='color:#00FFFB'>Cover</span>";
        if ($pos == 8) return "<span style='color:#00FFFB'>Chamber</span>";
        if ($pos == 9) return "<span style='color:#00FFFB'>Rotor</span>";
        if ($pos == 10) return "<span style='color:#00FFFB'>Tube Slot</span>";
        if ($pos == 11) return "<span style='color:#00FFFB'>ขาตั้ง</span>";
        if ($pos == 12) return "<span style='color:#00FFFB'>Timer</span>";
        if ($pos == 13) return "<span style='color:#00FFFB'></span>";
        if ($pos == 14) return "<span style='color:#00FFFB'></span>";
        if ($pos == 15) return "<span style='color:#00FFFB'></span>";
        // ----------------------------------------------------------------
        if ($pos == 16) return "<span style='color:#00FF8B'>Speed</span>";
        if ($pos == 17) return "<span style='color:#00FF8B'>Time</span>";
        if ($pos == 18) return "<span style='color:#00FF8B'>Brake System</span>";
        if ($pos == 19) return "<span style='color:#00FF8B'></span>";
        if ($pos == 20) return "<span style='color:#00FF8B'></span>";
        if ($pos == 21) return "<span style='color:#00FF8B'></span>";
        if ($pos == 22) return "<span style='color:#00FF8B'></span>";
        if ($pos == 23) return "<span style='color:#00FF8B'></span>";
        if ($pos == 24) return "<span style='color:#00FF8B'></span>";
        if ($pos == 25) return "<span style='color:#00FF8B'></span>";
        if ($pos == 26) return "<span style='color:#00FF8B'></span>";
        if ($pos == 27) return "<span style='color:#00FF8B'></span>";
        if ($pos == 28) return "<span style='color:#00FFFB'></span>";
        if ($pos == 29) return "<span style='color:#00FFFB'></span>";
        if ($pos == 30) return "<span style='color:#00FFFB'></span>";
    }
    if ($name == "Fetal Doppler") {
        if ($pos == 1) return "<span style='color:#00FFFB'>หน้าปัด</span>";
        if ($pos == 2) return "<span style='color:#00FFFB'>สวิตช์ เปิด-ปิด Power</span>";
        if ($pos == 3) return "<span style='color:#00FFFB'>สวิตช์ เลือก Mode การใช้งาน</span>";
        if ($pos == 4) return "<span style='color:#00FFFB'>ปลั๊กไฟ AC</span>";
        if ($pos == 5) return "<span style='color:#00FFFB'>สายเสียบปลั๊กไฟ AC</span>";
        if ($pos == 6) return "<span style='color:#00FFFB'>จุดต่อสายดิน</span>";
        if ($pos == 7) return "<span style='color:#00FFFB'>Battery</span>";
        if ($pos == 8) return "<span style='color:#00FFFB'>Transducer - Transducer cable</span>";
        if ($pos == 9) return "<span style='color:#00FFFB'></span>";
        if ($pos == 10) return "<span style='color:#00FFFB'></span>";
        if ($pos == 11) return "<span style='color:#00FFFB'></span>";
        if ($pos == 12) return "<span style='color:#00FFFB'></span>";
        if ($pos == 13) return "<span style='color:#00FFFB'></span>";
        if ($pos == 14) return "<span style='color:#00FFFB'></span>";
        if ($pos == 15) return "<span style='color:#00FFFB'></span>";
        // ----------------------------------------------------------------
        if ($pos == 16) return "<span style='color:#00FF8B'>Fetal Heart Sound</span>";
        if ($pos == 17) return "<span style='color:#00FF8B'></span>";
        if ($pos == 18) return "<span style='color:#00FF8B'></span>";
        if ($pos == 19) return "<span style='color:#00FF8B'></span>";
        if ($pos == 20) return "<span style='color:#00FF8B'></span>";
        if ($pos == 21) return "<span style='color:#00FF8B'></span>";
        if ($pos == 22) return "<span style='color:#00FF8B'></span>";
        if ($pos == 23) return "<span style='color:#00FF8B'></span>";
        if ($pos == 24) return "<span style='color:#00FF8B'></span>";
        if ($pos == 25) return "<span style='color:#00FF8B'></span>";
        if ($pos == 26) return "<span style='color:#00FF8B'></span>";
        if ($pos == 27) return "<span style='color:#00FF8B'></span>";
        if ($pos == 28) return "<span style='color:#00FFFB'></span>";
        if ($pos == 29) return "<span style='color:#00FFFB'></span>";
        if ($pos == 30) return "<span style='color:#00FFFB'></span>";
    }
    if ($name == "Fetal Monitor(เครื่องฟังเสียงหัวใจเด็ก)") {
        if ($pos == 1) return "<span style='color:#00FFFB'>หน้าปัด</span>";
        if ($pos == 2) return "<span style='color:#00FFFB'>สวิตช์ เปิด-ปิด Power</span>";
        if ($pos == 3) return "<span style='color:#00FFFB'>สวิตช์ เลือก Mode การใช้งาน</span>";
        if ($pos == 4) return "<span style='color:#00FFFB'>ปลั๊กไฟ AC</span>";
        if ($pos == 5) return "<span style='color:#00FFFB'>สายเสียบปลั๊กไฟ AC</span>";
        if ($pos == 6) return "<span style='color:#00FFFB'>จุดต่อสายดิน</span>";
        if ($pos == 7) return "<span style='color:#00FFFB'>Battery</span>";
        if ($pos == 8) return "<span style='color:#00FFFB'>Transducer - Transducer cable</span>";
        if ($pos == 9) return "<span style='color:#00FFFB'>NIBP</span>";
        if ($pos == 10) return "<span style='color:#00FFFB'>SpO2</span>";
        if ($pos == 11) return "<span style='color:#00FFFB'>ECG</span>";
        if ($pos == 12) return "<span style='color:#00FFFB'>Temp</span>";
        if ($pos == 13) return "<span style='color:#00FFFB'></span>";
        if ($pos == 14) return "<span style='color:#00FFFB'></span>";
        if ($pos == 15) return "<span style='color:#00FFFB'></span>";
        // ----------------------------------------------------------------
        if ($pos == 16) return "<span style='color:#00FF8B'>Fetal Heart Sound</span>";
        if ($pos == 17) return "<span style='color:#00FF8B'>NIBP</span>";
        if ($pos == 18) return "<span style='color:#00FF8B'>SpO2</span>";
        if ($pos == 19) return "<span style='color:#00FF8B'>ECG</span>";
        if ($pos == 20) return "<span style='color:#00FF8B'>Temp</span>";
        if ($pos == 21) return "<span style='color:#00FF8B'></span>";
        if ($pos == 22) return "<span style='color:#00FF8B'></span>";
        if ($pos == 23) return "<span style='color:#00FF8B'></span>";
        if ($pos == 24) return "<span style='color:#00FF8B'></span>";
        if ($pos == 25) return "<span style='color:#00FF8B'></span>";
        if ($pos == 26) return "<span style='color:#00FF8B'></span>";
        if ($pos == 27) return "<span style='color:#00FF8B'></span>";
        if ($pos == 28) return "<span style='color:#00FFFB'></span>";
        if ($pos == 29) return "<span style='color:#00FFFB'></span>";
        if ($pos == 30) return "<span style='color:#00FFFB'></span>";
    }
    if ($name == "Electrosurgical Unit (ตัดจี้ด้วยไฟฟ้า)") {
        if ($pos == 1) return "<span style='color:#00FFFB'>หน้าปัด</span>";
        if ($pos == 2) return "<span style='color:#00FFFB'>สวิตช์ เปิด-ปิด Power</span>";
        if ($pos == 3) return "<span style='color:#00FFFB'>สวิตช์ เลือก Mode การใช้งาน</span>";
        if ($pos == 4) return "<span style='color:#00FFFB'>ปลั๊กไฟ AC</span>";
        if ($pos == 5) return "<span style='color:#00FFFB'>สายเสียบปลั๊กไฟ AC</span>";
        if ($pos == 6) return "<span style='color:#00FFFB'>จุดต่อสายดิน</span>";
        if ($pos == 7) return "<span style='color:#00FFFB'>Patient Plate</span>";
        if ($pos == 8) return "<span style='color:#00FFFB'>Active Electrode</span>";
        if ($pos == 9) return "<span style='color:#00FFFB'>Patient Plate Jack</span>";
        if ($pos == 10) return "<span style='color:#00FFFB'>Active Electrode Jack</span>";
        if ($pos == 11) return "<span style='color:#00FFFB'>Foot Switch</span>";
        if ($pos == 12) return "<span style='color:#00FFFB'>Power display on panel</span>";
        if ($pos == 13) return "<span style='color:#00FFFB'>Power knob adjustment</span>";
        if ($pos == 14) return "<span style='color:#00FFFB'>Loudspeaker or Buzzer</span>";
        if ($pos == 15) return "<span style='color:#00FFFB'>Fan</span>";
        // ----------------------------------------------------------------
        if ($pos == 16) return "<span style='color:#00FF8B'>CUT Mode</span>";
        if ($pos == 17) return "<span style='color:#00FF8B'>COAG Mode</span>";
        if ($pos == 18) return "<span style='color:#00FF8B'>BIPOLAR</span>";
        if ($pos == 19) return "<span style='color:#00FF8B'>HF Leakage</span>";
        if ($pos == 20) return "<span style='color:#00FF8B'>Return Electrode Monitoring</span>";
        if ($pos == 21) return "<span style='color:#00FF8B'>Sound signal</span>";
        if ($pos == 22) return "<span style='color:#00FF8B'>Alarm</span>";
        if ($pos == 23) return "<span style='color:#00FF8B'></span>";
        if ($pos == 24) return "<span style='color:#00FF8B'></span>";
        if ($pos == 25) return "<span style='color:#00FF8B'></span>";
        if ($pos == 26) return "<span style='color:#00FF8B'></span>";
        if ($pos == 27) return "<span style='color:#00FF8B'></span>";
        if ($pos == 28) return "<span style='color:#00FFFB'></span>";
        if ($pos == 29) return "<span style='color:#00FFFB'></span>";
        if ($pos == 30) return "<span style='color:#00FFFB'></span>";
    }
    if ($name == "Infant T-piece resuscitator" || $name == "Sphygmomanometer" || $name == "Neopuff" || $name == "Aspirators" || $name == "Pressure Cuff" || $name == "Vacuum Extractor (เครื่องช่วยคลอดโดยใช้แรงดูด)") {
        if ($pos == 1) return "<span style='color:#00FFFB'>หน้าปัด</span>";
        if ($pos == 2) return "<span style='color:#00FFFB'>สวิตช์ เปิด-ปิด Power</span>";
        if ($pos == 3) return "<span style='color:#00FFFB'>สวิตช์ เลือก Mode การใช้งาน</span>";
        if ($pos == 4) return "<span style='color:#00FFFB'>ปลั๊กไฟ AC</span>";
        if ($pos == 5) return "<span style='color:#00FFFB'>สายเสียบปลั๊กไฟ AC</span>";
        if ($pos == 6) return "<span style='color:#00FFFB'>จุดต่อสายดิน</span>";
        if ($pos == 7) return "<span style='color:#00FFFB'>Pressure Adjust</span>";
        if ($pos == 8) return "<span style='color:#00FFFB'>Inlet Flow</span>";
        if ($pos == 9) return "<span style='color:#00FFFB'>Outlet Pressure</span>";
        if ($pos == 10) return "<span style='color:#00FFFB'>Pressure Gauge</span>";
        if ($pos == 11) return "<span style='color:#00FFFB'>ลูกยาง, ปุ่มปล่อยลม*</span>";
        if ($pos == 12) return "<span style='color:#00FFFB'>Tube*</span>";
        if ($pos == 13) return "<span style='color:#00FFFB'>Arm Cuff*</span>";
        if ($pos == 14) return "<span style='color:#00FFFB'>ขวด, ฝาขวด, สายยาง, Adapter**/span>";
        if ($pos == 15) return "<span style='color:#00FFFB'>Vacuum Gauge**</span>";
        // ----------------------------------------------------------------
        if ($pos == 16) return "<span style='color:#00FF8B'>Pressure</span>";
        if ($pos == 17) return "<span style='color:#00FF8B'>Vacuum Regulate**</span>";
        if ($pos == 18) return "<span style='color:#00FF8B'>Timer**</span>";
        if ($pos == 19) return "<span style='color:#00FF8B'></span>";
        if ($pos == 20) return "<span style='color:#00FF8B'></span>";
        if ($pos == 21) return "<span style='color:#00FF8B'></span>";
        if ($pos == 22) return "<span style='color:#00FF8B'></span>";
        if ($pos == 23) return "<span style='color:#00FF8B'></span>";
        if ($pos == 24) return "<span style='color:#00FF8B'></span>";
        if ($pos == 25) return "<span style='color:#00FF8B'></span>";
        if ($pos == 26) return "<span style='color:#00FF8B'></span>";
        if ($pos == 27) return "<span style='color:#00FF8B'></span>";
        if ($pos == 28) return "<span style='color:#00FFFB'></span>";
        if ($pos == 29) return "<span style='color:#00FFFB'></span>";
        if ($pos == 30) return "<span style='color:#00FFFB'></span>";
    }
    if ($name == "Traction (ชุดดึงคอและหลังอัตโนมัติ)") {
        if ($pos == 1) return "<span style='color:#00FFFB'>หน้าปัด</span>";
        if ($pos == 2) return "<span style='color:#00FFFB'>สวิตช์ เปิด-ปิด Power</span>";
        if ($pos == 3) return "<span style='color:#00FFFB'>สวิตช์ เลือก Mode การใช้งาน</span>";
        if ($pos == 4) return "<span style='color:#00FFFB'>ปลั๊กไฟ AC</span>";
        if ($pos == 5) return "<span style='color:#00FFFB'>สายเสียบปลั๊กไฟ AC</span>";
        if ($pos == 6) return "<span style='color:#00FFFB'>จุดต่อสายดิน</span>";
        if ($pos == 7) return "<span style='color:#00FFFB'>เชือกดึงน้ำหนัก</span>";
        if ($pos == 8) return "<span style='color:#00FFFB'>รอก</span>";
        if ($pos == 9) return "<span style='color:#00FFFB'>Bed</span>";
        if ($pos == 10) return "<span style='color:#00FFFB'>Bed Lock</span>";
        if ($pos == 11) return "<span style='color:#00FFFB'></span>";
        if ($pos == 12) return "<span style='color:#00FFFB'></span>";
        if ($pos == 13) return "<span style='color:#00FFFB'></span>";
        if ($pos == 14) return "<span style='color:#00FFFB'></span>";
        if ($pos == 15) return "<span style='color:#00FFFB'></span>";
        // ----------------------------------------------------------------
        if ($pos == 16) return "<span style='color:#00FF8B'>แรงดึง</span>";
        if ($pos == 17) return "<span style='color:#00FF8B'>Timer</span>";
        if ($pos == 18) return "<span style='color:#00FF8B'></span>";
        if ($pos == 19) return "<span style='color:#00FF8B'></span>";
        if ($pos == 20) return "<span style='color:#00FF8B'></span>";
        if ($pos == 21) return "<span style='color:#00FF8B'></span>";
        if ($pos == 22) return "<span style='color:#00FF8B'></span>";
        if ($pos == 23) return "<span style='color:#00FF8B'></span>";
        if ($pos == 24) return "<span style='color:#00FF8B'></span>";
        if ($pos == 25) return "<span style='color:#00FF8B'></span>";
        if ($pos == 26) return "<span style='color:#00FF8B'></span>";
        if ($pos == 27) return "<span style='color:#00FF8B'></span>";
        if ($pos == 28) return "<span style='color:#00FFFB'></span>";
        if ($pos == 29) return "<span style='color:#00FFFB'></span>";
        if ($pos == 30) return "<span style='color:#00FFFB'></span>";
    }
    if ($name == "PaceMaker (เครื่องกระตุ้นหัวใจ)") {
        if ($pos == 1) return "<span style='color:#00FFFB'>หน้าปัด</span>";
        if ($pos == 2) return "<span style='color:#00FFFB'>สวิตช์ เปิด-ปิด Power</span>";
        if ($pos == 3) return "<span style='color:#00FFFB'>สวิตช์ เลือก Mode การใช้งาน</span>";
        if ($pos == 4) return "<span style='color:#00FFFB'>Battery</span>";
        if ($pos == 5) return "<span style='color:#00FFFB'>Jack Terminal</span>";
        if ($pos == 6) return "<span style='color:#00FFFB'>Electrode Plate</span>";
        if ($pos == 7) return "<span style='color:#00FFFB'>Clip Electrode</span>";
        if ($pos == 8) return "<span style='color:#00FFFB'>Patient cable</span>";
        if ($pos == 9) return "<span style='color:#00FFFB'></span>";
        if ($pos == 10) return "<span style='color:#00FFFB'></span>";
        if ($pos == 11) return "<span style='color:#00FFFB'></span>";
        if ($pos == 12) return "<span style='color:#00FFFB'></span>";
        if ($pos == 13) return "<span style='color:#00FFFB'></span>";
        if ($pos == 14) return "<span style='color:#00FFFB'></span>";
        if ($pos == 15) return "<span style='color:#00FFFB'></span>";
        // ----------------------------------------------------------------
        if ($pos == 16) return "<span style='color:#00FF8B'>Atrium Pulse</span>";
        if ($pos == 17) return "<span style='color:#00FF8B'>Atrium Power</span>";
        if ($pos == 18) return "<span style='color:#00FF8B'>Ventricle Pulse</span>";
        if ($pos == 19) return "<span style='color:#00FF8B'>Ventricle Power</span>";
        if ($pos == 20) return "<span style='color:#00FF8B'></span>";
        if ($pos == 21) return "<span style='color:#00FF8B'></span>";
        if ($pos == 22) return "<span style='color:#00FF8B'></span>";
        if ($pos == 23) return "<span style='color:#00FF8B'></span>";
        if ($pos == 24) return "<span style='color:#00FF8B'></span>";
        if ($pos == 25) return "<span style='color:#00FF8B'></span>";
        if ($pos == 26) return "<span style='color:#00FF8B'></span>";
        if ($pos == 27) return "<span style='color:#00FF8B'></span>";
        if ($pos == 28) return "<span style='color:#00FFFB'></span>";
        if ($pos == 29) return "<span style='color:#00FFFB'></span>";
        if ($pos == 30) return "<span style='color:#00FFFB'></span>";
    }
    if ($name == "Laser") {
        if ($pos == 1) return "<span style='color:#00FFFB'>หน้าปัด</span>";
        if ($pos == 2) return "<span style='color:#00FFFB'>สวิตช์ เปิด-ปิด Power</span>";
        if ($pos == 3) return "<span style='color:#00FFFB'>สวิตช์ เลือก Mode การใช้งาน</span>";
        if ($pos == 4) return "<span style='color:#00FFFB'>ปลั๊กไฟ AC</span>";
        if ($pos == 5) return "<span style='color:#00FFFB'>สายเสียบปลั๊กไฟ AC</span>";
        if ($pos == 6) return "<span style='color:#00FFFB'>จุดต่อสายดิน</span>";
        if ($pos == 7) return "<span style='color:#00FFFB'>Transducer</span>";
        if ($pos == 8) return "<span style='color:#00FFFB'>Transducer cable</span>";
        if ($pos == 9) return "<span style='color:#00FFFB'>Transducer Holder</span>";
        if ($pos == 10) return "<span style='color:#00FFFB'></span>";
        if ($pos == 11) return "<span style='color:#00FFFB'></span>";
        if ($pos == 12) return "<span style='color:#00FFFB'></span>";
        if ($pos == 13) return "<span style='color:#00FFFB'></span>";
        if ($pos == 14) return "<span style='color:#00FFFB'></span>";
        if ($pos == 15) return "<span style='color:#00FFFB'></span>";
        // ----------------------------------------------------------------
        if ($pos == 16) return "<span style='color:#00FF8B'>Power Output</span>";
        if ($pos == 17) return "<span style='color:#00FF8B'>Time</span>";
        if ($pos == 18) return "<span style='color:#00FF8B'></span>";
        if ($pos == 19) return "<span style='color:#00FF8B'></span>";
        if ($pos == 20) return "<span style='color:#00FF8B'></span>";
        if ($pos == 21) return "<span style='color:#00FF8B'></span>";
        if ($pos == 22) return "<span style='color:#00FF8B'></span>";
        if ($pos == 23) return "<span style='color:#00FF8B'></span>";
        if ($pos == 24) return "<span style='color:#00FF8B'></span>";
        if ($pos == 25) return "<span style='color:#00FF8B'></span>";
        if ($pos == 26) return "<span style='color:#00FF8B'></span>";
        if ($pos == 27) return "<span style='color:#00FF8B'></span>";
        if ($pos == 28) return "<span style='color:#00FFFB'></span>";
        if ($pos == 29) return "<span style='color:#00FFFB'></span>";
        if ($pos == 30) return "<span style='color:#00FFFB'></span>";
    }
    if ($name == "Microware Diathermy") {
        if ($pos == 1) return "<span style='color:#00FFFB'>หน้าปัด</span>";
        if ($pos == 2) return "<span style='color:#00FFFB'>สวิตช์ เปิด-ปิด Power</span>";
        if ($pos == 3) return "<span style='color:#00FFFB'>สวิตช์ เลือก Mode การใช้งาน</span>";
        if ($pos == 4) return "<span style='color:#00FFFB'>ปลั๊กไฟ AC</span>";
        if ($pos == 5) return "<span style='color:#00FFFB'>สายเสียบปลั๊กไฟ AC</span>";
        if ($pos == 6) return "<span style='color:#00FFFB'>จุดต่อสายดิน</span>";
        if ($pos == 7) return "<span style='color:#00FFFB'>Transducer</span>";
        if ($pos == 8) return "<span style='color:#00FFFB'>Transducer cable</span>";
        if ($pos == 9) return "<span style='color:#00FFFB'>Transducer Holder</span>";
        if ($pos == 10) return "<span style='color:#00FFFB'></span>";
        if ($pos == 11) return "<span style='color:#00FFFB'></span>";
        if ($pos == 12) return "<span style='color:#00FFFB'></span>";
        if ($pos == 13) return "<span style='color:#00FFFB'></span>";
        if ($pos == 14) return "<span style='color:#00FFFB'></span>";
        if ($pos == 15) return "<span style='color:#00FFFB'></span>";
        // ----------------------------------------------------------------
        if ($pos == 16) return "<span style='color:#00FF8B'>Power Output</span>";
        if ($pos == 17) return "<span style='color:#00FF8B'>Time</span>";
        if ($pos == 18) return "<span style='color:#00FF8B'></span>";
        if ($pos == 19) return "<span style='color:#00FF8B'></span>";
        if ($pos == 20) return "<span style='color:#00FF8B'></span>";
        if ($pos == 21) return "<span style='color:#00FF8B'></span>";
        if ($pos == 22) return "<span style='color:#00FF8B'></span>";
        if ($pos == 23) return "<span style='color:#00FF8B'></span>";
        if ($pos == 24) return "<span style='color:#00FF8B'></span>";
        if ($pos == 25) return "<span style='color:#00FF8B'></span>";
        if ($pos == 26) return "<span style='color:#00FF8B'></span>";
        if ($pos == 27) return "<span style='color:#00FF8B'></span>";
        if ($pos == 28) return "<span style='color:#00FFFB'></span>";
        if ($pos == 29) return "<span style='color:#00FFFB'></span>";
        if ($pos == 30) return "<span style='color:#00FFFB'></span>";
    }
    if ($name == "Exercise Stress Test") {
        if ($pos == 1) return "<span style='color:#00FFFB'>หน้าปัด</span>";
        if ($pos == 2) return "<span style='color:#00FFFB'>สวิตช์ เปิด-ปิด Power</span>";
        if ($pos == 3) return "<span style='color:#00FFFB'>สวิตช์ เลือก Mode การใช้งาน</span>";
        if ($pos == 4) return "<span style='color:#00FFFB'>ปลั๊กไฟ AC</span>";
        if ($pos == 5) return "<span style='color:#00FFFB'>สายเสียบปลั๊กไฟ AC</span>";
        if ($pos == 6) return "<span style='color:#00FFFB'>จุดต่อสายดิน</span>";
        if ($pos == 7) return "<span style='color:#00FFFB'>มอเตอร์ขับสายพาน</span>";
        if ($pos == 8) return "<span style='color:#00FFFB'>สายพานลู่วิ่ง</span>";
        if ($pos == 9) return "<span style='color:#00FFFB'>จอมอนิเตอร์</span>";
        if ($pos == 10) return "<span style='color:#00FFFB'>Electrode Plate</span>";
        if ($pos == 11) return "<span style='color:#00FFFB'>Clip Electrode</span>";
        if ($pos == 12) return "<span style='color:#00FFFB'>Patient Cable</span>";
        if ($pos == 13) return "<span style='color:#00FFFB'></span>";
        if ($pos == 14) return "<span style='color:#00FFFB'></span>";
        if ($pos == 15) return "<span style='color:#00FFFB'></span>";
        // ----------------------------------------------------------------
        if ($pos == 16) return "<span style='color:#00FF8B'>Belt Speed</span>";
        if ($pos == 17) return "<span style='color:#00FF8B'>ECG Waveform</span>";
        if ($pos == 18) return "<span style='color:#00FF8B'>Heart Rate</span>";
        if ($pos == 19) return "<span style='color:#00FF8B'>Frequency Response</span>";
        if ($pos == 20) return "<span style='color:#00FF8B'>Filter 50 Hz.</span>";
        if ($pos == 21) return "<span style='color:#00FF8B'>Blood Pressure (Normal)</span>";
        if ($pos == 22) return "<span style='color:#00FF8B'>Blood Pressure (High)</span>";
        if ($pos == 23) return "<span style='color:#00FF8B'>Blood Pressure (Low)</span>";
        if ($pos == 24) return "<span style='color:#00FF8B'>Respiration Rate</span>";
        if ($pos == 25) return "<span style='color:#00FF8B'>Alarm</span>";
        if ($pos == 26) return "<span style='color:#00FF8B'></span>";
        if ($pos == 27) return "<span style='color:#00FF8B'></span>";
        if ($pos == 28) return "<span style='color:#00FFFB'></span>";
        if ($pos == 29) return "<span style='color:#00FFFB'></span>";
        if ($pos == 30) return "<span style='color:#00FFFB'></span>";
    }
    if ($name == "Treadmill(ลู่วิ่งไฟฟ้า)") {
        if ($pos == 1) return "<span style='color:#00FFFB'>หน้าปัด</span>";
        if ($pos == 2) return "<span style='color:#00FFFB'>สวิตช์ เปิด-ปิด Power</span>";
        if ($pos == 3) return "<span style='color:#00FFFB'>สวิตช์ เลือก Mode การใช้งาน</span>";
        if ($pos == 4) return "<span style='color:#00FFFB'>ปลั๊กไฟ AC</span>";
        if ($pos == 5) return "<span style='color:#00FFFB'>สายเสียบปลั๊กไฟ AC</span>";
        if ($pos == 6) return "<span style='color:#00FFFB'>จุดต่อสายดิน</span>";
        if ($pos == 7) return "<span style='color:#00FFFB'>มอเตอร์ขับสายพาน</span>";
        if ($pos == 8) return "<span style='color:#00FFFB'>สายพานลู่วิ่ง</span>";
        if ($pos == 9) return "<span style='color:#00FFFB'>จอมอนิเตอร์</span>";
        if ($pos == 10) return "<span style='color:#00FFFB'></span>";
        if ($pos == 11) return "<span style='color:#00FFFB'></span>";
        if ($pos == 12) return "<span style='color:#00FFFB'></span>";
        if ($pos == 13) return "<span style='color:#00FFFB'></span>";
        if ($pos == 14) return "<span style='color:#00FFFB'></span>";
        if ($pos == 15) return "<span style='color:#00FFFB'></span>";
        // ----------------------------------------------------------------
        if ($pos == 16) return "<span style='color:#00FF8B'>Belt Speed</span>";
        if ($pos == 17) return "<span style='color:#00FF8B'>Alarm</span>";
        if ($pos == 18) return "<span style='color:#00FF8B'></span>";
        if ($pos == 19) return "<span style='color:#00FF8B'></span>";
        if ($pos == 20) return "<span style='color:#00FF8B'></span>";
        if ($pos == 21) return "<span style='color:#00FF8B'></span>";
        if ($pos == 22) return "<span style='color:#00FF8B'></span>";
        if ($pos == 23) return "<span style='color:#00FF8B'></span>";
        if ($pos == 24) return "<span style='color:#00FF8B'></span>";
        if ($pos == 25) return "<span style='color:#00FF8B'></span>";
        if ($pos == 26) return "<span style='color:#00FF8B'></span>";
        if ($pos == 27) return "<span style='color:#00FF8B'></span>";
        if ($pos == 28) return "<span style='color:#00FFFB'></span>";
        if ($pos == 29) return "<span style='color:#00FFFB'></span>";
        if ($pos == 30) return "<span style='color:#00FFFB'></span>";
    }
    if ($name == "Infant Ventilator" || $name == "Ventilator") {
        if ($pos == 1) return "<span style='color:#00FFFB'>หน้าปัด</span>";
        if ($pos == 2) return "<span style='color:#00FFFB'>สวิตช์ เปิด-ปิด Power</span>";
        if ($pos == 3) return "<span style='color:#00FFFB'>สวิตช์ เลือก Mode การใช้งาน</span>";
        if ($pos == 4) return "<span style='color:#00FFFB'>ปลั๊กไฟ AC</span>";
        if ($pos == 5) return "<span style='color:#00FFFB'>สายเสียบปลั๊กไฟ AC</span>";
        if ($pos == 6) return "<span style='color:#00FFFB'>จุดต่อสายดิน</span>";
        if ($pos == 7) return "<span style='color:#00FFFB'>Breathing Circuit</span>";
        if ($pos == 8) return "<span style='color:#00FFFB'>Air Filter</span>";
        if ($pos == 9) return "<span style='color:#00FFFB'>Water Filter</span>";
        if ($pos == 10) return "<span style='color:#00FFFB'>Inspiration Valve</span>";
        if ($pos == 11) return "<span style='color:#00FFFB'>Expiration Valve</span>";
        if ($pos == 12) return "<span style='color:#00FFFB'>Flow Transducer</span>";
        if ($pos == 13) return "<span style='color:#00FFFB'>Oxygen Sensor</span>";
        if ($pos == 14) return "<span style='color:#00FFFB'>Control Knob</span>";
        if ($pos == 15) return "<span style='color:#00FFFB'>Parameter Display</span>";
        // ----------------------------------------------------------------
        if ($pos == 16) return "<span style='color:#00FF8B'>Respiration Rate</span>";
        if ($pos == 17) return "<span style='color:#00FF8B'>I : E Ratio</span>";
        if ($pos == 18) return "<span style='color:#00FF8B'>Tidal Volume</span>";
        if ($pos == 19) return "<span style='color:#00FF8B'>Minute Volume</span>";
        if ($pos == 20) return "<span style='color:#00FF8B'>Inspiration Time</span>";
        if ($pos == 21) return "<span style='color:#00FF8B'>Inspiration Hold</span>";
        if ($pos == 22) return "<span style='color:#00FF8B'>Expiration Time</span>";
        if ($pos == 23) return "<span style='color:#00FF8B'>Expiration Hold</span>";
        if ($pos == 24) return "<span style='color:#00FF8B'>Cycle Time</span>";
        if ($pos == 25) return "<span style='color:#00FF8B'>Peak Air Way Pressure</span>";
        if ($pos == 26) return "<span style='color:#00FF8B'>End Expiration Pressure</span>";
        if ($pos == 27) return "<span style='color:#00FF8B'>Mean Air Way Pressure</span>";
        if ($pos == 28) return "<span style='color:#00FFFB'>Inspiration Flow</span>";
        if ($pos == 29) return "<span style='color:#00FFFB'>Expiration Flow</span>";
        if ($pos == 30) return "<span style='color:#00FFFB'>Alarm</span>";
    }
    if ($name == "Ultrasound(เครื่องรักษาด้วยคลื่นอัลตราซาวน์)") {
        if ($pos == 1) return "<span style='color:#00FFFB'>หน้าปัด</span>";
        if ($pos == 2) return "<span style='color:#00FFFB'>สวิตช์ เปิด-ปิด Power</span>";
        if ($pos == 3) return "<span style='color:#00FFFB'>สวิตช์ เลือก Mode การใช้งาน</span>";
        if ($pos == 4) return "<span style='color:#00FFFB'>ปลั๊กไฟ AC</span>";
        if ($pos == 5) return "<span style='color:#00FFFB'>สายเสียบปลั๊กไฟ AC</span>";
        if ($pos == 6) return "<span style='color:#00FFFB'>จุดต่อสายดิน</span>";
        if ($pos == 7) return "<span style='color:#00FFFB'>Transducer</span>";
        if ($pos == 8) return "<span style='color:#00FFFB'>Transducer cable</span>";
        if ($pos == 9) return "<span style='color:#00FFFB'>Transducer Holder</span>";
        if ($pos == 10) return "<span style='color:#00FFFB'></span>";
        if ($pos == 11) return "<span style='color:#00FFFB'></span>";
        if ($pos == 12) return "<span style='color:#00FFFB'></span>";
        if ($pos == 13) return "<span style='color:#00FFFB'></span>";
        if ($pos == 14) return "<span style='color:#00FFFB'></span>";
        if ($pos == 15) return "<span style='color:#00FFFB'></span>";
        // ----------------------------------------------------------------
        if ($pos == 16) return "<span style='color:#00FF8B'>Power Output</span>";
        if ($pos == 17) return "<span style='color:#00FF8B'></span>";
        if ($pos == 18) return "<span style='color:#00FF8B'></span>";
        if ($pos == 19) return "<span style='color:#00FF8B'></span>";
        if ($pos == 20) return "<span style='color:#00FF8B'></span>";
        if ($pos == 21) return "<span style='color:#00FF8B'></span>";
        if ($pos == 22) return "<span style='color:#00FF8B'></span>";
        if ($pos == 23) return "<span style='color:#00FF8B'></span>";
        if ($pos == 24) return "<span style='color:#00FF8B'></span>";
        if ($pos == 25) return "<span style='color:#00FF8B'></span>";
        if ($pos == 26) return "<span style='color:#00FF8B'></span>";
        if ($pos == 27) return "<span style='color:#00FF8B'></span>";
        if ($pos == 28) return "<span style='color:#00FFFB'></span>";
        if ($pos == 29) return "<span style='color:#00FFFB'></span>";
        if ($pos == 30) return "<span style='color:#00FFFB'></span>";
    }
    if ($name == "Tens (ลดความเจ็บปวดเฉพาะจุดขนาดเล็ก)" || $name == "Interferential Therapy(รักษาด้วยคลื่นความถี่กระแสไฟฟ้า)") {
        if ($pos == 1) return "<span style='color:#00FFFB'>หน้าปัด</span>";
        if ($pos == 2) return "<span style='color:#00FFFB'>สวิตช์ เปิด-ปิด Power</span>";
        if ($pos == 3) return "<span style='color:#00FFFB'>สวิตช์ เลือก Mode การใช้งาน</span>";
        if ($pos == 4) return "<span style='color:#00FFFB'>Electrode</span>";
        if ($pos == 5) return "<span style='color:#00FFFB'>Power Display</span>";
        if ($pos == 6) return "<span style='color:#00FFFB'>Jack Terminal</span>";
        if ($pos == 7) return "<span style='color:#00FFFB'>Patient Cable</span>";
        if ($pos == 8) return "<span style='color:#00FFFB'>ไฟแสดงสถานะการทำงาน</span>";
        if ($pos == 9) return "<span style='color:#00FFFB'>Battery</span>";
        if ($pos == 10) return "<span style='color:#00FFFB'></span>";
        if ($pos == 11) return "<span style='color:#00FFFB'></span>";
        if ($pos == 12) return "<span style='color:#00FFFB'></span>";
        if ($pos == 13) return "<span style='color:#00FFFB'></span>";
        if ($pos == 14) return "<span style='color:#00FFFB'></span>";
        if ($pos == 15) return "<span style='color:#00FFFB'></span>";
        // ----------------------------------------------------------------
        if ($pos == 16) return "<span style='color:#00FF8B'>Power Output</span>";
        if ($pos == 17) return "<span style='color:#00FF8B'>Frequency</span>";
        if ($pos == 18) return "<span style='color:#00FF8B'>Width</span>";
        if ($pos == 19) return "<span style='color:#00FF8B'></span>";
        if ($pos == 20) return "<span style='color:#00FF8B'></span>";
        if ($pos == 21) return "<span style='color:#00FF8B'></span>";
        if ($pos == 22) return "<span style='color:#00FF8B'></span>";
        if ($pos == 23) return "<span style='color:#00FF8B'></span>";
        if ($pos == 24) return "<span style='color:#00FF8B'></span>";
        if ($pos == 25) return "<span style='color:#00FF8B'></span>";
        if ($pos == 26) return "<span style='color:#00FF8B'></span>";
        if ($pos == 27) return "<span style='color:#00FF8B'></span>";
        if ($pos == 28) return "<span style='color:#00FFFB'></span>";
        if ($pos == 29) return "<span style='color:#00FFFB'></span>";
        if ($pos == 30) return "<span style='color:#00FFFB'></span>";
    }
    if ($name == "Syring Driver" || $name == "Syring Pump") {
        if ($pos == 1) return "<span style='color:#00FFFB'>หน้าปัด</span>";
        if ($pos == 2) return "<span style='color:#00FFFB'>Adjustment Knob</span>";
        if ($pos == 3) return "<span style='color:#00FFFB'>Clamp</span>";
        if ($pos == 4) return "<span style='color:#00FFFB'>Holder or Hanger</span>";
        if ($pos == 5) return "<span style='color:#00FFFB'>Battery</span>";
        if ($pos == 6) return "<span style='color:#00FFFB'></span>";
        if ($pos == 7) return "<span style='color:#00FFFB'></span>";
        if ($pos == 8) return "<span style='color:#00FFFB'></span>";
        if ($pos == 9) return "<span style='color:#00FFFB'></span>";
        if ($pos == 10) return "<span style='color:#00FFFB'></span>";
        if ($pos == 11) return "<span style='color:#00FFFB'></span>";
        if ($pos == 12) return "<span style='color:#00FFFB'></span>";
        if ($pos == 13) return "<span style='color:#00FFFB'></span>";
        if ($pos == 14) return "<span style='color:#00FFFB'></span>";
        if ($pos == 15) return "<span style='color:#00FFFB'></span>";
        // ----------------------------------------------------------------
        if ($pos == 16) return "<span style='color:#00FF8B'>Flow Rate</span>";
        if ($pos == 17) return "<span style='color:#00FF8B'>Alarm</span>";
        if ($pos == 18) return "<span style='color:#00FF8B'></span>";
        if ($pos == 19) return "<span style='color:#00FF8B'></span>";
        if ($pos == 20) return "<span style='color:#00FF8B'></span>";
        if ($pos == 21) return "<span style='color:#00FF8B'></span>";
        if ($pos == 22) return "<span style='color:#00FF8B'></span>";
        if ($pos == 23) return "<span style='color:#00FF8B'></span>";
        if ($pos == 24) return "<span style='color:#00FF8B'></span>";
        if ($pos == 25) return "<span style='color:#00FF8B'></span>";
        if ($pos == 26) return "<span style='color:#00FF8B'></span>";
        if ($pos == 27) return "<span style='color:#00FF8B'></span>";
        if ($pos == 28) return "<span style='color:#00FFFB'></span>";
        if ($pos == 29) return "<span style='color:#00FFFB'></span>";
        if ($pos == 30) return "<span style='color:#00FFFB'></span>";
    }
}
