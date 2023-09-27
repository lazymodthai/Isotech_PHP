function specList(useSpec) {
  let x = specification[useSpec];
  if (x != undefined) {
    let res = x
      .map(function (i) {
        if (i.parameter == undefined) {
          i.topic = `<span style="color: #1000a3; font-size:1.2em;"><i class="fa fa-bars"></i> ${i.topic}</span>`;
          i.parameter = "";
        }
        if (i.topic == undefined) {
          i.topic = "";
        }
        return `<tr><td style="width: 30%;">${i.topic}</td><td style="width: 70%;">${i.parameter}</td></tr>`;
      })
      .join("");
    return `<tr><th colspan="2">Specification</th></tr>${res}`;
  } else {
    return "";
  }
}
